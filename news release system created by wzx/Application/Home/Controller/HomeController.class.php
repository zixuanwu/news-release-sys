<?php
namespace Home\Controller;
use Think\Controller;
class HomeController extends Controller{
    public function shownews(){
        $homeModel=D('Home');
        $this->display();
    }
}
