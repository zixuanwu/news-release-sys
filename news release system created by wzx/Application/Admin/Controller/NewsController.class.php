<?php
namespace Admin\Controller;
use Think\Controller;
class NewsController extends Controller{
        public function newsupload(){
            if(IS_POST){
                $newsModel = D('News');               
                $title = I('post.title');
                $content = I('post.content');
                $type = I('post.type');
                $auth = I('post.auth');
                
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize = 2*1024*1024;// 设置附件上传大小
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath = './Application/Uploads'; // 设置附件上传根目录
                $upload->savePath = '/Add/'; // 设置附件上传（子）目录
                
                $info = $upload->upload();
                if(!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                }else{// 上传成功 获取上传文件信息
                    $img = "null";
                    $img=$info['image']['savepath'].$info['image']['savename'];
                    $img1=$info['image']['savepath'].'sml'.$info['image']['savename'];
                    $imgobj = new \Think\Image();
                    $imgobj->open("$upload->rootPath$img");
                    $imgobj->thumb(150, 150)->save("$upload->rootPath$img1");
                  }
                  $newsModel->News_Title = $title;
                  $newsModel->News_Content = $content;
                  $newsModel->News_Type = $type;
                  $newsModel->News_Img = $img;
                  $newsModel->News_smlimg = $img1;
                  $newsModel->News_Auth = $auth;
                  $newsModel->add();
                  $this->success('添加成功！');
            }
          $this->display();
            }
         public function index(){
             $this->display();
         }
         public function newsitem(){
             $news_id = I('get.newsid');
             $news = D('News');
             $where=[];
             $where['News_ID'] = ['EQ',$news_id];
             $data = $news->where($where)->select();
             $this->assign('data',$data);
             $this->display();
         }
         public function newslist(){
             $model = D('News');
             $count = $model->count();
             $perpage=9;
             $page=new \Think\Page($count,$perpage);
             $page->setConfig('prev', '上一页');
             $page->setConfig('next', '下一页');
             $btn=$page->show();
             $this->assign('page',$btn);
             $data = $model->order('News_ID DESC')->limit($page->firstRow,$perpage)->select();
             $this->assign('data',$data);
             $this->display();
         }
         public function newsedit(){
             $this->display();
             
         }
         public function userlist(){                        
             $model = D('User');
             $count = $model->count();
             $perpage=9;
             $page=new \Think\Page($count,$perpage);
             $page->setConfig('prev', '上一页');
             $page->setConfig('next', '下一页');
             $btn=$page->show();
             $this->assign('page',$btn);
             $data = $model->order('userid DESC')->limit($page->firstRow,$perpage)->select();
             $this->assign('data',$data);
             $this->display();
             
         }
         public function useredit(){
             $userid = I('get.userid');
             $useredit = D('User');
             $where=[];
             $where['userid'] = ['EQ',$userid]; 
             $data = $useredit->where($where)->select();
             $this->assign('data',$data);
             $this->display();
         }
         
         public function delnews(){
             /*删除一则新闻*/
             
             $newsid = I('get.newsid');
             $newsModel = D('News');
             $newsModel->delete($newsid); 
             $this->success('删除成功！');
             $this->redirect('Admin/News/newslist');
             }
         public function check_verify($code){
                $Verify = new \Think\Verify();
                if(!$Verify->check($code)){
                    $this->error('验证码错误','',2);
                }
            }
}
            

