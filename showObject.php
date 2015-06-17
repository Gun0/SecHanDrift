<?php
	session_start();
	include_once 'config.php';
	include "ifLogin.php";
    $smarty->display('showObject.tpl');
	
	$smarty->display('header.tpl');
	 echo "<div id='maincontainer'>";
	   echo "<section id='product'>";
	     echo "<div class='container'>";
	       echo "<div class='row'>";
	         $smarty->display('object.tpl');
	         echo "<aside class='span3'>";
	           $smarty->display('category.tpl');
	           $smarty->display('newlist.tpl');
		     echo "</aside>";
		   echo "</div>";
		 echo "</div>";
	   echo "</section>";
	   $smarty->display('desTab.tpl');
	 echo "</div>";
	
	
	$smarty->display('faster.tpl');
?>