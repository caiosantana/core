<?php
// path location Smarty.class.php
require('/usr/share/php/smarty3/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('/var/www/core/template/');
$smarty->setCompileDir('/var/www/core/template_c/');
$smarty->setCacheDir('/var/www/core/cache/');
$smarty->setConfigDir('/var/www/core/config/');

//$smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

//for example: $this->assign("value1","value2", true{nocache});
$smarty->assign("title","Core", true);

$smarty->assign('program','Framework', true);
$smarty->assign('version','v1.0', true);
$smarty->assign("h_l1","Login", true);
$smarty->assign("h_l2","Sign Up", true);
$smarty->assign("more","Av. Koehler, nยบ 238 - Centro - Domingos Martins-ES, CEP: 29260-000, Telefax: (27) 3268-3123 CNPJ - 39.781.752/0001-72", true);
$smarty->assign("h_l3","about", true);
$smarty->assign("h_l4","settings", true);
$smarty->assign("h_l5","intitutional", true);

//call templates
$smarty->display('header.tpl');
//$smarty->display('institutional.tpl');
//$smarty->display('catalog.tpl');
$smarty->display('footer.tpl');
?>