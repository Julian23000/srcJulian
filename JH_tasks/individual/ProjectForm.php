<?php
$title = "Form Validation Example";
include 'header.php';
?>

<div class="row" id="galleryForm">
<form onsubmit="return validateName()">
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputName" required minlength="3" maxlength="30" aria-describedby="NameHelp">
    <div id="NameHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail" class="form-label">Email</label>
    <input type="text" class="form-control" id="exampleInputEmail">
  </div>
    <div class="mb-3">
    <label for="exampleInputEmail">
  <button type="submit" class="btn btn-primary" >Submit</button>
</form>
</div>


<script>
function validateName() {
    const name = document.getElementById("exampleInputName").value;
    if (name.length < 3 || name.length > 20) {
        alert("Please enter a name between 3 and 20 letters");
        return false;
    } else {
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

function validateAge() {
    const age = document.getElementById("age").value;
    
}

// event listeners for real time validation
document.getElementById("name").addEventListener("input", validateName);
document.getElementById("email").addEventListener("input", validateEmail);

</script>






<?php
include 'footer.php';
?>