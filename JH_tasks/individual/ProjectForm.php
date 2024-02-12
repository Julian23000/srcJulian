<?php 
$title = "Picture Submission";
include 'header.php'; ?>



<form>
  <div class="mb-3">
    <label for="exampleInputName1" class="form-label">Name</label>
    <input type="Name" class="form-control" id="exampleInputName1" aria-describedby="NameHelp">
    <div id="emailHelp" class="form-text">Your name will not be mentioned in the published picstures!</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



<?php include 'footer.php'; ?>