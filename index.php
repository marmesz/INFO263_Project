<!-- This is your main page -->
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

 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
     <div class="container col-lg-11">
         <a class="navbar-brand" href="./index.php">Tyre Town</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
     </div>
     <div class="collapse navbar-collapse" id="navbarResponsive">
         <ul class="navbar-nav Tyre-Town">
             <li class="nav-item">
                 <a class="nav-link col-lg-1" href="./index.php">Home</a>
             </li>
         </ul>
     </div>


 </nav>

 <style>

     .collapsible {
         background-color: #eee;
         color: #444;
         cursor: pointer;
         padding: 18px;
         width: 100%;
         border: none;
         text-align: left;
         outline: none;
         font-size: 15px;
         border-radius: 20px;
     }

     .active, .collapsible:hover {
         background-color: #ccc;
     }

     /* Style the collapsible content.*/
     .content {
         padding: 0 18px;
         background-color: #f1f1f1;
         max-height: 0;
         overflow: hidden;
         transition: max-height 0.4s ease-out;
         border-radius: 30px;

     }
     .collapsible:after {
         content: '\02795'; /* Unicode character for "plus" sign (+) */
         font-size: 30px;
         color: white;
         float: right;
         margin-left: 5px;
         border-radius: 20px;
     }

     .active:after {
         content: "\2796"; /* Unicode character for "minus" sign (-) */

     }

     .footer{
         width: 100%;
         background-color: grey;
         color: white;
         text-align: center;

     }

 </style>

   <!-- Page content -->
    <div class="container">

            <div class="col-lg-12 ">
                <h2 class="mt-5 text-center">Tyre Town Invoice Search</h2>
            </div>


         <form method="post" action="index.php">
                <div class="float-mid"><input type="text" name="input" size="25" id="receiptID" placeholder="Enter Invoice Number">
                    <input type="submit" name="submitButton" value="Submit"></div></form>


        <br/>


        <?php
        require_once('./request/search_request2.php');
        ?>

        <?php
        if (!empty($_POST['input'])){
            if($row = mysqli_fetch_array($query))
            ?>
                <button class="collapsible"><h3>Customer Information</h3></button>

                <div class="content">
                <div class="col-lg-12">
                <table>
                        <thead>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Vehicle Registration</th>
                        <th>Vehicle Model</th>
                        <th>Vehicle Make</th>
                        <th>Year</th>
                        <th>Body Type</th>
                        <th>Chassis Number</th>
                        <th>Odometer Reading</th>
                        </thead>
                        <tr>
                            <td data-label="Name"><?php echo $row['NAME'];?></td>
                            <td data-label="Email"><?php echo $row['EMAIL'];?></td>
                            <td data-label="Phone"><?php echo $row['PHONE'];?></td>
                            <td data-label="Vehicle Registration"><?php echo $row['VEHICLE REGISTRATION'];?></td>
                            <td data-label="Vehicle Model"><?php echo $row['VEHICLE MODEL'];?></td>
                            <td data-label="Vehicle Make"><?php echo $row['VEHICLE MAKE'];?></td>
                            <td data-label="Year"><?php echo $row['YEAR'];?></td>
                            <td data-label="Body Type"><?php echo $row['BODY TYPE'];?></td>
                            <td data-label="Chassis Number"><?php echo $row['CHASSIS NUMBER'];?></td>
                            <td data-label="Odometer Reading"><?php echo $row['ODOMETER READING'];?></td>

                        </tr>
                        <?php /*} */?>
                </table>
            </div>
            </div>
        <?php } ?>

        <?php
        require_once('./request/search_request.php');
        ?>
        <?php
        /*        require_once('./request/search_request2.php');
                */?><!--
        --><?php
        /*        require_once('./request/search_request3.php');
                */?>

        <?php
        if (empty($_POST['input'])){
        }
        else{if($row = mysqli_fetch_array($query))
            ?>

            <br/>



            <button class="collapsible"><h3>Invoice</h3></button>
                    <div class="content">
                        <div class="col-lg-12">
                            <table>
                                <thead>
                                    <th>Tax Invoice Number</th>
                                    <th>Service Description</th>
                                    <th>Quantity</th>
                                    <th>Unit Price</th>
                                    <th>Amount</th>
                                    <th>Subtotal</th>
                                    <th>GST</th>
                                    <th>Total</th>
                                    <th>Paid</th>
                                    <th>Date</th>
                                    <th>Due Date</th>
                                </thead>

                                <tr>

                                    <td data-label="Tax Invoice Number"><?php echo $row['TAX INVOICE NUMBER'];?></td>
                                    <td data-label="Service Description"><?php echo $row['SERVICE DESCRIPTION'];?></td>
                                    <td data-label="Quantity"><?php echo $row['QUANTITY'];?></td>
                                    <td data-label="Unit Price"><?php echo '$' . $row['UNIT PRICE'];?></td>
                                    <td data-label="Amount"><?php echo '$' . $row['AMOUNT'];?></td>
                                    <td data-label="Subtotal"><?php echo '$' . $row['SUBTOTAL'];?></td>
                                    <td data-label="GST"><?php echo '$' . $row['GST'];?></td>
                                    <td data-label="Total"><?php echo '$' . $row['TOTAL'];?></td>
                                    <td data-label="Paid"><?php echo '$' . $row['PAID'];?></td>
                                    <td data-label="Date"><?php echo $row['DATE'];?></td>
                                    <td data-label="Due Date"><?php echo $row['DUE DATE'];?></td>

                                </tr>
                            </table>
                    </div>
                </div>

        <?php } ?>

        <?php
        require_once('./request/search_request3.php');
        ?>
        <?php
        if (!empty($_POST['input'])){
        if($row = mysqli_fetch_array($query))
            ?>

            <br/>

            <button class="collapsible"><h3>Garage Information</h3></button>
            <div class="content">
            <div class="col-lg-12">
                <table>
                        <thead>
                            <th>Technician Name</th>
                            <th>Inspection Time/Date</th>
                            <th>Branch Name</th>
                            <th>Branch Phone</th>
                            <th>Branch Email</th>
                            <th>Branch Address</th>
                            <th>Branch GST Registration</th>
                            <th>Branch Fax</th>
                            </thead>
                        <tr>
                            <td data-label="Technician Name"><?php echo $row['TECHNICIAN NAME'];?></td>
                            <td data-label="Inspection Time/Date"><?php echo $row['INSPECTION TIME/DATE'];?></td>
                            <td data-label="Branch Name"><?php echo $row['BRANCH NAME'];?></td>
                            <td data-label="Branch Phone"><?php echo $row['BRANCH PHONE'];?></td>
                            <td data-label="Branch Email"><?php echo $row['BRANCH EMAIL'];?></td>
                            <td data-label="Branch Address"><?php echo $row['BRANCH ADDRESS'];?></td>
                            <td data-label="Branch GST Registration"><?php echo $row['BRANCH GST REGISTRATION'];?></td>
                            <td data-label="Branch Fax"><?php echo $row['BRANCH FAX'];?></td>
                        </tr>
                </table>
            </div>
            </div>

        <?php } ?>

        <?php
        require_once('./request/search_request4.php');
        ?>
        <?php
        if (!empty($_POST['input'])){
        if($row = mysqli_fetch_array($query))
        ?>

        <br/>

        <button class="collapsible"><h3>Alignment Information</h3></button>
        <div class="content">
        <header>Back Axle</header>
            <div class="col-lg-12">
                <table class="alignment">
                    <thead>
                    <th class="maxwidth-title">Camber</th>
                    <th>&nbsp;</th>
                    <th>Before</th>
                    <th>Target</th>
                    <th>Actual</th>
                    </thead>
                    <tbody class="alignment-graph">
                    <tr class="alignment-graph">
                        <td data-label="Camber" class="table-no-underline background noPad">&nbsp;</td>
                        <td class="table-column-head orientations">Left</td>
                        <td data-label="Before"><?php echo $row['1'];?></td>
                        <td data-label="Target" class="table-no-underline target">-0°40'   +/-0°30'</td>
                        <td data-label="Actual"><?php echo $row['2'];?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head">Right</td>
                        <td data-label="Before"><?php echo $row['3'];?></td>
                        <td class="noShow target"></td>
                        <td data-label="Actual"><?php echo $row['4'];?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head">Cross</td>
                        <td data-label="Before"><?php echo $row['5'];?></td>
                        <td data-label="Target" class="target">0°00' +/-0°30'</td>
                        <td class="underPadding bottomTD" data-label="Actual"><?php echo $row['6'];?></td>
                    </tr>
                    </tbody>
                </table>

                <table class="alignment">
                    <thead>
                    <th class="maxwidth-title">Toe</th>
                    <th>&nbsp;</th>
                    <th>Before</th>
                    <th>Target</th>
                    <th>Actual</th>
                    </thead>
                    <tbody class="alignment-graph">
                    <tr class="alignment-graph">
                        <td data-label="Toe"class="table-no-underline background">&nbsp;</td>
                        <td class="table-column-head orientations">Left</td>
                        <td data-label="Before"><?php echo $row['7'];?></td>
                        <td data-label="Target" class="table-no-underline target">1.5mm +/-1.00</td>
                        <td data-label="Actual"><?php echo $row['8'];?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head orientations">Right</td>
                        <td data-label="Before"><?php echo $row['9'];?></td>
                        <td class="noShow target"></td>
                        <td data-label="Actual"><?php echo $row['10'];?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head orientations">Total</td>
                        <td data-label="Before"><?php echo $row['11'];?></td>
                        <td data-label="Target" class="target">3mm +/-2.0mm</td>
                        <td class="underPadding bottomTD" data-label="Actual"><?php echo $row['12'];?></td>
                    </tr>
                    </tbody>
                </table>
                <table class="alignment">
                    <thead>
                    <th class="maxwidth-title">Geometrical driving axis</th>
                    <th>&nbsp;</th>
                    <th>Before</th>
                    <th>Target</th>
                    <th>Actual</th>
                    </thead>
                    <tbody class="alignment-graph">
                    <tr class="alignment-graph">
                        <td data-label="Geometrical Driving Axis" class="table-no-underline noRightBorder background">&nbsp;</td>
                        <td class="table-column-head noRightBorder maxwidth-empty-second orientations noShow">&nbsp;</td>
                        <td data-label="Before"><?php echo $row['13'];?></td>
                        <td data-label="Target" class="target">0°00'</td>
                        <td data-label="Actual"><?php echo $row['14'];?></td>
                    </tbody>
                </table>
                <header>Front Axle</header>
                <table class="alignment">
                    <thead>
                    <th class="maxwidth-title">Camber</th>
                    <th>&nbsp;</th>
                    <th>Before</th>
                    <th>Target</th>
                    <th>Actual</th>
                    </thead>
                    <tbody class="alignment-graph">
                    <tr class="alignment-graph">
                        <td data-label="Camber" class="table-no-underline background">&nbsp;</td>
                        <td class="table-column-head orientations">Left</td>
                        <td data-label="Before"><?php echo $row['15'];?></td>
                        <td data-label="Target" class="table-no-underline target">0°00' +/-0°30'</td>
                        <td data-label="Actual"><?php echo $row['16'];?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head orientations">Right</td>
                        <td data-label="Before"><?php echo $row['17'];?></td>
                        <td class="noShow target"></td>
                        <td data-label="Actual"><?php echo $row['18'];?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head orientations">Cross</td>
                        <td data-label="Before"><?php echo $row['19'];?></td>
                        <td data-label="Target" class="target">0°00' +/-0°30'</td>
                        <td class="underPadding bottomTD" data-label="Actual"><?php echo $row['20'];?></td>
                    </tr>
                    </tbody>
                </table>
                <table class="alignment">
                    <thead>
                    <th class="maxwidth-title">Caster</th>
                    <th>&nbsp;</th>
                    <th>Before</th>
                    <th>Target</th>
                    <th>Actual</th>
                    </thead>
                    <tbody class="alignment-graph">
                    <tr class="alignment-graph">
                        <td data-label="Caster" class="table-no-underline background">&nbsp;</td>
                        <td class="table-column-head orientations">Left</td>
                        <td data-label="Before"><?php echo $row['21'];?></td>
                        <td data-label="Target" class="table-no-underline target">2°35' +/-0°30'</td>
                        <td data-label="Actual"><?php echo $row['22'];?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head orientations">Right</td>
                        <td data-label="Before"><?php echo $row['23'];?></td>
                        <td class="noShow target"></td>
                        <td data-label="Actual"><?php echo $row['24'];?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head orientations">Cross</td>
                        <td data-label="Before"><?php echo $row['25'];?></td>
                        <td data-label="Target" class="target">0°00' +/-0°30'</td>
                        <td class="underPadding bottomTD" data-label="Actual"><?php echo $row['26'];?></td>
                    </tr>
                    </tbody>
                </table>
                <table class="alignment">
                    <thead>
                    <th class="maxwidth-title">SAI</th>
                    <th>&nbsp;</th>
                    <th>Before</th>
                    <th>Target</th>
                    <th>Actual</th>
                    </thead>
                    <tbody class="alignment-graph">
                    <tr class="alignment-graph">
                        <td data-label="SAI" class="table-no-underline background">&nbsp;</td>
                        <td class="table-column-head orientations">Left</td>
                        <td data-label="Before"><?php echo $row['27'];?></td>
                        <td data-label="Target" class="table-no-underline target">12°40' +/-0°45</td>
                        <td data-label="Actual"><?php echo $row['28'];?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head orientations">Right</td>
                        <td data-label="Before"><?php echo $row['29'];?></td>
                        <td class="noShow target"></td>
                        <td data-label="Actual"><?php echo $row['30'];?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head orientations">Cross</td>
                        <td data-label="Before"><?php echo $row['31'];?></td>
                        <td data-label="Target" class="target">0°00'</td>
                        <td class="underPadding bottomTD" data-label="Actual"><?php echo $row['32'];?></td>
                    </tr>
                    </tbody>
                </table>
                <table class="alignment">
                    <thead>
                    <th class="maxwidth-title">Track differential angle</th>
                    <th>&nbsp;</th>
                    <th>Before</th>
                    <th>Target</th>
                    <th>Actual</th>
                    </thead>
                    <tbody class="alignment-graph">
                    <tr class="alignment-graph">
                        <td data-label="Track Differential Angle" class="table-no-underline background">&nbsp;</td>
                        <td class="table-column-head orientations">Left</td>
                        <td data-label="Before"><?php echo $row['33'];?></td>
                        <td class="table-no-underline noShow target"></td>
                        <td data-label="Actual"><?php echo $row['34'];?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head orientations">Right</td>
                        <td data-label="Before"><?php echo $row['35'];?></td>
                        <td class="noShow target"></td>
                        <td class="underPadding bottomTD" data-label="Actual"><?php echo $row['36'];?></td>
                    </tr>
                    </tbody>
                </table>
                <table class="alignment">
                    <thead>
                    <th class="maxwidth-title">Toe</th>
                    <th>&nbsp;</th>
                    <th>Before</th>
                    <th>Target</th>
                    <th>Actual</th>
                    </thead>
                    <tbody class="alignment-graph">
                    <tr class="alignment-graph">
                        <td data-label="Toe" class="table-no-underline background">&nbsp;</td>
                        <td class="table-column-head orientations">Left</td>
                        <td data-label="Before"><?php echo $row['37'];?></td>
                        <td data-label="Target" class="table-no-underline target">0.5mm +/-1.0mm</td>
                        <td data-label="Actual"><?php echo $row['38'];?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head orientations">Right</td>
                        <td data-label="Before"><?php echo $row['39'];?></td>
                        <td class="noShow target"></td>
                        <td data-label="Actual"><?php echo $row['40'];?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head orientations">Cross</td>
                        <td data-label="Before"><?php echo $row['41'];?></td>
                        <td data-label="Target">1mm +/-2.0mm</td>
                        <td class="underPadding bottomTD" data-label="Actual"><?php echo $row['42'];?></td>
                    </tr>
                    </tbody>
                </table>
                <table class="alignment">
                    <thead>
                    <th class="maxwidth-title">Setback</th>
                    <th>&nbsp;</th>
                    <th>Before</th>
                    <th>Target</th>
                    <th>Actual</th>
                    </thead>
                    <tbody class="alignment-graph">
                    <tr class="alignment-graph">
                        <td data-label="Setback" class="table-no-underline noRightBorder background">&nbsp;</td>
                        <td class="table-column-head noRightBorder maxwidth-empty-second noShow orientations">&nbsp;</td>
                        <td data-label="Before"><?php echo $row['43'];?></td>
                        <td data-label="Target" class="target">0°00'</td>
                        <td  class="underPadding bottomTD" data-label="Actual"><?php echo $row['44'];?></td>
                    </tbody>
                </table>
                <table class="alignment">
                    <thead>
                    <th class="maxwidth-title">Max steering lock</th>
                    <th>&nbsp;</th>
                    <th>Before</th>
                    <th>Target</th>
                    <th>Actual</th>
                    </thead>
                    <tbody class="alignment-graph">
                    <tr class="alignment-graph">
                        <td data-label="Max Steering Lock" class="table-no-underline background">Left Steer</td>
                        <!--<td data-label="Left Steer" class="bigNoShow"></td>-->
                        <td class="table-column-head orientations">Left</td>
                        <td data-label="Before"><?php echo $row['45'];?></td>
                        <td data-label="Target" class="table-no-underline target">-41°00' +/-1°30'</td>
                        <td data-label="Actual"><?php echo $row['46'];?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head orientations">Right</td>
                        <td data-label="Before"><?php echo $row['47'];?></td>
                        <td data-label="Target" class="target">33°00' +/-1°30'</td>
                        <td data-label="Actual"><?php echo $row['48'];?></td>
                    </tr>
                    <tr class="alignment-graph">
                        <td class="table-no-underline background">Right Steer</td>
                        <td class="table-column-head orientations">Left</td>
                        <td data-label="Before"><?php echo $row['49'];?></td>
                        <td data-label="Target" class="table-no-underline target noShow">-41°00' +/-1°30'</td>
                        <td data-label="Actual"><?php echo $row['50'];?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head orientations">Right</td>
                        <td data-label="Before"><?php echo $row['51'];?></td>
                        <td class="noShow target">33°00' +/-1°30'</td>
                        <td class="underPadding bottomTD" data-label="Actual"><?php echo $row['52'];?></td>
                    </tr>
                    </tbody>
                </table>

        <?php } ?>

                <br/>
                <br/>

                <div class="footer fixed-bottom">TyreTown 2018, Dev Group D</div>

    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i= 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                    crossorigin="anonymous">
            </script>
            <script
                    src="https://code.jquery.com/jquery-3.3.1.min.js"
                    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                    crossorigin="anonymous">
            </script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                    crossorigin="anonymous">
            </script>
            <script src="script/scripts.js"></script>
 </body>
