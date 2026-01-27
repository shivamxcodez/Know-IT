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
        $qid = $_SESSION['user']['user_id'];
        include('./client/question-details.php');

    }
    else if(isset($_GET['c-id'])){
        $cid = $_GET['c-id'];
        include('./client/questions.php');

    }
    else if(isset($_GET['u-id'])){
        $cid = $_GET['u-id'];
        include('./client/questions.php');

    }
    else if(isset($_GET['latest'])){
        include('./client/questions.php');

    }
    else if(isset($_GET['search'])){
        $search = $_GET['search'];
        include('./client/questions.php');

    }
    else{
    include('./client/questions.php');
    }
        
    ?>

</body>
</html>