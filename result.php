<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->
<?php require __DIR__ . '/includes/templates/head.php' ?>

<body>
    <div class="container my-5 border border-info p-5 text-center">
        <div class="result">
            <h4 class="mb-4">Password:</h4>
            <p class="password"><?= $_SESSION['password'] ?></p>
        </div>
        <a class="btn btn-primary mt-5" href="index.php">Go back to home</a>
    </div>
</body>

</html>