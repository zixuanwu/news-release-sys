<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller{
    /*该类包含了用户的注册和登录验证*/
    public function reg(){
        /*用户注册*/
        if(IS_POST){
            $userModel = D('User');
            if(!$userModel->create()){
                echo $userModel->getError();
                exit;
            }else{
             $username = I('post.username');
             $pwd = I('post.password');
             $repwd = I('post.repwd');
             $email = I('post.email');
             $code = I('post.yzm');
            }
            $this->check_verify($code);
            if($repwd == $pwd){
                $s = $this->yan();
                $userModel->password = md5($userModel->password.$s);
                $userModel->salt = $s;
                $userModel->username = $username;
                $userModel->email = $email;
                $userModel->add();
                $this->success('恭喜你注册成功！','',2);
            }            
        }        
    }
        public function login(){
            /*用户 登陆*/          
            if(IS_POST){
                $username = I('post.username');
                $pwd = I('post.password');
                $code = I('post.yzm');               
                $userModel = D('user');
                $userinfo = $userModel->where(array('username'=>$username))->find();
                $this->check_verify($code);
                if(!$userinfo){
                    $this->error('用户名错误','',2);
                }
                if($userinfo['password']!==md5($pwd.$userinfo['salt'])){
                    $this->error('密码错误','',2);
                }else {
                    S('username',$username,3600);
                    S('pwd',$pwd,3600);
                    $this->success('正在登录','/',3);
                }                
            }
               $this->redirect('Admin/News/index');exit;
      }
         public function logout(){
             /*注销登录*/
             if((!empty(S('username'))))
             {
                 S('username',null);
                 S('pwd',null);
                 $this->success('正在注销登录','/',3);
                 $this->assign('jumpUrl', "javascript:window.parent.location.reload();"); 
                 $this->redirect('Home/User/logreg');
             }
             
         }
         

        
         public function yzm(){
             /* 生成验证码*/
             $Verify = new \Think\Verify();
             $Verify->fontSize = 20;
             $Verify->length   = 4;
             $Verify->entry();
         }
         public function yan(){
             /* 生成盐值*/
             $str = 'asdfjlaskjf09[uuqtoi*&^*43hq5kja9430597(*&)]';
             return substr(str_shuffle($str),0,8);
         }
         public function check_verify($code){
             $Verify = new \Think\Verify();
             if(!$Verify->check($code)){
                 $this->error('验证码错误','',2);                 
         }    
      } 
}
     
?>