<<<<<<< HEAD
﻿<?php
/*  定义服务器的绝对路径  */
define('BASE_PATH',$_SERVER['DOCUMENT_ROOT']);

/*  定义Smarty目录的绝对路径  */
define('SMARTY_PATH','\UMLproject\Smarty\\');

/*  加载Smarty类库文件    */
require BASE_PATH.SMARTY_PATH.'Smarty.class.php';

/*  实例化一个Smarty对象  */
$smarty = new Smarty;

/*  定义各个目录的路径    */
$smarty->template_dir = BASE_PATH.SMARTY_PATH.'templates/';
$smarty->compile_dir = BASE_PATH.SMARTY_PATH.'templates_c/';
$smarty->config_dir = BASE_PATH.SMARTY_PATH.'configs/';
$smarty->cache_dir = BASE_PATH.SMARTY_PATH.'cache/';
=======
﻿<?php
/*  定义服务器的绝对路径  */
define('BASE_PATH',$_SERVER['DOCUMENT_ROOT']);

/*  定义Smarty目录的绝对路径  */
define('SMARTY_PATH','\UMLproject\Smarty\\');

/*  加载Smarty类库文件    */
require BASE_PATH.SMARTY_PATH.'Smarty.class.php';

/*  实例化一个Smarty对象  */
$smarty = new Smarty;

/*  定义各个目录的路径    */
$smarty->template_dir = BASE_PATH.SMARTY_PATH.'templates/';
$smarty->compile_dir = BASE_PATH.SMARTY_PATH.'templates_c/';
$smarty->config_dir = BASE_PATH.SMARTY_PATH.'configs/';
$smarty->cache_dir = BASE_PATH.SMARTY_PATH.'cache/';
>>>>>>> bbe3a4673a9a3bc6b54c9d9df7b109ec495b6d2a
?>