<?php

class App {
    // declare properties
    public $product_description;
    public $list_price;
    public $discount_percent;
    public $salesTax = 0.075;
    public $tax;

    /**
     * @constructor
     * Call this method on each newly created object
     *
     * @param {Array} $post - The Global variable array
     */
    public function __construct(array $post = []) {
        // grab the filtered user inputs
        $this->product_description = filter_input(INPUT_POST, $post[0]);
        $this->list_price = sprintf('%0.2f', filter_input(INPUT_POST, $post[1]));
        $this->discount_percent = sprintf('%0.2f', filter_input(INPUT_POST, $post[2]));
    }

    /**
     * Represents a discount amount.
     * Calculates a discount amount.
     *
     * @return {string}
     */
    public function discountAmount() {

        $this->discount_amount = ($this->discount_percent / 100) * $this->list_price;
        return sprintf('%0.2f', $this->discount_amount);
    }

    /**
     * Represents a discount price.
     * Calculates a discount price.
     *
     * @return {string}
     */
    public function discountPrice() {
        // discountprice = listprice - discountamount
        $this->discount_price = $this->list_price - $this->discountAmount();
        return sprintf('%0.2f', $this->discount_percent);
    }

    public function salesTax() {
        $this->tax = ($this->list_price - $this->discountPrice()) *  $this->salesTax;
        return sprintf('%0.2f', $this->tax);
    }
}
