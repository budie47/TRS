$(document).ready(function(){


	//Side bar menu toggle
	$("#menu-toggle").click(function(e) {
		e.preventDefault();
		$("#wrapper").toggleClass("toggled");
		$(".menu-icon-toggle").toggleClass("menu-icon");
	});

	// $( "#materialFormYear" ).datepicker({
 //         minViewMode: 2,
 //         format: 'yyyy'
 //     });

    //     $('#materialFormYear').datepicker({
    //         changeYear: true,
    //         showButtonPanel: true,
    //         dateFormat: 'yy',
    //         yearRange: "2000:2100",
    //         onClose: function(dateText, inst) { 
    //             var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
    //             $(this).datepicker('setDate', new Date(year, 1));
    //         }
    //     });
    //   $("#materialFormYear").focus(function () {
    //     $(".ui-datepicker-month").hide();
    // });
})

//ui-datepicker-calendar