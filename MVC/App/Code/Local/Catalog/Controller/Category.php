<?php 
class Catalog_Controller_Category extends Core_Controller_Front_Action{
    public function formAction()
    {
        $layout = $this->getLayout();
        // $layout->getChild('head')->addJs('js/page.js');
        // $layout->getChild('head')->addJs('js/head.js');
        // $layout->getChild('head')->addCss('css/page.css');
        // $layout->getChild('head')->addCss('css/head.css');
        $child = $layout->getChild('content');

        $categoryForm = $layout->createBlock('catalog/admin_category');
        $child->addChild('form', $categoryForm);

        $layout->toHtml();

    }
}
?>