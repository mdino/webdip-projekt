<?php /* Smarty version 3.1.25-dev/1, created on 2015-06-07 18:25:54
         compiled from "templates/message.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:80699221555747092c1a777_77347055%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b5c5ddf04c7de0495587beb5aed5dba5c581313' => 
    array (
      0 => 'templates/message.tpl',
      1 => 1433694352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80699221555747092c1a777_77347055',
  'variables' => 
  array (
    'poruka' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25-dev/1',
  'unifunc' => 'content_55747092c3f955_55128332',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55747092c3f955_55128332')) {
function content_55747092c3f955_55128332 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '80699221555747092c1a777_77347055';
?>
<!-- Main -->
<br/>
<article id="main">

    <!-- Three -->
    <section class="wrapper style3 container special" id='podrucja'>

        <header class="major">
            <?php if (isset($_smarty_tpl->tpl_vars['poruka']->value)) {?>
                <h2><?php echo $_smarty_tpl->tpl_vars['poruka']->value;?>
</h2>
            <?php }?>
        </header>
    </section>

</article>

<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $('#header').css('background', 'black');
<?php echo '</script'; ?>
><?php }
}
?>