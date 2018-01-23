<?php
/**
 * @param string $type
 * @param string $subtotal
 * 
 */
function validateCust(string $type, string $subtotal) 
{
    global $percent;
    global $discount;
    global  $total;
    global $customer_type;
    global $invoice_subtotal;

    $customer_type = strtoupper(filter_input(INPUT_POST, $type));
    $invoice_subtotal = filter_input(INPUT_POST, $subtotal);
    
    global $discount_percent;
    {
    switch ($customer_type)
    {
        case !in_array($customer_type, array(
                'R',
                'C',
                'T'
            ), true):
            $discount_percent = .10;
            break;
        case 'R':
            {
            switch ($invoice_subtotal)
            {
                case $invoice_subtotal >= 100 && $invoice_subtotal < 250:
                    $discount_percent = .1;
                    break;
                case $invoice_subtotal >= 250 && $invoice_subtotal < 500:
                    $discount_percent = .25;
                    break;
                case $invoice_subtotal >= 500:
                    $discount_percent = .30;
            }
            }
        
        case 'C':
            $discount_percent = .2;
            break;
        case 'T':
            {
            switch ($invoice_subtotal)
            {
                case $invoice_subtotal < 500:
                    $discount_percent = .40;
                    break;
                default:
                    $discount_percent = .50;
                    break;
            }
            }
            
            break;
        default:
            $discount_percent = .0;
            break;
            
    }


    $discount_amount = $invoice_subtotal * $discount_percent;
    $invoice_total   = $invoice_subtotal - $discount_amount;
    
    $percent  = number_format(($discount_percent * 100));
    $discount = number_format($discount_amount, 2);
    $total    = number_format($invoice_total, 2);
    }

}

validateCust('type', 'subtotal');


include 'invoice_total.php';


    
    /**
     *  The crazy nested if statements
     * if ( !in_array($customer_type, array('R','C', 'T'), true ) ) {
     *    $discount_percent = .10;
     *} else if ($customer_type == 'R') {
     *    if ($invoice_subtotal < 100) {
     *        $discount_percent = .0;
     *    } else if ($invoice_subtotal >= 100 && $invoice_subtotal < 250) {
     *        $discount_percent = .1;
     *    } else if ($invoice_subtotal >= 250 && $invoice_subtotal < 500) {
     *        $discount_percent = .25;
     *    } else if ($invoice_subtotal >= 500) {
     *        $discount_percent = .30;
     *    }
     *} else if ($customer_type == 'T'){
     *    if ($invoice_subtotal < 500) {
     *        $discount_percent = .40;
     *    } else {
     *        $discount_percent = .50;
     *    }
     *} else if ($customer_type == 'C') {
     *    $discount_percent = .2;
     *} else {
     *    $discount_percent = .0;
     *}
     **/

