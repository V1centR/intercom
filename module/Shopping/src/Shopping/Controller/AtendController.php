<?php

namespace Shopping\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Shopping\Email\Mailer;
use Shopping\Defaults\includes;
use Shopping\Controller\ValidaCPFCNPJ;



class AtendController extends AbstractActionController
{
    
    
    public function indexAction(){
        
        
       $dados_rec = $this->params()->fromQuery('str',null);
        
       #get formas de opagamento
       $this->forma_pagamento = self::getFormaPagamento();
       #########################
       
       #get rodape info#########
       $this->rodape_info = self::getRodapeInfo();
       #########################
        
       $view = new ViewModel(array(          
           'formas_pagamento' => $this->forma_pagamento,
           'rodape_info'    => $this->rodape_info           
       ));
        
        $view->setTemplate('orion/atendimento_page')->setTerminal(true);     
        
       return $view;
    }
    
    #action para testes isolados
    #função para fins de testes somente##########
    public function isoAction(){
        
      $db = 'db1';
      
//      $serviceManager = new \Zend\ServiceManager\ServiceManager();
//      $serviceManager->get('includes')->test();
//      
      
        //$this->teste = $this->getServiceLocator()->get('includes');
      
      
      ###########################################################        
       $this->object = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default'); 
       # pega as categorias ativas########################
       $this->sql_cat = "SELECT * FROM `$db`.get_view_produtos";         
       $query2 = $this->object->getConnection()->prepare($this->sql_cat); 
       $query2->execute();
       $get_produtos = $query2->fetchAll();    
      ############################################
      
      
        #get rodape info#########
       $this->banner_sec = self::getBannerSec();
       #########################
       
        
      
      
        #get faixa de preco###############################
        $this->object = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');   
        $this->sql_fpreco = "SELECT
                                    MIN(precounitario) as preco_min, MAX(precounitario) as preco_max
                                    FROM `$db`.`get_view_produtos` WHERE cat2_id = 11  AND prod_status = 'A'                            
                            ";
        $query2 = $this->object->getConnection()->prepare($this->sql_fpreco);
        $query2->execute();

        $this->fpreco = $query2->fetchAll();
        ###############################################
        
      
        
        
        
       
        $inicio = $this->fpreco[0]['preco_min'];
        $max = $this->fpreco[0]['preco_max'];
        
        $ranges = range($inicio, $max, 1500);
        $count = count($ranges);
        $time = 0;
        
        #get formas de opagamento
       $this->forma_pagamento = self::getFormaPagamento();
       #########################
       
       #get rodape info#########
       $this->rodape_info = self::getRodapeInfo();
      
       
       #seleciona o logo da loja########
        $this->object = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');            
        $this->str_logo = "SELECT Imagem.id, Imagem.ext, Configuracoes.logoId
                      FROM `$db`.Configuracoes INNER JOIN `$db`.Imagem ON Configuracoes.logoId = Imagem.id";
        $query = $this->object->getConnection()->prepare($this->str_logo);
        $query->execute();
        $logo_shop = $query->fetch();
        
        $logo_principal = 'img'.$logo_shop['logoId'].'.'.$logo_shop['ext'];
       
        
       #nova sessao########################
        $this->lojaInfo = self::getLojaInfo();
       ####################################
       
            
        
        $view = new ViewModel(array(
            'logo_shop' => $logo_principal,
            'get_produtos'    => $get_produtos,
            'banners'    => $this->banner_sec,
            'formas_pagamento' => $this->forma_pagamento,
            'loja_info'   => $this->lojaInfo,
            'rodape_info'    => $this->rodape_info,
            'faixa_preco' => $this->fpreco
            
             
        ));
       
       $view->setTemplate('orion/iso')->setTerminal(true);     
        
       return $view;    
        
    }
    
    
    public function validFormAction(){
        
        
       $db = 'db1';
       $postdata = file_get_contents("php://input");
      // $request = json_decode($postdata);       
       @$dataInput = $_POST['dataInput'];
       @$dataType = $_POST['dataType'];
       $error = false;
       $cpf_cnpj = false;
       
       
       
       
       if(($dataType != 'cadPassC') || ($dataType != 'cadPass')) {
           
                    switch ($dataType) {

                    #validacao campo nome cadastro##############
                    case 'cadNome':

                        if(empty($dataInput)){

                             //echo 'Campo nome é obrigatório!';
                             echo json_encode(array('inputOk' => false, 'message' => 'Campo nome é obrigatório!'));
                             exit;

                        } else if(!preg_match('/^[a-zA-Z0-9à-úÀ-Ú!=?& -]+$/',$dataInput)){


                            echo json_encode(array('inputOk' => false, 'message' => 'Nome contém caracteres não permitidos!'));
                            exit;
                            //!preg_match('/^[a-zA-Z0-9]+$/', $postdata)
                        } else if(strlen($dataInput) > 99){

                            //echo 'Nome muito extenso!';
                            echo json_encode(array('inputOk' => false, 'message' => 'Nome muito extenso!'));
                            exit;

                        } else {

                           echo json_encode(array('inputOk' => true));                   
                        }
                    break;




                    case 'cadEmail':

                        if(empty($dataInput)){

                             //echo 'Campo nome é obrigatório!';
                             echo json_encode(array('inputOk' => false, 'message' => 'E-mail é obrigatório!'));
                             exit;

                        } else if(!self::email_test($dataInput)){

                            echo json_encode(array('inputOk' => false, 'message' => 'E-mail digitado não é válido!'));
                            exit;

                        } else if(!self::cadCheck($dataInput)){

                            echo json_encode(array('inputOk' => false, 'message' => 'Olá, seu e-mail já esta cadastrado!'));
                            exit;

                        } else {

                            echo json_encode(array('inputOk' => true));

                        }
                    break;


                    case 'cadCpfCnpj':



                         // Cria um objeto sobre a classe
                         $cpf_cnpj = new ValidaCPFCNPJ($dataInput);
                         // Verifica se o CPF ou CNPJ é válido                

                         if(empty($dataInput)){

                             echo json_encode(array('inputOk' => false, 'message' => 'CPF ou CNPJ é obrigatório!'));
                             exit;

                         } else if(!$cpf_cnpj->valida()){

                             echo json_encode(array('inputOk' => false, 'message' => 'CPF ou CNPJ não é válido!'));
                             exit;

                         } else {

                              echo json_encode(array('inputOk' => true));

                         }

                    break;


                    case 'cadPhone':

                        if(empty($dataInput)){

                             echo json_encode(array('inputOk' => false, 'message' => 'Telefone é obrigatório!'));
                             exit;

                         } else if(strlen($dataInput) <= 12){

                             echo json_encode(array('inputOk' => false, 'message' => 'Telefone digitado é inválido!'));
                             exit;

                         }else {

                              echo json_encode(array('inputOk' => true));                    
                         }               

                    break;




                }#fecha switch##################
           
           
       }
       
       
       
       
       if($dataType == 'cadPass'){
           
           if(empty($dataInput)){
                    
                    echo json_encode(array('inputOk' => false, 'message' => 'Senha é obrigatória!'));
                    exit;
                    
                } else if(strlen($dataInput) <= 5){
                    
                    echo json_encode(array('inputOk' => false, 'message' => 'Senha mínimo 6 caracteres!'));
                    exit;
                    
                }else {
                    
                     echo json_encode(array('inputOk' => true));                    
                }          
           
           
           
       }
       
       
       
       
       if(isset($_POST['senha2'])){
           
           
           $senha1 = $_POST['senha1'];
           $senha2 = $_POST['senha2'];
           
            if($senha1 != $senha2){
                    
                    echo json_encode(array('inputOk' => false, 'message' => 'Senhas precisam ser iguais!'));
                    exit;
                    
                } else if(strlen($senha2) <= 5){
                    
                    echo json_encode(array('inputOk' => false, 'message' => 'Senha mínimo 6 caracteres!'));
                    exit;
                    
                }else {
                    
                     echo json_encode(array('inputOk' => true));                    
                }          
           
           
           
       }
       
        
         
        $view = new ViewModel();      
        $view->setTemplate('templates/orion/generic.phtml');
        $view->setTerminal(true); 

        return $view;
        
    }


    
     public function getProdAction(){
         
         
       $postdata = $this->getRequest()->getQuery('ped');
         
       $this->idPedido = $postdata;
       
       if($this->idPedido == 0){
           
           echo '<script>alert("Selecione um numero de pedido!");</script>';
           exit;
       }
       
       
        $db = 'db1';
        $img = '';
        $produtoId = '';
        
        
        $this->object = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default'); 
        #get pedidos por usuário######
        $this->sql_ItensPedido = "SELECT 
            PedidoItens.pedidoId, 
            Produto.nome,
            Produto.id as prod_id,
            Imagem.id as img_id, 
            Imagem.ext
                FROM `$db`.Pedido, 
                (`$db`.ProdutoImagem INNER JOIN (`$db`.PedidoItens INNER JOIN `$db`.Produto ON PedidoItens.ProdutoId = Produto.id) 
                ON ProdutoImagem.ProdutoId = Produto.id) 
                INNER JOIN `$db`.Imagem ON ProdutoImagem.ImagemId = Imagem.id 
                WHERE PedidoItens.pedidoId ='$this->idPedido' GROUP BY PedidoItens.produtoId";
        
        
        
        $query = $this->object->getConnection()->prepare($this->sql_ItensPedido); 
        $query->execute();       
        $data_ItensPedidos = $query->fetchAll();
        
        
        
       // print_r($data_ItensPedidos);
        
       
        foreach ($data_ItensPedidos as $itens) {
            
            
            $img = 'img'.$itens['img_id'].'.'.$itens['ext'];
            $produtoId = $itens['prod_id'];
            
            
            echo ' <label class="chamado">
                <input type="radio" name="prodChamado" id="'.$produtoId.'" value="'.$produtoId.'">
                   
                    <img src="/images/'.$img.'" width="60" id="img'.$produtoId.'" />
                        
                  </label>
                  
                  ';
            
        }
        
     
      
     
   
         
         
        $view = new ViewModel();      
        $view->setTemplate('templates/orion/generic.phtml');
        $view->setTerminal(true); 

        return $view;
         
     }
    
   
    public function pedidosAction(){
        
        
        $session = new \Zend\Session\Container('sessionUser');
        $session->idUser;      
        $db = 'db1';
        
        $this->sql_pedidos = '';
        $this->object = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default'); 
        #get pedidos por usuário######
        $this->sql_pedidos = "SELECT Pedido.id, Pedido.numeropedido, Pedido.pessoaId
FROM `$db`.Pedido INNER JOIN `$db`.Pessoa ON Pedido.pessoaId = Pessoa.id WHERE pessoaId = '$session->idUser'";       
        $query = $this->object->getConnection()->prepare($this->sql_pedidos); 
        $query->execute();
        $count_pedidos = $query->rowCount();
        $data_pedidos = $query->fetchAll();
        
        
        if($count_pedidos == 0){
            
            echo '<div style="margin-top:10px; color:#f00; font-size:11px;">Atenção! você não possui pedidos</div>
                
                <script> $("select#assuntoItens").fadeOut();
                         $("select#outro_assunto").show();
                         
                </script>
                
                ';
            
        } else {
            
        
        ###########Select Pedido ##############################
        echo '<select class="input-box" style="padding-left:8px; margin-top:10px;" name="outro_assunto" id="pedidoNum">
                
                <option value="0" selected>Selecione um pedido</option>';    
        
        foreach($data_pedidos as $pedidosD1){
            
            $pedidoNum = $pedidosD1['numeropedido'];
            $pedidoId = $pedidosD1['id'];
            
            echo '<option value="'.$pedidoId.'">'.$pedidoNum.'</option>';
            
            echo "<script>$( 'select#pedidoNum' ).change(function() {
                            
                            $('div#numPedidoItens').load('/pedidoitens?ped=".$pedidoId."');
                           
                            
                            
                                
                        });</script>";
            
        }#fecha foreach###
        
