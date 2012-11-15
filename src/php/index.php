<?php

//chdir( ".." );

define( "debug", "1" );
define( 'php', '.php' );

define( "root", getcwd() . "\\" );
define( "conf", ".conf" );
define( 'mods', root . 'php\\modules\\' );
define( 'cont', root . 'php\\content\\' );


$page = $_GET['p'];
$config_pages = "config/php_pages" . conf;
$config_pages = parse_ini_file( $config_pages, true );

if( !array_key_exists($page, $config_pages))
{
	$page = 'index';
}

ksort($config_pages[$page]);

foreach ($config_pages[$page] as $key => $value) {
	
	if( $value != "content" )
	{
		$part = mods . $value . php;
		require $part;
	}
	else
	{
		$part = cont . $page . php;
		require $part;
	}
		
}
?>