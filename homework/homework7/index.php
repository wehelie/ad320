<?php
include 'DB.php';

$msg = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    $checkBox = filter_input(INPUT_POST, 'checkbox');
    if (isset($username) && isset($password) && isset($checkBox)) {
        $stmt = $pdo->query("SELECT * FROM login WHERE username = '$username' AND password = '$password'");
        $user = $stmt->fetch();

        if ($user) {
            setcookie("username", $user['username'], time() + 3600);
            header('Location: index.php');
        } else {
            $error = "Invalid username or password, please try again";
        }
    } else {
        $msg = "Make sure to enter username, password, and check 'Remember Me'";
    }
}

if (isset($_GET['logout'])) {
    setcookie("username", null, 1);
    header('Location:index.php');
}
$user = $_COOKIE['username'];

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login Form | Assignment 7</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    body {
      background: #f8f9fa;
    }
    .container {
      margin: 0 auto;
      margin-top: 150px;
      width: 50%;
    }
  </style>
</head>

<body>

<nav class="navbar navbar-light bg-black justify-content-between">
<input type="hidden">
 <?php
  if (isset($_COOKIE['username'])) {
      echo ' <a class="navbar-brand"> <h4>  <i>Welcome ' . htmlentities($user) . '</h4></a>';
  }
  ?>
  <form class="form-inline">
  <?php
  if (isset($_COOKIE['username'])) {
      echo '<input class="form-control mr-sm-2" type="submit" name="logout" value="Logout">';
  } else {
      echo '';
  }
?>

  </form>
</nav>

  <div class="container">
  <?php
    if (strlen($error) > 1) {
        print '<h4 class="alert alert-danger">'. htmlentities($error) . '</h4>';
    }
    ?>
    <form class="form-inline"  method="POST" action=".">
      <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
      <div class="input-group mb-2 mr-sm-2">
        <div class="input-group-prepend">
          <div class="input-group-text">@</div>
        </div>
        <input type="text" name="username" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
      </div>
      <label class="sr-only" for="inlineFormInputName2">Name</label>
      <input type="password" name="password" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="password">

      <div class="form-check mb-2 mr-sm-2">
        <input class="form-check-input" type="checkbox" id="inlineFormCheck" name="checkbox">
        <label class="form-check-label" for="inlineFormCheck">
      Remember me
    </label>
      </div>
      <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>
    <?php
    if (strlen($msg) > 1) {
        print '<h4 class="alert alert-warning">'. htmlentities($msg) . '</h4>';
    }
    ?>
  </div>
</body>
</html>
