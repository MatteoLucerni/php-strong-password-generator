<?php
$max_length = intval($_GET['maxLength']) ?? 0;
var_dump($max_length);
function getRandomString($max)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $random_string = '';
    for ($i = 0; $i < $max; $i++) {
        $random_index = rand(0, strlen($characters) - 1);
        $random_string .= $characters[$random_index];
    }

    return $random_string;
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://static.vecteezy.com/system/resources/previews/013/296/520/original/lock-locked-school-blue-dotted-line-line-icon-free-vector.jpg" type="image/x-icon">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css' integrity='sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==' crossorigin='anonymous' />
    <link rel="stylesheet" href="css/style.css">
    <title>Password Generator</title>
</head>

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
                <h4>Password generata:</h4>
                <p><?= getRandomString($max_length) ?></p>
            </div>
        <?php endif ?>
    </div>
</body>

</html>