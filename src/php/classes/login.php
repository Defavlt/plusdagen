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
		$loc = isset($_GET['redirect']) ? $_GET['redirect'] : 'done_login';
		
		if( file_exists(cache . $reg->username))
		{
			$file = fopen( cache . $reg->username, 'rb' );
			$content = fread($file, filesize(cache . $reg->username));
			$user = json_decode($content);
			
			if ($user->password == $reg->password) 
			{
				session_start();
				
				$_SESSION['user'] = $reg;
				header('Location: index.php?p=' . $loc);
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