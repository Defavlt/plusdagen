<?php

/**
 * 
 */
class update 
{
	function __construct() 
	{
		require_once(classes . 'HttpBindable' . php);
		session_start();
		
		$s_user = $_SESSION['user'];
		$c_user = $_COOKIE['user'];
		
		if( 
			isset($c_user) && 
			isset($s_user) &&
			$c_user instanceof HttpBindable &&
			$s_user instanceof HttpBindable &&
			$c_user->username == $s_user->username &&
			$c_user->password == $s_user->password)
		{
			$upd = new Registerer('POST');
			$upd->Bind();
			$upd->Hash($upd->username);
			
			$file = fopen( cache . $c_user->username, 'w' );
			$upd = json_decode($upd);

			fwrite($file, $upd);
			fclose($file);
			
			header('Location: index.php?p=update#done');
		}
		else 
		{
			$_GET = array();
			$_POST = array();
			header('Location: index.php?p=login');
		}
	}
}

?>