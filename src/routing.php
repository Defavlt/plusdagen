<?php
if ($_SERVER['REQUEST_URI'] == '/')
{
	include_once 'php/index.php';
}
else if (file_exists(__DIR__ . '/' . $_SERVER['REQUEST_URI'])) {
	
	return false; // serve the requested resource as-is.
} else {
	echo 1;
    include_once 'php/index.php';
}
?>
