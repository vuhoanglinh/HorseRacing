$(document).ready(function() {
    $("#btn999").click(function () {
        $( "input[id*='txtODD']" ).val("999");
        $( "input[id*='txt2ODD']" ).val("999");
    });
    $("#btnClear").click(function () {
        $( "input[id*='txtODD']" ).val("");
        $( "input[id*='txt2ODD']" ).val("");
    });
    $("#cmbRace").change(function () {
        alert("sf");
     });
});
