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
use Shopping\Defaults\Includes;

class CategoriaController extends AbstractActionController {

    public function __construct() {


        $this->db = 'db1';
    }

    public function indexAction() {

        $db = 'db1';
        $categoria_id = $this->getEvent()->getRouteMatch()->getParam('id');


        #sub-menus##############################
        $this->subs = self::execMenu();
        ########################################
        #todo shopping##########################
        $this->data_todo_shopping = self::getTodoShopping();
        ########################################
        #get formas de opagamento
        $this->forma_pagamento = self::getFormaPagamento();
        #########################
        #get rodape info#########
        $this->rodape_info = self::getRodapeInfo();
        #########################
        
        #get categorias###########
        $this->categorias = self::gerCategoriaMenu($categoria_id, 1);
        ##########################
       // print_r($this->categorias);
         #nova sessao########################
        $this->lojaInfo = self::getLojaInfo();
       ####################################
       

        $container_categoria = array();
        foreach ($this->categorias as $value) {

            $id_categoria = $value['cat_pai_id'];



            $this->sql_cat = "SELECT
                                g.cat_pai_id,
                                g.nome,
                                g.img_id,
                                g.id_cat,
                                g.url_sub,
                                g.cat_pai_nome,
                                g.url_pai ,
                                (SELECT COUNT(id) as qtd_prod FROM `$db`.`Produto` p WHERE p.categoriaId = g.cat_pai_id) as qtd
                                FROM `$db`.`get_categoria` g WHERE idCategoria = '$id_categoria'";
           
            $query2 = $this->object->getConnection()->prepare($this->sql_cat);
            $query2->execute();
            $this->subsub_cat = $query2->fetchAll();
            ####################################
            


            foreach ($this->subsub_cat as $val2) {

                $container_categoria[$val2['id_cat']] = $this->subsub_cat;
            }
        }
       
         #gera o caminho das categorias#####################
            $this->path_data = self::pathBuild($id_categoria,1);
         ###################################################
       
         

        if (empty($this->categorias)) {

            $view = new ViewModel();
            $view->setTemplate('templates/orion/404.phtml')->setTerminal(true);

            return $view;
        }


        #get produtos mais vedidos "provisorio"#####################      
        $mvendidos_cat = $value['id_cat'];
        $this->sql_mvend = "SELECT * FROM `$db`.`get_view_produtos` WHERE cat2_id = '$mvendidos_cat' LIMIT 4";
        $query2 = $this->object->getConnection()->prepare($this->sql_mvend);
        $query2->execute();

        $this->mais_vendidos = $query2->fetchAll();
        ###########################################################
        
        #get banners da categoria################
        $this->banners_categoria = self::getBanners($categoria_id);
        #########################################
        
         #nova sessao########################
         $this->loja_logo = self::getLogo();
       ####################################

         
         
      # pega as categorias ativas########################
       $this->sql_configuracoes = "SELECT * FROM `$db`.Configuracoes";         
       $query2 = $this->object->getConnection()->prepare($this->sql_configuracoes); 
       $query2->execute();
       $get_configuracoes = $query2->fetchAll();    
      ############################################
       
       
       //print_r($container_categoria);
    


        $view = new ViewModel(array(
            'configuracoes' => $get_configuracoes,
            'logo_shop' => $this->loja_logo,
            'categorias' => $this->subs[1],
            'banners' => $this->banners_categoria,
            'todo_shopping' => $this->data_todo_shopping,
            'sub_cat' => $this->subs[0],
            'formas_pagamento' => $this->forma_pagamento,
            'rodape_info' => $this->rodape_info,
            'cat_list' => $this->categorias,
            'container_categoria' => $container_categoria,
            'mais_vendidos' => $this->mais_vendidos,
            'caminho' => $this->path_data,
            'loja_info'   => $this->lojaInfo,
            'caminho_type' => 1
        ));

        $view->setTemplate('templates/orion/categoria.phtml')->setTerminal(true);

        return $view;
    }

