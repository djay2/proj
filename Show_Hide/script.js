$(document).ready(function(){

    // Checkbox click
    $(".hidecol").click(function(){

        var id = this.id;
        var splitid = id.split("_");
        var colno = splitid[1];
        var checked = true;

        // Checking Checkbox state
        if($(this).is(":checked")){
            checked = true;
        }else{
            checked = false;
        }
        setTimeout(function(){
            if(checked){
                $('#emp_table td:nth-child('+colno+')').hide();
                $('#emp_table th:nth-child('+colno+')').hide();
				//alert("Hello");
            } else{
                $('#emp_table td:nth-child('+colno+')').show();
                $('#emp_table th:nth-child('+colno+')').show();
				//alert("Hello");
            }
            // Hiding column

        }, 900000000000);

    });
});


// $("input:checkbox").attr("checked",false).click(function()
// {
	// var show_col="."+$(this).attr("name");
	// $(show_col).toggle();
// });