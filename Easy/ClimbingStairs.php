<?php
function climbStairs($n) {
        if ($n == 1) {
        return 1;
        }
        if ($n == 2) {
            return 2;
        }

        $dp = array(0, 1, 2);

        for ($i = 3; $i <= $n; $i++) {
            $dp[$i] = $dp[$i-1] + $dp[$i-2];
        }

        return $dp[$n];
    }
