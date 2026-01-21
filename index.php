<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KnowIT</title>
    <?php include('./client/commonFiles.php') ?>
</head>
<body>
    <?php 
    include('./client/header.php');
    if(isset($_GET['Signup'])){
        include('./client/Signup.php');
    }
    else if(isset($_GET['Login'])){
        include('./client/Login.php');
    }
    else{
    //
    }
        
    ?>

</body>
</html>