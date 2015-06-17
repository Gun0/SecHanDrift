<?php
	session_start();
	include_once 'config.php';
	include "ifLogin.php";
    $smarty->display('searchResult.tpl');
?>