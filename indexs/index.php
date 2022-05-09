<?php
include_once 'include/asset.php';
include_once 'include/database.php';
?>

<div class="container">
    <?php 
        $sqlState = $pdo->query("SELECT * FROM tp_mouad.stagiaire");
        $values = $sqlState->fetchAll(PDO::FETCH_ASSOC);
        // echo "<pre>";
        //     print_r($values);
        // echo "</pre>"



    ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Prenom</th>
                <th scope="col">Nom</th>
                <th scope="col">Age</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            foreach ($values as $key => $value) {
                ?>
                    <tr class="trs">
                        <td><span class="badge rounded-pill bg-primary"><?php echo $value['id']?></span></td>
                        <td><?php echo $value['nom']?></td>
                        <td><?php echo $value['prenom']?></td>
                        <td><?php echo $value['age']?></td>
                        <td class="flex">
                            <form method='post' class="operations" style="border: none; " >
                                <input type="hidden" name="id" value="<?php echo $value['id']?>">
                                <input formaction="supprimer/supprimer.php" type="submit" value="Supprimer"  name='supprimer' class="btn btn-danger" onclick="return confirm('Are You Sur About Delete This <?php echo $value['prenom'].' '. $value['nom']?>')">
                                <input  formaction="modifier/modifier.php" type="submit" name="modifier" value="Modifier" class="btn btn-warning">
                            </form>
                        </td>
                    </tr>
                <?php 
            }
                ?>
        </tbody>
    </table>
</div>