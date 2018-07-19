<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>index.html</title>
</head>
<body>
<?php echo ($data1); ?>
<br/>
<?php if($data2['sex'] == '男'): ?>强大
    <?php else: ?>
    需要保护<?php endif; ?>
<br/>
<?php if(is_array($data3)): foreach($data3 as $k=>$v): echo ($k); ?>__<?php echo ($v["name"]); ?>__<?php echo ($v["age"]); ?> __<?php echo ($v["sex"]); ?><br /><?php endforeach; endif; ?>
</body>
</html>