<?php

namespace Shopping\Form; 

use Zend\Captcha; 
use Zend\Form\Element;
use Zend\Form\Element\Text;
use Zend\Form\Form; 

class CadastroAcesso extends Form 
{ 
    public function __construct($name = null) 
    { 
        parent::__construct('shopping'); 
        
      
      
      
        
        $this->add(array( 
            'name' => 'nome_completo', 
            'type' => 'Zend\Form\Element\Text', 
            'attributes' => array( 
                'class' => 'form-control', 
                'id' => 'nome_compl',              
                'placeholder' => 'Nome completo', 
                'required' => 'required', 
            ), 
            'options' => array( 
            ), 
        )); 
 
       
        
        $this->add(array( 
            'name' => 'email', 
            'type' => 'Zend\Form\Element\Text', 
            'attributes' => array( 
                'class' => 'form-control', 
                'placeholder' => 'E-mail', 
                'required' => 'required', 
            ), 
            'options' => array( 
            ), 
        )); 
 
        $this->add(array( 
            'name' => 'cpf_cnpj', 
            'type' => 'Zend\Form\Element\Text', 
            'attributes' => array( 
                'class' => 'form-control', 
                'placeholder' => 'CPF-CNPJ', 
                'required' => 'required', 
            ), 
            'options' => array( 
            ), 
        )); 
 
        $this->add(array( 
            'name' => 'telefone', 
            'type' => 'Zend\Form\Element\Text', 
            'attributes' => array( 
                'class' => 'form-control', 
                'placeholder' => 'Telefone', 
                'required' => 'required', 
            ), 
            'options' => array( 
            ), 
        )); 
 
        $this->add(array( 
            'name' => 'senha_1', 
            'type' => 'Zend\Form\Element\Password', 
            'attributes' => array( 
                'class' => 'form-control', 
                'style' => 'width:100%;',
                'placeholder' => 'Senha', 
                'required' => 'required', 
            ), 
            'options' => array( 
            ), 
        )); 
 
        $this->add(array( 
            'name' => 'senha_c', 
            'type' => 'Zend\Form\Element\Password', 
            'attributes' => array( 
                'class' => 'form-control', 
                'style' => 'width:100%;',
                'placeholder' => 'Confirmar senha', 
                'required' => 'required', 
            ), 
            'options' => array( 
            ), 
        ));
        
        
        $this->add(array( 
            'name' => 'cadastrar',            
            'type' => 'Zend\Form\Element\Submit', 
            'attributes' => array( 
                 'class' => 'btn btn-primary', 
                 'style' => 'width:100%; position:relative; top:12px;',
                'value' => 'Cadastrar',
               
            ), 
            'options' => array( 
            ), 
        ));
 
        $this->add(array( 
            'name' => 'csrf', 
            'type' => 'Zend\Form\Element\Csrf', 
        ));        
    } 
} 