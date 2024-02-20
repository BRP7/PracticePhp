<?php

class Page_Controller_Index extends Core_Controller_Front_Action
{
    public function indexAction()
    {
        $layout = $this->getLayout(); //core_block_layout
        $layout->getChild('head');  
        // echo "<pre>";
        // $layout->getChild('head');
        $layout->getChild('head')->addJs('js/navigation.js');
        $layout->getChild('head')->addJs('js/page.js');
        $layout->getChild('head')->addCss('css/navigation.css');
        $layout->getChild('head')->addCss('css/page.css');
        // $layout->getChild('content');

        $banner = $layout->createBlock('core/template')//core_block_template
                        ->setTemplate('banner/banner.phtml');
        $layout->getChild('content')//obj
                ->addChild('banner',$banner)
                ->addChild('banner1',$banner);
                $layout->toHtml();
            }
            public function saveAction()
            {
                echo "Save Page";
            }
            public function listAction()
            {
                echo "List Page";
            }
        }








        
        // public function indexAction()
        //     {
            //         $layout = $this->getLayout();
            //         $layout->getChild('head')->addJs('js/page.js');
            //         $layout->getChild('head')->addJs('js/head.js');
            //         $layout->getChild('head')->addCss('css/page.css');
            //         $layout->getChild('head')->addCss('css/head.css');
            //         $child = $layout->getChild('content');
            //         $banner = $layout->createBlock('core/template')
            //             ->setTemplate('banner/banner.phtml');
            //         $child->addChild('banner', $banner);
            
            //         $banner1 = $layout->createBlock('core/template')
            //             ->setTemplate('banner/banner.phtml');
            //         $child->addChild('banner1', $banner1);
            
            
            
                    // $child = $layout->getChild('content');
                    // $banner = $layout->createBlock('core/template')
                    //     ->setTemplate('banner/banner.phtml');
                    // $child->addChild('banner', $banner);
            
                    // $banner1 = $layout->createBlock('core/template')
                    //     ->setTemplate('banner/banner.phtml');
                    // $child->addChild('banner1', $banner1);
                    // print_r($layout->getChild('head'));
                    //         $layout->toHtml();
                    //     }