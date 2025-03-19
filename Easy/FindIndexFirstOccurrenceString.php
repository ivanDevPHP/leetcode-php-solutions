<?php
function strStr($haystack, $needle) {

        if($haystack === $needle){
            return 0;
        }

        $hLen = strlen($haystack);
        $nLen = strlen($needle);

        if ($nLen > $hLen) {
            return -1;
        }
        for ($i = 0; $i <= $hLen - $nLen; $i++) {
            $j = 0;
            while ($j < $nLen && $haystack[$i + $j] === $needle[$j]) {
                $j++;
            }

            if ($j === $nLen) {
                return $i;
            }
        }
        return -1;
    }
