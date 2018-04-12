<?php
    function smarty_block_ignorecache($param,$content,$smarty)
    {
        return $content;
    }
    $_smarty->registerPlugin("function","ignorecache", "smarty_block_ignorecache");