<?php


class xuanze
{
    function sort($arr,$sortd="desc")
    {
//        if($sortd=="desc"){
//            return $this->maopaoDesc($arr);
//        }else{
        return $this->asc($arr);
//        }
    }
    function asc($arr){
        $nums=count($arr);

        for ($j=0; $j<$nums-1; $j++) {
            $a=$this->findMin($nums,$arr,$j);
            $this->changeHeadAndMin($arr,$a,$j);
        }
        return $arr;
    }
    function findMin($nums,$arr,$index){
        $tmp=$index;
        for ($j=$index; $j<$nums-1; $j++) {
            if($arr[$tmp]>$arr[$j+1]){
                $tmp=$j+1;
            }
        }
        return $tmp;
    }
    function changeHeadAndMin(&$arr,$i,$j){
        $tmp=$arr[$j];
        $arr[$j]=$arr[$i];
        $arr[$i]=$tmp;
    }
}