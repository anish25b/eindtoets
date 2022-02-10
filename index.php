<h2>Auto merken:</h2>
<h4> Naam</h4>
<?php
 try{
     $db = new PDO("mysql:host=localhost;dbname=autos","root","");
     $query = $db-> prepare("SELECT * FROM merk");
     $query-> execute();
     $result = $query->fetchALL(PDO::FETCH_ASSOC);
     foreach($result as $data){
         echo  $data ["naam"] .  " <a href=detail.php>detail<a>" . "<br>";
     }
 }catch (PDOException $e){
     die ("ERROR!:" . $e-> getMessage());
 }
 
 ?><br>
 <h5>aantal merken is 6 </h5>
 <a href="insert.php">Merk toevoegen<a>
 