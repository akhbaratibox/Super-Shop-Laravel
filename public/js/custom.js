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

	$('.demo-sw').each(function(){
		new Switchery(this);
	});

	$('.demo-dt-basic').on( 'length.dt', function ( e, settings, len ) {

	} );

});

function showAlert(type, message){
	$.niftyNoty({
		type: type,
		container: 'floating',
		html: message,
		closeBtn: true,
		floating: {
			position: 'top-right',
			animationIn: 'fadeIn',
			animationOut: 'fadeOut'
		},
		focus: true,
		timer: 3000
	});
}
