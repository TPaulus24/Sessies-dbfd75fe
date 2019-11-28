<?php
session_start();
$_SESSION ['Skateboard'] = '1';
$_SESSION ['Basketbal'] = '2';
$_SESSION ['Skeelers'] = '3';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>

    <body>
        
    <h1>Skateboard <small>#<?php echo $_SESSION ['Skteboard']; ?></small></h1>
    <h1>Basketbal <small>#<?php echo $_SESSION ['Basketbal']; ?></small></h1>
    <h1>Skeelers <small>#<?php echo $_SESSION ['Skeelers'];  ?></small></h1>

    <form action="cart.php" method="post" class="form-example">
    <div class="form-example">
    <label for="text">keuze : </label>
    <input type="text" name="text" id="text" required placeholder="Voer hier je keuze">
    <input type="submit" name="submit" value="Verstuur!">
  </div>
</form>
  <br><br>

   


        <!-- maak hier de opdracht -->

        <?php
        
        if (!isset($_POST['submit'])) {
            exit();
        }
        if (!filter_var($_POST["text"], FILTER_VALIDATE_INT)) {
            exit("Niet geldig keuze.");
        }
        if ($_POST['text'] < 1 OR $_POST['text'] > 3) {
            exit("Geen geldige keuze.");
        }
          echo("Gekozen item : ") . $_POST['text'];;
        ?>

    </body>
</html>

