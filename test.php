<?php
	include_once 'config.php';

  $i = 0;
for($i =0; $i < 5; $i++)
{
	$smarty->assign('test1',$i);
	$smarty->display('test.tpl');
}
?>