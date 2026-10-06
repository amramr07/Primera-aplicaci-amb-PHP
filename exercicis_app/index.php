<?php
function esMajorEdat($edat) {
    if ($edat >= 18) {
        return true;
    } else {
        return false;
    }
}

function mitjana($notes) {
    $suma = 0;
    foreach ($notes as $n) {
        $suma = $suma + $n;
    }
    return $suma / count($notes);
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $edat_txt = $_POST["edat"];
    $numero_txt = $_POST["numero"];

    if ($nom == "" || $edat_txt == "" || $numero_txt == "") {
        $error = "Tots els camps són obligatoris.";
    } elseif ($numero_txt < 1 || $numero_txt > 10) {
        $error = "El número ha d'estar entre 1 i 10.";
    } else {
        $edat = (int) $edat_txt;
        $numero = (int) $numero_txt;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Exercici 5</title>
</head>
<body>

<form method="post">
    Nom: <input type="text" name="nom"><br>
    Edat: <input type="number" name="edat"><br>
    Número (1-10): <input type="number" name="numero"><br>
    <input type="submit" value="Envia">
</form>

<?php if ($error != "") { ?>
    <p style="color:red;"><?php echo $error; ?></p>
<?php } ?>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST" && $error == "") { ?>

    <p>Hola <?php echo $nom; ?>, tens <?php echo $edat; ?> anys.</p>

    <?php if (esMajorEdat($edat)) { ?>
        <p>Ets major d'edat.</p>
    <?php } else { ?>
        <p>Ets menor d'edat.</p>
    <?php } ?>

    <p>Taula del <?php echo $numero; ?>:</p>
    <?php for ($i = 1; $i <= 10; $i++) { ?>
        <p><?php echo $numero . " x " . $i . " = " . ($numero * $i); ?></p>
    <?php } ?>

    <p>Compte enrere:</p>
    <p>
    <?php
        $i = $numero;
        while ($i >= 1) {
            echo $i . " ";
            $i = $i - 1;
        }
    ?>
    </p>

    <p>Les notes són:</p>
    <p>
    <?php
        $notes = [6, 7.5, 8];
        foreach ($notes as $n) {
            echo $n . " ";
        }
    ?>
    </p>

    <p>La mitjana de les notes és: <?php echo round(mitjana($notes), 2); ?></p>

<?php } ?>

</body>
</html>