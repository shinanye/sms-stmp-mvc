<?php
class RegisterModel extends Model{
    // Model主要用于实例化获取数据库的单例类
    public function register($arr)//向logins中插入注册用户信息
    {
        # code...
        $sql = "INSERT INTO logins(uname,pwd,email) VALUES(?,?,?)";
        $data = $this->db_instance->singleInsert($sql,$arr);
        return $data;
    }

    public function searchAllUser()
    {
        # code...
        $sql = "select * from logins";
        $data = $this->db_instance->inquire($sql);
        return $data;
    }
}