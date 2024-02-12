<?php
$title = "Form Validation Example";
include 'header.php';
?>

<form action="" method="post">
Name: <input type="text" name="fname" required minlength="3" maxlength="30" id="name"> <br>
<span id ="nameError"></span><br>
Email: <input type="email" name="email" required id="email"> <br>
<span id ="emailError"></span><br>
Password: <input type="password" name="password" required minlength="7" maxlength="20" id="password"> <br>
<span id ="passwordError"></span><br>
Age: <input type="number" name="age" min="18" max="100" id="age"> <br>
<span id ="ageError"></span><br>
<button type="submit" name="regSub"> Submit</button>
</form>

<script>
function validateName() {
    const name = document.getElementById("name").value;
    const nameError = document.getElementById("nameError");

    if (name.length < 3 || name.length > 20) {
        nameError.innerHTML = "Name must be between 3 & 20 characters";
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

function validatePassword() {
    const password = document.getElementById("password").value;
    const passwordError = document.getElementById("passwordError");

    if (password.length < 6) {
        passwordError.innerHTML = "Your password must be at least 6 characters long";
        return false;
    } else {
        passwordError.innerHTML = "";
        return true;
    }
}

function validateAge() {
    const age = document.getElementById("age").value;
    
}

// event listeners for real time validation
document.getElementById("name").addEventListener("input", validateName);
document.getElementById("email").addEventListener("input", validateEmail);
document.getElementById("password").addEventListener("input", validatePassword);



</script>






<?php
include 'footer.php';
?>