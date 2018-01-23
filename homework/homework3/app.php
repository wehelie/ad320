<?php 

class Validate {
    // use this class to validate form
}


class App {

    /**
     * setup the properties
     */
    protected static $paintGallonsRequired;
    public static $laborHoursRequired;
    protected static $laborCost;
    protected static $paintCost;

    /**
     * I tried to delcare this as a constant inside the class,
     * but PHP does not allow this. I am not sure of any other way yet. 
     */
    public static $wall = 115;
    public static $shift = 8;
    public static $laborPerHour = 20;

    /**
     * @description
     * This method calculates gallons of paint by dividing user's wall space
     * by the number of gallons it takes to complete a 115 square feet. This
     * method has a return type of { int }, otherwise PHP will throw an error.
     * 
     * @param string {$argv}
     * 
     * @return integer {$paintGallonsRequired}
     */
    public static function gallonsOfPaint(string $argv): int {
        $wallSpace = filter_input(INPUT_POST, $argv);
        self::$paintGallonsRequired = round($wallSpace  / (self::$wall));
        return sprintf(self::$paintGallonsRequired);
    }

    /**
     * @description
     * This method determines the cost of paint given the number gallons of paint
     * 
     * @param string {$argv}
     * 
     * @return string {$costOfPaint}
     * 
     */
    public static function costOfPaint(string $argv): string {
        $costOfPaint = filter_input(INPUT_POST, $argv);
        $costOfPaint = round($costOfPaint * self::$paintGallonsRequired);
        return $costOfPaint;
    }

    public static function hoursOfLabor(): int {
        $wallspace = filter_input(INPUT_POST, 'wallspace');
        self::$laborHoursRequired = ($wallspace / self::$wall) * self::$shift;
        return round(self::$laborHoursRequired);
    }
    
}
