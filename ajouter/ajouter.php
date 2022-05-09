<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once '../include/asset.php';?> 
    

    <title>Ajouter</title>
</head>
<body>
    <?php include_once '../include/navbar.php'; ?>
        <section class="container">
            <form method="post" class="FORMAJOUTER">
                <?php
                if(isset($_POST['submit'])) {
                    $name = htmlspecialchars( $_POST['nom']);
                    $prenom  = htmlspecialchars($_POST['prenom']);
                    $age = htmlspecialchars($_POST['age']);
                    if (!empty($name) && !empty($prenom) && !empty($age)) {
                    include_once '../include/database.php';
                    $sqlState = $pdo->prepare("INSERT INTO stagiaire VALUE(NUll,?,?,?)");
                    $sqlState->execute([$prenom , $name , $age]);
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
            };  
        ?>
                <label class="text-dark">Prenom</label>
                <input type="text" name="prenom">
                <label class="text-dark">Nom :</label>
                <input type="text" name="nom">
                <label class="text-dark">Age :</label>
                <input type="number" name="age">
                <input type="submit" class="btn btn-primary" value="Ajouter Stagiaire" name="submit">
            </form>
    </section>
    
</body>
</html>