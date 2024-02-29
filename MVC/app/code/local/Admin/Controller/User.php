<?php

class Admin_Controller_User extends Core_Controller_Admin_Action
{
    protected $_allowedActions = array('login');
    public function loginAction()
    {
        $layout = $this->getLayout();
        $layout->removeChild('header')->removeChild('footer');
        $child = $layout->getChild('content');
        $layout->getChild('head')->addCss('header.css')
            ->addCss('form.css');
        $login = $layout->createBlock('customer/login')
                ->setTemplate('customer/account/login.phtml');
        $child->addChild('login', $login);
        $layout->toHtml();
    }
}