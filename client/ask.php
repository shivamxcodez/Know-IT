<div class="container">
    <h1 class="heading">Ask a question</h1>
    
<form action="./server/requests.php" method="POST">
  
  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Enter Question">    
  </div>
  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="title" class="form-label">Description</label>
    <textarea type="text" name="description" class="form-control" id="description" placeholder="Enter Question description"></textarea>    
  </div>
  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="categpory" class="form-label">Category</label>
    <?php 
    include("category.php");
    ?>  
  </div>

<div class="col-6 offset-sm-3 margin-bottom-15">
  <button type="submit" name="ask" class="btn btn-primary">Ask Question</button>
</div>
</form>
</div>