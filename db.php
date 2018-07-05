<?php
	require 'libs/rb.php';

	R::setup( 'mysql:host=localhost;dbname=auth_redbean',
        'root', '123' );

	session_start();
	
?>