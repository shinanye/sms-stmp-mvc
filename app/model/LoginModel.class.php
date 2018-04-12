<?php
class LoginModel extends Model{
    // Model主要用于实例化获取数据库的单例类
    public function login()
    {
        # code...
        $sql = "SELECT * FROM logins";
        $data = $this->db_instance->inquire($sql);
        return $data;
    }
}