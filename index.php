<?php
$error = '';

$max_length = $_GET['maxLength'] ?? '';
require __DIR__ . '/includes/functions/getRandomString.php';

session_start();

$_SESSION['password'] = getRandomString($max_length);

if ($max_length && $max_length <= 50) {
    header('Location: ./result.php');
} elseif ($max_length > 50) {
    $error = 'Inserisci un valore minore o uguale a 50';
} elseif (isset($_GET['maxLength'])) {
    $error = 'Inserisci un valore valido';
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
            <input class="input-control mb-3" type="number" name="maxLength" id="maxLength" max="50"><br>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="noRepeat" name="noRepeat">
                <label class="form-check-label" for="noRepeat">No character repeat</label>
            </div>
            <input class="btn btn-primary mt-3" type="submit" value="GENERA!">
            <hr>
        </form>
        <?php if ($error) : ?>
            <div class="alert alert-danger" role="alert">
                <?= $error ?>
            </div>
        <?php endif ?>
    </div>
</body>

</html>