<?php
    if (!empty($_POST['input']))
    {
        $search_term = mysqli_real_escape_string($conn, $_POST['input']);
        $customer_query .= " WHERE invoice.invoice_id LIKE '%" . $search_term . "%' ";
        $invoice_query .= " WHERE invoice_id LIKE '%" .$search_term."%' ";
        $garage_query .= " WHERE invoice.invoice_id LIKE '%" .$search_term."%' ";
        $alignment_query .= " WHERE invoice_id LIKE '%" .$search_term."%' ";

        $cust_query = mysqli_query($conn, $customer_query);
        $inv_query = mysqli_query($conn, $invoice_query);
        $gar_query = mysqli_query($conn, $garage_query);
        $align_query = mysqli_query($conn, $alignment_query);

        $cust_row = mysqli_fetch_array($cust_query);
        $inv_row = mysqli_fetch_array($inv_query);
        $gar_row = mysqli_fetch_array($gar_query);
        $align_row = mysqli_fetch_array($align_query);?>
        <div class="container">
            <!-- Customer Information -->
            <button id="customerButton" class="btn btn-dropdown dropdown-toggle w-50" data-toggle="dropdown">Customer Information</button>
            <div class="col-lg-12 table-responsive">
                <table id="customerTable" class="table table-bordered">
                    <thead class="thead-theme">
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
                    <tbody>
                        <tr>
                            <td data-label="Name"><?php echo $cust_row['NAME'];?></td>
                            <td data-label="Email"><?php echo $cust_row['EMAIL'];?></td>
                            <td data-label="Phone"><?php echo $cust_row['PHONE'];?></td>
                            <td data-label="Vehicle Registration"><?php echo $cust_row['VEHICLE REGISTRATION'];?></td>
                            <td data-label="Vehicle Model"><?php echo $cust_row['VEHICLE MODEL'];?></td>
                            <td data-label="Vehicle Make"><?php echo $cust_row['VEHICLE MAKE'];?></td>
                            <td data-label="Year"><?php echo $cust_row['YEAR'];?></td>
                            <td data-label="Body Type"><?php echo $cust_row['BODY TYPE'];?></td>
                            <td data-label="Chassis Number"><?php echo $cust_row['CHASSIS NUMBER'];?></td>
                            <td data-label="Odometer Reading"><?php echo $cust_row['ODOMETER READING'];?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <!-- Invoice Information -->
        <div class="container">
            <button id="invoiceButton" class="btn btn-dropdown dropdown-toggle w-50">Invoice Information</button>
            <div class="col-lg-12 table-responsive">
                <table id="invoiceTable" class="table table-bordered">
                    <thead class="thead-theme">
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
                        <td data-label="Tax Invoice Number"><?php echo $inv_row['TAX INVOICE NUMBER'];?></td>
                        <td data-label="Service Description"><?php echo $inv_row['SERVICE DESCRIPTION'];?></td>
                        <td data-label="Quantity"><?php echo $inv_row['QUANTITY'];?></td>
                        <td data-label="Unit Price"><?php echo '$' . $inv_row['UNIT PRICE'];?></td>
                        <td data-label="Amount"><?php echo '$' . $inv_row['AMOUNT'];?></td>
                        <td data-label="Subtotal"><?php echo '$' . $inv_row['SUBTOTAL'];?></td>
                        <td data-label="GST"><?php echo '$' . $inv_row['GST'];?></td>
                        <td data-label="Total"><?php echo '$' . $inv_row['TOTAL'];?></td>
                        <td data-label="Paid"><?php echo '$' . $inv_row['PAID'];?></td>
                        <td data-label="Date"><?php echo $inv_row['DATE'];?></td>
                        <td data-label="Due Date"><?php echo $inv_row['DUE DATE'];?></td>
                    </tr>
                </table>
            </div>
        </div>
        <br>
        <!-- Garage Information -->
        <div class="container">
            <button id="garageButton" class="btn btn-dropdown dropdown-toggle w-50">Garage Information</button>
            <div class="col-lg-12 table-responsive">
                <table id="garageTable" class="table table-bordered">
                    <thead class="thead-theme">
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
                        <td data-label="Technician Name"><?php echo $gar_row['TECHNICIAN NAME'];?></td>
                        <td data-label="Inspection Time/Date"><?php echo $gar_row['INSPECTION TIME/DATE'];?></td>
                        <td data-label="Branch Name"><?php echo $gar_row['BRANCH NAME'];?></td>
                        <td data-label="Branch Phone"><?php echo $gar_row['BRANCH PHONE'];?></td>
                        <td data-label="Branch Email"><?php echo $gar_row['BRANCH EMAIL'];?></td>
                        <td data-label="Branch Address"><?php echo $gar_row['BRANCH ADDRESS'];?></td>
                        <td data-label="Branch GST Registration"><?php echo $gar_row['BRANCH GST REGISTRATION'];?></td>
                        <td data-label="Branch Fax"><?php echo $gar_row['BRANCH FAX'];?></td>
                    </tr>
                </table>
            </div>
        </div>
        <?php

        ?>
        <br>

        <!-- Alignment Information -->
        <div class="container table-responsive">
            <button id="alignmentButton" class="btn btn-dropdown dropdown-toggle w-50">Alignment Information</button>
            <div id="alignmentDiv" class="col-lg-12">
                <h3 class="axle-subtitle">Rear Axle</h3>
                <table id="alignmentTable" class="table table-bordered">
                    <thead class="thead-theme">
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
                        <td data-label="Before"><?php echo $align_row['1'];?></td>
                        <td data-label="Target" class="table-no-underline target">-0°40'   +/-0°30'</td>
                        <td data-label="Actual"><?php echo $align_row['2'];?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head">Right</td>
                        <td data-label="Before"><?php echo $align_row['3'];?></td>
                        <td class="noShow target"></td>
                        <td data-label="Actual"><?php echo $align_row['4'];?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head">Cross</td>
                        <td data-label="Before"><?php echo $align_row['5'];?></td>
                        <td data-label="Target" class="target">0°00' +/-0°30'</td>
                        <td class="underPadding bottomTD" data-label="Actual"><?php echo $align_row['6'];?></td>
                    </tr>
                    </tbody>
                </table>

                <table class="alignment table table-bordered">
                    <thead class="thead-theme">
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
                        <td data-label="Before"><?php echo $align_row['7'];?></td>
                        <td data-label="Target" class="table-no-underline target">1.5mm +/-1.00</td>
                        <td data-label="Actual"><?php echo $align_row['8'];?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head orientations">Right</td>
                        <td data-label="Before"><?php echo $align_row['9'];?></td>
                        <td class="noShow target"></td>
                        <td data-label="Actual"><?php echo $align_row['10'];?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head orientations">Total</td>
                        <td data-label="Before"><?php echo $align_row['11'];?></td>
                        <td data-label="Target" class="target">3mm +/-2.0mm</td>
                        <td class="underPadding bottomTD" data-label="Actual"><?php echo $align_row['12'];?></td>
                    </tr>
                    </tbody>
                </table>

                <table class="alignment table table-bordered">
                    <thead class="thead-theme">
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
                        <td data-label="Before"><?php echo $align_row['13'];?></td>
                        <td data-label="Target" class="target">0°00'</td>
                        <td data-label="Actual"><?php echo $align_row['14'];?></td>
                    </tr>
                    </tbody>
                </table>
                <br><br>
                <h3 class="axle-subtitle">Front Axle</h3>
                <table class="alignment table table-bordered">
                    <thead class="thead-theme">
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
                        <td data-label="Before"><?php echo $align_row['15'];?></td>
                        <td data-label="Target" class="table-no-underline target">0°00' +/-0°30'</td>
                        <td data-label="Actual"><?php echo $align_row['16'];?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head orientations">Right</td>
                        <td data-label="Before"><?php echo $align_row['17'];?></td>
                        <td class="noShow target"></td>
                        <td data-label="Actual"><?php echo $align_row['18'];?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head orientations">Cross</td>
                        <td data-label="Before"><?php echo $align_row['19'];?></td>
                        <td data-label="Target" class="target">0°00' +/-0°30'</td>
                        <td class="underPadding bottomTD" data-label="Actual"><?php echo $align_row['20'];?></td>
                    </tr>
                    </tbody>
                </table>
                <table class="alignment table table-bordered">
                    <thead class="thead-theme">
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
                        <td data-label="Before"><?php echo $align_row['21'];?></td>
                        <td data-label="Target" class="table-no-underline target">2°35' +/-0°30'</td>
                        <td data-label="Actual"><?php echo $align_row['22'];?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head orientations">Right</td>
                        <td data-label="Before"><?php echo $align_row['23'];?></td>
                        <td class="noShow target"></td>
                        <td data-label="Actual"><?php echo $align_row['24'];?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head orientations">Cross</td>
                        <td data-label="Before"><?php echo $align_row['25'];?></td>
                        <td data-label="Target" class="target">0°00' +/-0°30'</td>
                        <td class="underPadding bottomTD" data-label="Actual"><?php echo $align_row['26'];?></td>
                    </tr>
                    </tbody>
                </table>
                <table class="alignment table table-bordered">
                    <thead class="thead-theme">
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
                        <td data-label="Before"><?php echo $align_row['27'];?></td>
                        <td data-label="Target" class="table-no-underline target">12°40' +/-0°45</td>
                        <td data-label="Actual"><?php echo $align_row['28'];?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head orientations">Right</td>
                        <td data-label="Before"><?php echo $align_row['29'];?></td>
                        <td class="noShow target"></td>
                        <td data-label="Actual"><?php echo $align_row['30'];?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head orientations">Cross</td>
                        <td data-label="Before"><?php echo $align_row['31'];?></td>
                        <td data-label="Target" class="target">0°00'</td>
                        <td class="underPadding bottomTD" data-label="Actual"><?php echo $align_row['32'];?></td>
                    </tr>
                    </tbody>
                </table>
                <table class="alignment table table-bordered">
                    <thead class="thead-theme">
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
                        <td data-label="Before"><?php echo $align_row['33'];?></td>
                        <td class="table-no-underline noShow target"></td>
                        <td data-label="Actual"><?php echo $align_row['34'];?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head orientations">Right</td>
                        <td data-label="Before"><?php echo $align_row['35'];?></td>
                        <td class="noShow target"></td>
                        <td class="underPadding bottomTD" data-label="Actual"><?php echo $align_row['36'];?></td>
                    </tr>
                    </tbody>
                </table>
                <table class="alignment table table-bordered">
                    <thead class="thead-theme">
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
                        <td data-label="Before"><?php echo $align_row['37'];?></td>
                        <td data-label="Target" class="table-no-underline target">0.5mm +/-1.0mm</td>
                        <td data-label="Actual"><?php echo $align_row['38'];?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head orientations">Right</td>
                        <td data-label="Before"><?php echo $align_row['39'];?></td>
                        <td class="noShow target"></td>
                        <td data-label="Actual"><?php echo $align_row['40'];?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head orientations">Cross</td>
                        <td data-label="Before"><?php echo $align_row['41'];?></td>
                        <td data-label="Target">1mm +/-2.0mm</td>
                        <td class="underPadding bottomTD" data-label="Actual"><?php echo $align_row['42'];?></td>
                    </tr>
                    </tbody>
                </table>
                <table class="alignment table table-bordered">
                    <thead class="thead-theme">
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
                        <td data-label="Before"><?php echo $align_row['43'];?></td>
                        <td data-label="Target" class="target">0°00'</td>
                        <td  class="underPadding bottomTD" data-label="Actual"><?php echo $align_row['44'];?></td>
                    </tr>
                    </tbody>
                </table>
                <table class="alignment table table-bordered">
                    <thead class="thead-theme">
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
                        <td data-label="Before"><?php echo $align_row['45'];?></td>
                        <td data-label="Target" class="table-no-underline target">-41°00' +/-1°30'</td>
                        <td data-label="Actual"><?php echo $align_row['46'];?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head orientations">Right</td>
                        <td data-label="Before"><?php echo $align_row['47'];?></td>
                        <td data-label="Target" class="target">33°00' +/-1°30'</td>
                        <td data-label="Actual"><?php echo $align_row['48'];?></td>
                    </tr>
                    <tr class="alignment-graph">
                        <td class="table-no-underline background">Right Steer</td>
                        <td class="table-column-head orientations">Left</td>
                        <td data-label="Before"><?php echo $align_row['49'];?></td>
                        <td data-label="Target" class="table-no-underline target noShow">-41°00' +/-1°30'</td>
                        <td data-label="Actual"><?php echo $align_row['50'];?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head orientations">Right</td>
                        <td data-label="Before"><?php echo $align_row['51'];?></td>
                        <td class="noShow target">33°00' +/-1°30'</td>
                        <td class="underPadding bottomTD" data-label="Actual"><?php echo $align_row['52'];?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    <?php } ?>

