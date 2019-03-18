<?php
/**
 * 
 */
class Person
{
      public $age;	
      public $name;	
	function __construct($name,$age)
	{
	   $this->age=$age;	
	   $this->name=$name;	
	}
}
interface Walk{
	public function run();
}
/**
 * 
 */
class Student extends Person implements Walk


{
	public function run(){

	}
	function __construct($name,$age)
	{
		$this->name=$name;
		$this->age=$age;
	}
}
?>