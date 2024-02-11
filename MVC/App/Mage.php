<?php
class Mage
   {
    //    public static function init()
    //    {
    //        // $requestModel = new Core_Model_Request();
    //        // echo $requestModel->getRequestUri();
    //        $requestModel =  Mage::getModel("core/request");
    //        echo get_class($requestModel);
    //        // echo $requestObject->getRequestUri();
    //    }
    public static function init(){
        // $modelObj = new Core_Model_Request();
        // $modelObj = Mage::getModel("core/request");
        // $modelObj->init();
        // $modelObj->getRequestUri();
        // echo get_class($modelObj);
        $controllerObj = new Core_Controller_Front();
        $controllerObj->init();
        // echo $modelObj;
    }
    //core_model_request
   
    //    public static function getModel($modelName)
    //    {
    //        $uriArray = explode("/", $modelName);
    //        $className = ucfirst($uriArray[0])."_"."Model"."_".ucfirst($uriArray[1]);
    //        return new $className;
    //    }
   

//    public static function getSingleton($className){}
public static function getModel($className){
   $classNameObj = ucwords(str_replace("/","_Model_",$className),"_");
   return new $classNameObj();
}
// public static function register($key, $value){}
// public static function registry($key){}
// public static function getBaseDir($subDir = null){}
public static function getSingleton($className)
{
}
public static function register($key, $value)
{
}
public static function registry($key)
{
}
public static function getBaseDir($subDir = null)
{
}
}
   
?>