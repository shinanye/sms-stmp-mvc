<?php
/* Smarty version 3.1.30, created on 2018-04-12 04:32:12
  from "D:\wamp64\www\vailsms\app\view\register.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acee14cc76475_79870190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c76205e83b473765a81a9ffd89aa8ec66cf33d1f' => 
    array (
      0 => 'D:\\wamp64\\www\\vailsms\\app\\view\\register.html',
      1 => 1523507198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5acee14cc76475_79870190 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>111178</title>
    <link rel="stylesheet" href="app/static/css/register.css">
    <?php echo '<script'; ?>
 src="libs/node_modules/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="libs/validate/jquery.validate-1.13.1.js"><?php echo '</script'; ?>
>
    <style>
        #error{
            margin-left: -200px;
            color: red;
        }
    </style>
</head>
<body>
<div id="box">
    <div class="header">
        <img src="app/static/images/logo1.png" alt="">
    </div>
    <div class="login">
        <form method="post">
            <div class="userdiv">
                <label for="user"><span class="mi">用户名</span></label>
                <input type="text" name="user" placeholder="用户账号" id="user" class="user">
                <br>
                <span id="error"></span>
            </div>
            <div class="pwddiv">
                <label for="pwd"><span class="mi">密</span>码:</label>
                <input type="password" name="pwd" placeholder="用户密码" id="pwd" class="pwd">
                <br>
                <span id="error"></span>
            </div>
            <div>
                <label for="email"><span class="mi">邮</span>箱:</label>
                <input type="email" name="email" placeholder="邮箱账号" id="email" class="email">
                <br>
                <span id="error"></span>
            </div>
            <input type="submit" value="注册" class="le zhuce">
        </form>
    </div>
    <div class="footer">
        Copyright  联万家 All Rights Reserved.
    </div>
</div>
<?php echo '<script'; ?>
> 
        $(window).ready(function(){
            var win_w=$(window).width();
            var win_h=$(window).height();
            $("#box").css("width",win_w);
            $("#box").css("height",win_h);
        })
        $("form").validate({
            rules:{
                user:{
                    required:true,
                    minlength:2,
                    maxlength:10
                },
                pwd:{
                    required:true,
                    minlength:3,
                    maxlength:6
                },
                email:{
                    required:true
                }
            },
            messages:{
                user:{
                    required:"*用户名不能为空",
                    minlength:"*最小长度为2",
                    maxlength:"*最小长度为10"
                },
                pwd:{
                    required:"*密码不能为空",
                    minlength:"*最小长度为3",
                    maxlength:"*最大长度为6"
                },
                email:{
                    required:"*邮箱不能为空"
                }
            },
            errorPlacement: function(error, element) {
                var errorNewPlace=element.siblings("#error");   //查找和当前标签平级的id为error的标签
                error.appendTo(errorNewPlace);
            },
            submitHandler:function(form){
                form.submit();
            }
        })
    <?php echo '</script'; ?>
>
</body>
<?php }
}
