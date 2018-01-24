<?php
// set default values
$name = '';
$email = '';
$phone = '';
$message = 'Enter some data and click on the Submit button.';

//process
$action = filter_input(INPUT_POST, 'action');

switch ($action) {
    case 'process_data':
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');
        $phone = filter_input(INPUT_POST, 'phone');

        /*************************************************
         * validate and process the name
         ************************************************/
        // 1. make sure the user enters a name
        // 2. display the name with only the first letter capitalized
        if (filter_var($name, FILTER_SANITIZE_STRING)) {
            $name = ucwords(strtolower($name));
        }
        /*************************************************
         * validate and process the email address
         ************************************************/
        // 1. make sure the user enters an email
        // 2. make sure the email address has at least one @ sign and one dot character
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email = $email;
        } else {
            print "{$email} is not a valid email address";
        }

        /*************************************************
         * validate and process the phone number
         ************************************************/
        // 1. make sure the user enters at least seven digits, not including formatting characters
        // 2. format the phone number like this 123-4567 or this 123-456-7890
        if (strlen($phone) == 10 && ctype_digit($phone)) {
          $phone = substr($phone, 0, 3) . '-' . substr($phone, 3,3) . '-'.substr($phone, 6);
        } else {
          if (strlen($phone) == 7 && ctype_digit($phone)) {
            $phone = substr($phone, 0, 3) .'-' .substr($phone , 3, 4);
          }
        }
        /*************************************************
         * Display the validation message
         ************************************************/
        // $message = "This page is under construction.\n" .
        //            "Please write the code that process the data.";

// Turn the name string into an array
// in order to grab on the firstnam
$fname = explode(" ", $name);


// heredocs
$message = <<<EOF
Hello $fname[0],

Thank you for entering this data:

Name: $name
Email: $email
Phone: $phone

EOF;

        break;
}
include 'string_tester.php';
