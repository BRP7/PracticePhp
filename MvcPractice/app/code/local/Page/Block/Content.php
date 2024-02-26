<?php
class Page_Block_Content extends Core_Block_Layout
{
    public function __construct()
    {
        // echo "Page_Block_Content";
        $this->setTemplate('page/content.phtml');
    }
}

?>