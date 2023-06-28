<!-- Given five positive integers, find the minimum and maximum values that can be calculated by summing
exactly four of the five integers. Then print the respective minimum and maximum values as a single line
of two space-separated long integers.
For example arr = [1, 3, 5, 7, 9], . Our minimum sum is 1 + 3 + 5 + 7 = 16 and our maximum sum is 3 + 5 + 7 + 9 = 24

We would print
16 24 -->

<?php
    $list_number = array(1, 3, 5, 7, 9);

    $sum = 0;
    
    for($i = 0; $i < count($list_number); $i++){
        $sum += $list_number[$i];
    }
    
    $max_list = $sum - min($list_number);
    $min_list = $sum - max($list_number);

    echo $min_list.' '. $max_list;
    
?>