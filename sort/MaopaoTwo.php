<?php
class MaopaoTwo
{
    function sort($arr,$sortd="desc"){
        if($sortd=="desc"){
            return $this->desc($arr);
        }else{
            return $this->asc($arr);
        }
    }
    function desc($arr){
        $nums=count($arr);
        $flag=false;
        for ($j=0; $j<$nums-1; $j++) {
            for ($i = 0; $i < $nums - 1-$j; $i++) {
                if ($arr[$i] < $arr[$i + 1]) {
                    $tmp = $arr[$i + 1];
                    $arr[$i + 1] = $arr[$i];
                    $arr[$i] = $tmp;
                    $flag=true;
                }
            }
            if(empty($flag)){
                break;
            }else{
                $flag=false;
            }
        }
        return $arr;
    }
    function asc($arr){
        $nums=count($arr);
        $flag=false;
        for ($j=0; $j<$nums-1; $j++) {
            for ($i = 0; $i < $nums - 1-$j; $i++) {
                if ($arr[$i] > $arr[$i + 1]) {
                    $tmp = $arr[$i + 1];
                    $arr[$i + 1] = $arr[$i];
                    $arr[$i] = $tmp;
                    $flag=true;
                }
            }
            if(empty($flag)){
                break;
            }else{
                $flag=false;
            }
        }
        return $arr;
    }
}