<?php 
    if(isset($_POST['supprimer']))
    require_once '../include/database.php';
    $id = $_POST['id'];
    $sqlstate = $pdo->prepare('DELETE FROM stagiaire WHERE id=? ');
    $result = $sqlstate->execute([$id]);
    header('location: ../master.php ');
    include_once 'ajouter.php'

?>