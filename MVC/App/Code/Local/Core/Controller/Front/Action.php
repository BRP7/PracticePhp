<?php
class Core_Controller_Front_Action{
    public function getLayout(){
        $block = Mage::getBlock('page/home');
        echo get_class($block);
        return $this;
    }
}