<?php
/**
 * 单例模式
 */
class Ss
{
	//私有的构造函数
	private function __construct()
	{

	}
	//私有的静态属性
	private static $sell=null;
	//私有的克隆方法
	private function __clone(){

	}
	//公共的静态方法
	public static function getsell(){
		if(!(self::$sell instanceof Ss)){
			self::$sell=new Ss();
		}
		return self::$sell;
	}
}

?>