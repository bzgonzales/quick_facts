<?php
/* Smarty version 3.1.38, created on 2022-08-28 17:36:28
  from 'C:\xampp\htdocs\quick_facts\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_630b8b7cb67509_57632284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b33cd5e2113930b2d5e9a73bc01f5aaa6a37afa1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\quick_facts\\templates\\footer.tpl',
      1 => 1661700988,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_630b8b7cb67509_57632284 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1107170620630b8b7cb1efb9_65121767';
?>
    <div class="footer-content">
        <section>
            <div class="container">
                <div class="buttons">

                    <div class="main-buttons">
                        <a href="#" target="_blank">Book now</a>
                        <a href="#">Availability</a>
                    </div>
                
                    <div class="navi-buttons">
                            <a href="#" class="prev">
                                <i class="fas fa-chevron-left"></i>Explore the Villa 
                            </a>
                            <a href="#" class="next" target="_blank">
                                About Elite Havens<i class="fas fa-chevron-right"></i>
                            </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer id="main-footer">

        <section>
            <div class="container">
                <div class="column">
                    <h3>Contact us</h3>

                    <ul class="contact-numbers">
                        <?php
$__section_sec1_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['contactsdata']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sec1_0_total = $__section_sec1_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = new Smarty_Variable(array());
if ($__section_sec1_0_total !== 0) {
for ($__section_sec1_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] = 0; $__section_sec1_0_iteration <= $__section_sec1_0_total; $__section_sec1_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']++){
?>
                            <li>
                                <a href="tel:<?php echo $_smarty_tpl->tpl_vars['contactsdata']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['number'];?>
">
                                    <span><?php echo $_smarty_tpl->tpl_vars['contactsdata']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['country'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['contactsdata']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['number'];?>

                                </a>
                            </li>
                        <?php
}
}
?>
                    </ul>
                    <p class="enquiries">
                        For press and media enquiries please contact us <a href="#">here</a>
                    </p>
                </div>
                <div class="column">
                    <h3>Follow us</h3>
                    <div class="social-media">
                        <a href="https://www.facebook.com/elitehavens?ref_type=bookmark" class="socmed fb" target="_blank" title="Facebook">
                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.pinterest.com/elitehavensall/" class="socmed pt" target="_blank" title="Pinterest">
                            <i class="fab fa-pinterest" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.instagram.com/elitehavens" class="socmed in" target="_blank" title="Instagram">
                            <i class="fab fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.twitter.com/elitehavens" class="socmed tw" target="_blank" title="Twitter">
                            <i class="fab fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/elite-havens" class="socmed li" target="_blank" title="LinkedIn">
                            <i class="fab fa-linkedin" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.youtube.com/channel/UC2fLFvrddDBUVvjhrRUrEUg" class="socmed yt" target="_blank" title="Youtube">
                            <i class="fab fa-youtube" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.tiktok.com/@elitehavens" class="socmed tiktok" target="_blank" title="TikTok"><i class="fab fa-tiktok" aria-hidden="true"></i></a>
                    </div>
                    <address>
                        Villa Aiko<br>
                        Jalan Lalang Temu, <span>Banjar Mekar Sari</span>, <span>Jimbaran</span>, <span>Kuta Selatan</span>, <span>Kabupaten Badung</span>, <span>Bali</span>, <span>Indonesia 80361 </span>
                    </address>
                    <ul class="footer-nav">
                        <li><a href="#">Links</a></li>
                        <li><a href="#">Sitemap</a></li>
                        <br>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms and Conditions</a></li>
                    </ul>
                    <p class="copyright">
                        Copyright © 2022 Villa Aiko
                    </p>
                </div>
                <div class="column">
                    <a href="#" target="_blank">
                        <img data-src="https://www.villaaiko.com/resources/common/images/xeh-logo.png.pagespeed.ic.pJrgE4ruC4.webp" class="footer-logo lazyloaded" src="https://www.villaaiko.com/resources/common/images/xeh-logo.png.pagespeed.ic.pJrgE4ruC4.webp">
                    </a>
                    <p class="marketed">
                        Exclusively Managed and Marketed by <a href="#" target="_blank">the Elite Havens Group</a>
                    </p>
                    <div id="chse_badge">
                        <img src="https://www.villaaiko.com/resources/common/images/xchse-badge.png.pagespeed.ic.DaZ8FNldhs.webp" data-pagespeed-url-hash="859613008" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    </div>
                </div>
            </div>
        </section>
    </footer>
</BODY>

<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/js/all.min.js" integrity="sha512-8pHNiqTlsrRjVD4A/3va++W1sMbUHwWxxRPWNyVlql3T+Hgfd81Qc6FC5WMXDC+tSauxxzp1tgiAvSKFu1qIlA==" crossorigin="anonymous" referrerpolicy="no-referrer"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/jquery-2.2.4.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/superfish.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/main.js"><?php echo '</script'; ?>
>
<div id="ToTop" style="display: inline;"><span>BACK TO TOP</span></div>
</HTML>
<?php }
}
