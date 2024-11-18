<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 2</title>
</head>
<body>
    <?php
        $lname = ($_GET['lname'] ?? '');
    ?>

    <h1>Benvenuto nell'Esercizio 2, <?php echo $lname; ?>!</h1>
    <p>Questa è la pagina dell'Esercizio 2.</p>
	
	<p>questo è un esempio di codice utilizzato per passare il tuo nome e per muoversi 
	trale varie pagine </p>
	
<pre>
<b>
<?php
echo htmlspecialchars('<form action="Esercizio1.php" method="get" style="display:inline;">
    <input type="hidden" name="lname" value="<?php echo $lname; ?>">
    <button type="submit">Vai a Esercizio 2</button>
</form>');
?>
</b>
</pre>




    <form action="Esercizio1.php" method="get" style="display:inline;">
        <input type="hidden" name="lname" value="<?php echo $lname; ?>">
        <button type="submit">Vai a Esercizio 1</button>
    </form>

    <form action="Esercizio3.php" method="get" style="display:inline;">
        <input type="hidden" name="lname" value="<?php echo $lname; ?>">
        <button type="submit">Vai a Esercizio 3</button>
    </form>

    <form action="InizioGit.php" method="get" style="display:inline;">
        <input type="hidden" name="lname" value="<?php echo $lname; ?>">
        <button type="submit">Torna a Inizio Git</button>
    </form>
</body>
</html>

	  
	  
	   
	    
		
		