<?php
	include_once 'inc/char.php';
	include_once "adodb5/adodb.inc.php";
	$conn = ADONewConnection('mysql');
	$conn->PConnect('localhost','root','123455515','sechandrift') or die('connection error');
	$conn->Execute('set names utf8');
	$ADODB_FETCH_MODE = ADODB_FETCH_BOTH;
?>