        echo '</select>';
        $pedidoId = 0;
       
        #######################################################
        
       
        
        
        
            
        } #fecha if###
        
        
        
        $view = new ViewModel();      
        $view->setTemplate('templates/orion/generic.phtml');
        $view->setTerminal(true); 

        return $view;
        
        
    }
    
    
    public function getLojaInfo(){        
        $db = 'db1';
        $this->object = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default'); 
        #get formas de pagamentos na view get_forma_pagamento######
//        $this->sql_lojaInfo = "SELECT Pessoa.cnpjcpf, Endereco.Endereco, Endereco.bairro, Endereco.cidade, Endereco.estado, Pessoa.telcomercial, Pessoa.email
//FROM `$db`.Endereco INNER JOIN `$db`.Pessoa ON Endereco.PessoaId = Pessoa.id WHERE Pessoa.id = 1 AND Endereco.status = 'A' ";
        
        $this->sql_lojaInfo = "SELECT * FROM `$db`.Local ORDER by Local.id ASC";
        
        
        $query2 = $this->object->getConnection()->prepare($this->sql_lojaInfo); 
        $query2->execute();       
        return $query2->fetch();       
        
    }
    
    
    public function getBannerSec(){        
        $db = 'db1';
        $this->object = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default'); 
        #get formas de pagamentos na view get_forma_pagamento######
        $this->sql_ban = "SELECT * FROM `$db`.get_sec_banners WHERE status = 'A'";       
        $query = $this->object->getConnection()->prepare($this->sql_ban); 
        $query->execute();        
       // WHERE a.status = 'A' AND a.categoriaId = 1
       return $query->fetchAll();       
        
    }
    
    
    public function contatoAction(){
        
        
        
       $db = 'db1';        
       $postdata = file_get_contents("php://input");
       $exec_mail = false;
       $session = new \Zend\Session\Container('sessionUser');
       
//         if(empty($postdata)){           
//           
//          
//            $model = new ViewModel();
//
//            $model->setTemplate('error/404');
//            $model->setTerminal(true); 
//            return $model;       
//          
//            exit;            
//        }
        
       $request = json_decode($postdata);
       
       
        @$tipoContato = $request->tipoContato;
       
       
        #dados#############################
        @$tipoAssunto = $request->tipoAssunto;
        @$nome = $request->inputNome;
        @$email = $request->inputEmail;
        @$subject = $request->inputSubject;
        @$txt = $request->inputTxt;
        
        
     
        
        ###################################
       
        if(empty($nome)){            
            
            echo 'Campo nome é obrigatório';           
            exit;
            
        }else if(!preg_match('/^[a-zA-Zà-úÀ-Ú!=?& -]+$/',$nome)){
            
            echo 'Campo nome só pode conter letras!';
            exit;            
            
        }else if(empty($email)){
            
            echo 'Campo E-mail é obrigatório!';           
            exit;
            
        } else if(!self::email_test($email)){
            
            echo 'O email informado não é valido!';
            exit;
            
        } else if(empty($txt)){
            
            echo 'Digite o texto da mensagem!';           
            exit;
            
        }else{
            
             echo json_encode(true);
            $exec_mail = true;
            
        }
        
        
        
        
       
        
        
        #inserir novo visitante##########################
        $this->object = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        #get formas de pagamentos na view get_forma_pagamento######
        
        
        if($tipoContato == 0){
           
            
            $this->sql_contato = "INSERT INTO `$db`.Atendimento SET                                
                                tiposolicitacao = '$tipoAssunto',
                                assunto = '$subject' , 
                                texto = '$txt',
                                nome = '$nome',
                                email = '$email' ";
            
        } else if($tipoContato == 1){
            
             $session->idUser;            
             @$produtoId = $request->produtoId;
             @$pedidoNum = $request->pedidoNum;
             @$userId = $session->idUser;
             
             
             if(empty($pedidoNum)){
                 
             
                 $this->sql_contato = "INSERT INTO `$db`.Atendimento SET                                
                                tiposolicitacao = '$tipoAssunto',
                                assunto = '$subject' ,
                                pessoaId = '$userId',
                                pedidoId = NULL,                              
                                produtos = NULL,
                                texto = '$txt',
                                nome = '$nome',
                                email = '$email' ";
                 
                 
             }else{
                 
                 
                                  
                 $this->sql_contato = "INSERT INTO `$db`.Atendimento SET                                
                                tiposolicitacao = '$tipoAssunto',
                                assunto = '$subject' ,
                                pessoaId = '$userId',
                                pedidoId = '$pedidoNum',                              
                                produtos = '$produtoId',
                                texto = '$txt',
                                nome = '$nome',
                                email = '$email' ";
             }
            
            
            
        }
       
        
        $query = $this->object->getConnection()->prepare($this->sql_contato);
        
       
        $json_comand = array();
        
        if ($query->execute()) {
            
            $json_comand = json_encode($json_comand['redirect'] = true);            
            
        }
        
        
        $view = new ViewModel();      
        $view->setTemplate('templates/orion/generic.phtml');
        $view->setTerminal(true); 

        return $view;
        
    }
  
    
    public function cadCheck($email) {
        
        $db = 'db1';
        
        $this->emailCheck = $email;
        
        $this->object = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        #verifica se email já esta cadastrado####################
        $this->sql_checkUser = "SELECT id FROM `$db`.Pessoa WHERE email = '$this->emailCheck'";		
        $query1 = $this->object->getConnection()->prepare($this->sql_checkUser);
        $query1->execute();
        
        if($query1->rowCount() >= 1){
            
           return false;
            
            
        } else if ($query1->rowCount() == 0){
            
            return true;
            
        }
        
    }
    
    
    
    public function getFormaPagamento(){        
        $db = 'db1';
        $this->object = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default'); 
        #get formas de pagamentos na view get_forma_pagamento######
        $this->sql_cat = "SELECT img_id, Imagem.ext FROM `$db`.get_forma_pagamento INNER JOIN `$db`.Imagem ON img_id = Imagem.id";       
        $query2 = $this->object->getConnection()->prepare($this->sql_cat); 
        $query2->execute();        
       
       return $query2->fetchAll();       
        
    }
    
    
    public function email_test($email) {
		
		$this->email = $email;

		if (!preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_-]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/',$this->email)){
			return false;
		}else{
			
			return true;
		}			
    }
    
    
    
    public function getRodapeInfo(){        
        $db = 'db1';
        $this->object = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default'); 
        #get formas de pagamentos na view get_forma_pagamento######
        $this->sql_foot = "SELECT * FROM `$db`.TextosShopping WHERE status = 'A'";       
        $query = $this->object->getConnection()->prepare($this->sql_foot); 
        $query->execute();        
       
       return $query->fetchAll();       
        
    }
    
    
    public function searchAction() {
        
        
      
       $db = 'db1';
      
       $searchStr = $this->getRequest()->getPost('tag');
      
       //echo $searchStr;
      
        
        $this->object = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');         
        $this->sql_search = "SELECT id,texto FROM `$db`.`TagPesquisa` WHERE TagPesquisa.texto LIKE '$searchStr%' LIMIT 10";       
        $query = $this->object->getConnection()->prepare($this->sql_search);
        $query->execute();       
        $this->dados = $query->fetchAll();
      
        
        
        #montagem da lista##########################
        
        echo '<div class="dropdown-position">
      <section class="body-dropdown top-search clearfix">
         <div class="autocomplete-suggestions" style="width: 100%; z-index: 9999; display: block;">
            <ul class="list-suggestions">
               ';
        
        
        
        
        foreach( $this->dados as $resultSearch){
            
            $tagResult =  $resultSearch['texto'];
            
            echo ' <li class="item autocomplete-suggestion"><span class=""></span> '.$tagResult.'</li>';
            
        }
        
        
        
        echo '               
            </ul>
         </div>
      </section>
   </div>';
        
        
        
        ###############################################
       
     
        
        
        $view = new ViewModel();      
        $view->setTemplate('templates/orion/generic.phtml');
        $view->setTerminal(true); 

        return $view;
        
        
    }
    
    
    
    
    
}