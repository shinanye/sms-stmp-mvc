<?php
/* Smarty version 3.1.30, created on 2018-04-12 05:23:33
  from "D:\wamp64\www\vailsms\app\view\member.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aceed55c320f2_19028772',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0276e0399eb8cc8e06c1499f56d0429d0631cdc8' => 
    array (
      0 => 'D:\\wamp64\\www\\vailsms\\app\\view\\member.html',
      1 => 1523510611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aceed55c320f2_19028772 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo '<script'; ?>
 src="libs/node_modules/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <title>Document</title>
    <link rel="stylesheet" href="app/static/css/index.css">
    <style>
        a{
            margin: auto 10px;
        }
    </style>
</head>
<body>
    <header>
        <div class="left">left</div>
        hello
        <div class="right">
           
        </div>
    </header>
    <main>
        主页
        <br>
        <strong><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
<span>会员中心</span></strong>
    </main>
    <footer>
        &copy;版权
    </footer>
</body>

</html><?php }
}
