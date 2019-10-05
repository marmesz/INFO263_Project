$(document).ready(function(){
    // Close tables on page load
    $("#customerTable").hide();
    $("#invoiceTable").hide();
    $("#garageTable").hide();
    $("#alignmentDiv").hide();

    // Toggle the tables
    $("#customerButton").click(function(){
        $("#customerTable").toggle(100);
    });
    $("#invoiceButton").click(function(){
        $("#invoiceTable").toggle(100);
    });
    $("#garageButton").click(function(){
        $("#garageTable").toggle(100);
    });
    $("#alignmentButton").click(function(){
        $("#alignmentDiv").toggle(100);
    });

    // TD Colour Changing
    var alignmentTable = document.getElementById("#alignmentTable");

});