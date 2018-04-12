<?php

class RepwdController extends Controller{
   
    public function repwd()
    {
            $this->instanceSa->display("app/view/repwd.html");
            if(!empty($_POST)){
                $returnMSG = $this->alterPWD();
                if($returnMSG["code"]){
                    echo $returnMSG["msg"];
                }
            }
    }

    public function alterPWD(){
        $pwd = md5(sha1($_POST["pwd"]));
        $id = $_GET["id"];
        $arr = array($pwd,$id);
        $data = $this->model->repwd($arr);
        if($data){
            $returnArr = array(
                "code"=>true,
                "msg"=>"重置密码成功",
                "url"=>"index?a=remember"
            );    
        }

        return $returnArr;
    }
}