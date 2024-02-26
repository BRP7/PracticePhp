<?php
class Catalog_Block_Admin_List extends Core_Block_Template
{
    public function __construct()
    {
        // echo "Catalog_Block_Admin_List";
        $this->setTemplate('catalog/admin/list.phtml');
    }
}
?>