    public function categoriaSubAction() {
        
       
        $this->subcat_ok = false;
        $db = 'db1';

        $categoria_sub = $this->getEvent()->getRouteMatch()->getParam('nv1');
        $categoria_sub2 = $this->getEvent()->getRouteMatch()->getParam('nv2');
        $categoriaConfig =  $this->params()->fromQuery();
        
        //print_r($categoriaConfig);
        
        //$chave = $this->getEvent()->getRouteMatch()->getParam('key');
        $chave = 0;

        #sub-menus##############################
        $this->subs = self::execMenu();
        ########################################        
        #todo shopping##########################
        $this->data_todo_shopping = self::getTodoShopping();
        ########################################
        #get formas de opagamento        
        $this->forma_pagamento = self::getFormaPagamento();
        #########################
        #get rodape info#########
        $this->rodape_info = self::getRodapeInfo();
        #########################
        ##Validação da url###########################################
        if (empty($categoria_sub)) {

            $view = new ViewModel();
            $view->setTemplate('error/404')->setTerminal(true);
            return $view;
            exit;
        } else {


            $this->object = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
            
            
            
            $this->str = "SELECT id FROM `$this->db`.Categorias WHERE url =  '/$categoria_sub' ";
           
            
            $query = $this->object->getConnection()->prepare($this->str);
            $query->execute();
            if ($query->rowCount() != 0) {
                $this->subcat_ok = true;
            } else {
                echo "caminho não existe";
                $view = new ViewModel();
                $view->setTemplate('error/404')->setTerminal(true);
                return $view;
                exit;
            }
        }



        if (empty($categoria_sub2)) {

            $view = new ViewModel();
            $view->setTemplate('error/404')->setTerminal(true);
            return $view;
            exit;
        } else {





           
            $this->str = "SELECT * FROM `$this->db`.Categorias WHERE url =  '/$categoria_sub2' ";
            
           
            
            $query2 = $this->object->getConnection()->prepare($this->str);
            $query2->execute();
            if ($query2->rowCount() != 0) {
                $this->subcat2_ok = true;
                $this->sub_nv2_data = $query2->fetch();
            } else {


                echo "caminho não existe";
                $view = new ViewModel();
                $view->setTemplate('error/404')->setTerminal(true);
                return $view;
                exit;
            }
        }
        ##############################################################
        #get categorias###########
        $this->categorias = self::gerCategoriaMenu($categoria_sub, 0);
        ##########################
        
        #lista produtos da categoria#######################
        
        ###################################################
        

       $categoria_pai = $this->sub_nv2_data['id'];
       
       
       #gera o caminho das categorias#####################
        $this->path_data = self::pathBuild($categoria_pai,1);
        ###################################################


        $container_categoria = array();
        
        /*
        $this->sql_cat = "SELECT 
                                g.cat_pai_id, 
                                g.nome, 
                                g.img_id, 
                                g.id_cat, 
                                g.url_sub, 
                                g.cat_pai_nome, 
                                g.url_pai ,
                                (SELECT COUNT(id) as qtd_prod FROM `$db`.`Produto` p WHERE p.categoriaId = g.cat_pai_id) as qtd,
                                (SELECT cat_pai_id FROM `$db`.get_categoria WHERE cat_pai_id = g.id_cat ) as id_pri,
                                (SELECT cat_pai_nome FROM `$db`.get_categoria WHERE cat_pai_id = id_pri ) as nome_pri
                                FROM `$db`.`get_categoria` g WHERE id_cat = '$categoria_pai' ";
        
         $this->sql_cat = "SELECT caracteristicas.id as caracteristicaId, caracteristicas.nome as caracteristicaNome, caracteristicas.categoriaId as currentCatId, caracteristicaopcoes.id, caracteristicaopcoes.caracteristicaId, caracteristicaopcoes.opcao, categorias.id, categorias.nome
FROM (caracteristicaopcoes INNER JOIN (caracteristicas INNER JOIN categorias ON caracteristicas.categoriaId = categorias.id) ON caracteristicaopcoes.caracteristicaId = caracteristicas.id) INNER JOIN categorias AS categorias_1 ON categorias.categoriaId = categorias_1.id
WHERE categorias.url= '/tv-led' GROUP BY caracteristicas.id, caracteristicas.nome, caracteristicas.categoriaId, caracteristicaopcoes.id, caracteristicaopcoes.caracteristicaId, caracteristicaopcoes.opcao, categorias.id, categorias.nome";
          */  
      /*
        $this->sql_cat = "SELECT caracteristicas.id as caracteristicaId, caracteristicas.nome as caracteristicaNome, caracteristicas.categoriaId as currentCatId, caracteristicaopcoes.id, caracteristicaopcoes.caracteristicaId as caracteristicaId2, caracteristicaopcoes.opcao, categorias.id, categorias.nome
FROM (caracteristicaopcoes INNER JOIN (caracteristicas INNER JOIN categorias ON caracteristicas.categoriaId = categorias.id) ON caracteristicaopcoes.caracteristicaId = caracteristicas.id)
WHERE categorias.url= '/tv-led' GROUP BY caracteristicas.id"; */
        
       
        $this->sql_cat = "SELECT caracteristicas.id as caracteristicaId, caracteristicas.nome as caracteristicaNome, caracteristicas.categoriaId as currentCatId, caracteristicaopcoes.id as idMarca, caracteristicaopcoes.caracteristicaId as caracteristicaId2, caracteristicaopcoes.opcao, categorias.id, categorias.nome
FROM (caracteristicaopcoes INNER JOIN (caracteristicas INNER JOIN categorias ON caracteristicas.categoriaId = categorias.id) ON caracteristicaopcoes.caracteristicaId = caracteristicas.id) INNER JOIN categorias AS categorias_1 ON categorias.categoriaId = categorias_1.id
WHERE categorias.url= '/tv-led' GROUP BY caracteristicas.id, caracteristicas.nome, caracteristicas.categoriaId, caracteristicaopcoes.id, caracteristicaopcoes.caracteristicaId, caracteristicaopcoes.opcao, categorias.id, categorias.nome";
       

        $query3 = $this->object->getConnection()->prepare($this->sql_cat);
        $query3->execute();
        $this->subsub_cat = $query3->fetchAll();

        ####################################  
        $container_categoria = $this->subsub_cat;
        
        
        #get marcas####################
        $subcat_nv2_id = $this->sub_nv2_data['id'];

        $this->sql_marcas = "SELECT Produto.categoriaId, COUNT(Produto.marca) as marca_count, Marca.id, Marca.nome as marca_nome, Categorias.nome, Categorias_1.nome

FROM ((`$db`.Produto INNER JOIN `$db`.Categorias ON Produto.categoriaId = Categorias.id) INNER JOIN `$db`.Marca ON Produto.marca = Marca.id) INNER JOIN `$db`.Categorias AS Categorias_1 ON Categorias.categoriaId = Categorias_1.id WHERE Categorias.categoriaId = '$categoria_pai' GROUP BY Marca";

        $query4 = $this->object->getConnection()->prepare($this->sql_marcas);
        $query4->execute();
        $this->cat_marcas = $query4->fetchAll();
        ###############################

        
        
        
        #get produtos da categoria#####################        
        if(isset($chave)){
            
            $this->sql_produtos = "SELECT * FROM `$db`.`get_view_produtos` WHERE cat_id = '$subcat_nv2_id' AND prod_status = 'A' GROUP BY id ORDER by img_id";
            
        } else {
            
            
            $this->sql_produtos = "SELECT * FROM `$db`.`get_view_produtos` WHERE cat2_id = '$subcat_nv2_id' AND prod_status = 'A'  GROUP BY id ORDER by img_id";
        }
        
        //echo $this->sql_produtos;
        
        $query5 = $this->object->getConnection()->prepare($this->sql_produtos);
        $query5->execute();

        $this->prod_categoria = $query5->fetchAll();
        ###############################################
        
        //print_r($this->prod_categoria);
        
       
        #get faixa de preco###############################       
        $this->sql_fpreco = "SELECT
                                    MIN(precounitario) as preco_min, 
                                    MAX(precounitario) as preco_max
                                    FROM `$db`.`get_view_produtos` WHERE cat2_id = '$subcat_nv2_id'                                
                            ";
        $query6 = $this->object->getConnection()->prepare($this->sql_fpreco);
        $query6->execute();

        $this->fpreco = $query6->fetchAll();
        ###############################################
        
        
       // print_r($this->fpreco);
        
        

        if ($this->subcat_ok && $this->subcat2_ok) {
            
        }

        #nova sessao########################
        $this->lojaInfo = self::getLojaInfo();
       ####################################
        
        #nova sessao########################
         $this->loja_logo = self::getLogo();
       ####################################
         
         
         # pega as categorias ativas########################
       $this->sql_configuracoes = "SELECT * FROM `$db`.Configuracoes";         
       $query2 = $this->object->getConnection()->prepare($this->sql_configuracoes); 
       $query2->execute();
       $get_configuracoes = $query2->fetchAll();    
      ############################################



         
         


        ######View###################################
        $view = new ViewModel(array(
            'configuracoes' => $get_configuracoes,
            'logo_shop' => $this->loja_logo,
            'categorias' => $this->subs[1],
            'sub_cat' => $this->subs[0],
            'todo_shopping' => $this->data_todo_shopping,
            'formas_pagamento' => $this->forma_pagamento,
            'rodape_info' => $this->rodape_info,
            'cat_list' => $this->sub_nv2_data,
            'container_categoria' => $this->subsub_cat,
            //'marca_container' => $this->cat_marcas,
            'caminho' => $this->path_data,
            'caminho_type' => 2,
            'prod_categoria' => $this->prod_categoria,
            'loja_info'   => $this->lojaInfo,
            'faixa_preco' => $this->fpreco
        ));
        $view->setTemplate('templates/orion/categoria_sub.phtml')->setTerminal(true);
        return $view;
        ########################
    }
    
    
    
