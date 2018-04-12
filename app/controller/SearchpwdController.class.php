<?php

class SearchpwdController extends Controller{
   
    public function searchpwd()
    {

        if(empty($_POST)){
            $this->instanceSa->display("app/view/searchpwd.html");
        }else{
           $state = $this->searchEmail();
          if($state["code"]){
            $to = $_POST["email"];
            $fromname = "聚焦客服服务中心";
            $title = "找回密码服务中心";
            $txt = "http://localhost/vailsms/index.php?a=repwd&id=".$state["msg"];

            $content = "<a href=$txt>点击找回密码</a>";
            send_mail($to,$fromname,$title,$content);
          }else{
            Tool::alert($state["msg"],$state["url"]);
          }
        }
    }

    public function searchEmail(Type $var = null)
    {
        $data = $this->model->searchpwd();
        $email = $_POST["email"];

        $ifExist = Tool::deep_in_array($email,$data);
        $userId = Tool::returnFiled($email,$data);
        if($ifExist){
            $returnArr = array(
                "code"=>true,
                "msg"=>$userId,
            );
            
        }else{
            $returnArr = array(
                "code"=>false,
                "msg"=>"该邮箱不存在",
                "url"=>"index?a=repwd"
            );
        }
        return $returnArr;
    }
}