<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tyre Town Invoice Search</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="scripts/jquery_elements.js"></script>
</head>


<body>
    <!-- Page content -->
    <div class="container">
        <div class="row">
            <nav class="navbar">
                <a class="navbar-brand" href="index.php"><h1 class="nav-logo">TyreTown</h1></a>
            </nav>
        </div>
        <br>
        <div class="form-group">
            <form method="post" action="index.php">
                <div class="row">
                    <div class="col-5 col">
                        <label>Tyre Town Invoice Search</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 w-100">
                        <input type="number" class="form-control" name="input" id="receiptID" placeholder="Enter Invoice Number">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-2">
                        <button type="submit" value="submit" class="btn btn-submit" id="submitButton">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <br><br>
    <?php
    require_once('request/request.php');
    require_once("scripts/generate_tables.php");
    ?>

</body>

<footer>
    <div class="container text-center">
        <small>TyreTown - &copy;2019</small>
    </div>
</footer>
</html>