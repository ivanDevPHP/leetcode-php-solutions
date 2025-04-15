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
     * @return Integer[]
     */
    function inorderTraversal($root) {
        $result = [];

        $this->getTraversalTree($root, $result);

        return $result;
    }

    function getTraversalTree($root, &$result) {
        if($root === null){
            return;
        }

        $this->getTraversalTree($root->left, $result);

        $result[] = $root->val;

        $this->getTraversalTree($root->right, $result);
    }
}
