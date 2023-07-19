<?php
// prendo la flag per il repeat
$noRepeat = isset($_GET['noRepeat']);

$error = '';
// prendo il valore della maxLength da GET
$max_length = $_GET['maxLength'] ?? '';

// funzione per la stringa randomica
require __DIR__ . '/includes/functions/getRandomString.php';

// avvio la sessione
session_start();

// salvo la password generata
$_SESSION['password'] = getRandomString($max_length, $noRepeat);

// validazione dati utente
if ($max_length && $max_length <= 50) {
    // se va bene faccio il redirect al risultato
    header('Location: ./result.php');
} elseif ($max_length > 50) {
    // nel caso il valore sia troppo alto
    $error = 'Inserisci un valore minore o uguale a 50';
} elseif (isset($_GET['maxLength'])) {
    // nel caso il valore sia vuoto
    $error = 'Inserisci un valore valido';
}
?>

<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->
<?php require './includes/templates/head.php' ?>

<body>
    <div class="container my-5 p-5 border border-info rounded">
        <h1 class="fw-bold text-center mb-5">STRONG PASSWORD GENERATOR</h1>
        <!-- form -->
        <form action="">
            <hr>
            <!-- input numero massimo caratteri -->
            <label for="maxLength">Max characters</label><br>
            <input class="input-control mb-3" type="number" name="maxLength" id="maxLength" max="50" required><br>
            <!-- checkbox per non ripetizione -->
            <div class="form-check form-switch my-4">
                <input class="form-check-input" type="checkbox" role="switch" id="noRepeat" name="noRepeat">
                <label class="form-check-label" for="noRepeat">No character repeat</label>
            </div>
            <label>Permitted charachters: </label>
            <!-- lettere -->
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="hasLetters" name="hasLetters">
                <label class="form-check-label" for="hasLetters">Letters</label>
            </div>
            <!-- numeri -->
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="hasNumbers" name="hasNumbers">
                <label class="form-check-label" for="hasNumbers">Numbers</label>
            </div>
            <!-- caratteri speciali -->
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="hasSpecialChars" name="hasSpecialChars">
                <label class="form-check-label" for="hasSpecialChars">Special chars</label>
            </div>
            <!-- bottone di invio -->
            <input class="btn btn-primary mt-3" type="submit" value="GENERA!">
            <hr>
        </form>
        <!-- alert di errore -->
        <?php if ($error) : ?>
            <div class="alert alert-danger" role="alert">
                <?= $error ?>
            </div>
        <?php endif ?>
    </div>
</body>

</html>