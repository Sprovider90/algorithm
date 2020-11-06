<?php


class charu
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
            $this->inserArr($arr[$j],$result);
        }
        return $result;
    }
    function inserArr($item,&$result){

        if(!empty($result)){
            $nums=count($result);
            $index=0;
            for ($j=0; $j<$nums; $j++) {
                if($j==0&&$item<=$result[$j]){

                    $index=$j;
                }
                if($item>=$result[$j]&&$item<=$result[$j+1]){
                    $index=$j;
                }
                if($j==$nums-1&&$item>=$result[$j]){
                    $index=$j;
                }
            }
            $result[$index]=$item;
            $this->move($result,$index);

        }else{
            $result[]=$item;
        }


    }
    function move(&$arr,$start){
        $nums=count($arr);
        for ($j=$start+1; $j<$nums; $j++) {
            $arr[$j+1]=$arr[$j];
        }
    }

}