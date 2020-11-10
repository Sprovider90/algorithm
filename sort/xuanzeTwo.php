<?php
//少量交换
class xuanzeTwo
{
    function sort($arr,$sortd="desc")
    {
        if($sortd=="desc"){
            return $this->desc($arr);
        }else{
        return $this->asc($arr);
        }
    }
    function asc($arr){
        $nums=count($arr);
        for ($j=0; $j<$nums-1; $j++) {
            $min=$j;
            for ($i=$j; $i<$nums-1; $i++) {
                if($arr[$min]>$arr[$i+1]){
                    $min=$i+1;
                }
            }
            if($min==$j) continue;
            $tmp=$arr[$j];
            $arr[$j]=$arr[$min];
            $arr[$min]=$tmp;
        }
        return $arr;
    }
    function desc($arr){
        $nums=count($arr);
        for ($j=0; $j<$nums-1; $j++) {
            $max=$j;
            for ($i=$j; $i<$nums-1; $i++) {
                if($arr[$max]<$arr[$i+1]){
                    $max=$i+1;
                }
            }
            if($max==$j) continue;
            $tmp=$arr[$j];
            $arr[$j]=$arr[$max];
            $arr[$max]=$tmp;
        }
        return $arr;
    }
}