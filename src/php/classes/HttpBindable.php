<?php

/**
 * 
 */
class Registerer extends HttpBindable
{
	var $name;
	var $username;
	var $password;
	var $email;
	var $adress;
	var $postnummer;
	var $stad;
	var $monter;
	var $method;
	
	function __construct( $method ) 
	{
		$this->method = '_' . strtoupper($method);
	}
}

/**
 * 
 */
class HttpBindable
{	
	function Bind()
	{
		$vars = get_class_vars(get_class($this));
		var_dump($vars);
		var_dump($this);
		
		foreach ($vars as $name => $value) 
		{
			echo $name . '<br>';
			$this->{$name} = ${$this->method}[ $name ];
		}
	}
	
	function Hash( $salt )
	{
		$vars = get_object_vars($this);
		
		foreach ($vars as $name => $value)
		{
			$this->{$name} = hash('ripemd160', $value); //crypt($value, $salt);
		}
	}
}

?>