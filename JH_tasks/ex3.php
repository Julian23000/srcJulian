<?php
$title = "Exercise 3";
include 'header.php'; ?>


<h1>Form Creation: Create a simple HTML form to collect the user's Firstname and Lastname. Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an h3 tag </h1>

<form method="post" action=> 
    Name: <input type="text" name="nimi" required> <br></br>
    Email: <input type="email" name="email" required> <br></br>
    DOB: <imput type="date" name="dob"> <br></br>
    Select Color: <input type="color" name="color"> <br></br>
    <input type="submit" name="submit"> <br></br>


<?php include 'footer.php'; ?>