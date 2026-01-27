
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <img src="public\logo.png" alt="Knowit Logo" width="100" height="100" class="d-inline-block align-text-top"></img>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./">Home</a>
        </li>
        <?php 
        if($_SESSION['user']['username']){ ?>
          <li class="nav-item">
          <a class="nav-link" href="./server/requests.php?logout=true">Logout</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="?ask=true">Ask A Question</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="?u-id=<?php echo $_SESSION['user']['user_id']?>">My Question</a>
        </li>
        <?php }?>
        <?php 
        if(!$_SESSION['user']['username']){ ?>
        <li class="nav-item">
          <a class="nav-link" href="?Login=true">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?Signup=true">Sign Up</a>
        </li>
        <?php }?>
        <li class="nav-item">
          <a class="nav-link" href="#">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?latest=true">Latest Question</a>
        </li>
      </ul>
    </div>
  </div>
</nav>