<?php /*%%SmartyHeaderCode:19421851695678388d9215e0-87814659%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21950b55711b3cbfa30a375b836830f837868649' => 
    array (
      0 => '/var/www/core/template/header.tpl',
      1 => 1450725195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19421851695678388d9215e0-87814659',
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_56792625b2a111_47547886',
  'has_nocache_code' => true,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56792625b2a111_47547886')) {function content_56792625b2a111_47547886($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
		
		<!-- metadados -->
		<meta charset="UTF-8">
		<meta http-equiv='X-UA-Compatible' content='IE-edge'>
		<meta name='viewport' content='width=device-width, initial-scale='1'>
		<meta name='keywords' content='HTML, PHP, CSS'>
		
		<!-- css -->
		<link rel="stylesheet" href="assets/html.css">
		<link rel="stylesheet" href="assets/header.css">
		<link rel="stylesheet" href="assets/container.css">
		<link rel="stylesheet" href="assets/institutional.css">
		<link rel="stylesheet" href="assets/catalog.css">
		<link rel="stylesheet" href="assets/footer.css">
		
		<!-- jquery -->
		<script type="text/javascript" src="jquery/jquery-2.1.4.js"></script>
	</head>
	<body id="section">
		<header id="header">
			<div class="header_div">
				<h1 class="header_h1"><a class="header_a" href="#"><?php echo $_smarty_tpl->tpl_vars['program']->value;?>
<span class="header_span"><?php echo $_smarty_tpl->tpl_vars['version']->value;?>
</span></a></h1>
				<ul class="header_ul">
					<li class="header_li"><a class="header_a" href="#"><?php echo $_smarty_tpl->tpl_vars['h_l1']->value;?>
</a></li>
					<li class="header_li"><a class="header_a" href="#"><?php echo $_smarty_tpl->tpl_vars['h_l2']->value;?>
</a></li>
				</ul>
			</div>
		</header>
		<div id="container"><?php }} ?>