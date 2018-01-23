<?php 
     include 'header.php';
 ?>

<div class="row">
    <div class="col-md-6 offset-md-3">
        <h1 class="text-center">The Paint Company</h1>
        <br>
        <br>
        <form class="group-control" action="displayResults.php" method="POST">
            <div class="md-form">
                <i class="fa fa-home prefix grey-text"></i>
                <!-- type is { number } which volidates for numbers only -->
                <input type="number" step="0.01" min="0" id="defaultForm-email" name="wallspace" class="form-control" required>
                <label for="defaultForm-email">Square Feet of Wall Space</label>
            </div>
            <br>
            <br>
            <br>

            <div class="md-form">
                <i class="fa fa-paint-brush prefix grey-text"></i>
                <!-- type is { number } which volidates for numbers only -->
                <input type="number" step="0.01" min="0" id="defaultForm-email" name="gallon" class="form-control" required>
                <label for="defaultForm-email">Price of Paint Per Gallon</label>
            </div>

            <!-- The submission button -->
            <div class="text-center">
                <button class="btn btn-secondary">Login</button>
            </div>
        </form>
        <!-- Form login -->
    </div>
</div>
<?php 
    include 'footer.php';
 ?>
