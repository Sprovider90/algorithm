<?php
function load( $class ) {
    $file = "sort/".$class . '.php';
    if (is_file($file)) {
        require_once($file);
    }
    $file = "sortV2/".$class . '.php';
    if (is_file($file)) {
        require_once($file);
    }
}
spl_autoload_register( 'load' );
$arr=rand1(80);
$obj=new kuaisu();
//$obj=new MaopaoTwo();
//$obj=new shell();
$t1 = microtime(true);

$arr=$obj->sort($arr);

$t2 = microtime(true);
echo '耗时'.round($t2-$t1,3).'秒';
//echo json_encode($arr);


//随机生成不重复的N个数
function rand1($num) {
    //初始化变量为0
    for ($i=0;$i<$num-1;$i++){
        $result[]=rand(0,$num-1);
    }
    return $result;
}