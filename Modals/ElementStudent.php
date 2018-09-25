<?php

class ElementStudent

{
	public $name;
	public $age;
	public $phone_number;
	
	function __construct($name,$age,$phone_number)
	{

		$this->name=$name;
		$this->age=$age;
		$this->phone_number=$phone_number;
	}
}


?>