    public function getLogo(){
        
        $db = 'db1';
        #seleciona o logo da loja########       
        $this->str_logo = "SELECT Imagem.id, Imagem.ext, Configuracoes.logoId
                      FROM `$db`.Configuracoes INNER JOIN `$db`.Imagem ON Configuracoes.logoId = Imagem.id";
        $query = $this->object->getConnection()->prepare($this->str_logo);
        $query->execute();
        $logo_shop = $query->fetch();
        
        $logo_principal = 'img'.$logo_shop['logoId'].'.'.$logo_shop['ext'];
        
        return $logo_principal;
    }

    
    public function getLojaInfo(){        
        $db = 'db1';
        $this->object = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default'); 
        #get formas de pagamentos na view get_forma_pagamento######
        $this->sql_lojaInfo = "SELECT * FROM `$db`.Local ORDER by Local.id ASC";
        $query2 = $this->object->getConnection()->prepare($this->sql_lojaInfo); 
        $query2->execute();       
       return $query2->fetch();       
        
    }
    
    
    
    public function getTodoShopping() {

        $db = 'db1';
        #######################################       
        $this->sql_todo_shopping = "SELECT Categorias.id, Categorias.categoriaId, Categorias.nome, Categorias.status, Categorias.seo, Categorias.url, Categorias.imagemId, Imagem.id, Imagem.thumb, Imagem.ext
FROM `$db`.Categorias INNER JOIN `$db`.Imagem ON Categorias.imagemId = Imagem.id WHERE Categorias.categoriaId IS NULL AND Categorias.status = 'A' LIMIT 40";
        $query2 = $this->object->getConnection()->prepare($this->sql_todo_shopping);
        $query2->execute();
        $this->data_todo_shopping = $query2->fetchAll();
        #######################################


        return $this->data_todo_shopping;
    }

