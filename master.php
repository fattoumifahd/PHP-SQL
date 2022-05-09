<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/MYbootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Dynamic Content</title>
</head>
<body class=''>
    <?php include_once 'include/navbar.php'; ?>
    <?php include_once 'include/database.php'; ?>
    <form method="post" style='border:none;'>
        <input type="submit" class="btn btn-info" value="Dynamic Content" name='submit'>
    </form>
    <?php
        include_once 'indexs/index.php';
    ?>
    
</body>
</html>