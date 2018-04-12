<?php
/* Smarty version 3.1.30, created on 2018-04-12 02:18:00
  from "D:\wamp64\www\vailsms\app\view\searchpwd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acec1d8e4f193_63476011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24949a410e8a1b7fd18f91f41b06b0b3ccde78dd' => 
    array (
      0 => 'D:\\wamp64\\www\\vailsms\\app\\view\\searchpwd.html',
      1 => 1523499478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5acec1d8e4f193_63476011 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            background-color: rgba(22, 21, 21, 0.151);
        }
    .repwd{
        width: 300px;
        margin:20px auto;
        background-color: #393939;
        color: white;
        padding: 20px;
        border:1px solid blue;
        border-radius: 10px; 
    }
    .txt{
        width: 300px;
        margin:100px auto 20px auto;
        text-align: center;
        
    }
    .repwd>input{
        margin:2% 10%;
        width: 80%;
        outline: none;
        height: 25px;
        border-radius: 10px;
        padding-left: 2%;
    }
    #error{
            margin-left: 20px;
            color: #aaa;
        }
    </style>
</head>
<body>
    <form  method="post">
        <div class="txt">
            <label><strong>Reset your password</strong></label>
        </div>
        <div class="repwd">
            <label for="email">Enter your email address and we will send you a link to reset your password.</label>
            <input type="email" name="email" id="email">
            <br>
            <span id="error"></span>
            <br>
            <input type="submit" name="submit" id="submit" value=" send password reset email ">
        </div>
    </form>
</body>
<?php echo '<script'; ?>
 src="libs/node_modules/jquery/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="libs/validate/jquery.validate-1.13.1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
   $("form").validate({
    rules:{
        email:{
            required:true
        }
    },
    messages:{
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
</html><?php }
}
