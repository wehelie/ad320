<!DOCTYPE html>
<html>
<head>
    <title>Invoice Total Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <main>
        <h1>Invoice Total Calculator</h1>
        <p>Enter the values below and click "Calculate".</p>
        <form action="." method="post">
        <div id="data" >
            <label>Customer Type:</label>
            <input type="text" name="type" value="<?php echo htmlspecialchars($customer_type); ?>"><br>

            <label>Invoice Subtotal:</label>
            <input type="text" name="subtotal" value="<?php echo htmlspecialchars($invoice_subtotal); ?>"><br>

            <label>Discount Percent:</label>
            <input type="text" disabled value="<?php echo $percent; ?>"><span>%</span><br>

            <label>Discount Amount:</label>
            <input type="text" disabled value="<?php echo $discount; ?>"><br>

            <label>Invoice Total:</label>
            <input type="text" disabled value="<?php echo $total; ?>"><br>
        </div>
        <div id="buttons" >
            <label>&nbsp;</label>
            <input type="submit" value="Calculate" id="calculate_button"><br>
        </div>
        </form>

    </main>
</body>
</html>
