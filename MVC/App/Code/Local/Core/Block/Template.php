<?php
class Core_Block_Template{
    public $template;
    public function toHtml(){

    }
    public function addChild($key, $value){

    }
    public function removeChild($key){

    }
    public function getChild($key){
        
    }
    public function setTemplate($template){
        $this->template = $template;
    }
    public function getTemplate(){
        return $this->template;
    }

}