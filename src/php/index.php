<?php

chdir( ".." );

define( "debug", "1" );
define( 'php', '.php' );

define( "root", getcwd() . "\\" );
define( "conf", ".conf" );
define( 'mods', root . 'php\\modules\\' );

$config = "config/php" . conf;
$config = parse_ini_file( $config, true );

ksort( $config['modules'] );

foreach ($config['modules'] as $mod_name => $mod_value) {
	
	$file = mods . $_GET['mod'] . php;
	var_dump($file);
	
	if (file_exists($file)) {
		
		if (is_file($file)) {
			
			require( $file );
		}
	}
}

?>