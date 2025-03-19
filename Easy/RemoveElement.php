<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        if(count($nums) === 0){
            return 0;
        }

        $list = [];
        for($j = 0; $j < count($nums); $j ++){
            if($nums[$j] != $val){
                $list[] = $nums[$j];
            }
        }

        $nums = $list;
        return count($nums);
    }
}
