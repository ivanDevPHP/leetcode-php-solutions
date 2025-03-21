<?php

function lengthOfLastWord($s) {
        $wordSize = 0;
        $foundWord = false;

        for($i = strlen($s) -1; $i >= 0; $i -= 1){
            if($s[$i] === " " && $foundWord){
                return $wordSize;
            }
            
            if($s[$i] != " "){
                $foundWord = true;
                $wordSize ++;
            }
        }

        return $wordSize;
    }
}
