<?php
class Solution{

/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer[]
 */
 /*   
    Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.

    You may assume that each input would have exactly one solution, and you may not use the same element twice.

    You can return the answer in any order.

  */ 
    function twoSum($nums, $target) {
        $n = count($nums);
        for ($i = 0; $i < $n; $i++) {
            for ($j = $i + 1; $j < $n; $j++) {
                if ($nums[$i] + $nums[$j] === $target) {
                    echo $i . "," . $j;
                    return [$i, $j];
                }
            }
        }
        throw new Exception("No solution found");    
   }
}
$nums = [2,7,11,15];
$target = 9; 
$solution = new Solution();
$solution->twoSum($nums, $target);

?>