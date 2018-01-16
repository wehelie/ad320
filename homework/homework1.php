<?php
/**
 *
 * Discount Calculator
 *
 */

$GLOBALS = array(
	'product_description' => $_GET['product_description'],
	'product_description' => $_GET['product_description'],
	'list_price' => $_GET['list_price'],
	'discount_percent' => $_GET['discount_percent'],
);

class DiscountCalc {

	public function calc() {

		// calculate the discount
		$discount = $list_price * $discount_percent * .01;
		$discount_price = $list_price - $discount;

		// apply currency formatting to the dollar and percent amounts
		$list_price_formatted = "$" . number_format($list_price, 2);
		$discount_percent_formatted = $this->$discount_percent . "%";
		$discount_formatted = "$" . number_format($discount, 2);
		$discount_price_formatted = "$" . number_format($discount_price, 2);

		// escape the unformatted input
		$product_description_escaped = htmlspecialchars($product_description);

		echo $discount_price_formatted;
	}
}

$discount = new DiscountCalc();

echo $discount->$product_description;
