<?php

session_start();
include("../common/db.php");
if(isset($_POST['signup'])){

    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $address=$_POST['address'];


    $user=$conn->prepare("INSERT INTO `users`
    (`id`,`username`,`email`,`password`,`address`)
    VAlUES (NUll,'$username','$email','$password','$address')");

    $result=$user->execute();
    if($result){
        $_SESSION["user"] = ["username" => $username, "email" => $email,"user_id" =>$user -> insert_id];
        header("Location: /KNOWIT");
    }
    else {
        echo "New user not registered";
    }
}
     if(isset($_POST['login'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $username="";
        $user_id = "";
        $query="select * from users where email = '$email' and password = '$password'";
        $result = $conn->query($query);
        if($result->num_rows==1){
            foreach($result as $row){
                $username=$row['username'];
                $user_id = $row['id'];
            }
            echo $username;
             $_SESSION["user"] = ["username" => $username, "email"  => $email,"user_id" => $user_id];
             header("location: /KNOWIT");
        }
        else{
            echo "user not registered";
        }
    }else if (isset($_GET['logout'])){
        session_unset();
        header("location: /KNOWIT");
    }
    else if (isset($_POST["ask"])){
        print_r($_SESSION);

    $title=$_POST['title'];
    $description=$_POST['description'];
    $category_id=$_POST['category'];
    $user_id=$_SESSION['user']['user_id'];


    $question=$conn->prepare("INSERT INTO `questions`
    (`id`,`title`,`description`,`category_id`,`user_id`)
    VAlUES (NUll,'$title','$description','$category_id','$user_id')");

    $result=$question->execute();
    $question->insert_id;
    if($result){
        header("Location: /KNOWIT");
    }
    else {
        echo "Question not added to website!!";
    }
    }
    elseif (isset($_POST["answer"])){

    $answer=$_POST['answer'];
    $question_id=$_POST['question_id'];
    $category_id=$_POST['category'];
    $user_id=$_SESSION['user']['user_id'];


    $query=$conn->prepare("INSERT INTO `answers`
    (`id`,`answer`,`question_id`,`user_id`)
    VAlUES (NUll,'$answer','$question_id','$user_id')");

    $result=$query->execute();
    if($result){
        header("Location: /KNOWIT?q-id=$question_id");
    }
    else {
        echo "answer not submited to question!!";
    }
    }



?>