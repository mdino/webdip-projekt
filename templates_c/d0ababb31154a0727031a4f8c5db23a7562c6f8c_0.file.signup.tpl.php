<?php /* Smarty version 3.1.25-dev/1, created on 2015-06-07 18:04:05
         compiled from "templates/signup.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:141511055255746b759dc203_68951311%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0ababb31154a0727031a4f8c5db23a7562c6f8c' => 
    array (
      0 => 'templates/signup.tpl',
      1 => 1433693042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141511055255746b759dc203_68951311',
  'variables' => 
  array (
    'greska' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25-dev/1',
  'unifunc' => 'content_55746b75a0d6d0_48685159',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55746b75a0d6d0_48685159')) {
function content_55746b75a0d6d0_48685159 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '141511055255746b759dc203_68951311';
?>
<!-- Main -->
<article id="main">

    <header class="special container">
        <h2>Registracija</h2>
    </header>

    <!-- One -->
    <section class="wrapper style4 special container 75%">

        <div class="row 50%">
            <div  id="greske" class="12u 12u(mobile)">
                <?php if (isset($_smarty_tpl->tpl_vars['greska']->value)) {?>
                    <?php echo $_smarty_tpl->tpl_vars['greska']->value;?>

                <?php }?>
            </div>
        </div>
        <!-- Content -->
        <div class="content">
            <form method="POST" action="" id="registracija">
                <div class="row 50%">
                    <div class="12u 12u(mobile)">
                        <input id="email" type="email" name="Email" placeholder="Email" />
                    </div>
                </div>
                <div class="row 50%">
                    <div class="12u 12u(mobile)">
                        <input type="password" id="lozinka" name="password" placeholder="Lozinka"/>
                    </div>
                </div>
                <div class="row 50%">
                    <div class="12u 12u(mobile)">
                        <input type="password" name="password_repeat" id="lozinka_repeat" placeholder="Ponovi lozinku" />
                    </div>
                </div>
                <div class="row 50%">
                    <div class="12u 12u(mobile)">
                        <input type="text" name="ime" id="ime" placeholder="Ime" />
                    </div>
                </div>
                <div class="row 50%">
                    <div class="12u 12u(mobile)">
                        <input type="text" name="prezime" id="prezime" placeholder="Prezime" />
                    </div>
                </div>
                <div class="row 50%">
                    <div class="12u 12u(mobile)"> 
                        Musko
                        <input type="radio" id="musko" name="sex" value="male" >
                        <label for="zensko">Zensko</label>
                        <input type="radio" id="zensko"  name="sex" value="female">
                        <label for="upitnik">?</label>
                        <input type="radio" id="upitnik"  name="sex" value="upitnik">
                    </div>
                </div>
                <div class="row 50%">
                    <div class="12u 12u(mobile)"> 
                        Newsletter
                        <input type="checkbox" name="newsletter" checked="checked"/>
                    </div>
                </div>
                <div class="row 50%">
                    <div class="12u 12u(mobile)">
                        <?php 
                        $publickey = "6LcsZgYTAAAAAPSjtt_bzXkYpFr74P1q7NkPKtOT";
                        echo recaptcha_get_html($publickey);
                        ?>
                    </div>
                </div> 
                <div class="row">
                    <div class="12u">
                        <ul class="buttons">
                            <li><input type="submit" class="special" value="Registracija" /></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>

    </section>

</article>

<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<!-- <?php echo '<script'; ?>
 src="assets/js/signup.js"><?php echo '</script'; ?>
> -->
<?php echo '<script'; ?>
>
    $('#header').css('background', 'black');
<?php echo '</script'; ?>
>
<style>
    #recaptcha_area { margin: auto}
</style><?php }
}
?>