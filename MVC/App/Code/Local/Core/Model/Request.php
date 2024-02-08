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
	protected $_actionName;
	protected $_controllerName;
	protected $_moduleName;
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
		$var = $this->getRequestUri();
		$arr = explode('/', $var);
		$this->_controllerName = $arr[1];
		$this->_moduleName = $arr[0];
		$this->_actionName = $arr[2];
	}
	public function getFullControllerClass()
	{
		// Page_Controller_index
		$model = $this->_moduleName;
		$contro = $this->_controllerName;
		return ucfirst($model) .'_Controller_' .ucfirst($contro);
	}
}
