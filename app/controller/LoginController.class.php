<?php

class LoginController extends Controller{
   
    public function login()
    {
        if(empty($_POST)){
            $this->instanceSa->display("app/view/login.html");
        }else{
           $state = $this->getdata();
           if($state["code"]){
            Tool::alert($state["msg"],$state["url"]);
           }else{
               Tool::alert($state["msg"],$state["url"]);
           }
        }
    }

    public function getdata(){//验证数据库是否存在此人
        $data = $this->model->login();

        $user = $_POST['user'];
        $pwd = $_POST['pwd'];

        $ifExist = Tool::deep_in_array($user,$data);

        if($ifExist){
            $ifExist = Tool::deep_in_array($pwd,$data);
            if($ifExist){
                echo "success";
                return true;
            }else{
                $returnArr = array(
                    "code"=>false,
                    "msg"=>"密码不正确",
                    "url"=>"index?a=login"
                );
                return $returnArr;
            }
        }else{
            $returnArr = array(
                "code"=>false,
                "msg"=>"该用户不存在",
                "url"=>"index?a=login"
            );
            return $returnArr;
        }

     }

}