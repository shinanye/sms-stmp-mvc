<?php
    
    class DBO{
       private $host;   //服务器
       private $username;     //用户名
       private $password;    //密码
       private $dbname; 
       private $conn=null;
       private static $instance;//单例

       public function __construct(){
            global $dbo;
            $this->host = $dbo["host"];
            $this->username = $dbo["username"];
            $this->password = $dbo["password"];
            $this->dbname = $dbo["dbname"];
            $this->getConnection();
       }

       public static function getInstance(){
           if(!self::$instance){
                self::$instance = new DBO();
           }
           return self::$instance;
       }

       public function getConnection(){
            $params = array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'' ,   //设置字符集 保证中文不乱码
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,           //设置当前pdo的错误处理方式
            );
            try{
                // echo "连接成功mmmmm<br>";
                $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password, $params);
               
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
     
        public function inquire($sql,$arr=array(),$type="fetchAll"){//不分页查询模块
            $prep = $this->conn->prepare($sql);
            $prep->execute($arr);
            if($type=="count"){
                $result = $prep->rowCount();//返回行数
            }else{
                $result = $prep->$type(PDO::FETCH_ASSOC);
            }
            return $result;
        }
        
        public function modify($sql,$arr)
        {
            # code...
            $prep = $this->conn->prepare($sql);
            $prep->execute($arr);
            return true;
        }


        public function singleInsert($sql,$arr)//分页查询模块
        {
            # code...
            $prep = $this->conn->prepare($sql);
            $prep->execute($arr);
            return true;
        }
    }