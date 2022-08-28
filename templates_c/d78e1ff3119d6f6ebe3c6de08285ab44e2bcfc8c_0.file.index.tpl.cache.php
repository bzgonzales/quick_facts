<?php
/* Smarty version 3.1.38, created on 2022-08-28 13:07:07
  from 'C:\xampp\htdocs\quick_facts\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_630b4c5b4f5677_77637095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd78e1ff3119d6f6ebe3c6de08285ab44e2bcfc8c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\quick_facts\\templates\\index.tpl',
      1 => 1661684827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_630b4c5b4f5677_77637095 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '716116369630b4c5b462a15_77456454';
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>

    <section class="hero">
        <img src="//www.villaaiko.com/resources/aiko/headers/xVilla,P20Aiko,P20-,P20Upstairs,P20open-living.jpg.pagespeed.ic.TtlOYcKXw7.webp" data-src="//www.villaaiko.com/resources/aiko/headers/xVilla,P20Aiko,P20-,P20Upstairs,P20open-living.jpg.pagespeed.ic.TtlOYcKXw7.webp" data-sizes="(min-width: 1281px) 1920px, auto" data-srcset="//www.villaaiko.com/resources/aiko/headers/mobile/Villa%20Aiko%20-%20Upstairs%20open-living.jpg 767w, //www.villaaiko.com/resources/aiko/headers/small/Villa%20Aiko%20-%20Upstairs%20open-living.jpg 1400w, //www.villaaiko.com/resources/aiko/headers/Villa%20Aiko%20-%20Upstairs%20open-living.jpg 1920w" alt="Villa Aiko - Upstairs open-living" class="new-parallax" data-pagespeed-url-hash="2446007092" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" sizes="(min-width: 1281px) 1920px, auto" srcset="//www.villaaiko.com/resources/aiko/headers/mobile/Villa%20Aiko%20-%20Upstairs%20open-living.jpg 767w, //www.villaaiko.com/resources/aiko/headers/small/Villa%20Aiko%20-%20Upstairs%20open-living.jpg 1400w, //www.villaaiko.com/resources/aiko/headers/Villa%20Aiko%20-%20Upstairs%20open-living.jpg 1920w">
    </section>

    <section class="quickfacts">
        <div class="container">
            <h1 class="entry-title"><span>Quick</span> Facts</h1>             
            <div class="main-content">
                <?php if ((isset($_smarty_tpl->tpl_vars['quickfacts']->value))) {?>                
                    <?php
$__section_fact1_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['quickfacts']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_fact1_0_total = $__section_fact1_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_fact1'] = new Smarty_Variable(array());
if ($__section_fact1_0_total !== 0) {
for ($__section_fact1_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_fact1']->value['index'] = 0; $__section_fact1_0_iteration <= $__section_fact1_0_total; $__section_fact1_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_fact1']->value['index']++){
?>
                        <div class="item icon<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_fact1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_fact1']->value['index'] : null);?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['quickfacts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_fact1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_fact1']->value['index'] : null)]['icon'];?>
">
                            <div class="desc">
                                <h3><?php echo $_smarty_tpl->tpl_vars['quickfacts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_fact1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_fact1']->value['index'] : null)]['title'];?>
</h3>
                                <p><?php echo $_smarty_tpl->tpl_vars['quickfacts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_fact1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_fact1']->value['index'] : null)]['description'];?>
</p>
                            </div>
                        </div>
                    <?php
}
}
?>
                <?php }?>
            </div>       
        </div>
    </section>

</div> 

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
