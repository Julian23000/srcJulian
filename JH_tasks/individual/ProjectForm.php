<?php
$title = "Form Validation Example";
include 'header.php';
?>

<div class="row" id="galleryForm">
<form>
  <div class="mb-3">
    <label for="name" class="form-label">Full name</label>
    <input type="text" id="name" name="name" class="form-control" required minlength="3" maxlength="25">
    <span id="nameError"></span>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail" class="form-label">Your Email</label>
    <input type="email" name="email" id="email" class="form-control" required>
    <span id="emailError"></span>
  </div>
  <div class="mb-3">
  <form action="upload.php" method="post" enctype="multipart/form-data">
  Upload your image here!:
  <input type="file" name="fileToUpload" id="fileToUpload"> <br></br>
  <input type="submit" value="Submit here!" name="submit">
  </form>
  </div>
</form>
</div>


<script>
function validateName() {
        const name = document.getElementById("name").value;
        const nameError = document.getElementById("nameError");
        // Check if the length of the name is between 3 and 20 characters
        if (name.length < 3 || name.length > 20) {
            nameError.innerHTML = "Name must be between 3 & 20 characters.";
            return false;
        } else {
            nameError.innerHTML = "";
            return true;
}
}

function validateEmail() {
    const email = document.getElementById("email").value;
    const emailError = document.getElementById("emailError");

    if (email === "" || !email.includes("@")) {
        emailError.innerHTML = "Please enter a valid email address";
        return false;
    } else {
        emailError.innerHTML = "";
        return true;
    }
}

// event listeners for real time validation
document.getElementById("name").addEventListener("input", validateName);
document.getElementById("email").addEventListener("input", validateEmail);

</script>







<?php
include 'footer.php';
?>