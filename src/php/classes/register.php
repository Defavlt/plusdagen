<?php

/**
 * 
 */
class register 
{
	function __construct()
	{
		require_once('HttpBindable' . php);
		$reg = new Registerer( 'POST' );
		$reg->Bind();
		$reg->Hash($reg->username);
		
		$file = fopen( cache . $reg->username, 'w' );
		
		$content = json_encode($reg);
		var_dump($content);
		fwrite($file, $content);
		fclose($file);
		
		header('Location: index.php?p=done_register');
	}
}
?>