<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telefoons</title>
</head>

<body>
    <h1>Telefoons Merken</h1>
    <?php

    try {
        $db = new PDO("mysql:host=localhost;dbname=telefoons", "root", "");
        $query = $db->prepare("SELECT * FROM merk");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $data) {
            echo $data["naam"] . "
            <a href='detail.php?id=" . $data["id"] . "'>detail</a>
            <br>";
        }
    } catch (PDOException $e) {
        die("Error!: " . $e->getMessage());
    }
    ?>
    <p>Aantal merken is <?php echo count($result); ?></p>
    <a href="insert.php">Merk Toevoegen</a>


</body>

</html>