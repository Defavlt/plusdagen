<?php

/**
 * 
 */
class logout 
{
	function __construct() 
	{
		session_start();
		setcookie( 'user', time() - 999999);
		$_SESSION['user'] = NULL;
		session_destroy();
	}
}


?>