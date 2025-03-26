<?php

class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        for($i = count($digits); $i > 0; $i--){
            if($digits[$i -1] < 9){
                $digits[$i -1] ++;
                return $digits;
            }
            if($digits[$i-1] == 9){
                
                $digits[$i-1] = 0;
            }
        }

        array_unshift($digits, 1);
        return $digits;
    }
}