    private function getBanners($cat) {

        $this->cat = $cat;

        $db = 'db1';

        $this->object = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        #get formas de pagamentos na view get_forma_pagamento######
        $this->sql_cat = "SELECT Banners.id, Banners.status, Banners.categoriaId, Imagem.id as img_id, Imagem.ext, Categorias.nome, Categorias.url
FROM (`$db`.Banners INNER JOIN `$db`.Imagem ON Banners.imagemId = Imagem.id) INNER JOIN `$db`.Categorias ON Banners.categoriaId = Categorias.id WHERE Banners.status = 'A' AND Categorias.url = '/$this->cat' LIMIT 4 ";
        $query2 = $this->object->getConnection()->prepare($this->sql_cat);
        $query2->execute();

        return $query2->fetchAll();
    }

    public function getFormaPagamento() {

        $db = 'db1';
        $this->object = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        #get formas de pagamentos na view get_forma_pagamento######
        $this->sql_cat = "SELECT img_id, Imagem.ext FROM `$db`.get_forma_pagamento INNER JOIN `$db`.Imagem ON img_id = Imagem.id";
        $query2 = $this->object->getConnection()->prepare($this->sql_cat);
        $query2->execute();

        return $query2->fetchAll();
    }

    public function getRodapeInfo() {
        $db = 'db1';
        $this->object = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        #get formas de pagamentos na view get_forma_pagamento######
        $this->sql_foot = "SELECT * FROM `$db`.TextosShopping WHERE status = 'A'";
        $query = $this->object->getConnection()->prepare($this->sql_foot);
        $query->execute();

        return $query->fetchAll();
    }

