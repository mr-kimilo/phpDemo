<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->show('Hello everyone, This is my first php project.','utf-8');
    }
}