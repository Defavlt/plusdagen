<?php

/**
 * 
 */
class login 
{
	function __construct() 
	{
		require_once(classes . 'HttpBindable' . php);
		session_start();
		session_destroy();

		$reg = new Registerer();
		$reg->Bind();
		$reg->Hash();
		$loc = isset($_GET['redirect']) ? $_GET['redirect'] : 'done_login';
		
		if( file_exists(cache . $reg->username))
		{
			$file = fopen( cache . $reg->username, 'rb' );
			$content = fread($file, filesize(cache . $reg->username));
			$user = json_decode($content);
			
			if ($user->password == $reg->password)
			{
				session_start();
				$_SESSION['user'] = $user;
				$cookie = json_encode($user);

				setcookie('user', $cookie, time() + 3600, '/');
				header('Location: index.php?p=' . $loc);
			} 
			else 
			{
				/*
				session_destroy();
				header('Location: index.php?p=login#password');
				exit;
				 * 
				 */
			}
		}
		else 
		{
			session_destroy();
			header('Location: ?p=register');
			exit;
		}
	}
}


?>