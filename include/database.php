<?php 
try {
    $pdo = new PDO('mysql:host=localhost;dbname=tp_mouad','root','');   
} catch (PDOException $e) {
    die("erreur connexion :" .$e->getMessage());
}

?>