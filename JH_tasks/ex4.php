<?php 
$title = "Exercise 4";
include 'header.php'; ?>

<h1>If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting, use form to get user input).</h1>

<?php 
    $Name;
    $Age;

    if($Age >= 18)
    {
        echo "The person is eligible for voting!";
    }

    else
    {
        echo "The person is not eligible for voting!";
    }
?>

<?php include 'footer.php'; ?>