<?php

namespace Shopping\Defaults;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\Session\Container;


class Sessions extends AbstractActionController {
    
    public function startSession() {
        
        $hashUser =  md5(microtime());
        
        $session = new Container('visit');       
        $session->hora = date('H:i:s');
        $session->hash = $hashUser;
        $session->cart_ready = false;
        
        
        if(empty($_COOKIE['hashUser'])){
            
           #cookie tem validade de 120h
           setcookie("hashUser", $hashUser, time()+432000);
        }     
        
      
        return $session;       
        
    }
    
    
    public function setAmbiente($hashUser) {
        $db = 'db1';
        
        $this->hashUser = $hashUser;
        
        $this->object = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        $this->sql_ban = "SELECT * FROM `$db`.get_sec_banners WHERE status = 'A' ";       
        $query = $this->object->getConnection()->prepare($this->sql_ban); 
        $query->execute();
        
    }
    
    
    
}