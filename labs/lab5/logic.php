<?php
    /**
     * declare these global so that they can be
     * accessed inside of the functions
     */
    global $phone;
    global $update;
    
    // email
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    // password
    $password = filter_input(INPUT_POST, 'password');
    // phone
    $phone = filter_input(INPUT_POST, 'phone', FILTER_VALIDATE_INT);
    // reference
    $ref = filter_input(INPUT_POST, 'heard_from');
    // update
    $update = filter_input(INPUT_POST, 'wants_updates');
    // contact
    $contact = filter_input(INPUT_POST, 'contact_via');
    // comment
    $text = filter_input(INPUT_POST, 'comments');
    $comment = <<<EOL
    $text
EOL;


    /**
     * @description validates the phone and adds dashes
     * @param {none}
     * @return string phone
     */
    function phone()
    {
        // access global variable
        global $phone;
        // if the phone is ten digits long
        if (strlen($phone) == 10 && ctype_digit($phone)) {
            // place the dashes in the proper places
            return substr($phone, 0, 3) . '-' . substr($phone, 3, 3) . '-'.substr($phone, 6);
        } else {
            // if the phone is seven digits long
            if (strlen($phone) == 7 && ctype_digit($phone)) {
                // place the dashes in the right places
                return substr($phone, 0, 3) .'-' .substr($phone, 3, 4);
            }
        }
    }

    
    /**
     * @description display 'Unknown' if radio button is not selected
     * @param {none}
     * @return string {"Unknown"}
     *
     */
    function toggle()
    {
        // when the radio button is not set
        if (!isset($ref)) {
            // show this
            print "Unknown";
        }
    }


    /**
     * @description display 'yes' or 'no'
     * @param {none}
     * @return string {'Yes' || 'No'}
     */
    function update()
    {
        // get the global variable
        global $update;
        // user ternary operator shorthand for if-statement
        $isChecked = isset($update) ? "Yes" : "No";
        // return "Yes" or "No"
        return $isChecked;
    }
