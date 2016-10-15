<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Shopping\Defaults;

use Zend\Form\Element;
use Shopping\Form\CadastroAcesso;
use Shopping\Form\CadastroAcessoValidator;

/**
 * Description of GetForms
 *
 * @author Solucao
 */
class GetForms {

    public function cadastroAcesso() {


        $form = new CadastroAcesso();
        $request = $this->getRequest();

        if ($request->isPost()) {
            $user = new Form();

            $formValidator = new CadastroAcessoValidator(); {
                $form->setInputFilter($formValidator->getInputFilter());
                $form->setData($request->getPost());
            }

            if ($form->isValid()) { {
                    $user->exchangeArray($form->getData());
                }
            }

            return ['form' => $form];
        }
    }

}
