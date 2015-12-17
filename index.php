<?php
// path location Smarty.class.php
require('/usr/share/php/smarty3/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('/var/www/romanoff/template/');
$smarty->setCompileDir('/var/www/romanoff/template_c/');
$smarty->setCacheDir('/var/www/romanoff/cache/');
$smarty->setConfigDir('/var/www/romanoff/config/');

//$smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

//for example: $this->assign("value1","value2", true{nocache});
$smarty->assign("title","Romanoff", true);

$smarty->assign("company","Produções de Software LTDA", true);
$smarty->assign('logo','E&L', true);
$smarty->assign("link1","Login", true);
$smarty->assign("link2","Sign Up", true);
$smarty->assign("link3","institucional", true);

//call templates
$smarty->display('header.tpl');
//$smarty->display('institutional.tpl');
$smarty->display('footer.tpl');
?>