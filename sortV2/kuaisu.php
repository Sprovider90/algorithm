<?php

//冒泡增强
class kuaisu
{
    function sort($arr){

       $this->quick($arr,0,count($arr)-1);
       return $arr;
    }
    function quick(&$arr,$left,$right){
       $l =$left;
       $r=$right;
       $point=$arr[intval(($right+$left)/2)];
       $tmp=0;
       while ($r>$l){

           while($arr[$l]<$point){
               $l++;
           }
           while($arr[$r]>$point){
               $r--;
           }
           if($l>=$r){
               break;
           }
           $tmp=$arr[$r];
           $arr[$r]=$arr[$l];
           $arr[$l]=$tmp;

           if($arr[$l]==$point){
               $r--;
           }
           if($arr[$r]==$point){
               $l++;
           }
       }
       if($r==$l){
           $r--;
           $l++;
       }
        if($left<$r){
            $this->quick($arr,$left,$r);
        }
        if($right>$l){
            $this->quick($arr,$l,$right);
        }
    }
}