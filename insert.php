<h3> invoeren van nieuwe merk</h3>
<form method="post" action="">
    <label> Merknaam:</label>
    <input type="text" name="merk">
    <input type="submit" name="verzenden" value="verzenden">
</form>


<?php
 try{
     $db = new PDO("mysql:host=localhost;dbname=autos","root","");
     $query = $db-> prepare("SELECT * FROM merk");
     $query-> execute();
     $result = $query->fetchALL(PDO::FETCH_ASSOC);
     foreach($result as $data){
         echo "<a href= insert.php?id=". $data['id']."'>";
         echo $data ["merk"] . " " . $data["naam"];
         echo "</a>";
         echo"<br>";
     }
 }catch (PDOException $e){
     die ("ERROR!:" . $e-> getMessage());
 }
 if ($query->execute()){
     echo" merk toegevoed";}
         else {"vul iets in";
     }
 
?>

<br><br>
<a href="index.php">Terug naar overzicht<a>