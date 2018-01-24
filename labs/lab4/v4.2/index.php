<?php

//set default values
$number1 = 78;
$number2 = -105.33;
$number3 = 0.0049;
$message = 'Enter some numbers and click on the Submit button.';
$warning = "You must enter a proper number!";
//process
$action = filter_input(INPUT_POST, 'action');

switch ($action) {
    case 'process_data':

        $number1 = (integer) filter_input(INPUT_POST, 'number1');
        $number2 = filter_input(INPUT_POST, 'number2');
        $number3 = (float) filter_input(INPUT_POST, 'number3');

        // make sure the user enters three numbers
        if (isset($number1, $number2, $number3)) {
            // make sure the numbers are valid
            if (is_numeric($number1) && is_numeric($number2) && is_numeric($number3) && !empty($number1) && !empty($number2) && !empty($number3)) {
                // get the ceiling and floor for $number2
                $number2_ceil = ceil($number2);
                // round $number3 to 3 decimal places
                $number2_floor = floor($number2);
                // round $number3 to 3 decimal places
                $number3_rounded = sprintf('%0.3f', $number3);
                // get the max and min values of all three numbers
                $max = max($number1, $number2, $number3);
                $min = min($number1, $number2, $number3);
                // generate a random integer between 1 and 100
                $random = rand(1, 100);
                // use heredocs to display message
                $message = <<<EOL
                 Number 1: $number1
                 Number 2: $number2
                 Number 3: $number3
                 Number 2 ceiling: $number2_ceil
                 Number 2 floor: $number2_floor
                 Number 3 rounded: $number3_rounded

                 Min: $min
                 Max: $max

                 Random: $random
EOL;
            } else {
                print $warning;
            }
        }




        break;
}
include 'number_tester.php';
