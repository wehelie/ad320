<?php include 'Analyzer.php'; ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Text Analyzer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- <link href="style.css" rel="stylesheet"> -->
    <style media="screen">
      body {margin: 0 auto; width: 70%;}
      .alert-light {background: #ff28953d;}
    </style>
  </head>
  <body>
    <main class="container">
      <br>
      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Text Analyzer</h1>
          <p> This is a simple program to gather statistics on a block of text </p>
        </div>
      </section>
      <section>
        <form action="" method="POST">
          <div class="form-group">
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Type Your Text Below</label>
              <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
          </div>
          <button type="submit" class="btn btn-secondary btn-lg">Large button</button>
        </form>
      </section>
      <br>
      <hr>
      <section>
        <h1>Statistics: </h1>
        <hr>
        <br>
        <br>
        <div class="alert alert-primary" role="alert">
          <h4>Characters: <?= characters(); ?></h4>
          <?php //var_dump(match($punctuation, $input));?>
        </div>
        <div class="alert alert-secondary" role="alert">
          <h4>Letters:  <?= letters();?> </h4>
        </div>
        <div class="alert alert-success" role="alert">
          <h4>Consonants: <?= consonants(); ?></h4>
        </div>
        <div class="alert alert-danger" role="alert">
          <h4>Digits: <?= digit(); ?> </h4>
        </div>
        <div class="alert alert-warning" role="alert">
          <h4>Space:  <?= spaces();?></h4>
        </div>
        <div class="alert alert-info" role="alert">
          <h4>Word Characters:  <?= wordcharacters();  ?> </h4>
        </div>
        <div class="alert alert-light" role="alert">
          <h4>Punctuation: <?= punctuation(); ?> </h4>
        </div>
      </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  </body>

  </html>
