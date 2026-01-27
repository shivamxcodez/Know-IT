<div class="container">
    <div class="row">
        <h1 class="heading">Question</h1>
        <div class="col-8">
    <?php
    include("./common/db.php");
    $query="select * from questions where id = $qid";
    $result = $conn->query($query);
    $row=$result->fetch_assoc();
    $cid = $row['category_id'];
    echo "<h4 class='margin-bottom-15 question-title'>Question : ".$row['title']."</h4>
    <p class='margin-bottom-15'>".$row['description']."</p>";
    include("answers.php");
    ?>
    <form action="./server/requests.php" method="POST">
        <input type="hidden" name="question_id" value="<?php echo $qid; ?>">
    <textarea name="answer" class="form-control margin-bottom-15" placeholder=" your answer..."></textarea>
    <button class="btn btn-primary margin-bottom-15">Write your answer</button>
    </form>
</div>
<div class="col-4">
     <?php
     $categoryQuery="select name from category where id = $cid";
     $catresult = $conn->query($categoryQuery);
        $catrow = $catresult->fetch_assoc();
        echo "<h3 class='margin-bottom-15'>".ucfirst($catrow['name']). " Questions </h3>";
     $query="select * from questions where category_id = $cid AND id != $qid";
     $result = $conn->query($query);
     foreach($result as $row){
     $title = $row['title'];
     $id = $row['id'];
     echo "<div class='row question-list'> <h4><a href='?q-id=$id'>$title</a></h4> </div>";
}
     ?>
</div>
</div>