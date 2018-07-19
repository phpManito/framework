<?php
class TestController extends Yaf_Controller_Abstract
{
    public function indexAction(){
        echo 123;
        return false;
    }
}