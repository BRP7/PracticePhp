<?php
class Core_Model_Request
{
	// public function __construct(){
	// }

	public function getParams($key = '')
	{
		return ($key == '')
			? $_REQUEST
			: (isset($_REQUEST[$key])
				? $_REQUEST[$key]
				: ''
			);
	}

	public function getPostData($key = '')
	{
		return ($key == '')
			? $_POST
			: (isset($_POST[$key])
				? $_POST[$key]
				: ''
			);
	}

	public function getQueryData($key = '')
	{
		return ($key == '')
			? $_GET
			: (isset($_GET[$key])
				? $_GET[$key]
				: ''
			);
	}

	public function isPost()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			return true;
		}
		return false;
	}

	public function getRequestUri()
	{
		$requstUri = $_SERVER['REQUEST_URI'];
		$str = str_replace('/practice/MVC/', '', $requstUri);
		return $str;
	}
	protected $_controllerName, $_moduleName, $_actionName;

	public function getModuleName()
	{
		return $this->_moduleName;
	}
	public function getControllerName()
	{
		return $this->_controllerName;
	}
	public function getActionName()
	{
		return $this->_actionName;
	}
	public function __construct()
	{
		$requestUri = $this->getRequestUri();
        $requestUri = explode('/', $requestUri);
        // print_r($requestUri);
        $this->_moduleName = $requestUri[0];
        $this->_controllerName = $requestUri[1];
        $this->_actionName = $requestUri[2];
	}
	public function getFullControllerClass()
	{
		// // Page_Controller_index
		// $model = $this->_moduleName;
		// $contro = $this->_controllerName;
		// return ucfirst($model) .'_Controller_' .ucfirst($contro);
		$controllerClass = implode('_', [ucfirst($this->_moduleName), 'Controller', ucfirst($this->_controllerName)]);
        return $controllerClass;
	}
}
