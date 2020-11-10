<?php


class shell
{
    function sort($arr,$sortd="desc")
    {
//        if($sortd=="desc"){
//            return $this->desc($arr);
//        }else{
//        echo json_encode($arr);echo "\n";

        //$arr=[1,4,2,3,6,8,9,7,5,10];
        return $this->asc2($arr);
//        }
    }
    //交换式-》冒泡升级版
    function asc($arr){
        $nums=count($arr);
        for ($gap=intval($nums/2); $gap>0; $gap=intval($gap/2)){
            for ($i=$gap; $i<$nums; $i++) {
                for ($j=$i-$gap; $j>=0; $j-=$gap) {
                    if($arr[$j]>$arr[$j+$gap]){
                        $tmp=$arr[$j];
                        $arr[$j]=$arr[$j+$gap];
                        $arr[$j+$gap]=$tmp;
                    }
                }
            }
        }

        return $arr;
    }

    //移位-》插入升级版
    function asc2($arr){
        $nums=count($arr);
        for ($gap=intval($nums/2); $gap>0; $gap=intval($gap/2)){
            for ($i=$gap; $i<$nums; $i++) {
                $j=$i;
                $tmp=$arr[$j];
                if($arr[$j]<$arr[$j-$gap]){//good
                    while ($j-$gap>=0&&$tmp<$arr[$j-$gap]){
                        $arr[$j]=$arr[$j-$gap];
                        $j-=$gap;
                    }
                }
                $arr[$j]=$tmp;
            }
        }
        return $arr;
    }
}