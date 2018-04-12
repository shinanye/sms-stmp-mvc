<?php

class RegisterController extends Controller{
   
    public function register()
    {
        if(empty($_POST)){
            $this->instanceSa->display("app/view/register.html");
        }else{
           $state = $this->adduser();
           if($state["code"]){
                Tool::alert($state["msg"],$state["url"]);
           }else{
                Tool::alert($state["msg"],$state["url"]);
           }
        }
    }

    public function adduser(){//验证数据库是否存在此人
        $user = $_POST['user'];
        $pwd = md5(sha1($_POST['pwd']));//加密sha1  MD5
        $email = $_POST['email'];

        $arr = array($user,$pwd,$email);
        $allUserMsg = $this->model->searchAllUser($arr);

        $ifExist = Tool::deep_in_array($user,$allUserMsg);
        if(!$ifExist){
            $ifExist = Tool::deep_in_array($pwd,$allUserMsg);
            if(!$ifExist){
                $ifExist = Tool::deep_in_array($email,$allUserMsg);
                if(!$ifExist){
                    $data = $this->model->register($arr);
                    if($data){
                        $returnArr = array(
                            "code"=>true,
                            "msg"=>"注册成功",
                            "url"=>"index?a=member&username=".$user
                        );    
                    }
                }else{
                    $returnArr = array(
                        "code"=>false,
                        "msg"=>"该邮箱已被注册",
                        "url"=>"index?a=register"
                    );
                }
            }else{
                $returnArr = array(
                    "code"=>false,
                    "msg"=>"该密码已被使用",
                    "url"=>"index?a=register"
                );
            }
        }else{
            $returnArr = array(
                "code"=>false,
                "msg"=>"该用户存在",
                "url"=>"index?a=register"
            );
        }

        return $returnArr;
     }
}