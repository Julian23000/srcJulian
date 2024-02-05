<?php 
$title = "Exercise 4";
include 'header.php'; ?>

<h1>If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting, use form to get user input).</h1>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="Name">Name:</label>
    <input type="text" Name="Name" required><br>

    <label for="Age">Age:</label>
    <input type="number" Name="Age" required><br>

    <input type="submit" value="Check Eligibility">
</form>

<br></br>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name = $_POST["Name"];
    $Age = $_POST["Age"];

if ($Age >= 18) {
    $result = "Congratulations, $Name! You are eligible for voting.";
} 

else 
{
    $result = "Unfortunately, $Name. You are not eligible for voting.";
}

echo "<p>$result</p>";
}
?>

<br></br>

<h2>Switch Case: Write a PHP script that gets the current month and prints one of the following responses, depending on whether it's August or not</h2>

<?php
$month = date("F");

switch ($month) {
    case 'August':
        echo "It's August, so it's still holiday.";
        break;
    default:
        echo "Not August, this is  $month, so I don't have any holidays.";
}
?>

<br></br>

<h3>While Loop: Write a PHP script that will print all the numbers from 1 to n. (use form to get user input)</h3>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Enter a number: <input type="number" Name="number" required>
        <input type="submit" Name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];

        echo "<h2>Multiplication Table of $number:</h2>";
        for ($i = 1; $i <= 10; $i++) {
            echo "$number x $i = " . ($number * $i) . "<br>";
        }
    }
    ?>

<br></br>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Enter a number: <input type="number" name="number" required>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];
        $i = 1;

        echo "<h2>Numbers from 1 to $number:</h2>";
        while ($i <= $number) {
            echo "$i ";
            $i++;
        }
    }
    ?>



<br></br>

<h5>Foreach Loop: Write a PHP script that will print all the elements of an array. $myarray=("HTML", "CSS", "PHP", "JavaScript").</h5>

<?php
$myarray = array("HTML", "CSS", "PHP", "JavaScript");

echo "<h2>Elements of the array:</h2>";
foreach ($myarray as $element) {
    echo "$element <br>";
}
?>

<?php include 'footer.php'; ?>