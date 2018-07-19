<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
class TestController extends Controller
{
    //声明去掉当前控制器加载视图的头部底部公共部分，否则yii2会自动加载
    public $layout = false;

    public function actionIndex()
    {
        //加载veiws目录下的test目录下的index.php文件
        return $this->render('index', [
            'username' => '苍苍',
            'order' => [
                'a' => '啪啪啪',
                'b' => '哒哒哒'
            ],
        ]);
    }

    public function actionAdd()
    {
        echo 888;
    }
}
