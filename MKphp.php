<?php	

	class MKphp extends MAtom {
		public $config;
		/**
		 * 初始化的一些操作
		 * @see MAtom::__begin()
		 */
		public function __begin(){
			// 导入Controller,model,view,plugin,widget,ext文件夹下面的东西
			$import = array(
					BASE_PATH . '/Controller',
					BASE_PATH . '/Model',
					BASE_PATH . '/View',
					BASE_PATH . '/Plugin',
					BASE_PATH . '/Widget',
					BASE_PATH . '/Ext',
			);
			autoImport($import);
			$this->config =  N('MConfig')->init();
		}
		/**
		 * 路由
		 */
		public function run() {
			// 获取controller
			$controller = isset($_GET[$this->config['controller_prefix']]) ? $_GET[$this->config['controller_prefix']] : $this->config['default_controller']; 	
			// 获取action
			$action = isset($_GET[$this->config['action_prefix']]) ? $_GET[$this->config['action_prefix']] : $this->config['default_action']; 
			// 规范化Controller和action
			$controller .= 'Controller';
			$action = 'action' . strtoupper(substr($action , 0 , 1)) . substr($action , 1);
			//执行路由
			N($controller)->$action(); 
		}	
	}
?>