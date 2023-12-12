<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    //26. Remove Duplicates from Sorted Array
    function removeDuplicates(&$nums) {
        $nums = array_unique($nums);
        return count(array_unique($nums));
    }
}

?>
