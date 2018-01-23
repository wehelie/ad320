<?php 
     include 'header.php';
     include 'App.php';
     App::gallonsOfPaint('wallspace');
 ?>

<div class="display row">
    <h1 class="text-center">Grand Total</h1>
    <br>
    <br>
    <div class="col">
        <div class="card border-primary mb-3" style="max-width: 18rem;">
            <h3 class="card-header">Gallons of Paint</h3>
            <div class="card-body text-primary">
                <h1 class="text-center"> <?= htmlentities(App::gallonsOfPaint('wallspace'))?> </h1>
            </div>
        </div>
        <div class="card border-secondary mb-3" style="max-width: 18rem;">
            <h3 class="card-header">Hours of Labor</h3>
            <div class="card-body text-secondary">
                <h1 class="text-center"> <?= htmlentities(App::hoursOfLabor('wallspace'))?> </h1>
            </div>
        </div>
        <div class="card border-success mb-3" style="max-width: 18rem;">
            <h3 class="card-header">Cost of Paint</h3>
            <div class="card-body text-success">
                <h1 class="text-center"> <?= htmlentities(sprintf('$%0.2f', App::costOfPaint('gallon')))?> </h1>

            </div>
        </div>
        <div class="card border-danger mb-3" style="max-width: 18rem;">
            <h3 class="card-header">Labor Charges</h3>
            <div class="card-body text-danger">
                <h1 class="text-center"> <?= htmlentities(sprintf('$%0.2f',App::hoursOfLabor('wallspace') * 20))?> </h1>

            </div>
        </div>
        <div class="card border-warning mb-3" style="max-width: 18rem;">
            <h3 class="card-header">Total paint Cost</h3>
            <div class="card-body text-warning">
                <h1 class="text-center"><?= htmlentities(sprintf('$%0.2f',App::hoursOfLabor('wallspace') * 20 + App::costOfPaint('gallon')))?></h1>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<?php 
    include 'footer.php';
 ?>
