<?php
class Page_Block_Header extends Core_Block_Template
{

    public function __construct()
    {
        // echo "Page_Block_Header";
        $this->setTemplate('page/header.phtml');
    }

}

?>