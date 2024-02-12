<?php
$title = "Form Validation Example";
include 'header.php';
?>

<form action="" method="post">
Name: <input type="text" name="fname" required minlength="3" maxlength="30">
Email: <input type="email" name="email" required >
Password: <input type="password" name="password" required minlength="7" maxlength="20">
Age: <input type="number" name="age" min="18" max="100" >
<button type="submit" name="regSub"> Submit</button>
</form>


<?php
include 'footer.php';
?>