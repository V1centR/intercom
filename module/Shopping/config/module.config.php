<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */
return array(
    'router' => array(
        'routes' => array(
            /* Rota de testes ############################ */
            'index' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/',                   
                    'defaults' => array(
                        'controller' => 'Shopping\Controller\Index',
                        'action' => 'index',                    
                    ),
                ),
                
            ),            
            
            'categoria' => array(
                        'type' => 'Zend\Mvc\Router\Http\Segment',
                        'options' => array(
                            'route' => '/categoria[/:id]',
                            'constraints' => array(
                                
                                'controller' => '[A-Za-z0-9_-]+',                                
                                'id'     => '[A-Za-z09_-]+',
                            ),
                            'defaults' => array(
                               
                                'controller' => 'Shopping\Controller\Categoria',
                                'action' => 'index', 
                            ),                         
                        ),
            ),
            
            
            
            'categoria-sub' => array(
                        'type' => 'Zend\Mvc\Router\Http\Segment',
                        'options' => array(
                            'route' => '/categoria-sub[/:nv1][/:nv2][/]',
                            'constraints' => array(
                                
                                'controller' => '[A-Za-z0-9_-]+',                                
                                'nv2'     => '[A-Za-z09_-]+',
                            ),
                            'defaults' => array(
                               
                                'controller' => 'Shopping\Controller\Categoria',
                                'action' => 'categoriasub', 
                            ), 
                            
                        ),
                'may_terminate' => true,
            ),
           
            'atendimento' => array(
                        'type' => 'Zend\Mvc\Router\Http\Segment',
                        'options' => array(
                            'route' => '/atendimento[:param]',
                            'constraints' => array(
                                
                                'controller' => '[a-z_-]+',                                
                                'param'     => '[a-z0-9_-]+',
                            ),
                            'defaults' => array(
                               
                                'controller' => 'Shopping\Controller\Atend',
                                'action' => 'index', 
                            ),                         
                        ),
            ),
            
           
            
            
            'search' => array(
                        'type' => 'Zend\Mvc\Router\Http\Segment',
                        'options' => array(
                            'route' => '/search',
                            'constraints' => array(
                                
                                'controller' => '[a-z_-]+',                                
                                
                            ),
                            'defaults' => array(
                               
                                'controller' => 'Shopping\Controller\Atend',
                                'action' => 'search', 
                            ),                         
                        ),
            ),
            
            
            
            'pedidos' => array(
                        'type' => 'Zend\Mvc\Router\Http\Segment',
                        'options' => array(
                            'route' => '/pedidos[:param]',
                            'constraints' => array(
                                
                                'controller' => '[a-z_-]+',
                                'param'     => '[a-z0-9_-]+',                                
                            ),
                            'defaults' => array(
                               
                                'controller' => 'Shopping\Controller\Atend',
                                'action' => 'pedidos', 
                            ),                         
                        ),
            ),
            
            
            'pedidoitens' => array(
                        'type' => 'Zend\Mvc\Router\Http\Segment',
                        'options' => array(
                            'route' => '/pedidoitens[:ped]',
                            'constraints' => array(
                                
                                'controller' => '[a-z_-]+',
                                'ped'     => '[a-z0-9_-]+',                                
                            ),
                            'defaults' => array(
                               
                                'controller' => 'Shopping\Controller\Atend',
                                'action' => 'getProd', 
                            ),                         
                        ),
            ),
            
            
            'busca' => array(
                        'type' => 'Zend\Mvc\Router\Http\Segment',
                        'options' => array(
                            'route' => '/busca[:param]',
                            'constraints' => array(
                                
                                'controller' => '[a-z_-]+',                                
                                'param'     => '[a-z0-9_-]+',
                            ),
                            'defaults' => array(
                               
                                'controller' => 'Shopping\Controller\Atend',
                                'action' => 'index', 
                            ),                         
                        ),
            ),
            
            /*
            'users' => array(
                        'type' => 'Zend\Mvc\Router\Http\Segment',
                        'options' => array(
                            'route' => '/users[:action][/:id]',
                            'constraints' => array(
                                
                                
                                'controller' => '[a-z_-]+',                                
                                
                            ),
                            'defaults' => array(
                               
                                'controller' => 'Shopping\Controller\Users',
                                'action' => 'register', 
                            ),                         
                        ),
            ),             */
            
            
            
            'users' => array(
                        'type' => 'Zend\Mvc\Router\Http\Segment',
                        'options' => array(
                            'route' => '/users[/:action][/:id]',
                            'constraints' => array(
                                
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'controller' => '[a-z_-]+',                                
                                
                            ),
                            'defaults' => array(
                               
                                'controller' => 'Shopping\Controller\Users',
                                'action' => 'index', 
                            ),                         
                        ),
            ),
            
            
            
            'iso' => array(
                        'type' => 'Zend\Mvc\Router\Http\Segment',
                        'options' => array(
                            'route' => '/iso[/:action][/:id]',
                            'constraints' => array(
                                
                                'controller' => '[a-z_-]+',                                
                                'param'     => '[a-z0-9_-]+',
                            ),
                            'defaults' => array(
                               
                                'controller' => 'Shopping\Controller\Atend',
                                'action' => 'iso', 
                            ),                         
                        ),
            ),
            
            
            'cadastro' => array(
                        'type' => 'Zend\Mvc\Router\Http\Segment',
                        'options' => array(
                            'route' => '/cadastro',
                            'constraints' => array(
                                
                                'controller' => '[a-z_-]+',                                
                                
                            ),
                            'defaults' => array(
                               
                                'controller' => 'Shopping\Controller\Users',
                                'action' => 'cadastro', 
                            ),                         
                        ),
            ),
            
            
            'cart' => array(
                        'type' => 'Zend\Mvc\Router\Http\Segment',
                        'options' => array(
                            'route' => '/cart[/:action][/:id]',
                            'constraints' => array(
                                
                                'controller' => '[a-z_-]+',                                
                                'param'     => '[a-z0-9_-]+',
                            ),
                            'defaults' => array(
                               
                                'controller' => 'Shopping\Controller\Cart',
                                'action' => 'index', 
                            ),                         
                        ),
            ),
            
           
            
            'produto' => array(
                        'type' => 'Zend\Mvc\Router\Http\Segment',
                        'options' => array(
                            'route' => '/produto[/:id][/:seo]',
                            'constraints' => array(
                                
                                'controller' => '[a-z_-]+',                                
                                'id'     => '[0-9_-]+',
                                'seo'     => '[a-z0-9_-]+',
                            ),
                            'defaults' => array(
                               
                                'controller' => 'Shopping\Controller\Produto',
                                'action' => 'index', 
                            ),                         
                        ),
            ),
            
            
            'rating' => array(
                        'type' => 'Zend\Mvc\Router\Http\Segment',
                        'options' => array(
                            'route' => '/rating[/:action]',
                            'constraints' => array(
                                
                                'controller' => '[a-z_-]+',                             
                               
                            ),
                            'defaults' => array(
                               
                                'controller' => 'Shopping\Controller\Produto',
                                'action' => 'rate', 
                            ),                         
                        ),
            ),
            
            
            'frete' => array(
                        'type' => 'Zend\Mvc\Router\Http\Segment',
                        'options' => array(
                            'route' => '/frete',
                            'constraints' => array(
                                
                                'controller' => '[a-z_-]+',
                               
                            ),
                            'defaults' => array(
                               
                                'controller' => 'Shopping\Controller\Produto',
                                'action' => 'calcFrete', 
                            ),                         
                        ),
            ),
            
            
            'checkout' => array(
                        'type' => 'Zend\Mvc\Router\Http\Segment',
                        'options' => array(
                            'route' => '/checkout',
                            'constraints' => array(
                                
                                'controller' => '[a-z_-]+',
                               
                            ),
                            'defaults' => array(
                               
                                'controller' => 'Shopping\Controller\Produto',
                                'action' => 'checkout', 
                            ),                         
                        ),
            ),
            
            'contato' => array(
                        'type' => 'Zend\Mvc\Router\Http\Segment',
                        'options' => array(
                            'route' => '/contato',
                            'constraints' => array(
                                
                                'controller' => '[a-z_-]+',
                               
                            ),
                            'defaults' => array(
                               
                                'controller' => 'Shopping\Controller\Atend',
                                'action' => 'contato', 
                            ),                         
                        ),
            ),
            
            
            'validform' => array(
                        'type' => 'Zend\Mvc\Router\Http\Segment',
                        'options' => array(
                            'route' => '/validform',
                            'constraints' => array(
                                
                                'controller' => '[a-z_-]+',                                
                                
                            ),
                            'defaults' => array(
                               
                                'controller' => 'Shopping\Controller\Atend',
                                'action' => 'validForm', 
                            ),                         
                        ),
            ),
            
            
            
        ),
        
        
    ),
    
            
    /* final rota de testes ########################## */   
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'factories' => array(
            'translator' => 'Zend\Mvc\Service\TranslatorServiceFactory',
            'includes' => 'Shopping\Defaults\Includes',
           
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type' => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern' => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Shopping\Controller\Index' => 'Shopping\Controller\IndexController',            
            'Shopping\Controller\Categoria' => 'Shopping\Controller\CategoriaController',
            'Shopping\Controller\Atend' => 'Shopping\Controller\AtendController', 
            'Shopping\Controller\Users' => 'Shopping\Controller\UsersController',
            'Shopping\Controller\Cart' => 'Shopping\Controller\CartController',
            'Shopping\Controller\Produto' => 'Shopping\Controller\ProdutoController',
            'Shopping\Defaults\Includes' => 'Shopping\Defaults\Includes',
        ),
        
        
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => array(
            
            /*
              'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
              'shopping/index/index' => __DIR__ . '/../view/shopping/index/index.phtml',
              'error/404'               => __DIR__ . '/../view/error/404.phtml',
              'error/index'             => __DIR__ . '/../view/error/index.phtml',
             */
            #home e padrão###
            'orion/layout' => __DIR__ . '/../view/templates/orion/404.phtml',
            'orion/index' => __DIR__ . '/../view/templates/orion/index.phtml',
            'orion/header' => __DIR__ . '/../view/templates/orion/header.phtml',
            'orion/footer' => __DIR__ . '/../view/templates/orion/footer.phtml',
            'orion/b_principal' => __DIR__ . '/../view/templates/orion/b_principal.phtml',
            'orion/barra_categoria' => __DIR__ . '/../view/templates/orion/barra_categoria.phtml',
            'orion/banner_principal' => __DIR__ . '/../view/templates/orion/banner_principal.phtml',
            'orion/newsletter' => __DIR__ . '/../view/templates/orion/newsletter.phtml',
            'orion/para_voce' => __DIR__ . '/../view/templates/orion/para_voce.phtml',
            'orion/produto_categoria' => __DIR__ . '/../view/templates/orion/produto_categoria.phtml',
            'orion/banner_secundario' => __DIR__ . '/../view/templates/orion/banner_secundario.phtml',
            'orion/atendimento' => __DIR__ . '/../view/templates/orion/atendimento.phtml',
            'orion/forma_pagamento' => __DIR__ . '/../view/templates/orion/forma_pagamento.phtml',
            'orion/sobre_loja' => __DIR__ . '/../view/templates/orion/sobre_loja.phtml',
            
            #generic##############################
            'orion/generic' => __DIR__ . '/../view/templates/orion/generic.phtml',
            
            #categoria###
            'orion/categoria' => __DIR__ . '/../view/templates/orion/categoria.phtml',
            'orion/barra_progresso_categoria' => __DIR__ . '/../view/templates/orion/barra_progresso_categoria.phtml',
            'orion/barra_categoria_qtd' => __DIR__ . '/../view/templates/orion/barra_categoria_qtd.phtml',
            'orion/banner_categoria' => __DIR__ . '/../view/templates/orion/banner_categoria.phtml',
            'orion/produtos_da_categoria' => __DIR__ . '/../view/templates/orion/produtos_da_categoria.phtml',
            'orion/produtos_da_subcategoria' => __DIR__ . '/../view/templates/orion/produtos_da_subcategoria.phtml',
            'orion/banner_promocao' => __DIR__ . '/../view/templates/orion/banner_promocao.phtml',
            'orion/mais_vendidos' => __DIR__ . '/../view/templates/orion/mais_vendidos.phtml',
            'orion/escolhemos_para_vc' => __DIR__ . '/../view/templates/orion/escolhemos_para_vc.phtml',
            'orion/categoria_sub' => __DIR__ . '/../view/templates/orion/categoria_sub.phtml',
            'orion/categoria_sub_filter' => __DIR__ . '/../view/templates/orion/categoria_sub_filter.phtml',
            'orion/barra_subcategoria_nv1' => __DIR__ . '/../view/templates/orion/barra_subcategoria_nv1.phtml',
            
            #atendimento###
            'orion/atendimento_page' => __DIR__ . '/../view/templates/orion/atendimento_page.phtml',
            'orion/search' => __DIR__ . '/../view/templates/orion/search.phtml',
            'orion/sobre_loja' => __DIR__ . '/../view/templates/orion/sobre_loja.phtml',
            
            #produto
            'orion/produto' => __DIR__ . '/../view/templates/orion/produto.phtml',
            
            #testes
            'orion/iso' => __DIR__ . '/../view/templates/orion/iso.phtml',
            'orion/formulario' => __DIR__ . '/../view/templates/orion/formulario.phtml',
            
            
            #registro
            'orion/registro' => __DIR__ . '/../view/templates/orion/registro.phtml',
            
            #error
            'error/404' => __DIR__ . '/../view/templates/orion/404.phtml',
            'error/index' => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(           
            __DIR__ . '/../view',
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
    
    
    
    
    
);
