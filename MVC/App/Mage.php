<?php
class Mage
   {
    private static $registry = [];
    private static $baseDir= 'C:/xampp/htdocs/practice/MVC';
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
    
   
    //    public static function getModel($modelName)
    //    {
    //        $uriArray = explode("/", $modelName);
    //        $className = ucfirst($uriArray[0])."_"."Model"."_".ucfirst($uriArray[1]);
    //        return new $className;
    //    }
   

//    public static function getSingleton($className){}
public static function getModel($className){  //parameter  ma define krse
   $classNameObj = ucwords(str_replace("/","_Model_",$className),"_");
   return new $classNameObj();
}
public static function getBlock($className){
   $classNameObj = ucwords(str_replace("/","_Block_",$className),"_");
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
   if($subDir){
      return self::$baseDir."/".$subDir;
  } 
      return self::$baseDir;
}
}
   
?>