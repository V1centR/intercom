<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Shopping\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Shopping\Defaults\Sessions;
use Zend\Session\Container;
use Shopping\Defaults\Includes;

#include de formularios####################
use Shopping\Form\CadastroAcesso;
use Shopping\Form\CadastroAcessoValidator;
use Doctrine\DBAL\Configuration;

class IndexController extends AbstractActionController
{
    
    
    public function __construct() {        
        $this->set_db = `db1`;        
    }
    
    public function indexAction()
    {       
        $db = 'db1';
        
        $this->object = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        $em = $this->getServiceLocator()->get("Doctrine\ORM\EntityManager");
         
       
        
        $lista = $em->getRepository("OTNCore\Entity\Categorias")->findOneById(2);
        $lista->getNome();
        print_r($lista->getNome());
      
        
        
        $prod_bannerImg = '';     
        
        
        
        
        $this->sql_categorias = "SELECT Categorias.id, Categorias.nome, Categorias.status as cat_status, Categorias.categoriaId, Categorias.seo, Categorias.descSeo, Categorias.url, Categorias.imagemId, Categorias.status,Imagem.status, Imagem.ext, Categorias.ImagemcategoriaId,
(SELECT Imagem.ext FROM `$db`.Imagem WHERE Imagem.id = Categorias.imagemcategoriaId) as img_aba_ext
FROM `$db`.Categorias INNER JOIN `$db`.Imagem ON (Categorias.ImagemId = Imagem.id)
WHERE Categorias.categoriaId IS NULL AND Categorias.status = 'A' ORDER BY Categorias.id ASC LIMIT 5";
        
        $query = $this->object->getConnection()->prepare($this->sql_categorias); 
        $query->execute();        
       
        $data_array = $query->fetchAll();

        
        
        $subs = array();
        $frame_product = array();
        foreach($data_array as $var_subs){          
          
            $var_subs = $var_subs['id']; 
               
            $this->sql_foot = "SELECT * FROM `$db`.Categorias WHERE categoriaid = '$var_subs' AND status = 'A'";       
            $query = $this->object->getConnection()->prepare($this->sql_foot); 
            $query->execute();
            $data_sub_cat = $query->fetchAll();
            $data_count = $query->rowCount();

            $subs[$var_subs] = array();

            foreach ($data_sub_cat as $data_prod) {

               $subs[$var_subs][] .= $data_prod['nome'].';'.$data_prod['url'];
             
            }
      }
      
        #lista produto##########################
            $cat_bar_produtos = array();
            foreach($data_array as $var_prods){
                
               $id_categoria = $var_prods['id'];
             
               $this->produtos_sql = "SELECT Produto.id as prod_id, Produto.nome as prod_nome, Produto.status, Produto.categoriaId, Precos.precounitario, Precos.precopromocional, Categorias.nome, Categorias.id, Categorias_1.nome, Categorias_1.id, Categorias_1.categoriaId AS nv1_id, Imagem.id as img_id, Imagem.ext, Imagem.thumb
FROM (`$db`.ProdutoImagem INNER JOIN ((`$db`.Precos INNER JOIN (`$db`.Produto INNER JOIN `$db`.Categorias ON Produto.categoriaId = Categorias.id) ON Precos.ProdutoId = Produto.id) INNER JOIN `$db`.Categorias AS Categorias_1 ON Categorias.categoriaId = Categorias_1.id) ON ProdutoImagem.ProdutoId = Produto.id) INNER JOIN `$db`.Imagem ON ProdutoImagem.imagemId = Imagem.id
WHERE (((Categorias_1.id)='$id_categoria')) OR (((Produto.status)='A') AND ((Categorias_1.categoriaId)='$id_categoria')) LIMIT 6";
              
               
                $query5 = $this->object->getConnection()->prepare($this->produtos_sql); 
                $query5->execute();       
                $this->data_prod = $query5->fetchAll();
                
                $dados[$id_categoria] = array();
                
                foreach ($this->data_prod as $cdata) {                    
                    $dados[$id_categoria][] = $cdata;                    
                }
            }
      
        ########################################
      
       
        #######################################
        @$hash_user = $_COOKIE['hashUser'];
            
        $this->sql_cat = "SELECT id FROM `$db`.Visitante WHERE sessao = '$hash_user' ";       
        $query2 = $this->object->getConnection()->prepare($this->sql_cat); 
        $query2->execute();       
        $this->data_user = $query2->fetch();
        $this->idUser = $this->data_user['id'];
        #######################################
        
        
        #seleciona o logo da loja########
        $this->object = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');            
        $this->str_logo = "SELECT Imagem.id, Imagem.ext, Configuracoes.logoId
                      FROM `$db`.Configuracoes INNER JOIN `$db`.Imagem ON Configuracoes.logoId = Imagem.id";
        $query = $this->object->getConnection()->prepare($this->str_logo);
        $query->execute();
        $logo_shop = $query->fetch();
        
        $logo_principal = 'img'.$logo_shop['logoId'].'.'.$logo_shop['ext'];
      
        
       
        
        $this->sql_visitanteProd = "SELECT * FROM `$db`.VisitanteProdutos WHERE visitanteId = '$this->idUser' ORDER BY id DESC LIMIT 1";       
        $query3 = $this->object->getConnection()->prepare($this->sql_visitanteProd); 
        $query3->execute();
        $visit_data = $query3->fetch();
       
        
        if($query3->rowCount() > 0){        
            
            
            $id_produto = $visit_data['produtoId'];
            $this->sql_catproduto = "SELECT id, nome, cat2_id, img_id,ext  FROM `$db`.`get_view_produtos` WHERE id = '$id_produto' ";
            $query4 = $this->object->getConnection()->prepare($this->sql_catproduto);
            $query4->execute();
            $prod_info = $query4->fetch();
            
            
            
            $id_categoria = $prod_info['cat2_id'];
            $prod_bannerImg = array(
                                    'id' => $prod_info['id'],
                                    'nome' => $prod_info['nome'],
                                    'img' => 'img'.$prod_info['img_id'].'.'.$prod_info['ext'],
                );
            
            $this->sql_cat = "SELECT id,nome,precounitario,precopromocional,img_id,ext FROM `$db`.`get_view_produtos` WHERE cat2_id = '$id_categoria' AND id <> '$id_produto' ";
            $query5 = $this->object->getConnection()->prepare($this->sql_cat); 
           
           
            if($query5->execute()){
                
                $frame_product = $query5->fetchAll();
                
            } else {
                
                $frame_product = false;
                
            }
      
          
            
        } else {
            
            $frame_product = false;
            
        }
        
    
        //print_r($frame_product);
        
        #######################################       
        $this->sql_todo_shopping = "SELECT Categorias.id, Categorias.categoriaId, Categorias.nome, Categorias.status, Categorias.seo, Categorias.url, Categorias.imagemId, Imagem.id, Imagem.thumb, Imagem.ext
FROM `$db`.Categorias INNER JOIN `$db`.Imagem ON Categorias.imagemId = Imagem.id WHERE Categorias.categoriaId IS NULL AND Categorias.status = 'A' LIMIT 40";       
        $query2 = $this->object->getConnection()->prepare($this->sql_todo_shopping); 
        $query2->execute();       
        $this->data_todo_shopping = $query2->fetchAll();        
        #######################################
        
      
     
      ###########################################################
        
       $this->object = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default'); 
       # pega as categorias ativas########################
       $this->sql_cat = "SELECT * FROM `$db`.get_view_produtos";         
       $query2 = $this->object->getConnection()->prepare($this->sql_cat); 
       $query2->execute();
       $get_produtos = $query2->fetchAll();    
      ############################################
      
       
       #get formas de opagamento
       $this->forma_pagamento = self::getFormaPagamento();
       #########################
       
       #get rodape info#########
       $this->rodape_info = self::getRodapeInfo();
       #########################
       
       #get rodape info#########
       $this->banner_sec = self::getBannerSec();
       #########################
       
       #nova sessao########################
        $this->newVisitante = self::execSession();
       ####################################
        
        #nova sessao########################
       // $this->lojaInfo = self::getLojaInfo();
       ####################################
        
        
      ###########################################################        
       
       # pega as categorias ativas########################
       $this->sql_configuracoes = "SELECT * FROM `$db`.Configuracoes";         
       $query2 = $this->object->getConnection()->prepare($this->sql_configuracoes); 
       $query2->execute();
       $get_configuracoes = $query2->fetchAll(); 
       
       $getLojaConfig = $em->getRepository("OTNCore\Entity\Configuracoes")->findAll();
       echo $getLojaConfig[0]->getNome().'<br>';
       print_r($getLojaConfig[0]);
      ############################################
        
        #formulario para cadastro
        $form = new CadastroAcesso();
        $request = $this->getRequest();
        
      
        
        $helper = $this->getServiceLocator()->get('ViewHelperManager')->get('ServerUrl');
        $url = $helper->__invoke(true);
        //echo $url;
      
       $view = new ViewModel(array(
           'logo_shop' => $logo_principal,
           'configuracoes' => $getLojaConfig[0],
           'categorias' => $data_array,         
           'categoria_bar' => $dados,
           'banners'    => $this->banner_sec,
           'banner_sec' => $this->banner_sec,
           'sub_cat'    => $subs,
           'para_vc'    => $frame_product,
           'para_vc_banner' => $prod_bannerImg,
           'todo_shopping' => $this->data_todo_shopping,            
           'get_produtos'    => $get_produtos,
           'formas_pagamento' => $this->forma_pagamento,
           'rodape_info'    => $this->rodape_info,
           'loja_info'   => $this->lojaInfo,
           'form' => $form
           
       ));       
      
       $view->setTemplate('templates/orion/index.phtml');
       $view->setTerminal(true);      
       
       return $view;
    }
    
    
    
