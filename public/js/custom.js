$(document).on('nifty.ready', function() {

	$('.editor').each(function(el){
		var editor = new Jodit(this, {
		  	"uploader": {
		    "insertImageAsBase64URI": true
		},
			"toolbarAdaptive": false
		});
	});

	// SELECT2 SINGLE
	// =================================================================
	// Require Select2
	// https://github.com/select2/select2
	// =================================================================
	$(".demo-select2").select2();


	// SELECT2 Maximum Limit 4
	// =================================================================
	// Require Select2
	// https://github.com/select2/select2
	// =================================================================
	$(".demo-select2-max-4").select2({
        maximumSelectionLength: 4
    });


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

	// $('.demo-sw').each(function(){
	// 	new Switchery(this);
	// });
	//
	// $('.demo-dt-basic').on( 'length.dt', function ( e, settings, len ) {
	//
	// } );

	//$('.demo-dp-component .input-group.date').datepicker({autoclose:true, startDate: '-0d'});

    // BOOTSTRAP DATEPICKER WITH RANGE SELECTION
    // =================================================================
    // Require Bootstrap Datepicker
    // http://eternicode.github.io/bootstrap-datepicker/
    // =================================================================
    $('#demo-dp-range .input-daterange').datepicker({
        startDate: '-0d',
        todayBtn: "linked",
        autoclose: true,
        todayHighlight: true
    });

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
