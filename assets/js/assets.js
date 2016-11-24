$.fn.datepicker.defaults.language = 'id';

$(document).ready(function(){
	$('.landing-modal').modal();

	/* Tab Nav */
	$('.nav-tabs a').on('click', function(e){
		e.preventDefault();
		var name = $(this).attr('name');
		if($(this).attr('class') != "tab-disable"){
		    $(this).parent().siblings().removeClass("active");
		    $(this).parent().addClass("active");
		    $('.nav-content').children().hide();
		    $('div#'+name).show();
		};
	});
	$('#btn-dp-next1').on('click', function(e){
		e.preventDefault();
		var tab = "dp-tab2";
		$('#tab1').removeClass('active');
		$('#tab2').addClass('active');
		$('#tab2').children('a').removeClass('tab-disable');
	    $('.nav-content').children().hide();
	    $('div#'+tab).show();
	});
	$('#btn-dp-next2').on('click', function(e){
		e.preventDefault();
		var tab = "dp-tab3";
		$('#tab2').removeClass('active');
		$('#tab3').addClass('active');
		$('#tab3').children('a').removeClass('tab-disable');
	    $('.nav-content').children().hide();
	    $('div#'+tab).show();
	});
	$('#btn-dp-next3').on('click', function(e){
		e.preventDefault();
		var tab = "dp-tab4";
		$('#tab3').removeClass('active');
		$('#tab4').addClass('active');
		$('#tab4').children('a').removeClass('tab-disable');
	    $('.nav-content').children().hide();
	    $('div#'+tab).show();
	});
	$('#btn-dp-next4').on('click', function(e){
		e.preventDefault();
		var tab = "dp-tab5";
		$('#tab4').removeClass('active');
		$('#tab5').addClass('active');
		$('#tab5').children('a').removeClass('tab-disable');
	    $('.nav-content').children().hide();
	    $('div#'+tab).show();
	});
	$('#btn-dp-next5').on('click', function(e){
		e.preventDefault();
		var tab = "dp-tab6";
		$('#tab5').removeClass('active');
		$('#tab6').addClass('active');
		$('#tab6').children('a').removeClass('tab-disable');
	    $('.nav-content').children().hide();
	    $('div#'+tab).show();
	});
	$('#btn-dp-prev1').on('click', function(e){
		e.preventDefault();
		var tab = "dp-tab1";
		$('#tab1').addClass('active');
		$('#tab2').removeClass('active');
		//$('#tab2').children('a').addClass('tab-disable');
	    $('.nav-content').children().hide();
	    $('div#'+tab).show();
	});
	$('#btn-dp-prev2').on('click', function(e){
		e.preventDefault();
		var tab = "dp-tab2";
		$('#tab2').addClass('active');
		$('#tab3').removeClass('active');
		//$('#tab3').children('a').addClass('tab-disable');
	    $('.nav-content').children().hide();
	    $('div#'+tab).show();
	});
	$('#btn-dp-prev3').on('click', function(e){
		e.preventDefault();
		var tab = "dp-tab3";
		$('#tab3').addClass('active');
		$('#tab4').removeClass('active');
		//$('#tab4').children('a').addClass('tab-disable');
	    $('.nav-content').children().hide();
	    $('div#'+tab).show();
	});
	$('#btn-dp-prev4').on('click', function(e){
		e.preventDefault();
		var tab = "dp-tab4";
		$('#tab4').addClass('active');
		$('#tab5').removeClass('active');
		//$('#tab5').children('a').addClass('tab-disable');
	    $('.nav-content').children().hide();
	    $('div#'+tab).show();
	});
	$('#btn-dp-prev5').on('click', function(e){
		e.preventDefault();
		var tab = "dp-tab5";
		$('#tab5').addClass('active');
		$('#tab6').removeClass('active');
		//$('#tab6').children('a').addClass('tab-disable');
	    $('.nav-content').children().hide();
	    $('div#'+tab).show();
	});

	/* Data Toggle */
    $('[data-toggle="tooltip"]').tooltip();

    /* Select Toggle */
    $('#chk-sanksi').change(function(){
    	//console.log($('#chk-sanksi').val());
    	if($('#chk-sanksi').val() == 'ya'){
    		$('#sanksi-true').show();
    	}
    	else if(($('#chk-sanksi').val() == 'tidak')){
    		$('#sanksi-true').hide();
    	};
    });
    $('#lap-keu').change(function(){
    	//console.log($('#lap-keu').val());
    	if($('#lap-keu').val() == 'ya'){
    		$('#jns-keu-con').show();
    	}
    	else if(($('#lap-keu').val() == 'tidak')){
    		$('#jns-keu-con').hide();
    		$('#opn-keu-con').hide();
    	};
    });
    $('#jns-keu').change(function(){
    	//console.log($('#jns-keu').val());
    	if($('#jns-keu').val() == 'audit'){
    		$('#opn-keu-con').show();
    	}
    	else if(($('#jns-keu').val() == 'inhouse')){
    		$('#opn-keu-con').hide();
    	};
    });

    /* Calculate Permohonan Dana */
    $('#wkt-pp').change(function(){
    	if ($(this).val() != "0"){
	    	console.log($('#tgl-pp-a').val());
	    	console.log($(this).val());
	    	var date1 = $('#tgl-pp-a').val();
	    	var subs = parseInt($(this).val()) + 21;
	    	var date2 = toDate(date1, subs);
	    	console.log(date2);
	    	$('#tgl-pp-b').val(date2);
    	}
    	else {
    		$('#tgl-pp-b').val("Masukkan Jangka Waktu");
    	};
    });
    $('#tgl-pp-a').change(function(){
    	if ($('#wkt-pp').val() != "0"){
	    	console.log($('#tgl-pp-a').val());
	    	console.log($('#wkt-pp').val());
	    	var date1 = $('#tgl-pp-a').val();
	    	var subs = parseInt($('#wkt-pp').val()) + 21;
	    	var date2 = toDate(date1, subs);
	    	console.log(date2);
	    	$('#tgl-pp-b').val(date2);
    	}
    	else {
    		$('#tgl-pp-b').val("Masukkan Jangka Waktu");
    	};
    });

	/* Date Picker */
	$("#pendirian-th").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pendirian-ham-th").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pendirian-bn-th").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#terakhir-th").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#terakhir-ham-th").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#terakhir-bn-th").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#no-iupu-th").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#no-iupu-jt").datepicker( {
	    format: "dd/mm/yyyy",
	});
	$("#no-iut-th").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#no-iut-jt").datepicker( {
	    format: "dd/mm/yyyy",
	});
	$("#no-iphk-th").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#no-iphk-jt").datepicker( {
	    format: "dd/mm/yyyy",
	});
	$("#no-iata-th").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#no-iata-jt").datepicker( {
	    format: "dd/mm/yyyy",
	});
	$("#no-aso-th").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#tgl-pemilik").datepicker( {
	    format: "dd/mm/yyyy",
	});
	$("#kelola-pemilik").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#tgl-pengurus1").datepicker( {
	    format: "dd/mm/yyyy",
	});
	$("#kelola-pengurus1").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#tgl-pengurus2").datepicker( {
	    format: "dd/mm/yyyy",
	});
	$("#kelola-pengurus2").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#tgl-pengurus3").datepicker( {
	    format: "dd/mm/yyyy",
	});
	$("#kelola-pengurus3").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pemilik-tha1").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pemilik-thb1").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pemilik-tha2").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pemilik-thb2").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pemilik-tha3").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pemilik-thb3").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pemilik-tha4").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pemilik-thb4").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pemilik-tha5").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pemilik-thb5").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pengurus1-tha1").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pengurus1-thb1").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pengurus1-tha2").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pengurus1-thb2").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pengurus1-tha3").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pengurus1-thb3").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pengurus1-tha4").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pengurus1-thb4").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pengurus1-tha5").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pengurus1-thb5").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pengurus2-tha1").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pengurus2-thb1").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pengurus2-tha2").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pengurus2-thb2").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pengurus2-tha3").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pengurus2-thb3").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pengurus2-tha4").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pengurus2-thb4").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pengurus2-tha5").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pengurus2-thb5").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pengurus3-tha1").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pengurus3-thb1").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pengurus3-tha2").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pengurus3-thb2").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pengurus3-tha3").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pengurus3-thb3").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pengurus3-tha4").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pengurus3-thb4").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pengurus3-tha5").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#pengurus3-thb5").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#thn-brgkt1").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#thn-brgkt2").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#thn-brgkt3").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#thn-brgkt4").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#thn-brgkt5").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#thn-brgkt6").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#thn-sanksi").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#tgl-pp-a").datepicker( {
	    format: "dd/mm/yyyy",
	});
});

function toDate(date, subs){
	var parts = date.split("/");
	console.log(parts);
	var d = new Date(parts[2], parts[1] - 1, parts[0]);
	var r = new Date(d.setDate(d.getDate() - subs));
	console.log(r);
	return r.toLocaleDateString('en-GB');
}