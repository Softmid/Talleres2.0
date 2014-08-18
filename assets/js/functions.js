$( document ).ready(function() {
//reloj
 	$("#clock1").clock({"langSet":"es","format":"12"});												   

//form datatime
	$('#fecha').datetimepicker({
      pickTime: false
    });
    $('#hora').datetimepicker({
      pickDate: false
    });
});