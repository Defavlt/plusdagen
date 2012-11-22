<?php

/**
 * 
 */
class Registerer
{
	var $name;
	var $username;
	var $password;
	var $email;
	var $adress;
	var $postnummer;
	var $stad;
	var $monter;
	
	function Bind()
	{
		$vars = get_class_vars(get_class($this));
		
		foreach ($vars as $name => $value)
		{
			$this->{$name} = $_POST[ $name ];
		}
	}
	
	function Hash( )
	{
		$pw = hash('ripemd160', $this->password);
		$this->password = hash('ripemd160', $this->password);
	}
	
	static function Load( $user )
	{
		$inst = new self;
		$vars = get_class_vars(get_class($inst));
		
		foreach ($vars as $name => $value) 
		{
			$inst->{$name} = $user->$name;
		}
		
		return $inst;
	}

	function Read( )
	{
		if( file_exists(cache . $this->username))
		{
			$file = fopen(cache . $this->username);
			$cont = fread($file, filesize($file));
			$cont = json_decode($cont);
			$vars = get_class_vars(get_class($this));
			
			foreach ($vars as $name => $value) 
			{
				$this->{$name} = $cont->{$name};
			}
			
			return true;
		}
		
		return false;
	}
}

?>