<?php
 try{
     $db = new PDO("mysql:host=localhost;dbname=autos","root","");
     $query = $db-> prepare("SELECT * FROM model");
     $query-> execute();
     $result = $query->fetchALL(PDO::FETCH_ASSOC);
     foreach($result as $data){
         echo $data ["naam"] . "<br>";
     }
 }catch (PDOException $e){
     die ("ERROR!:" . $e-> getMessage());
 }
 ?><br>
 <a href="index.php">Terug naar overzicht<a>