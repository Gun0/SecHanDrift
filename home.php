<?php
	session_start();
	include_once 'config.php';
	$smarty->display('header.tpl');
	echo "<div id='maincontainer'>";
	$smarty->display('slide.tpl');
	
	echo "<div class='container'>";
	   echo "<div class='row'>";
	      echo "<aside class='span3 mt40'>";
       //$smarty->display('home.tpl');
	
	       $smarty->display('category.tpl');
		   $smarty->display('floatsed.tpl');
		   $smarty->display('floatdrift.tpl');
	       $smarty->display('newlist.tpl');
		   
		   echo "</aside>";
		   echo  "<div class='span9'>";
	       $smarty->display('table.tpl');
	
	echo "</div></div></div>";
	
	$smarty->display('faster.tpl');
	
?>