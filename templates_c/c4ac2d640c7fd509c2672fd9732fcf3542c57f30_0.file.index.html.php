<?php
/* Smarty version 3.1.30, created on 2018-04-11 09:50:40
  from "D:\wamp64\www\vailsms\app\view\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acdda7059bde2_86139108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4ac2d640c7fd509c2672fd9732fcf3542c57f30' => 
    array (
      0 => 'D:\\wamp64\\www\\vailsms\\app\\view\\index.html',
      1 => 1523440233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5acdda7059bde2_86139108 (Smarty_Internal_Template $_smarty_tpl) {
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
            <a href="index.php?a=register"> 注册</a>
            <a href="index.php?a=login">登录</a>
        </div>
    </header>
    <main>
        主页
    </main>
    <footer>
        &copy;版权
    </footer>
</body>

</html><?php }
}
