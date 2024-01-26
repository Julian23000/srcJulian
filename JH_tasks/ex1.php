<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocumExercise 1: Getting Started with PHP - Julian</title>
</head>
<body>
    <h3>3.1 Write PHP code to output the following message:
    Hello world! My name is "David"
    </h3>
    <?php
    //use backslash to escape special characters like"
    echo "Hello world! My name is \"David\"";
    ?>

    <?php
    $title = "PHP is interesting";
    echo "<h4>$title</h4>";
    ?>

    <?php
    $g1 = 5;
    $g2 = 4;
    $g3 = 5;
    ?>

    <table>
        <tr><th>S.n.</th> <th>Name</th> <th>Grade</th></tr>
        <tr>
        <td>1</td>
        <td>John</td>
        <td><?php echo $g1?></td>
        </tr>

        <tr>
        <td>2</td>
        <td>Jake</td>
        <td><?php echo $g2?></td>
        </tr>

        <tr>
        <td>3</td>
        <td>Jona</td>
        <td><?php echo $g3?></td>
        </tr>
    </table>

    <img src="images/Ex1Pic.png">
</body>
</html>