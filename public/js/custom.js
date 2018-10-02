$(document).on('nifty.ready', function() {

	// SELECT2 SINGLE
	// =================================================================
	// Require Select2
	// https://github.com/select2/select2
	// =================================================================
	$(".demo-select2").select2();




	// SELECT2 PLACEHOLDER
	// =================================================================
	// Require Select2
	// https://github.com/select2/select2
	// =================================================================
	$(".demo-select2-placeholder").select2({
	    placeholder: "Select an option",
	    allowClear: true
	});



	// SELECT2 SELECT BOXES
	// =================================================================
	// Require Select2
	// https://github.com/select2/select2
	// =================================================================
	$(".demo-select2-multiple-selects").select2();

});