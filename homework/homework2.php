
<?php
/**
 * @author Leyth Adan
 * 01-14-2018
 * 
 * This program calculates loan payments and total interest, given that 
 * a user inputs a loan amount, interest rate, and number of periods.
 */
class App {
    /**
     * @var float
     * Amount of the loan
     */
    protected static $amount;

    /**
     * @var integer
     * interest rate per period (for this calculation, 1 period is 1 month)
     */
    protected static $rate;

    /**
     * @var integer
     * the number of periods (i.e. the number of months)
     */
    protected static $time;

    /**
     * constructor function
     * 
     * @param array $argv
     * an array of variables for the for the Global variable, ex: $_POST[argv[0]]
     * In PHP, you use the @self keyword to access static properties and methods
     */
    public function __construct($argv = []) {
        // cast user input to float and filter it
        self::$amount = (float) filter_input(INPUT_POST, $argv[0]);
        // cast user input to integer and filter
        self::$rate = (integer) filter_input(INPUT_POST, $argv[1]);
        // cast user input to integer and filter
        self::$time = (integer) filter_input(INPUT_POST, $argv[2]);
        // create a global variable scope
        global $interest;
        // interest to decimal
        $interest = self::$rate / 100;
        
        // create a @global variable scope
        global $months;
        // years to months
        $months = self::$time * 12;
    }

    /**
     * @return integer
     * a static function that calculates monthly payment
     * In PHP, you use the self keyword to access static properties and methods
     */
    public static function monthlyPayment() {
        // already declared inside of the constructor function
        // for now, this is the only I know to access this variable
        global $interest, $months;
        return ($interest / 12 * pow(1 + $interest / 12, $months) / (pow(1 + $interest / 12, $months) - 1) * self::$amount); 
    }

    /**
     * @return integer
     * static function calculates the total interest
     */
    public static function totalInterest() {
        // calculate
        global $months;
        // use the value of the monthlyPayment() function. 
        return (self::monthlyPayment() * $months) - self::$amount; 
    }
}
