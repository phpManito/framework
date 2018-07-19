<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Msg;
class MsgController extends Controller
{
    //声明去掉当前控制器加载视图的头部底部公共部分，否则yii2会自动加载
    public $layout = false;
    //防XSS攻击
    public $enableCsrfValidation=false;
    public function actionIndex()
    {
        if(Yii::$app->request->isPost){
            $uname = Yii::$app->request->post('uname');
            $content = Yii::$app->request->post('content');
            $msg = new Msg;
            $msg->uname = $uname;
            $msg->content = $content;
            $msg->created_at =  $msg->updated_at = time();
            $rs = $msg->save();
            #步骤4：判断跳转
            return $this->redirect(['/msg']);
        }
        $msgs=Msg::find()->all();
        return $this->render('index',compact('msgs'));
    }
}