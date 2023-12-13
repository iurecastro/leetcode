<?php
 class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
     //217. Contains Duplicate
    function containsDuplicate($nums) {
        sort($nums);
        $count = count($nums); 
        for($i=0;$i<$count-1;$i++){
            if($nums[$i] == $nums[$i + 1]){
                return true;
            }
        }
        return false;
    }
}
?>