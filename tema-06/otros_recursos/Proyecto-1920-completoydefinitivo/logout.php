<?php 
    #include Funciones
	require_once("lib/controlsession.php");

	sec_session_start();
	sec_session_destroy();

    header("location: index.php");
?>