<?php


class charu
{
    function sort($arr,$sortd="desc")
    {
//        if($sortd=="desc"){
//            return $this->maopaoDesc($arr);
//        }else{
        echo json_encode($arr);echo "\n";
        return $this->asc($arr);
//        }
    }
    function asc($arr){
        $result=[];
        $nums=count($arr);

        for ($j=0; $j<$nums-1; $j++) {
            $this->inserArr($arr[$j],$result);
        }
        echo json_encode($result);echo "\n";
        return $result;
    }
    function inserArr($item,&$result){

        if(!empty($result)){
            $nums=count($result);
            $index=$nums;
            if($item<=$result[0]){
                $index=0;
            }
            for ($j=0; $j<$nums; $j++) {
                if($item>=$result[$j]&&$item<=$result[$j+1]){
                    $index=$j+1;
                }
            }

            $this->move($result,$index,$item);
            $result[$index]=$item;
        }else{
            $result[]=$item;
        }
        echo json_encode($result);echo "\n";

    }
    function move(&$arr,$start,$item){
        $nums=count($arr);
        for ($j=$nums-1; $j>=$start; $j--) {
            $arr[$j+1]=$arr[$j];
        }

    }

}