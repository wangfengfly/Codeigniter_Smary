<?php

/**
 * Author: wangfeng211731
 * Date: 2018/1/23
 * Time: 10:23
 */
class Example extends MY_Controller{

    public function __construct(){
        parent::__construct();

    }

    public function index(){
        $test = array();
        $test[] = array('id'=>1, 'username'=>'test1');
        $test[] = array('id'=>2, 'username'=>'test2');
        $test[] = array('id'=>3, 'username'=>'test3');
        $this->assign('test', $test);
        $this->display('example.tpl');
    }
}