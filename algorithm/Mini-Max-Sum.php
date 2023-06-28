<?php
    $input = "1 2 3 4 5";
    $list_number = explode(' ', $input);

    $sum = 0;

    for($i = 0; $i < count($list_number); $i++){
        $sum += $list_number[$i];
    }
    
    $max_list = $sum - min($list_number);
    $min_list = $sum - max($list_number);

    echo $min_list.' '. $max_list;
    
?>

<?php
echo("_____________________________\n");
    $input = "1 2 3 4 5";
    $list_number = explode(' ', $input);
    echo 'Input: '.$input;

    $sum = 0; 
    $min = $list_number[1]; 
    $max = 0;

    for($i = 0; $i < count($list_number); $i++){
        $sum += $list_number[$i];

        if ($list_number[$i] > $max) {
            $max = $list_number[$i];
        }

        if($list_number[$i] < $min){
            $min = $list_number[$i];
        }
    }

    echo("\nEven elements in array: ");
    for($i = 0; $i < count($list_number); $i++){
        if($list_number[$i] % 2 == 0){
            echo("$list_number[$i] ");
        }
    }

    echo("\nOdd elements in array: ");
    for($i = 0; $i < count($list_number); $i++){
        if($list_number[$i] % 2 != 0){
            echo("$list_number[$i] ");
        }
    }
    
    echo("\nSum: $sum");
    echo("\nMax in array: $max");
    echo("\nMin in array: $min");

    $max_list = $sum - $min;
    $min_list = $sum - $max;

    echo ("\nOutput:  $min_list $max_list");
    
?>
