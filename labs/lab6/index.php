<?php
// connects to the DB
include 'db.php';


// insert && fetch results
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // grab the data from the user input
    $firstname = filter_input(INPUT_POST, 'firstname');
    $lastname = filter_input(INPUT_POST, 'lastname');
    $email = filter_input(INPUT_POST, 'email');
    
    $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES (:firstname, :lastname, :email)";
    
    // prepare the sql statement
    $query = $handler->prepare($sql);
    
    $query->execute(array(
        ':firstname' => $firstname,
        ':lastname' => $lastname,
        ':email' => $email
    ));
}

print "The last inserted ID is " . $handler->lastInsertId();
    
    // fetch data
    $query = $handler->query('SELECT * FROM MyGuests');
    // fetch the results as an associative array
    $row = $query->fetch(PDO::FETCH_ASSOC);
    
    // print
    echo '<pre>' , print_r($row) , '</pre>';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab 6</title>
    <style>
        body {
            margin: 0 auto;
            margin-top: 70px;
            width: 60%;
        }

        input {
            width: 300px;
            height: 45px;
        }

        input[type=submit] {
            background: yellowgreen;
            font-size: 28px;
        }
    </style>
</head>
<body>
    <h1>Submit to the Database</h1>
    <form action="." method="post">
        <input type="text" name="firstname" placeholder="first name"> <br>
        <input type="text"name="lastname" placeholder="last name"> <br>
        <input type="email" name="email" placeholder="email" required><br><br>
        <input type="Submit">
    </form>
</body>
</html>
