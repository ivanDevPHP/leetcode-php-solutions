<?php
class Solution {

    /**
     * @param TreeNode $p
     * @param TreeNode $q
     * @return Boolean
     */
    function isSameTree($p, $q) {
        return  $this->checkIfSameTree($p, $q);
    }

    function checkIfSameTree($p, $q) {
        if ($p === null && $q === null) {
            return true;
        }

        if($p->val !== $q->val){
            return false;
        }
        
        return $this->checkIfSameTree($p->left, $q->left) && $this->checkIfSameTree($p->right, $q->right);
    }
}
