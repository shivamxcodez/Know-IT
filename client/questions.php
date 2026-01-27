<div class="container">
     <div class="row">
          <div class = "col-8">
     <h1 class="heading">Questions</h1>
<?php
include("./common/db.php");
$uid=NULL;
$limit = 5; // questions per page
$page = isset($_GET['page']) && $_GET['page'] > 0 ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

if(isset($_GET['c-id'])){
    $cid = $_GET['c-id'];
    $query="select * from questions where category_id = $cid";
}
else if(isset($_GET['u-id'])){
    $uid = $_SESSION['user']['user_id'];
    $query="select * from questions where user_id = $uid";
}
else if(isset($_GET['latest'])){
    $query="select * from questions order by id DESC";
}
else if(isset($_GET['search'])){
    $query="select * from questions where title like '%".$_GET['search']."%'";
}
else{
$query="select * from questions";
}
$result = $conn->query($query);
foreach($result as $row){
     $title = $row['title'];
     $id = $row['id'];
     echo "<div class='row question-list'>
     <h4 class='my-question'><a  href='?q-id=$id'>$title</a>";
     if ($uid !== null) {
    echo "<a class='my-question' href='./server/requests.php?delete=$id'>delete</a> ";
}

     echo "</h4> </div>";
}
?>
</div>  
<div class="col-4">
     <?php
     include("categorylist.php");
     ?>
</div>
</div>
</div>