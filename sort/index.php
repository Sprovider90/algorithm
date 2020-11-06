<?php
function load( $class ) {
    $file = $class . '.php';
    if (is_file($file)) {
        require_once($file);
    }
}
spl_autoload_register( 'load' );
$arr=unique_rand(1, 100, 20);
$obj=new charu();
$t1 = microtime(true);

$arr=$obj->sort($arr,"desc");

$t2 = microtime(true);
echo '耗时'.round($t2-$t1,3).'秒';
echo json_encode($arr);


//随机生成不重复的N个数
function unique_rand($min, $max, $num) {
    //初始化变量为0
    $count = 0;
    $return = array();
    while ($count < $num) {
        $return[] = mt_rand($min, $max);
        $return = array_flip(array_flip($return));
        $count = count($return);
    }
    shuffle($return);
    return $return;
}