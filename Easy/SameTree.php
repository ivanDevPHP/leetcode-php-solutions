<?php
class Solution {

    /**
     * @param TreeNode $p
     * @param TreeNode $q
     * @return Boolean
     */
    function isSameTree($p, $q) {
        $sameTree = $this->checkIfTheSameTree($p, $q);

        return $sameTree;
    }

    function checkIfTheSameTree($p, $q) {
        if($p->val !== $q->val){
            return false;
        }

        if ($p === null && $q === null) {
            return true;
        }

        $isEqualsLeft = $this->checkIfTheSameTree($p->left, $q->left);
        if($isEqualsLeft === false){
            return false;
        }

        $isEqualsRight = $this->checkIfTheSameTree($p->right, $q->right);
        if($isEqualsRight === false){
            return false;
        }

        return true;
    }
}
