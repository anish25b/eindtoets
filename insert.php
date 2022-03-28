<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Page</title>
</head>

<body>
    <h1>Invoeren van een nieuw merk</h1>
    <form method="post">
        <label>Merknaam:</label>
        <input type="text" name="name">
        <input type="submit" name="verzenden" value="Verzenden">
    </form>
</body>

<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=telefoons", "root", "");
    if (isset($_POST['verzenden'])) {
        $naam = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
        $query = $db->prepare("INSERT INTO merk (naam) VALUES(:naam)");
        $query->bindParam("naam", $naam);
        if ($query->execute()) {
            echo "De nieuwe gegevens zijn toegevoegd";
        } else {
            echo "Er is een fout opgetreden!";
        }
    }

    echo "<br>";
} catch (PDOException $e) {
    die("Error!: " . $e->getMessage());
}
?>
<a href="index.php">Terug naar overzicht</a>

</html>