<?php
   
class Core_Controller_Front_Action{
    protected $_layout= null ;
    public function getLayout(){
      if(is_null($this->_layout)){  //check krva mate null che ke nai layout
        $layout =  Mage::getBlock("core/layout");
        return $layout;
      }
       return $this->_layout;
}

public function getRequest(){
  return Mage::getModel("core/request");
}

}


?>