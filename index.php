<?php
$max_length = intval($_GET['maxLength']) ?? 0;
require __DIR__ . './includes/functions/getRandomString.php'
?>

<!DOCTYPE html>
<html lang="en">

<?php require './includes/templates/head.php' ?>

<body>
    <div class="container my-5 p-5 border border-info rounded">
        <h1 class="fw-bold text-center mb-5">STRONG PASSWORD GENERATOR</h1>
        <form action="">
            <hr>
            <label for="maxLength">Max characters</label><br>
            <input class="input-control" type="number" name="maxLength" id="maxLength"><br>
            <input class="btn btn-primary mt-3" type="submit" value="GENERA!">
            <hr>
        </form>
        <?php if ($max_length) : ?>
            <div class="result">
                <h4 class="mb-4">Password generata:</h4>
                <p class="password"><?= getRandomString($max_length) ?></p>
            </div>
        <?php endif ?>
    </div>
</body>

</html>