    public function getLojaInfo(){        
        $db = 'db1';
        $this->object = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default'); 
       
        $this->sql_lojaInfo = "SELECT * FROM `$db`.Local ORDER by Local.id ASC";
        
        
        $query2 = $this->object->getConnection()->prepare($this->sql_lojaInfo); 
        $query2->execute();       
        return $query2->fetch();
        
    }
    
    
    public function getFormaPagamento(){        
        $db = 'db1';
        $this->object = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default'); 
        #get formas de pagamentos na view get_forma_pagamento######
        $this->sql_cat = "SELECT img_id, Imagem.ext FROM `$db`.get_forma_pagamento INNER JOIN `$db`.Imagem ON img_id = Imagem.id ";       
        $query2 = $this->object->getConnection()->prepare($this->sql_cat); 
        $query2->execute();       
       return $query2->fetchAll();       
        
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
    
    
    public function getBannerSec(){        
        $db = 'db1';
        $this->object = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');       
        $this->sql_ban = "SELECT * FROM `$db`.get_sec_banners WHERE status = 'A'";       
        $query = $this->object->getConnection()->prepare($this->sql_ban); 
        $query->execute();        
        
       // WHERE a.status = 'A' AND a.categoriaId = 1
       return $query->fetchAll();
        
    }
    
    public function execSession() {
        
        $db = 'db1';
      
        $this->ip_visitante = $_SERVER['REMOTE_ADDR'];

        #nova sessao########################
            if (empty($_COOKIE['hashUser'])) {

                $visitante = new Sessions();
                $visitante->startSession();

                $set_sessao = new Container('visit');

                #inserir novo visitante##########################
                $this->object = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
                #get formas de pagamentos na view get_forma_pagamento######
                $this->sql_visit = "INSERT INTO `$db`.Visitante SET sessao = '$set_sessao->hash', ipacesso= '$this->ip_visitante'";
                $query = $this->object->getConnection()->prepare($this->sql_visit);

                if ($query->execute()) {

                  //echo '<script>alert('.$this->object->lastInsertId().')</script>'; 
                   
                }
            } else {

                //echo "sessão exists";
                
            }
        ####################################
    }
    
    
    
    

}
