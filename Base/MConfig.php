<?php 
class MConfig extends MAtom{
	private $config;
	
	public function __begin(){
		$this->config = $this->init();
	}

	/**
	 * 返回所有配置信息
	 */
	public function init(){
		$userConfig = file_exists(BASE_PATH . 'Common/config.php') ? require(BASE_PATH . 'Common/config.php') : array();
		$defaultConfig = require(MK_PATH . 'Common/config.php');
		return array_merge($defaultConfig , $userConfig);
	}
	/**
	 *  得到名为name的配置的值，如果没有name,默认为$default
	 * @param string $name 配置的名字
	 * @param string $default 默认值
	 */
	public function get($name , $default=''){
		if(isset($this->config[$name])){
			return $this->config[$name];
		}
		return $default;
	}
	
	/**
	 * 设置配置
	 * @param string $name 名
	 * @param string $value 值
	 */
	public function set($name ,$value){
	}
}
