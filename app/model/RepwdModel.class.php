<?php
class RepwdModel extends Model{
    // Model主要用于实例化获取数据库的单例类
    public function repwd($arr)
    {
      $sql = "UPDATE logins SET pwd=? WHERE Id=?";
      $data = $this->db_instance->modify($sql,$arr);
      return $data;
    }
}