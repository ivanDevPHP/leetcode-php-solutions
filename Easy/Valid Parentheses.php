<?php
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        while (strpos($s, '()') !== false || strpos($s, '[]') !== false || strpos($s, '{}') !== false) {
            $s = str_replace(['()', '[]', '{}'], '', $s);
        }
        return $s === '';
    }
}
