<?php
$max_length = intval($_GET['maxLength'] ?? 0);
require __DIR__ . './includes/functions/getRandomString.php';

session_start();

$_SESSION['password'] = getRandomString($max_length);
?>

<!DOCTYPE html>
<html lang="en">

<?php require './includes/templates/head.php' ?>

<body>
    <div class="container my-5 p-5 border border-info rounded">
        <h1 class="fw-bold text-center mb-5">STRONG PASSWORD GENERATOR</h1>
        <form action="result.php">
            <hr>
            <label for="maxLength">Max characters</label><br>
            <input class="input-control" type="number" name="maxLength" id="maxLength"><br>
            <input class="btn btn-primary mt-3" type="submit" value="GENERA!">
            <hr>
        </form>
    </div>
</body>

</html>