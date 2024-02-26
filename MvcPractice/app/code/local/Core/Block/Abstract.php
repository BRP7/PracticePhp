<?php
class Core_Block_Abstract
{
    public $template;
    public $i=0;
    public function setTemplate($template)
    {
        // echo "yyyy".$template;
        // echo "<br>";
        $this->template = $template;
        // echo"<br>";
        // print_r($template);
        // echo "<br>";
        // echo "SET TEMPLATE".$this->i=$this->i+1;
        // echo"<br>";
        return $this;
    }
    public function getTemplate()
    {
        return $this->template;
    }
    public function __get($key)
    {

    }
    public function __unset($key)
    {

    }
    public function __set($key, $value)
    {

    }
    public function addData($key, $value)
    {

    }
    public function getData($key = null)
    {

    }
    public function setData($data)
    {

    }
    //public function getUrl($action = null, $controller = null, $params = [], $resetParams = false)
    public function getUrl($path)
    {
        return "http://localhost/practice/MvcPractice/" . $path;
    }
    public function getRequest()
    {

    }
    public function render()
    {
        // echo"<br>";
        // echo "Render".$this->i=$this->i+1;
        // echo"<br>";
        // echo "bbb".$this->getTemplate();
        // echo "<br>";
        // echo "<br>";
        include Mage::getBaseDir('app') . '/design/frontend/template/' . $this->getTemplate();
        // echo "hhh".$this->getTemplate();
        // die;
    }
    public function getImageUrl($file)
    {
        return Mage::getBaseUrl('images/') . $file;
    }
}
?>