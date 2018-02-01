<?php include 'logic.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Account Information</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
    <main>
        <h1>Account Information</h1>
        <label>Email Address:</label>
        <span><?= htmlspecialchars($email) ?></span><br>
        <label>Password:</label>
        <span><?= htmlspecialchars($password) ?></span><br>
        <label>Phone Number:</label>
        <span><?= htmlspecialchars(phone()) ?></span><br>
        <?php if (!isset($ref)) : ?>
        <label>Heard From:</label>
        <span><?= "Unknown" ?></span><br>
        <?php else : ?>
        <label>Heard From:</label>
        <?php endif; ?>
        <span><?= htmlspecialchars($ref) ?></span><br>
        <label>Send Updates:</label>
        <span><?= htmlspecialchars(update()) ?></span><br><br>
        <label>Contact Via:</label>
        <span><?=  htmlspecialchars($contact) ?></span><br><br>
        <span>Comments:</span><br>
        <span><?= htmlspecialchars($comment) ?></span><br>        
    </main>
</body>
</html>
