<<<<<<< HEAD
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
=======
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
>>>>>>> bbe3a4673a9a3bc6b54c9d9df7b109ec495b6d2a
?>