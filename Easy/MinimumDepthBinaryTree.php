<?php

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function minDepth($root) {
        return $this->calcMinDepth($root);
    }

    function calcMinDepth($root){
        if($root === null){
            return 0;
        }

        $left = $this->calcMinDepth($root->left);
        $right = $this->calcMinDepth($root->right);

        if(($left < $right ) && $left === 0){
            return $right + 1;
        }

        if(($left > $right ) && $right === 0){
            return $left + 1;
        }

        return min($left, $right) + 1;
    }
}
