<?php
    class MySmarty extends Smarty{

        private static $instanceSa;
        public function __construct()
        {
            # code...
            parent::__construct();

            $this->template_dir = ROOT_PATH."/app/view/"; //模板目录

            $this->compile_dir = ROOT_PATH.'/templates_c/'; //编译目录
          
            $this->cache_dir = ROOT_PATH.'/cache/'; //缓存目录
            
            $this->config_dir=ROOT_PATH.'/configs/'; //配置文件目录
            
            $this->left_delimiter = '{'; //左定界符
            $this->right_delimiter = '}'; //右定界符
            // $this->caching = true; //是否开启缓  默认为不开启
            // $this->cache_lifetime = 24*60*60;   //缓存时间  1day
        }

        public static function getInstanceSa()
        {
            # code...
            if(!self::$instanceSa){
                self::$instanceSa = new MySmarty();
            }

            return self::$instanceSa;
        }

    }