<?php
$message = '';

$max_length = $_GET['maxLength'] ?? '';
require __DIR__ . '/includes/functions/getRandomString.php';

session_start();

$_SESSION['password'] = getRandomString($max_length);

if ($max_length) {
    header('Location: ./result.php');
} elseif (isset($_GET['maxLength'])) {
    $message = 'Inserisci un valore valido';
}
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
        <?php if ($message) : ?>
            <div class="alert alert-danger" role="alert">
                <?= $message ?>
            </div>
        <?php endif ?>
    </div>
</body>

</html>