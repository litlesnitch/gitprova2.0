<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inizio Git</title>
</head>
<body>
    <?php
        $lname = $_GET['lname'] ?? '';
    ?>

    <h1>Benvenuto, <?php echo $lname; ?></h1>
    <p>Scegli l'esercizio a cui vuoi accedere:</p>

    <form action="Esercizio1.php" method="get" >
        <input type="hidden" name="lname" value="<?php echo $lname; ?>">
        <button type="submit">Esercizio 1,fa vedere il risultato del codice</button>
    </form>

    <form action="esercizio2.php" method="get" >
        <input type="hidden" name="lname" value="<?php echo $lname; ?>">
        <button type="submit">Esercizio 2, questa pagina fa vedere il form </button>
    </form>

     <form action="esercizio3.php" method="get" >
        <input type="hidden" name="lname" value="<?php echo $lname; ?>">
        <button type="submit">Esercizio 3, questa pagina fa vedere tutti i vari codici per intero</button>
    </form>

    <br><br>

    <!-- Bottone per tornare alla pagina principale -->
    <form action="IndexPrincipale.html" method="get" style="display:inline;">
        <button type="submit">Torna all'Index Principale</button>
    </form>
</body>
</html>
