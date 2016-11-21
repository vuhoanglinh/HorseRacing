$(document).ready(function() {
    $("#lstCategory").change(function () {
        var textcategory=$("#lstCategory option:selected").text();
        //var textcategory=$(this).val();
        $("#txtCategory").val(textcategory);
     });
     $("#lstItems").click(function () {
        var textItems=$("#lstItems option:selected").text();
        //var textItems=$(this).val();
        $("#txtItem").val(textItems);
        var valItems=$(this).val();
        $("#txtItemMan").val(valItems);
     });
      $("#btnEditCat").click(function () {
        alert("click addcat");
    });
     $("#btnDeleteItem").click(function () {
        alert("click delete");
    });
    $("#btnAddItem").click(function () {
        alert("click additem");
    });
    $("#btnEditItem").click(function () {
        alert("click edititem");
    });
    
});
