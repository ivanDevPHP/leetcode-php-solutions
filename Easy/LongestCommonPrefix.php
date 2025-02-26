<?php 
class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        if (empty($strs)) {
            return "";
        }

        sort($strs);
        $first = $strs[0];
        $last = end($strs);

        $i = 0;
        while ($i < strlen($first) && $i < strlen($last) && $first[$i] === $last[$i]) {
            $i++;
        }

        return substr($first, 0, $i);
    }
}
