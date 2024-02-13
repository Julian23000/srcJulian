<?php
$title = "Form Validation Example";
include '../individual/header.php';
?>

<?php
if(isset($_FILES['fileToUpload'])){
  move_uploaded_file($_FILES['fileToUpload']['tmp_name'], "Images/". $_FILES['fileToUpload']['name']);
}
else{
    echo "image not found!";
}
?>

<?php
include '../individual/footer.php';
?>