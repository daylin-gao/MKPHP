<?php 
	/**
	 * 提供一系列操作数据库的方法
	 * @author porter
	 *
	 */
	class MModel extends MAtom{
		private $pdo;
		private $tbName;
		/**
		 * 实例化某个table的Model
		 * @param string $tbName 表名
		 * @param string $tb_prefix 表前缀
		 */
		public function __construct($tbName , $tablePrefix=''){
			parent::__construct();
			$dbConfig = N('MConfig')->get('DB_CONFIG');
			if($tablePrefix == NULL){
				$tablePrefix = $dbConfig['DB_PREFIX'];
			}
			$this->tbName = $tablePrefix.$tbName;
			// $pdo = new PDO("mysql:host=".$dbConfig['DB_HOST'].";dbname=".$dbConfig['DB_NAME'],$dbConfig['DB_USER'],$dbConfig['DB_PWD']);
			try {
				$pdo = new PDO("mysql:host=".$dbConfig['DB_HOST'].";dbname=".$dbConfig['DB_NAME'],$dbConfig['DB_USER'],$dbConfig['DB_PWD']);
				$pdo->setAttribute(PDO::ATTR_PERSISTENT, true); // 设置数据库连接为持久连接
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // 设置抛出错误
				$pdo->setAttribute(PDO::ATTR_ORACLE_NULLS, true);  // 设置当字符串为空转换为 SQL 的 NULL
				$pdo->query('SET NAMES utf8');  // 设置数据库编码
			} catch (PDOException $e) {
				exit('数据库连接错误，错误信息：'. $e->getMessage());
			}
			$this->pdo = $pdo;
		}
		
		/**
		 * 查
		 */
		public function select(){
			return $this->pdo->query("select * from " . $this->tbName);
		}
		
		/**
		 * 增
		 */
		public function save(){
			
		}
		
		/**
		 * 改
		 */
		public function update(){
			
		}
		
		/**
		 * 删
		 */
		public function delete(){
			
		}
		
		/**
		 * 切换数据库
		 */
		public function db(){
			
		}
	}
?>