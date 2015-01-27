<?php
	/**
	* Controller 主要用来控制逻辑，不完成数据库等操作
	*/
	class MController extends MAtom {
		/**
		 * 运行
		 */
		public function run(){
			
		}
			
		// 显示模板引擎
		public function display(){

		}

		/**
		 * 页面跳转
		 * @param string $url 跳转地址
		 */
		public function redirect($url){
			
		}
		
		/**
		 * 访问不存在的页面时自动跳转到这个方法
		 */
		public function missing(){
			
		}
		
		/**
		 * 添加插件
		 */
		public function addHook(){
			
		}
		
		/**
		 * 执行插件
		 */
		public function doHook(){
			
		}
	}
?>