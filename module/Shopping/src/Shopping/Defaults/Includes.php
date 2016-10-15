<?php

namespace Shopping\Defaults;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;



class includes implements FactoryInterface {
    
private $config;

private $serviceLocator;


    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return $serviceLocator->get('includes');
    }
    
    
    public function test(){
        
        
        echo 'serviço ok';
        
        return 'TEst OK';
        
    }
    
    
    
}