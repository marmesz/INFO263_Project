<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tyre Town</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- error handling function -->
    <script>  //error handling function + test in line 10
        onerror = errorHandler;
        function errorHandler(message, link, line) {
            message = "Error Encountered:\n\n";
            message += "URL: " + link + "\n";
            message += "Line: " + line + "\n";
            alert(message);
            return true;
        }
    </script>
</head>

<body>

<!--Banner-->
<img src="banner.jpg" height="25%", width="25%";

<!-- Navigation -->
<ul>
    <li><a href="default.asp">Home</a></li>
    <li><a href="news.asp">News</a></li>
    <li><a href="contact.asp">Contact</a></li>
    <li><a href="about.asp">About</a></li>
</ul>

    <!-- Page content -->
    <div class="container">

        <div class="col-lg-12 ">
            <h2 class="mt-5 text-center">Tyre Town Invoice Search</h2>
        </div>


        <form method="post" action="index.php">
            <div class="float-mid"><input type="text" name="input" size="25" id="receiptID" placeholder="Enter Invoice Number">
                <input type="submit" name="submitButton" value="Submit"></div></form>




</body>
