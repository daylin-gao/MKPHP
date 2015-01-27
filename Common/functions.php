<?php
//调试方法
function mydebug($str){
	echo '<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">';
	echo '<pre>';
	print_r($str);
	echo '</pre>';
	exit();
}

/**
 * 快速实例化class , 不过暂时没有实例化参数
 * @param string $class 类名
 */
function N($class){
	return new $class();
}
/**
* 载入文件
* @param string 文件路径
**/
function import($file){
	return include_once($file);
}

/**
* 自动载入文件夹下面的所有文件（.php文件？）
* @param array/string 需要载入的文件夹路径
**/
function autoImport($file){
	if(is_array($file)){
		foreach($file as $v){
			autoImport($v);
		}
	}else if(is_dir($file)){
		$childs = scandir($file);
		foreach($childs as $child){
			if(substr($child,0,1) != '.'){
				autoImport($file.'/'.$child);
			}
		}
	}else if(is_file($file)){
		import($file);
	}
}
