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
    function maxDepth($root) {
        return $this->countMaxDepth($root);
    }
    private function countMaxDepth($root) {
    if ($root === null) {
        return 0;
    }

    $leftDepth = $this->countMaxDepth($root->left);
    $rightDepth = $this->countMaxDepth($root->right);
    return max($leftDepth, $rightDepth) + 1;
}
}
