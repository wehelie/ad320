/**
 * @author Layth Adan
 * @constructor
 * @param {Integer}
 * @param {Integer}
 * @param {Integer}
 */
function App(amount, APR, time) {
    this.amount = amount;
    this.APR = APR;
    this.time = time;
    this.monthlyRates = (this.APR / 12) / 100;
    this.yearsToMonths = this.time * 12;
}

/**
 * @return {float}
 */
App.prototype.monthlyPayment = function() {
    p1 = (this.amount * this.monthlyRates);
    p2 = (1 - Math.pow((1 + this.monthlyRates), -this.yearsToMonths));

    return (p1 / p2);
}

/**
 * @return {float}
 */
App.prototype.totalInterest = function() {

    return (this.monthlyPayment() * this.yearsToMonths - this.amount)
}

/**
 * @param  {float}
 * @return {float}
 */
App.prototype.roundToTwo = function(num) {

    return +(Math.round(num + "e+2") + "e-2");
};
