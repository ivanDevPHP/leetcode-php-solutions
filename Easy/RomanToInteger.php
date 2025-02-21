<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $romanMap = ['I' => 1, 'V' => 5, 'X' => 10, 'L' => 50,'C' => 100, 'D' => 500, 'M' => 1000];
        $total = 0;
        for($i = 0; $i <= strlen($s); $i ++){
            $currentValue = $romanMap[$s[$i]];

            if(isset($s[$i + 1])){
                $nextValue = $romanMap[$s[$i + 1]];
            }else{
                 $nextValue = 0;
            }

            if ($currentValue < $nextValue) {
                $total -= $currentValue;
            } else {
                $total += $currentValue;
            }
        }

        return $total;
    }
}
