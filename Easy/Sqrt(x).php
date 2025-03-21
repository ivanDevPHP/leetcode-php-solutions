<?php
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function mySqrt($x) {
        $ini = 0;
        $end = $x;
        $sqrt = 0;
        while($ini <= $end){
            $mid = floor(($ini + $end) / 2) ;
            $currentSqrt = $mid * $mid;
            if($currentSqrt == $x){
                return $mid;
            }

            if($currentSqrt > $x){
                $end = $mid - 1;
            }else{
                $sqrt = $mid;
                $ini = $mid + 1;
            }
        }

        return $sqrt;

    }
}
