<?php

/**
 * 
 */
class login 
{
	function __construct() 
	{
		require_once(classes . 'HttpBindable' . php);

		$reg = new Registerer( 'POST' );
		$reg->Bind();
		$reg->Hash($reg->username);
		
		if( file_exists(cache . $reg->username))
		{
			$file = fopen( cache . $reg->username, 'rb' );
			$content = fread($file, filesize(cache . $reg->username));
			$user = json_decode($content);
			
			if ($user->password == $reg->password) 
			{
				header('Location: index.php?p=done_login');
			} 
			else 
			{
				echo "Fail!";
				var_dump($user);
				var_dump($content);
			}
		}
	}
}


?>