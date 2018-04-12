<?php
    class Model{
        protected $db_instance;
        public function __construct()
        {
        $this->db_instance = DBO::getInstance();
        }
    }