<?php

class Page_Controller_Index{
    public function indexAction(){
        $this->getLayout();
         echo dirname(__FILE__);
    }
}