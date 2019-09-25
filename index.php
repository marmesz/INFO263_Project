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
    <!-- error handling function -->
    <script src="scripts/error_handling.js"></script>
</head>


<body>
    <!-- Page content -->
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-light">
                <a class="navbar-brand" href="index.php">
                    <img src="logo.svg" width="50" height="50" alt="">  Tyre Town
                </a>
            </nav>
        </div><br>
        <div class="row">
            <div class="col-5">
                <div class="form-group">
                    <label for="invoiceID">Tyre Town Invoice Search</label>
                    <input type="text" class="form-control" id="invoiceID" placeholder="Enter Invoice Number">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <button type="button" class="btn btn-outline-success">Submit</button>
            </div>
            <div class="col-2"></div>
            <div class="col-2">
                <button type="button" class="btn btn-outline-danger" onclick="document.getElementById('invoiceID').value = ''">Reset</button>
            </div>
        </div>
    </div>



</body>
