<?php
 include('../include/header.php');
 ?>
<a class="btn btn-success" href="index.php">Go Back</a>

<form action="store.php" method = "post">
  <div class="form-group"><br/><br/>
    <label for="Name">Name:</label>
    <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
  </div>
  <div class="form-group">
    <label for="Class">Class:</label>
    <input type="text" class="form-control" id="class" placeholder="class" name="class" required>
  </div>
   
   <div class="form-group">
    <label for="Roll">Roll:</label>
    <input type="text" class="form-control" id="roll" placeholder="Roll" name="roll" required>
  </div>
 
  <button type="submit" name="submit" value="submit" class="btn btn-primary">submit</button>
</form> 

</div>



<?php include('../include/footer.php'); ?>