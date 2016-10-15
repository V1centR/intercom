<?php

/*
 * RWS - RIA WEB SOFTWARE
 * Autor: Yahuchanam - Marcus Vinicius
 */


namespace Application\Controller;

{

    require_once '/master/otn/projeto1/module/Application/src/Application/Controller/Config.php';
    //use Application\Controller\Config;

    class Loader
    {

        public static function autoLoader()
        {
            spl_autoload_register(
                    function ($class)
                    {
                        $verifica = str_replace('\\', '/', General::getRootFolder()  . 'module/Application/src/Application/' . $class . '.php');

                        if(file_exists($verifica))
                        {
                            require_once($verifica);
                        }
                        else
                        {
                            echo "Não encontrou o arquivo de classes -> Classe não encontrada: ".$verifica;
                        }
                    }
            );
        }
    }
}
?>
