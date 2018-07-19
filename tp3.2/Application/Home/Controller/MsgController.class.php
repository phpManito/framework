<?php
namespace Home\Controller;

use Think\Controller;

class MsgController extends Controller
{
    public function index()
    {
        if(IS_POST){
            $start_time = strtotime( I('post.start_time') );
            $end_time   = strtotime( I('post.end_time') );
            $condition=array(
                'created_at'=>array('between',"$start_time,$end_time")
            );
            $msgs=M('msg')->where($condition)->select();
            $this->assign('msgs',$msgs);
            $this->display();
            return;
        }
        $msgs=M('msg')->select();
        $this->assign('msgs',$msgs);
        $this->display();
    }
    public function add()
    {
        if(IS_POST){
            $postData=I('post.');
            $postData['created_at']=$postData['updated_at']=time();
            $rs=M('msg')->add($postData);
            if($rs){
                $this->success('操作成功',u('msg/index'));
            }else{
                $this->error('操作失败',u('msg/index'));
            }
        }
    }
}