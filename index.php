<?php

require "libs/smarty/Smarty.class.php";
define('ROOT_PATH',dirname(__FILE__));
require "config/dbo.php";
require "app/common/mail.php";
require "app/common/Tool.php";
require "app/common/Dbo.class.php";
require "app/common/mySmarty.php";
require "app/controller/Controller.class.php";
require "app/model/Model.class.php";
require "app/common/common.php";


// $instanceSm = MySmarty::getInstanceSa();
// $instanceSm->display("app/view/index.html");

$instanceSm = MySmarty::getInstanceSa();
if(!$_GET){
    $instanceSm->display("app/view/index.html");
}else{
    getConntroller();
}

