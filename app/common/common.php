<?php

function getConntroller(){
    // $c = $_GET["c"]; //类名 
    if(isset($_GET)){
        $a="index";
    }
    $a = $_GET["a"];    //方法名
    $a = ucfirst($a);
    $a= $a."Controller";

    require "app/controller/".$a.".class.php";
    $re = new $a();     //实例化请求类的实例
    $fun = $_GET["a"];
    $re->$fun();      //调用实例化之后的方法
}

function getModel(){
    if(isset($_GET)){
        $a="index";
    }
    $a = $_GET["a"];    //方法名
    $a = ucfirst($a);
    $a= $a."Model";
    require "app/model/".$a.".class.php";
    return new $a();    //实例化相应的model类
}

