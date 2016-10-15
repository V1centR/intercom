<?php

namespace Shopping\Defaults;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\Session\Container;


class ExecCart extends AbstractActionController {
    
   
  
    
    
    public function showCart() {
        
    
        $db = 'db1';
        
        $json_cart = array();
        $cart = new Container('carrinho');
        foreach ($cart as $key => $qtd) {
            
            
                $this->object = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default'); 
                #get formas de pagamentos na view get_forma_pagamento######
                $this->sql_foot = "SELECT * FROM `$db`.`get_view_produtos` WHERE get_view_produtos.id = '$key' ";       
                $query = $this->object->getConnection()->prepare($this->sql_foot); 
                $query->execute();        

                //$this->dados = $query->fetchAll();
            
                
                foreach ($query->fetchAll() as $value) {
                    $json_cart[] = array('nome_prod' => $value['nome'], 'qtd' => $qtd);
                 
                    
                }            
        }
        
        
        //print_r($json_cart);
        
       // $data = array('cart_data' => $json_cart);
      //  echo json_encode($data);
        
//        
//        $view = new ViewModel(array(
//            
//            
//             'cart_data' => 'OK',
//            
//        ));      
//        $view->setTemplate('orion/iso.phtml');
//        $view->setTerminal(true); 

        return $json_cart;
        
    }
    
    
    
}