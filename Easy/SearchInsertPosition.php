<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        $ini = 0;
        $end = count($nums) - 1;

        while ($ini <= $end) {
            $mid = floor(($ini + $end) / 2);
            if ($nums[$mid] == $target) {
                return $mid; 
            }

            if ($nums[$mid] < $target) {
                $ini = $mid + 1;
            } 

            else {
                $end = $mid - 1;
            }
        }

        return $ini;
    }
}
