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

    <br></br>

<h2>HTML Table: Prepare a simple HTML table and apply Bootstrap styles to it. Note, you have already done a table in Exercise</h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Julian</td>
      <td>Hack</td>
      <td>@BD</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Liisi</td>
      <td>Kuusk</td>
      <td>@Instagram</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@KFC</td>
    </tr>
  </tbody>
</table>

<br></br>

<h3> Write a PHP script with two string variables ($str1 = "Hello"; $str2 = "World";). Join them together and print the length of the string.</h3>

<?php

$str1 = "Hello ";
$str2 = "fellow students";

echo $str1 . $str2;
?>

<br></br>

<h4>Number Addition: Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and an echo statement to output your answer.</h3>

<?php
$number1 = 298;
$number2 = 234;
$number3 = 46;

echo $number1 . $number2 . $number3
?>

<br></br>

<h5>Browser Detection: Write a PHP script to detect the browser being used to view your pages. Hint: Use predefined variables: $_SERVER</h5>

<?php
echo $_SERVER['HTTP_USER_AGENT'];
?>

<br></br>

<h6>File Modification Time: Write a PHP script in the footer section of your universal footer to display the last modification time of a file.</h6>

<?php

$currentPage= $_SERVER['SCRIPT_NAME'];
            $pageName = basename($currentPage);
            $lastModification = filemtime($pageName);
            $dateModified = date('Y-m-d H:i:s', $lastModification);
?>

<h7><?php echo 'Page: ' . $pageName ?> </h7> 

<h8><?php echo 'Latest modification done: ' . $dateModified ?> </h8>


<?php include 'footer.php'; ?>