<?php
	/**
	* 原子类，所有类都继承至此类
	* 所有class都当做有生命的事物
	*/
	class MAtom {
		/**
		 * 构造方法
		 */
		public function __construct(){
			$this->__begin();
		}
		
		/**
		 * 
		 */
		public function __destruct(){
			$this->__end();
		}
		
		// 生命同期开始时调用这个方法
		public function __begin(){
			
		}
		
		// 生命周期结束时调用这个方法
		public function __end(){
			
		}
	}
?>