    public function gerCategoriaMenu($id, $type) {
        $db = 'db1';
        $this->id = $id;
        $this->type = $type;


        $this->object = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        #get formas de pagamentos na view get_forma_pagamento######
        $this->sql_cat = "SELECT * FROM `$db`.get_categoria INNER JOIN `$db`.Imagem ON get_categoria.img_id = Imagem.id WHERE get_categoria.url_pai = '/$this->id' ";
        $query = $this->object->getConnection()->prepare($this->sql_cat);
        $query->execute();

       
        
        switch ($this->type) {

            case 0:
                $this->fetch_data = $query->fetch();
                break;

            case 1:
                $this->fetch_data = $query->fetchAll();
                break;
        }


        return $this->fetch_data;
    }
    
    
    
    public function pathBuild($id_cat,$mode) {
        
        $this->mode = $mode;
        $this->id_cat = $id_cat;
        
        $db = 'db1';
        
        switch ($this->mode) {
            
            case 1:                
                $where = 'Categorias.id = '.$this->id_cat.'';
            break;
            
            case 2:                
                $where = 'Categorias.id = '.$this->id_cat.'';
            break;
           
        }
 
        
        $this->sql_path = "SELECT 
                                g.cat_pai_id, 
                                g.nome, 
                                g.img_id, 
                                g.id_cat, 
                                g.url_sub, 
                                g.cat_pai_nome, 
                                g.url_pai ,
                                (SELECT COUNT(id) as qtd_prod FROM `$db`.`Produto` p WHERE p.categoriaId = g.cat_pai_id) as qtd,
                                (SELECT cat_pai_id FROM `$db`.get_categoria WHERE cat_pai_id = g.id_cat ) as id_pri,
                                (SELECT cat_pai_nome FROM `$db`.get_categoria WHERE cat_pai_id = id_pri ) as nome_pri,
                                (SELECT url_pai FROM `$db`.get_categoria WHERE cat_pai_id = id_pri ) as url_pri
                                FROM `$db`.`get_categoria` g WHERE cat_pai_id = '$this->id_cat' ";
        
        
      
      
        $query = $this->object->getConnection()->prepare($this->sql_path);
        $query->execute();
        $data_array = $query->fetch();
        
        return $data_array;
        
        
        
    }

    public function execMenu() {


        $db = 'db1';


        $this->object = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');

        
        $this->sql_categorias = "SELECT Categorias.id, Categorias.nome, Categorias.status as cat_status, Categorias.categoriaId, Categorias.seo, Categorias.descSeo, Categorias.url, Categorias.imagemId, Categorias.status,Imagem.status, Imagem.ext, Categorias.ImagemcategoriaId,
(SELECT Imagem.ext FROM `$db`.Imagem WHERE Imagem.id = Categorias.imagemcategoriaId) as img_aba_ext
FROM `$db`.Categorias INNER JOIN `$db`.Imagem ON (Categorias.ImagemId = Imagem.id)
WHERE Categorias.categoriaId IS NULL AND Categorias.status = 'A' ORDER BY Categorias.id ASC LIMIT 14";
        $query = $this->object->getConnection()->prepare($this->sql_categorias);
        $query->execute();

        $data_array = $query->fetchAll();

        $subs = array();
        $frame_product = array();
        foreach ($data_array as $var_subs) {

            $var_subs = $var_subs['id'];

            $this->object = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
            $this->sql_foot = "SELECT * FROM `$db`.Categorias WHERE categoriaid = '$var_subs'";
            $query = $this->object->getConnection()->prepare($this->sql_foot);
            $query->execute();
            $data_sub_cat = $query->fetchAll();
            $data_count = $query->rowCount();

            $subs[$var_subs] = array();

            foreach ($data_sub_cat as $data_prod) {


                //echo $value['nome'].'<br>';

               $subs[$var_subs][] .= $data_prod['nome'].';'.$data_prod['url'];
            }
        }

        return array($subs, $data_array);
    }

    
    
    
    
    

}
