<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="An Italian restaurant located in Hameenlinna serving typical italian cuisine">
    <meta name="keywords" content="Italian, Restaurant, Hameenlinna, Cheap, Lunch, Dinner">
    <title><?php echo $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="scale_styles.css">
</head>
<body>
<div class="container-fluid">
    <div class="row" id="header"> <!--Header-->
        <div class="col-sm-4" id="logodiv"><!---Logo-->
            <a href="#"><img src="images/headerFooter/flag-of-italy.png" alt="Logo" class="center"
                                      id="header-logo"></a>
        </div>
        <div class="col-sm-8">
            <div class="row" id="title"> <!---Name-->
                <h1 class="header-title">Amici Ristorante</h1>
            </div>
            <div class="row" id="title-underline">
                <img src="images/headerFooter/underline-title.png" id="underline" alt="">
            </div>

            <div class="row" id="navigation"> <!---Navbar-->
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                
                                <a class="nav-link" href="ex1.php">Exercise 1</a>
                                <a class="nav-link" href="ex2.php">Exercise 2</a>
                                <a class="nav-link" href="ex3.php">Exercise 3</a>
                                <a class="nav-link" href="ex4.php">Exercise 4</a>
                                <a class="nav-link" href="ex2.php">Exercise 5</a>
                                <a class="nav-link" href="ex2.php">Exercise 6</a>
                                <a class="nav-link" href="ex2.php">Exercise 7</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>