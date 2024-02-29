<?php
class Catalog_Model_Category extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = 'Catalog_Model_Resource_Category';
        $this->_collectionClass = 'Catalog_Model_Resource_Collection_Category';
        // $this->_modelClass = 'catalog/category';
    }
    public function getArrayOfIDs(){
        //array -> block/category->id to name mapping getNameFromId define
        //product/model->getNameFromId ->call getModel(catalog/category) obj
    }

}
?>