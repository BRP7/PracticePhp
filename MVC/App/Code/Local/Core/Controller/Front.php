<?php

class Core_Controller_Front
{
    public function init()
    {
        $request = Mage::getModel('core/request');
        $actionName = $request->getActionName(). 'Action';
        $className = $request->getFullControllerClass();
        $controller = new $className();
        $controller->$actionName();
    }
}


// class Core_Controller_Front{
//     public function init(){
//         $modelRequestObj = Mage::getModel("core/request");
//         // $modelObj->getModuleName();
//         // $modelObj->getControllerName();
//         // $modelObj->getActionName();
//         $fullPath = $modelRequestObj->getFullControllerClass();
//         // echo $fullPath;
//         $layout = new $fullPath();

//         // $controllerIndexObj = Mage::getModel("core/page/controller/index");
//         // $controllerIndexObj = new Page_Controller_Index();
//         // $action = $controllerIndexObj->getActionName();

//         $action = $modelRequestObj->getActionName();

//         // echo $action;
//         // echo "<br>";
//         // $actionName= $actionName.'Action';
//         // echo $action;
//         $action=$action."Action";
//         // $action=stristr($action,'?',true);
//         // echo $action;
//         $layout->$action();
//     }
// }