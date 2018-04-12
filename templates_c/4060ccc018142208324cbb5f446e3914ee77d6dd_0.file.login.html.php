<?php
/* Smarty version 3.1.30, created on 2018-04-11 14:39:25
  from "D:\wamp64\www\vailsms\app\view\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ace1e1d9742c4_91018734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4060ccc018142208324cbb5f446e3914ee77d6dd' => 
    array (
      0 => 'D:\\wamp64\\www\\vailsms\\app\\view\\login.html',
      1 => 1523457556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ace1e1d9742c4_91018734 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录页面</title>
    <?php echo '<script'; ?>
 src="libs/node_modules/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="libs/validate/jquery.validate-1.13.1.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="libs/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="libs/node_modules/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <style>
		.wrap{
			width: 100%;
			height:600px;
			border: 1px solid #000;
			background: url("app/static/images/bj.jpg") no-repeat;
			background-position: bottom;
			background-size:contain;
		}
		.styleLogin{
			background-color: azure;
			border-radius: 20px;
			position: relative;
			top:150px;
			border: 1px solid crimson;
		}
    </style>
</head>
<body>

<div class="wrap">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-xs-3"></div>
			
				<div class="col-lg-4 col-xs-6 styleLogin">
					<h2 class="text-center text-info">LOGIN</h2>
					<p class="text-center text-muted">会员登录中心</p>
					<div class="loginContainer">
						<form class="form-horizontal" method="post">
						  <div class="form-group">
						    <label for="user" class="col-sm-2 control-label">用户名</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="user" id="user" placeholder="用户名">
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="pwd" class="col-sm-2 control-label">密码</label>
						    <div class="col-sm-10">
						      <input type="password" class="form-control" name="pwd" id="pwd" placeholder="密码">
						    </div>
                          </div>
                          <div class="form-group">
                            <label for="validate" class="col-sm-2 control-label">验证码</label>
                            <div class="col-sm-4">
                            <input type="text" class="form-control" name="validate" id="validate">
                            </div>
                            <div class="col-sm-6">
                                <img src="app/static/validate/identifyingCode/validate.php" alt="验证码" id="img">
                                <span id="changeVaildate">看不清，换一张</span><br>
                            </div>
                          </div>

						  <div class="form-group">
						    <div class="col-sm-offset-2 col-sm-10">
						      <div class="checkbox">
						        <label>
						          <input type="checkbox" id="remember" name="checked"> 记住账号
                                </label>
                                <label>
                                    <input type="button" name="repwd" id="repwd" value="重新设置密码">
                                </label>
						      </div>
						    </div>
						  </div>
						  <div class="form-group">
						    <div class="col-sm-offset-2 col-sm-10">
                                <input name="submit" id="submit" type="submit" value="提交"/>
                                <input name="reset" id="reset" type="button" value="重置"/>
						    </div>
						  </div>
						</form>
					</div>
				</div>
				<div class="col-lg-4 col-xs-3"></div>
			</div>
		</div>
	</div>
</body>

<?php echo '<script'; ?>
>
    var validateText = $("#validate");
    $("#changeVaildate").on("click",()=>{
        $("#img").attr("src","app/static/validate/identifyingCode/validate.php?"+Math.random());
    });
    $("#reset").on("click",()=>{
        $("#username").val("");
        $("#pwd").val("");
    });
    $("#repwd").on("click",()=>{
        location.href = "index.php?a=searchpwd";
    });
    
    $("form").validate({
        rules:{
            user:{
                required:true,
                minlength:2,
                maxlength:8
            },
            pwd:{
                required:true,
                minlength:3,
                maxlength:6
            },
            validate:{
                required:true,
                minlength:4,
                maxlength:4
            }
        },
        messages:{
            user:{
                required:'用户名必须填写',
                minlength:'至少填写2位',
                maxlength:'最多填写8位'
            },
            pwd:{
                required:'密码必须填写',
                minlength:'至少填写3位',
                maxlength:'最多填写6位'
            },
            validate:{
                required:'验证码必须填写',
                minlength:'必须填写4位',
                maxlength:'必须填写4位'
            }
        }
    })
<?php echo '</script'; ?>
>
</html><?php }
}
