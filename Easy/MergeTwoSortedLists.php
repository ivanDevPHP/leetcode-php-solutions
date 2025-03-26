
<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    function mergeTwoLists($list1, $list2) {
        $dummy = new ListNode();
        $current = $dummy;

        if ($list1 === null) return $list2;
        if ($list2 === null) return $list1;

        $this->merge($list1, $list2, $current);
        
        return $dummy->next;
    }

    function merge($head1, $head2, &$mergedList) {
        if ($head1 === null) {
            $mergedList->next = $head2;
            return;
        }
        if ($head2 === null) {
            $mergedList->next = $head1;
            return;
        }

        if ($head1->val <= $head2->val) {
            $mergedList->next = $head1;
            $mergedList = $mergedList->next;
            $this->merge($head1->next, $head2, $mergedList);
        } else {
            $mergedList->next = $head2;
            $mergedList = $mergedList->next;
            $this->merge($head1, $head2->next, $mergedList);
        }
    }
}
