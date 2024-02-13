<?php
$title = "Form Validation Example";
include '../individual/header.php';
?>

<form action="upload.php" method="POST" enctype="multipart/form-data">
    
    <input type="file" name="imageToUpload">
    <input type="submit" name="submit" value="Submit">
    
    </form>

<?php
include '../individual/footer.php';
?>