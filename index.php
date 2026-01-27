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
    session_start();
    include('./client/header.php');
    if(isset($_GET['Signup']) && !isset($_SESSION['user']['username'])){
        include('./client/Signup.php');
    }
    else if(isset($_GET['Login']) && !isset($_SESSION['user']['username'])){
        include('./client/Login.php');
    }
    else if(isset($_GET['ask'])){
        include('./client/ask.php');

    }
    else if(isset($_GET['q-id'])){
        $qid = $_GET['q-id'];
        include('./client/question-details.php');

    }
    else{
    include('./client/questions.php');
    }
        
    ?>

</body>
</html>