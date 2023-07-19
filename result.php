<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<?php require __DIR__ . '/includes/templates/head.php' ?>

<body>
    <div class="container my-5 border border-info p-5">
        <div class="result text-center">
            <h4 class="mb-4">Password generata:</h4>
            <p class="password"><?= $_SESSION['password'] ?></p>
        </div>
    </div>
</body>

</html>