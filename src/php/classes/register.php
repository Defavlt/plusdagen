<?php

/**
 * 
 */
class register 
{
	
	function __construct() 
	{
		$reg = new Registerer( 'POST' );
		$reg->Hash($reg->username);
		
		$file = fopen( $reg->username, 'w' );
		
		$content;
		$vars = get_object_vars($reg);
		foreach ($vars as $name => $value) 
		{
			$content .= '\t"' . $name . '": "' . $value . '"\n';
		}
		
		fwrite($file, '{\n' . $content . '}');
		fclose($file);

		echo 1;
		exit;
	}
}

/**
 * 
 */
class Registerer extends HttpBindable
{
	var $name;
	var $phone;
	var $phone2;
	var $username;
	var $password;
	var $email;
	var $address;
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
		$vars = get_object_vars($this);
		
		foreach ($vars as $name => $value) 
		{
			$this->${$name} = ${$this->method}[ $name ];
		}
	}
	
	function Hash( $salt )
	{
		$vars = get_object_vars($this);
		
		foreach ($vars as $name => $value)
		{
			$this->${$name} = crypt($value, $salt);
		}
	}
}


?>