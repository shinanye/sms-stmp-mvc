<?php
/* Smarty version 3.1.30, created on 2018-04-12 04:03:39
  from "D:\wamp64\www\vailsms\app\view\repwd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aceda9b359826_38638571',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a903b4f0fd9043e3f121a419d20aa104477e89ae' => 
    array (
      0 => 'D:\\wamp64\\www\\vailsms\\app\\view\\repwd.html',
      1 => 1523505799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aceda9b359826_38638571 (Smarty_Internal_Template $_smarty_tpl) {
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
    .repwd input{
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
    <form method="post">
        <div class="txt">
            <label><strong>Reset your password</strong></label>
        </div>
        <div class="repwd">
            <div>
                <label for="pwd">密码</label>
                <input type="password" name="pwd" id="pwd">
                <br>
                <span id="error"></span>
            </div>
            <div>
                <label for="repwd">确认密码</label>
                <input type="password" name="repwd" id="repwd">
                <span id="error"></span>
                <br>
            </div>
            <input type="submit" name="submit" id="submit" value=" password reset ">
        </div>
    </form>
</body>
<?php echo '<script'; ?>
 src="http://localhost/vailsms/libs/node_modules/jquery/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://localhost/vailsms/libs/validate/jquery.validate-1.13.1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
   $("form").validate({
    rules:{
        pwd:{
            required:true,
            minlength:5,
            maxlength:10
            
        },
        repwd:{
            required:true,
            minlength:5,
            maxlength:10,
            equalTo: "#pwd"
        }
    },
    messages:{
        pwd:{
            required:"*密码不能为空",
            minlength:"*最小长度为5",
            maxlength:"*最大长度为10"
        },
        repwd:{
            required:"*密码不能为空",
            minlength:"*最小长度为5",
            maxlength:"*最大长度为10",
            equalTo: "两次输入密码不一致"
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
