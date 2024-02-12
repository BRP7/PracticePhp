<?php
class Core_Controller_Front{
    public function init(){
        $modelObj = Mage::getModel("core/request");
        // $modelObj->getModuleName();
        // $modelObj->getControllerName();
        // $modelObj->getActionName();
        $fullPath = $modelObj->getFullControllerClass();
        $layout = new $fullPath();

        // $controllerIndexObj = Mage::getModel("core/page/controller/index");
        // $controllerIndexObj = new Page_Controller_Index();
        // $action = $controllerIndexObj->getActionName();

        $action = $modelObj->getActionName();
        $action=stristr($action,'?',true);
        // $actionName= $actionName.'Action';
        // echo $action;
        $action=$action."Action";
        $layout->$action();
    }
}