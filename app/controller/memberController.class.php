<?php

class MemberController extends Controller{
   
    public function member()
    {
        $this->instanceSa->assign("username",$_GET["username"]);
        $this->instanceSa->display("app/view/member.html");
    }
}