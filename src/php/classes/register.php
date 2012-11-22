<?php

/**
 * 
 */
class register 
{
	function __construct()
	{
		require_once(classes . 'HttpBindable' . php);
		$reg = new Registerer( 'POST' );
		$reg->Bind();
		$reg->Hash($reg->username);
		
		$file = fopen( cache . $reg->username, 'w' );
		$content = json_encode($reg);
		
		fwrite($file, $content);
		fclose($file);
		
		header('Location: index.php?p=login');
	}
}
?>