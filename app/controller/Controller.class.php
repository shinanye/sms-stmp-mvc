<?php
    class Controller{
        protected $instanceSa;
        protected $model;
        public function __construct()
        {
            # code...
            $this->instanceSa = MySmarty::getInstanceSa();//smarty单例
            $this->model = getModel();  //获得每一个model层的实例类
        }
    }