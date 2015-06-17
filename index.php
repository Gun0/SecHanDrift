<?php
	session_start();
	include_once 'config.php';
	
	$_SESSION['member'] = "";
	if(empty($_SESSION['member'])){
		$smarty->display('header2.tpl');
		$smarty->display('login.tpl');
		$smarty->display('faster.tpl');
	}else{
		$smarty->assign('member',$_SESSION['member']);
	  echo "<script language='javascript'> 
		      location.replace('home.php') 
			  </script>"; 
	}
?>