
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a href="./"><img src="public\knowit-logo.png" alt="Knowit Logo" width="350" height="100" class="d-inline-block align-text-top"></img></a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./">Home</a>
        </li>
        <?php 
        if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
        if (isset($_SESSION['user']['username'])) { ?>
          <li class="nav-item">
          <a class="nav-link" href="./server/requests.php?logout=true">Logout (<?php echo ucfirst($_SESSION['user']['username']); ?>)</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="?ask=true">Ask A Question</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="?u-id=<?php  echo $_SESSION['user']['user_id']?>">My Question</a>
        </li>
        <?php }?>
        <?php 
        if (!isset($_SESSION['user']['username'])) { ?>
        <li class="nav-item">
          <a class="nav-link" href="?Login=true">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?Signup=true">Sign Up</a>
        </li>
        <?php }?>
        <li class="nav-item">
          <a class="nav-link" href="?latest=true">Latest Question</a>
        </li>
      </ul>
    </div>
      <form class="d-flex" action="">
        <input class="form-control me-2" name="search" type="search" placeholder="Search Questions" >
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
  </div>
</nav>