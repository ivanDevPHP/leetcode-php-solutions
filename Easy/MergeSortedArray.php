<?php
function merge(&$nums1, $m, $nums2, $n) {
        if($m === 0){
            $nums1 = $nums2;
            return $nums1;
        }
        if($n === 0 ){
            return $nums1;
        }

        $ind1 = $m - 1;
        $ind2 = $n - 1;
        $ind3 = $m + $n - 1;


        while ($ind1 >= 0 && $ind2 >= 0) {
            if ($nums1[$ind1] >= $nums2[$ind2]) {
                $nums1[$ind3] = $nums1[$ind1];
                $ind1--;
            } else {
                $nums1[$ind3] = $nums2[$ind2];
                $ind2--;
            }
            $ind3--;
        }

        while ($ind2 >= 0) {
            $nums1[$ind3] = $nums2[$ind2];
            $ind2--;
            $ind3--;
        }
    }
