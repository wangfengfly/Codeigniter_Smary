<?php

/**
 * Author: wangfeng
 * Date: 2018/1/23
 * Time: 10:17
 */
class MY_Controller extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }

    public function assign($key, $val){
        $this->ci_smarty->assign($key, $val);
    }

    public function display($html){
        $this->ci_smarty->display($html);
    }

}