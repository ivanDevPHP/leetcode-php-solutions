<?php 
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $checkedValues = [];

        foreach($nums as $key => $value)
        {
            $complement = $target - $value;
            if(in_array($complement, $checkedValues )){
                return [array_search($complement, $checkedValues), $key];
            }

            $checkedValues[$key] = $value;
        }

        return [];
    }
}
