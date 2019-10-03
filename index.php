<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Wooooooo</title>

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
                <form method="post" action="index.php">
                    <button type="submit" value="submit" class="btn btn-outline-success" name="input">Submit</button>
                </form>
            </div>
            <div class="col-2"></div>
            <div class="col-2">
                <button type="button" class="btn btn-outline-danger" onclick="document.getElementById('invoiceID').value = ''">Reset</button>
            </div>
        </div>
    </div>
    <br><br><br>
    <?php
    require_once('./request/search_request2.php');
    ?>

    <?php
    if (!empty($_POST["input"])){
        if($row = mysqli_fetch_array($query))
    ?>
    <div class="container">
        <!-- Customer Information -->
        <div class="content">
            <button class="collapsible btn">Customer Information</button>
            <div class="col-lg-12">
                <table class="table table-bordered table-responsive">
                    <thead class="thead-dark">
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Vehicle Registration</th>
                        <th scope="col">Vehicle Model</th>
                        <th scope="col">Vehicle Make</th>
                        <th scope="col">Year</th>
                        <th scope="col">Body Type</th>
                        <th scope="col">Chassis Number</th>
                        <th scope="col">Odometer Reading</th>
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
                </table>
        </div>
    </div>
    <?php } ?>

    <?php
    require_once('./request/search_request.php');
    ?>

    <?php
    if (empty($_POST['input'])){
    }
    else
    {
        if($row = mysqli_fetch_array($query))
    ?>
    <br>
    <!-- Invoice Information -->
    <div class="container">
        <div class="content">
            <button class="collapsible btn">Invoice Information</button>
            <div class="col-lg-12">
                <table class="table table-bordered table-responsive">
                    <thead class="thead-dark">
                        <th scope="col">Tax Invoice Number</th>
                        <th scope="col">Service Description</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Unit Price</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Subtotal</th>
                        <th scope="col">GST</th>
                        <th scope="col">Total</th>
                        <th scope="col">Paid</th>
                        <th scope="col">Date</th>
                        <th scope="col">Due Date</th>
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
    </div>

    <?php } ?>

    <?php
        require_once('./request/search_request3.php');
    ?>
    <?php
    if (!empty($_POST['input'])){
        if($row = mysqli_fetch_array($query))
    ?>
    <br>
        <!-- Garage Information -->
        <div class="container">
                <button class="collapsible btn">Garage Information</button>
                <div class="col-lg-12">
                    <table class="table table-bordered table-responsive">
                        <thead class="thead-dark">
                            <th scope="col">Technician Name</th>
                            <th scope="col">Inspection Time/Date</th>
                            <th scope="col">Branch Name</th>
                            <th scope="col">Branch Phone</th>
                            <th scope="col">Branch Email</th>
                            <th scope="col">Branch Address</th>
                            <th scope="col">Branch GST Registration</th>
                            <th scope="col">Branch Fax</th>
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
        </div>

    <?php } ?>

    <?php
        require_once('./request/search_request4.php');
    ?>
    <?php
    if (!empty($_POST['input']))
    {
        if($row = mysqli_fetch_array($query))
    ?>
    <br>

    <!-- Alignment Information -->
    <div class="container">
        <div class="content">
            <button class="collapsible btn">Alignment Information</button>
            <div class="col-lg-12">
                <h3>Rear Axle</h3>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <th class="maxwidth-title" scope="col">Camber</th>
                        <th scope="col">&nbsp;</th>
                        <th scope="col">Before</th>
                        <th scope="col">Target</th>
                        <th scope="col">Actual</th>
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

                <table class="alignment table table-bordered">
                    <thead class="thead-dark">
                        <th class="maxwidth-title" scope="col">Toe</th>
                        <th scope="col">&nbsp;</th>
                        <th scope="col">Before</th>
                        <th scope="col">Target</th>
                        <th scope="col">Actual</th>
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

                <table class="alignment table table-bordered">
                    <thead class="thead-dark">
                        <th class="maxwidth-title" scope="col">Geometrical driving axis</th>
                        <th scope="col">&nbsp;</th>
                        <th scope="col">Before</th>
                        <th scope="col">Target</th>
                        <th scope="col">Actual</th>
                    </thead>
                    <tbody class="alignment-graph">
                        <tr class="alignment-graph">
                            <td data-label="Geometrical Driving Axis" class="table-no-underline noRightBorder background">&nbsp;</td>
                            <td class="table-column-head noRightBorder maxwidth-empty-second orientations noShow">&nbsp;</td>
                            <td data-label="Before"><?php echo $row['13'];?></td>
                            <td data-label="Target" class="target">0°00'</td>
                            <td data-label="Actual"><?php echo $row['14'];?></td>
                        </tr>
                    </tbody>
                </table>
                <br><br>
                <h3>Front Axle</h3>
                <table class="alignment table table-bordered">
                    <thead class="thead-dark">
                        <th class="maxwidth-title" scope="col">Camber</th>
                        <th scope="col">&nbsp;</th>
                        <th scope="col">Before</th>
                        <th scope="col">Target</th>
                        <th scope="col">Actual</th>
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
                <table class="alignment table table-bordered">
                    <thead class="thead-dark">
                        <th class="maxwidth-title" scope="col">Caster</th>
                        <th scope="col">&nbsp;</th>
                        <th scope="col">Before</th>
                        <th scope="col">Target</th>
                        <th scope="col">Actual</th>
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
                <table class="alignment table table-bordered">
                    <thead class="thead-dark">
                        <th class="maxwidth-title" scope="col">SAI</th>
                        <th scope="col">&nbsp;</th>
                        <th scope="col">Before</th>
                        <th scope="col">Target</th>
                        <th scope="col">Actual</th>
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
                <table class="alignment table table-bordered">
                    <thead class="thead-dark">
                        <th class="maxwidth-title" scope="col">Track differential angle</th>
                        <th scope="col">&nbsp;</th>
                        <th scope="col">Before</th>
                        <th scope="col">Target</th>
                        <th scope="col">Actual</th>
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
                <table class="alignment table table-bordered">
                    <thead class="thead-dark">
                        <th class="maxwidth-title" scope="col">Toe</th>
                        <th scope="col">&nbsp;</th>
                        <th scope="col">Before</th>
                        <th scope="col">Target</th>
                        <th scope="col">Actual</th>
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
                <table class="alignment table table-bordered">
                    <thead class="thead-dark">
                        <th class="maxwidth-title" scope="col">Setback</th>
                        <th scope="col">&nbsp;</th>
                        <th scope="col">Before</th>
                        <th scope="col">Target</th>
                        <th scope="col">Actual</th>
                    </thead>
                    <tbody class="alignment-graph">
                        <tr class="alignment-graph">
                            <td data-label="Setback" class="table-no-underline noRightBorder background">&nbsp;</td>
                            <td class="table-column-head noRightBorder maxwidth-empty-second noShow orientations">&nbsp;</td>
                            <td data-label="Before"><?php echo $row['43'];?></td>
                            <td data-label="Target" class="target">0°00'</td>
                            <td  class="underPadding bottomTD" data-label="Actual"><?php echo $row['44'];?></td>
                        </tr>
                    </tbody>
                </table>
                <table class="alignment table table-bordered">
                    <thead class="thead-dark">
                        <th class="maxwidth-title" scope="col">Max steering lock</th>
                        <th scope="col">&nbsp;</th>
                        <th scope="col">Before</th>
                        <th scope="col">Target</th>
                        <th scope="col">Actual</th>
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

            <br>
            <br>

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



</body>