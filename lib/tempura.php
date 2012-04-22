<?php

class Tempura {

	private $_vars, $_config;
	
	public function __construct($config = array()) {
		$this->_vars = array();
		$this->_config = $config;
		return $this;
	}
	
	public function render($view) {
		$path = isset($this->_config['path']) ? $this->_config['path'] . '/' : false;
		$extension = isset($this->_config['extension']) ? $this->_config['extension'] : false;
		include "$path$view$extension";
		return $this;
	}
	
	public function set($vars, $val = false) {
		if (is_array($vars)) {
			$this->_vars = array_merge($this->_vars, $vars);
		} else {
			$this->_vars[$vars] = $val;
		}
		return $this;
	}
	
	public function get($var) {
		return isset($this->_vars[$var]) ? $this->_vars[$var] : false;
	}
	
	public function e($var) {
		echo htmlspecialchars($var);
	}
	
	public function put($var) {
		$this->e($this->get($var));
	}
	
	public function config($options, $val) {
		if (is_array($options)) {
			$this->_config = array_merge($this->_config, $options);
		} else {
			$this->_config[$options] = $val;
		}
		return $this;
	}
	
}