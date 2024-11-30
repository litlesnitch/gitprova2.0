<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 1</title>
</head>
<body>
    <?php
        $lname = ($_GET['lname'] ?? '');
    ?>

    <h1>Benvenuto <?php echo $lname; ?> nell'Esercizio 3 !</h1>
    <p>Questo è il codice utilizzato nella pagina Esercizio 1.</p>
    
    
    <xmp> <!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 1</title>
</head>
<body>
<!-- questo pezzo di codice passa il nome inserito al inizo -->
    <?php
        $lname = ($_GET['lname'] ?? '');
    ?>

    <h1>Benvenuto nell'Esercizio 1, <?php echo $lname; ?>!</h1>
    <p>Questa è la pagina dell'Esercizio 1.</p>

    <!--questi pezzi di codice fanno si che sia possibile navigare tra le varie pagine-->
    <form action="esercizio2.php" method="get" style="display:inline;">
        <input type="hidden" name="lname" value="<?php echo $lname; ?>">
        <button type="submit">Vai a Esercizio 2</button>
    </form>

    <form action="esercizio3.php" method="get" style="display:inline;">
        <input type="hidden" name="lname" value="<?php echo $lname; ?>">
        <button type="submit">Vai a Esercizio 3</button>
    </form>

    <form action="InizioGit.php" method="get" style="display:inline;">
        <input type="hidden" name="lname" value="<?php echo $lname; ?>">
        <button type="submit">Torna a Inizio Git</button>
    </form>
</body>
</html> </xmp>

    <form action="Esercizio1.php" method="get" style="display:inline;">
        <input type="hidden" name="lname" value="<?php echo $lname; ?>">
        <button type="submit">Vai a Esercizio 1</button>
    </form>

    <form action="Esercizio2.php" method="get" style="display:inline;">
        <input type="hidden" name="lname" value="<?php echo $lname; ?>">
        <button type="submit">Vai a Esercizio 2</button>
    </form>

    <form action="InizioGit.php" method="get" style="display:inline;">
        <input type="hidden" name="lname" value="<?php echo $lname; ?>">
        <button type="submit">Torna a Inizio Git</button>
    </form>
</body>
</html>
