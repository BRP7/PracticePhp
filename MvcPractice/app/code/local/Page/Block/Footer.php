<?php
class Page_Block_Footer extends Core_Block_Layout
{
    public function __construct()
    {
        // echo"Page_Block_Footer";
        $this->setTemplate('page/footer.phtml');
    }
}
?>