<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once '../include/asset.php'?>
    <title>Modifer</title>
</head>
<body>
    <?php
        include_once '../include/navbar.php';
        include_once '../include/database.php';
        if (!isset($_POST['id'])) {
            header('location: mester.php');
        }
        $id = $_POST['id']; 
        $sqlstate = $pdo->prepare("SELECT * FROM stagiaire WHERE id=?");
        $sqlstate->execute([$id]);
        $result = $sqlstate->fetch(PDO::FETCH_OBJ); 
        ?>
        <div class="container mr-auto">
            <h4 class="btn btn-info" style="cursor: auto;">Modifier Stagiaire</h4>
        </div>
        <section class="container">
            <form method="post" class="FORMAJOUTER">
            <?php 
            if (isset($_POST['update'])) {
                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $age = $_POST['age'];
                if (!empty($nom) && !empty($prenom) && !empty($age)) {
                    $sqlstate = $pdo->prepare("UPDATE stagiaire SET nom=? ,  prenom=?, age=? WHERE id=?"  );
                    $insert = $sqlstate->execute([ $nom, $prenom, $age, $id]);
                    ?>
                    <div class="alert alert-success" role="alert">
                        This Intern Is Added Successfeuli &check; 
                    </div>
                    <?php
                }else {
                    ?>
                    <div class="alert alert-danger" role="alert">
                        this All Information Is Mandatory <span class="size-3">&#10006;</span> 
                    </div>
                    <?php
                }
                
            }
            ?>
                <input type="hidden" name="id" value='<?php echo $result->id?>'>
                <label class="text-dark">Nom :</label>
                <input type="text" name="nom" value="<?php echo $result->nom?>">
                <label class="text-dark">Prenom :</label>
                <input type="text" name="prenom" value="<?php echo $result->prenom?>">
                <label class="text-dark">Age :</label>
                <input type="number" name="age" value="<?php echo $result->age?>">
                <input type="submit" class="btn btn-primary" value="Modifier Stagiaire" name="update">
            </form>
        </section>
</body>
</html>