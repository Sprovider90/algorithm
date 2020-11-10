<?php
class Maopao
{
    function sort($arr){
        $nums=count($arr);

        for ($i=0; $i<$nums; $i++) {
            if(!empty($arr[$i+1])&&$arr[$i]<$arr[$i+1]){
                $m=$i+1;
                $n=$this->findFirstMin($arr,$m);
                $this->move($arr,$m,$n);
            }

        }
        return $arr;
    }

    function findFirstMin($arr,$index){
        for ($i=$index-1; $i>=0; $i--) {
            if($arr[$i]>=$arr[$index]){
                return $i+1;
            }
        }
        return 0;
    }
    function move(&$arr,$m,$n){
        $tmp=$arr[$m];
        for ($i=$m; $i>=$n; $i--) {
            $arr[$i]=$arr[$i-1];
        }
        $arr[$n]=$tmp;

    }
}