<?php
return array(
    //设置默认访问模块
    'DEFAULT_MODULE' => 'Home' ,
    //设置默认访问控制器
    'DEFAULT_CONTROLLER' => 'Msg',
    //设置默认访问方法
    'DEFAULT_ACTION' => 'index',
    //开启页面Trace
    'SHOW_PAGE_TRACE' => TRUE ,
    //数据库配置信息
    'DB_TYPE'   => 'mysql',      // 数据库类型
    'DB_HOST'   => 'localhost',  // 服务器地址
    'DB_NAME'   => 'framework',  // 数据库名
    'DB_USER'   => 'root',       // 用户名
    'DB_PWD'    => 'root',       // 密码
    'DB_PORT'   => 3306,         // 端口
    'DB_PREFIX' => '',           // 数据库表前缀
    'DB_CHARSET'=> 'utf8',       // 字符集

    //模板相关配置
    'TMPL_PARSE_STRING'=>array(
      '__PUBLIC__'=>__ROOT__.'/Public',
    ),
);