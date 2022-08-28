<?php
/* Smarty version 3.1.38, created on 2022-08-28 17:42:34
  from 'C:\xampp\htdocs\quick_facts\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_630b8ceacba3e8_17836842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cea201d760aa86c2b7a284836213b5845abe9345' => 
    array (
      0 => 'C:\\xampp\\htdocs\\quick_facts\\templates\\header.tpl',
      1 => 1661701354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_630b8ceacba3e8_17836842 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '452334205630b8ceac6f523_16319828';
?>
<!DOCTYPE html> <!--[if IE]><![endif]--> <!--[if IE 8 ]>
<html dir="ltr" lang="en" class="ie8"><![endif]--> 
<!--[if IE 9 ]><html dir="ltr" lang="en" class="ie9"><![endif]--> 
<!--[if (gt IE 9)|!(IE)]><!--> 
<html dir="ltr" lang="en"> <!--<![endif]--> 
<head> 

	<meta charset="UTF-8" /> 
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 

    <TITLE><?php echo $_smarty_tpl->tpl_vars['Title']->value;?>
 | <?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</TITLE>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/custom.min.css">

</head>
<BODY>

<header id="header" class="">
    <div class="container main-menu">
        <div class="sticky-wrapper">
            <div class="nav-flex row">
                <div class="logo">
                    <a href="#">
                        <img src="//www.villaaiko.com/resources/aiko/images/xlogo-villa-aiko.png.pagespeed.ic.957pMCvYj-.webp" alt="" />
                    </a>
                </div>
                <nav class="nav">
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navigation']->value, 'nav');
$_smarty_tpl->tpl_vars['nav']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->do_else = false;
?>
                            <li class="">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
                                <?php if ((isset($_smarty_tpl->tpl_vars['nav']->value['subnav']))) {?>
                                    <ul class="subnav">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nav']->value['subnav'], 'i', false, 'k');
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
?>
                                            <li>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['slink'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['sname'];?>
</a>
                                            </li>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                <?php }?>

                            </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="content">
<?php }
}
