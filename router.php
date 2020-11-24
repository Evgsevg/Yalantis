<?php
/**
 * Created by PhpStorm.
 * User: EUGENE
 * Date: 11/23/2020
 * Time: 3:59 PM
 */
//echo 'I am router!!';
//namespace controller;

//use controller;
Class Router{
    public function load()
{
    spl_autoload_register(function ($class)
    {
        if (is_file("./controller/".$class.".php")){
            include "./controller/" . $class.".php";
            if(!class_exists($class,false)){
                exit("Class".$class.".php");
            }
        }

        else{
            exit("module".$class."not found");
        }
    });

}
public function myrouting()
{
    if (isset($_GET['m'])&& preg_match("/^[a-zA_Z0-9.-_]{3,24}$/i",$_GET['m'])){
        //if (isset($_GET['m'])){


        $controller= new $_GET['m'];

        /* */ if (!method_exists($_GET['m'],"Init"))
        {
            exit("Method init not found!");
        }
        else{
            $res=$controller->Init();
            if (isset($res['tpl'])&& is_file("./view/".$res['tpl'].".php")){
                include "./view/".$res['tpl'].".php";
            }
        }


    }
}
}
$router= new Router();
$router->load();
$router->myrouting();

echo $_GET['m'];




