$.fn.datepicker.defaults.language = 'id';

var session_data;

$(document).ready(function(){
	/* Get Session Data */
	getSessionData(function(data){
		session_data = data;
	});

	$('#scoring-nama-perusahaan').val(session_data.username);

	/* Data Table */
	$('#table-result, #table-rm').DataTable();

	/* Modal */
	$('.landing-modal').modal();

	/* Number Only Text */
	$('.number-only').keypress(function(){
		return event.charCode >= 48 && event.charCode <= 57;
	});

	/* AUto Save Form */
	$(function(){
		$('#form-maslahat1').sisyphus();
	});

	/* Tab Nav */
	var notab = 1;
	$('.nav-tabs a').on('click', function(e){
		e.preventDefault();
		notab = parseInt($(this).attr('name').slice(-1));
		if($(this).attr('class') != "tab-disable"){
		    $(this).parent().siblings().removeClass("active");
		    $(this).parent().addClass("active");
		    $('.nav-content').children().hide();
		    $('div#dp-tab'+notab.toString()).show();
		    $(".nav-content").scrollTop(0);
		    if(notab>1){
		    	$('#btn-dp-nt').removeClass('disabled');
			    if(notab==6){
			    	$('#btn-dp-nt').addClass('disabled');
			    	$('#btn-dp-pt').removeClass('disabled');
			    };
		    };
		    if(notab<6){
		    	$('#btn-dp-pt').removeClass('disabled');
			    if(notab==1){
			    	$('#btn-dp-pt').addClass('disabled');
			    	$('#btn-dp-nt').removeClass('disabled');
			    };
		    };
		};
	});
	$('#btn-dp-pt').on('click', function(e){
		e.preventDefault();
		if(notab>1){
			$('#tab'+notab.toString()).removeClass('active');
			notab = notab - 1;
			$('#tab'+notab.toString()).addClass('active');
			//$('#tab'+notab.toString()).children('a').removeClass('tab-disable');
		    $('.nav-content').children().hide();
		    $('div#dp-tab'+notab.toString()).show();
		    $(".nav-content").scrollTop(0);
		    if(notab == 1){
		    	$(this).addClass('disabled');
		    }
		    else{
		    	$('#btn-dp-nt').removeClass('disabled');
		    };
		};
	});
	$('#btn-dp-nt').on('click', function(e){
		e.preventDefault();
		/*var validated = false;
		if(notab=1){
			validated = validatePerusahaan();
		};
		if(validated){*/
			if(notab<6){
				$('#tab'+notab.toString()).removeClass('active');
				notab = notab + 1;
				$('#tab'+notab.toString()).addClass('active');
				$('#tab'+notab.toString()).children('a').removeClass('tab-disable');
			    $('.nav-content').children().hide();
			    $('div#dp-tab'+notab.toString()).show();
			    $(".nav-content").scrollTop(0);
			    if(notab == 6){
			    	$(this).addClass('disabled');
			    }
			    else{
			    	$('#btn-dp-pt').removeClass('disabled');
			    };
			};
		//};
	});

	$('.btn-dp-nb').on('click', function(e){
		e.preventDefault();
		/*var validated = false;
		if(notab=1){
			validated = validatePerusahaan();
		};
		if(validated){*/
			if(notab<6){
				$('#tab'+notab.toString()).removeClass('active');
				notab = notab + 1;
				$('#tab'+notab.toString()).addClass('active');
				$('#tab'+notab.toString()).children('a').removeClass('tab-disable');
			    $('.nav-content').children().hide();
			    $('div#dp-tab'+notab.toString()).show();
			    $(".nav-content").scrollTop(0);
			};
		//};	
	});
	$('.btn-dp-pb').on('click', function(e){
		e.preventDefault();
		if(notab>1){
			$('#tab'+notab.toString()).addClass('active');
			notab = notab - 1;
			$('#tab'+notab.toString()).removeClass('active');
			//$('#tab2').children('a').addClass('tab-disable');
		    $('.nav-content').children().hide();
		    $('div#dp-tab'+notab.toString()).show();
			$(".nav-content").scrollTop(0);
		};
	});

	/* Bank Addable */
	var nobank = 1;
	$("#btn-add-bank").on('click', function(e){
		e.preventDefault();
		if(nobank<5){
			nobank = nobank + 1;
			addBankInput("bank-addable",nobank);
			if(nobank == 5){
		    	$(this).addClass('disabled');
		    }
		    else{
		    	$('#btn-sub-bank').removeClass('disabled');
		    };
		};
	});
	$("#btn-sub-bank").on('click', function(e){
		e.preventDefault();
		if(nobank>1){
			$("#giro-bank"+nobank).parent().remove();
			nobank = nobank - 1;
			if(nobank == 1){
		    	$(this).addClass('disabled');
		    }
		    else{
		    	$('#btn-add-bank').removeClass('disabled');
		    };
		};
	});

	/* Pengurus Addable */
	var nopengurus = 0;
	$("#btn-add-pengurus").on('click', function(e){
		e.preventDefault();
		if(nopengurus<4){
			nopengurus = nopengurus + 1;
			addPengurusInput("pengurus-addable",nopengurus);
			if(nopengurus == 4){
		    	$(this).addClass('disabled');
		    }
		    else{
		    	$('#btn-sub-pengurus').removeClass('disabled');
		    };
		};
	});
	$("#btn-sub-pengurus").on('click', function(e){
		e.preventDefault();
		if(nopengurus>0){
			$("#pengurus"+nopengurus).remove();
			nopengurus = nopengurus - 1;
			if(nopengurus == 0){
		    	$(this).addClass('disabled');
		    }
		    else{
		    	$('#btn-add-pengurus').removeClass('disabled');
		    };
		};
	});	

	/* Data Toggle */
    $('[data-toggle="tooltip"]').tooltip();

    /* Select Toggle */
    $('#chk-sanksi').change(function(){
    	if($('#chk-sanksi').val() == 'Ya'){
    		$('#sanksi-true').show();
    	}
    	else if(($('#chk-sanksi').val() == 'Tidak')){
    		$('#sanksi-true').hide();
    	};
    });
    $('#lap-keu').change(function(){
    	if($('#lap-keu').val() == 'Ya'){
    		$('#jns-keu-con').show();
    		$('#jns-keu').prop('disabled',false);
    	}
    	else if(($('#lap-keu').val() == 'Tidak')){
    		$('#jns-keu-con').hide();
    		$('#jns-keu').prop('disabled','disabled');
    		$('#opn-keu-con').hide();
    		$('#opn-keu').prop('disabled','disabled');
    	};
    });
    $('#jns-keu').change(function(){
    	if($('#jns-keu').val() == 'Audit'){
    		$('#opn-keu-con').show();
    		$('#opn-keu').prop('disabled',false);
    	}
    	else if(($('#jns-keu').val() == 'Inhouse')){
    		$('#opn-keu-con').hide();
    		$('#opn-keu').prop('disabled','disabled');
    	};
    });

    /* Calculate Permohonan Dana */
    $('#wkt-pp, #tgl-pp-a').change(function(){
    	if ($(this).val() != "0"){
	    	var date1 = $('#tgl-pp-a').val();
	    	var subs = parseInt($(this).val()) + 21;
	    	var date2 = toDate(date1, subs);
	    	$('#tgl-pp-b').val(date2);
    	}
    	else {
    		$('#tgl-pp-b').val("Masukkan Jangka Waktu");
    	};
    	//console.log('Tanggal Berangkat : ' + $('#tgl-pp-a').val());
    	//console.log('Jangka Waktu : ' + $('#wkt-pp').val());
	    //console.log('Jatuh Tempo :' + $('#tgl-pp-b').val());
    });
    $('#pkt-pp, #dpj-pp').change(function(){
    	if($(this).val()){
    		var pkt = parseInt($('#pkt-pp').val());
    		var dpj = parseInt($('#dpj-pp').val());
    		var ln = pkt - dpj;
    		$('#ln-pp').val(ln);
    	}
    	else {
    		$('#ln-pp').val("");
    	};
    });
    $('#jml-pp, #dpj-pp, #tkt-pp, #la-pp').change(function(){
    	if($(this).val()){
    		var jml = parseInt($('#jml-pp').val());
    		var dpj = parseInt($('#dpj-pp').val());
    		var tkt = parseInt($('#tkt-pp').val());
    		var la = parseInt($('#la-pp').val());
    		var ned = jml * (tkt + la - dpj);
    		$('#ned-pp').val(commafy(ned)+" USD");
    		var kursdollar = 13145;
    		var sum = ned * kursdollar * 0.8;
    		$('#sum-pp').val("Rp. " + commafy(sum) + ",-");
    	}
    	else {
    		$('#ned-pp').val("");
    		$('#sum-pp').val("");
    	};
    	//console.log('Pelunas : ' + $('#dp-pp').val());
    	//console.log('DP : ' + $('#dpj-pp').val());
    	//console.log('Tiket : ' + $('#tkt-pp').val());
    	//console.log('LA : ' + $('#la-pp').val());
    	//console.log('Kebutuhan : ' + $('#ned-pp').val());
    	//console.log('Available : ' + $('#sum-pp').val());
    });

    /* Isian Lokasi Kantor */
    isianLokasiKantor();

	$('#provinsi, #kota-kab, #kecamatan, #kelurahan').change(function(){
		//console.log($('#provinsi').val()+','+$('#kota-kab').val()+','+$('#kecamatan').val()+','+$('#kelurahan').val()+','+$('#kode-pos').val());
	});

	/* Date Picker */
	$("#pendirian-th, #pendirian-ham-th, #pendirian-bn-th, #terakhir-th, #terakhir-ham-th, #terakhir-bn-th, #no-iupu-th, #no-iut-th, #no-iphk-th, #no-iata-th, #aso-th, #kelola-pemilik, #thn-brgkt1, #thn-brgkt2, #thn-brgkt3, #thn-brgkt4, #thn-brgkt5, #thn-brgkt6, #thn-sanksi").datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$("#no-iupu-jt, #no-iut-jt, #no-iphk-jt, #no-iata-jt, #tgl-pemilik, #tgl-pp-a").datepicker( {
	    format: "dd/mm/yyyy",
	});
});

function getSessionData(callback){
	var base_url = window.location.origin;

	$.ajax({
		url: base_url+'/maslahat/landing/getSessionData',
		type: 'GET',
		dataType: 'JSON',
		success: callback,
		error: function(jqXHR, textStatus, errorThrown){
			alert('Fail get session data!')
		},
		async: false
	});
};

function toDate(date, subs){
	var parts = date.split("/");
	//console.log(parts);
	var d = new Date(parts[2], parts[1] - 1, parts[0]);
	var r = new Date(d.setDate(d.getDate() - subs));
	//console.log(r);
	return r.toLocaleDateString('en-GB');
};

function commafy(num){
	var str = num.toString();
	str = str.replace(/(\d)(?=(\d{3})+$)/g, '$1.');
	return str;
};

function addBankInput(divId, bankNo){
	$("#"+divId).append(
		$("<div/>",{'class':'row'}).append(
			$("<div/>",{'class':'col-md-6'}).append(
				$("<select/>").attr("name", "giro-bank"+bankNo)
					.attr("id", "giro-bank"+bankNo)
					.addClass("form-control")
			)
		)
	);
	$.each(bankOption, function(key,value){
		$('#giro-bank'+bankNo).append($("<option></option>").attr("value",key).text(value));
	});
};

function addPengurusInput(divId,pengurusNo){
	$("#"+divId).append(
		$("<div/>",{"class":"form-group panel panel-default"})
		.attr("id", "pengurus"+pengurusNo)
			.append(
				$("<div/>",{"class":"panel-heading"})
					.text("Pengurus "+pengurusNo)
			)
			.append(
				$("<div/>",{"class":"panel-body"})
					.append(
						$("<div/>",{"class":"form-group"})
							.append('<label for="nama-pengurus'+pengurusNo+'" class="col-md-1 control-label">Nama :</label>')
							.append(
								$("<div/>",{"class":"col-md-1"})
									.append('<input type="text" name="nama-pengurus'+pengurusNo+'-g1" class="form-control" placeholder="Gelar" />')
							)
							.append(
								$("<div/>",{"class":"col-md-3"})
									.append('<input type="text" name="nama-pengurus'+pengurusNo+'-nd" class="form-control" placeholder="Nama Depan" />')
							)
							.append(
								$("<div/>",{"class":"col-md-3"})
									.append('<input type="text" name="nama-pengurus'+pengurusNo+'-nt" class="form-control" placeholder="Nama Tengah" />')
							)
							.append(
								$("<div/>",{"class":"col-md-3"})
									.append('<input type="text" name="nama-pengurus'+pengurusNo+'-nb" class="form-control" placeholder="Nama Belakang" />')
							)
							.append(
								$("<div/>",{"class":"col-md-1"})
									.append('<input type="text" name="nama-pengurus'+pengurusNo+'-g2" class="form-control" placeholder="Gelar" />')
							)
							.append('<label for="ktp-pengurus'+pengurusNo+'" class="col-md-2 control-label">Nomor KTP :</label>')
							.append(
								$("<div/>",{"class":"col-md-4"})
									.append('<input type="text" name="ktp-pengurus'+pengurusNo+'" class="form-control" />')
							)
							.append('<label for="jk-pengurus'+pengurusNo+'" class="col-md-2 control-label">Jenis Kelamin :</label>')
							.append(
								$("<div/>",{"class":"col-md-4"})
									.append('<select type="text" name="jk-pengurus'+pengurusNo+'" id="jk-pengurus'+pengurusNo+'" class="form-control"></select>')
							)
							.append('<label for="tl-pengurus'+pengurusNo+'" class="col-md-2 control-label">Tempat Lahir :</label>')
							.append(
								$("<div/>",{"class":"col-md-4"})
									.append('<input type="text" name="tl-pengurus'+pengurusNo+'" class="form-control" />')
							)
							.append('<label for="tgl-pengurus'+pengurusNo+'" class="col-md-2 control-label">Tanggal Lahir :</label>')
							.append(
								$("<div/>",{"class":"col-md-4"})
									.append('<input type="text" name="tgl-pengurus'+pengurusNo+'" id="tgl-pengurus'+pengurusNo+'" class="form-control" placeholder="HH/BB/TTTT" />')
							)
					)
					.append(
						$("<div/>",{"class":"form-group"})
							.append('<label for="alamat-pengurus'+pengurusNo+'" class="col-md-2 control-label">Alamat :</label>')
							.append(
								$("<div/>",{"class":"col-md-10"})
									.append('<textarea name="alamat-pengurus'+pengurusNo+'" class="form-control" rows="3" data-toggle="tooltip" data-placement="left" title=\'Gunakan kata "Jalan" untuk mengawali alamat atau gunakan kata "Perumahan" jika lokasi berada di Kompleks\'></textarea>')
							)
							.append('<label for="kota-kab-pengurus'+pengurusNo+'" class="col-md-2 control-label">Kota/Kabupaten :</label>')
							.append(
								$("<div/>",{"class":"col-md-4"})
									.append('<input type="text" name="kota-kab-pengurus'+pengurusNo+'" class="form-control" />')
							)
							.append('<label for="prov-pengurus'+pengurusNo+'" class="col-md-1 control-label">Provinsi :</label>')
							.append(
								$("<div/>",{"class":"col-md-5"})
									.append('<input type="text" name="prov-pengurus'+pengurusNo+'" class="form-control" />')
							)
							.append('<label for="jab-pengurus'+pengurusNo+'" class="col-md-2 control-label">Jabatan :</label>')
							.append(
								$("<div/>",{"class":"col-md-4"})
									.append('<input type="text" name="jab-pengurus'+pengurusNo+'" class="form-control" />')
							)
							.append('<label for="kelola-pengurus'+pengurusNo+'" class="col-md-3 control-label">Mengelola Haji/Umrah Sejak Tahun :</label>')
							.append(
								$("<div/>",{"class":"col-md-3"})
									.append('<input type="text" name="kelola-pengurus'+pengurusNo+'" id="kelola-pengurus'+pengurusNo+'" class="form-control" />')
							)
							.append('<label for="pendidikan-pengurus'+pengurusNo+'" class="col-md-2 control-label">Jurusan/Bidang :</label>')
							.append(
								$("<div/>",{"class":"col-md-4"})
									.append('<select type="text" name="pendidikan-pengurus'+pengurusNo+'" id="pendidikan-pengurus'+pengurusNo+'" class="form-control"></select>')
							)
							.append('<label for="jurusan-pengurus'+pengurusNo+'" class="col-md-2 control-label">Jurusan/Bidang :</label>')
							.append(
								$("<div/>",{"class":"col-md-4"})
									.append('<input type="text" name="jurusan-pengurus'+pengurusNo+'" class="form-control" />')
							)
							.append('<label for="sklh-pt-pengurus'+pengurusNo+'" class="col-md-3 control-label">Nama Sekolah/Perguruan Tinggi :</label>')
							.append(
								$("<div/>",{"class":"col-md-3"})
									.append('<input type="text" name="sklh-pt-pengurus'+pengurusNo+'" class="form-control" />')
							)
					)
					.append(
						$("<label/>",{"class":"col-md-12 control-label"}).text("Pengalaman")
					)
					.append(
						$("<table/>",{"class":"table table-striped"})
							.append(
								$("<thead/>")
									.append(
										$("<tr/>")
											.append(
												$("<th/>").text("#")
											)
											.append(
												$("<th/>").text("Jabatan")
											)
											.append(
												$("<th/>").text("Nama Perusahaan/Organisasi")
											)
											.append(
												$("<th/>").text("Bidang Perusahaan")
											)
											.append(
												$("<th/>").text("Tahun")
											)
											.append(
												$("<th/>").text(" ")
											)
											.append(
												$("<th/>").text("Tahun")
											)
									)
							)
							.append(
								$("<tbody/>").attr("id","table-pengurus"+pengurusNo)
							)
					)
			)
	);
    $('[data-toggle="tooltip"]').tooltip();
	$("#kelola-pengurus"+pengurusNo).datepicker( {
	    format: " yyyy",
	    viewMode: "years", 
	    minViewMode: "years"
	});
	$.each(pendidikanOption, function(key,value){
		$('#pendidikan-pengurus'+pengurusNo).append($("<option></option>").attr("value",key).text(value));
	});
	$.each(jekelOption, function(key,value){
		$('#jk-pengurus'+pengurusNo).append($("<option></option>").attr("value",key).text(value));
	});
	for (i=1; i<=5; i++){
		$("#table-pengurus"+pengurusNo)
			.append(
				$("<tr/>")
					.append(
						$("<td/>").text(i)
					)
					.append(
						$("<td/>").append('<input type="text" name="pengurus'+pengurusNo+'-jab'+i+'" class="form-control" />')
					)
					.append(
						$("<td/>").append('<input type="text" name="pengurus'+pengurusNo+'-po'+i+'" class="form-control" />')
					)
					.append(
						$("<td/>").append('<input type="text" name="pengurus'+pengurusNo+'-bid'+i+'" class="form-control" />')
					)
					.append(
						$("<td/>",{"class":"col-md-1"}).append('<input type="text" name="pengurus'+pengurusNo+'-tha'+i+'" id="pengurus'+pengurusNo+'-tha'+i+'" class="form-control" />')
					)
					.append(
						$("<td/>").text("s.d.")
					)
					.append(
						$("<td/>",{"class":"col-md-1"}).append('<input type="text" name="pengurus'+pengurusNo+'-thb'+i+'" id="pengurus'+pengurusNo+'-thb'+i+'" class="form-control" />')
					)
			);
		$("#pengurus"+pengurusNo+"-tha"+i+", #pengurus"+pengurusNo+"-thb"+i).datepicker( {
		    format: " yyyy",
		    viewMode: "years", 
		    minViewMode: "years"
		});
	};
	$("#tgl-pengurus"+pengurusNo).datepicker( {
	    format: "dd/mm/yyyy",
	});
};

function validatePerusahaan(){
	var base_url = window.location.origin + window.location.pathname;

	$.ajax({
		url: base_url+"/validatePerusahaan/",
		type: "GET",
		dataType: "JSON",
		success: function(data){
			return true;
		},
		error: function(jqXHR, textStatus, errorThrown){
			$('#modal-form-score').modal('show');
			$('.modal-title').text('Input Error Pengurus');
		}
	});
};

function submitFormPermohonan(){
	$.ajax({
		url:"<?php echo base_url('scoring/saveData'); ?>",
		data:{

		}
	}).done(function(data){
		$('.popup-alert').innerHTML(data);
	});

	return False;
};

function updateRMModal(id){
	$('#form-rm')[0].reset();
	var base_url = window.location.origin + window.location.pathname;

	$.ajax({
		url: base_url+"/ajaxValueEdit/"+id,
		type: "GET",
		dataType: "JSON",
		success: function(data){
            $('[name="id_form"]').val(data.id_form);
            $('[name="id_isian"]').val(data.id_isian);
            $('[name="isian1"] select').val(data.isian1);
            $('[name="isian2"] select').val(data.isian2);
            $('[name="isian3"] select').val(data.isian3);
            $('[name="isian4"] select').val(data.isian4);

			$('#modal-form-rm').modal('show');
			$('.modal-title').text('Add RM Value');
		},
		error: function(jqXHR, textStatus, errorThrown){
			alert('Error get data from ajax');
		}
	});
};

function saveRMValue(){
	var base_url = window.location.origin + window.location.pathname;

	$.ajax({
		url: base_url+"/updateRMValue",
		type: "POST",
		data: $('#form-rm').serialize(),
		dataType: "JSON",
		success: function(data){
			$('#modal-form-rm').modal('hide');
			location.reload();
		},
		error: function(jqXHR, textStatus, errorThrown){
			alert('Error updating data');
		}
	});
};

function isianLokasiKantor(){

    $.each(indonesiaOption, function(key,value){
    	$('#provinsi').append($("<option></option>").attr("value",value).text(key));
    });
    $('#provinsi').change(function(){
    	if ($(this).val() == "None"){
			$('#kota-kab').empty();
    		$('#kota-kab').prop('disabled', 'disabled');
    		$('#kota-kab').append($("<option></option>").attr("value","None").text("Masukkan Provinsi"));
			$('#kecamatan').empty();
    		$('#kecamatan').prop('disabled', 'disabled');
    		$('#kecamatan').append($("<option></option>").attr("value","None").text("Masukkan Kota/Kabupaten"));
			$('#kelurahan').empty();
    		$('#kelurahan').prop('disabled', 'disabled');
    		$('#kelurahan').append($("<option></option>").attr("value","None").text("Masukkan Kecamatan"));
    		$('#kode-pos').val('Masukkan Kelurahan');
    	}
    	else if ($(this).val() != "None"){
			$('#kota-kab').empty();
    		$('#kota-kab').prop('disabled', false);
			$('#kecamatan').empty();
    		$('#kecamatan').prop('disabled', 'disabled');
    		$('#kecamatan').append($("<option></option>").attr("value","None").text("Masukkan Kota/Kabupaten"));
			$('#kelurahan').empty();
    		$('#kelurahan').prop('disabled', 'disabled');
    		$('#kelurahan').append($("<option></option>").attr("value","None").text("Masukkan Kecamatan"));
    		$('#kode-pos').val('Masukkan Kelurahan');
    		/* Jakarta */
    		if($(this).val() == "DKI Jakarta"){
    			$.each(jakartaOption, function(key,value){
    				$('#kota-kab').append($("<option></option>").attr("value",value).text(key));
    			});
    			$('#kota-kab').change(function(){
			    	if ($(this).val() == "None"){
						$('#kecamatan').empty();
			    		$('#kecamatan').prop('disabled', 'disabled');
			    		$('#kecamatan').append($("<option></option>").attr("value","None").text("Masukkan Kota/Kabupaten"));
						$('#kelurahan').empty();
			    		$('#kelurahan').prop('disabled', 'disabled');
			    		$('#kelurahan').append($("<option></option>").attr("value","None").text("Masukkan Kecamatan"));
			    		$('#kode-pos').val('Masukkan Kelurahan');
			    	}
			    	else if ($(this).val() != "None"){
			    		$('#kecamatan').empty();
			    		$('#kecamatan').prop('disabled', false);
			    		$('#kelurahan').empty();
			    		$('#kelurahan').prop('disabled', 'disabled');
			    		$('#kelurahan').append($("<option></option>").attr("value","None").text("Masukkan Kecamatan"));
						$('#kode-pos').val('Masukkan Kelurahan');
			    		/* Jakarta Pusat */
			    		if($(this).val() == "Jakarta Pusat"){
			    			$.each(jakPusOption, function(key,value){
			    				$('#kecamatan').append($("<option></option>").attr("value",value).text(key));
			    			});
			    			$('#kecamatan').change(function(){
						    	if ($(this).val() == "None"){
									$('#kelurahan').empty();
						    		$('#kelurahan').prop('disabled', 'disabled');
						    		$('#kelurahan').append($("<option></option>").attr("value","None").text("Masukkan Kecamatan"));
						    		$('#kode-pos').val('Masukkan Kelurahan');
						    	}
						    	else if ($(this).val() != "None"){
						    		$('#kelurahan').prop('disabled', false);
									$('#kelurahan').empty();
									$('#kode-pos').val('Masukkan Kelurahan');
									/* Gambir */
						    		if ($(this).val() == "Gambir"){
										$.each(gambirOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
									    /* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Gambir"){
									    		$('#kode-pos').val('10110');		
									    	}
									    	else if($(this).val() == "Kebon Kelapa"){
									    		$('#kode-pos').val('10120');		
									    	}
									    	else if($(this).val() == "Petojo Selatan"){
									    		$('#kode-pos').val('10130');		
									    	}
									    	else if($(this).val() == "Duri Pulo"){
									    		$('#kode-pos').val('10140');		
									    	}
									    	else if($(this).val() == "Cideng"){
									    		$('#kode-pos').val('10150');		
									    	}
									    	else if($(this).val() == "Petojo Utara"){
									    		$('#kode-pos').val('10160');		
									    	}
										});
						    		}
						    		/* Tanah Abang */
						    		else if ($(this).val() == "Tanah Abang"){
										$.each(tanahAbangOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Bendungan Hilir"){
									    		$('#kode-pos').val('10210');		
									    	}
									    	else if($(this).val() == "Karet Tengsin"){
									    		$('#kode-pos').val('10220');		
									    	}
									    	else if($(this).val() == "Kebon Melati"){
									    		$('#kode-pos').val('10230');		
									    	}
									    	else if($(this).val() == "Kebon Kacang"){
									    		$('#kode-pos').val('10240');		
									    	}
									    	else if($(this).val() == "Kampung Bali"){
									    		$('#kode-pos').val('10250');		
									    	}
									    	else if($(this).val() == "Petamburan"){
									    		$('#kode-pos').val('10260');		
									    	}
									    	else if($(this).val() == "Gelora"){
									    		$('#kode-pos').val('10270');		
									    	};
									    });
						    		}
						    		/* Menteng */
						    		else if ($(this).val() == "Menteng"){
										$.each(mentengOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Menteng"){
									    		$('#kode-pos').val('10310');		
									    	}
									    	else if($(this).val() == "Pegangsaan"){
									    		$('#kode-pos').val('10320');		
									    	}
									    	else if($(this).val() == "Cikini"){
									    		$('#kode-pos').val('10330');		
									    	}
									    	else if($(this).val() == "Kebon Sirih"){
									    		$('#kode-pos').val('10340');		
									    	}
									    	else if($(this).val() == "Gondangdia"){
									    		$('#kode-pos').val('10350');		
									    	};
									    });
						    		}
						    		/* Senen */
						    		else if ($(this).val() == "Senen"){
										$.each(senenOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Senen"){
									    		$('#kode-pos').val('10410');		
									    	}
									    	else if($(this).val() == "Kwitang"){
									    		$('#kode-pos').val('10420');		
									    	}
									    	else if($(this).val() == "Kenari"){
									    		$('#kode-pos').val('10430');		
									    	}
									    	else if($(this).val() == "Paseban"){
									    		$('#kode-pos').val('10440');		
									    	}
									    	else if($(this).val() == "Kramat"){
									    		$('#kode-pos').val('10450');		
									    	}
									    	else if($(this).val() == "Bungur"){
									    		$('#kode-pos').val('10460');		
									    	};
									    });
						    		}
						    		/* Cempaka Putih */
						    		else if ($(this).val() == "Cempaka Putih"){
										$.each(cempakaPutihOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Cempaka Putih Timur"){
									    		$('#kode-pos').val('10510');		
									    	}
									    	else if($(this).val() == "Cempaka Putih Barat"){
									    		$('#kode-pos').val('10520');		
									    	}
									    	else if($(this).val() == "Rawasari"){
									    		$('#kode-pos').val('10570');		
									    	};
									    });
						    		}
						    		/* Johar Baru */
						    		else if ($(this).val() == "Johar Baru"){
										$.each(joharBaruOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Galur"){
									    		$('#kode-pos').val('10530');		
									    	}
									    	else if($(this).val() == "Tanah Tinggi"){
									    		$('#kode-pos').val('10540');		
									    	}
									    	else if($(this).val() == "Kampung Rawa"){
									    		$('#kode-pos').val('10550');		
									    	}
									    	else if($(this).val() == "Johar Baru"){
									    		$('#kode-pos').val('10560');		
									    	};
									    });
						    		}
						    		/* Kemayoran */
						    		else if ($(this).val() == "Kemayoran"){
										$.each(kemayoranOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Gunung Sahari Selatan"){
									    		$('#kode-pos').val('10610');		
									    	}
									    	else if($(this).val() == "Kemayoran"){
									    		$('#kode-pos').val('10620');		
									    	}
									    	else if($(this).val() == "Kebon Kosong"){
									    		$('#kode-pos').val('10630');		
									    	}
									    	else if($(this).val() == "Harapan Mulya"){
									    		$('#kode-pos').val('10640');		
									    	}
									    	else if($(this).val() == "Cempaka Baru"){
									    		$('#kode-pos').val('10640');		
									    	}
									    	else if($(this).val() == "Utan Panjang"){
									    		$('#kode-pos').val('10650');		
									    	}
									    	else if($(this).val() == "Sumur Batu"){
									    		$('#kode-pos').val('10660');		
									    	}
									    	else if($(this).val() == "Serdang"){
									    		$('#kode-pos').val('10670');		
									    	}
									    });
						    		}
						    		/* Sawah Besar */
						    		else if ($(this).val() == "Sawah Besar"){
										$.each(sawahBesarOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Pasar Baru"){
									    		$('#kode-pos').val('10710');		
									    	}
									    	else if($(this).val() == "Gunung Sahari Utara"){
									    		$('#kode-pos').val('10720');		
									    	}
									    	else if($(this).val() == "Mangga Dua Selatan"){
									    		$('#kode-pos').val('10730');		
									    	}
									    	else if($(this).val() == "Karang Anyar"){
									    		$('#kode-pos').val('10740');		
									    	}
									    	else if($(this).val() == "Kartini"){
									    		$('#kode-pos').val('10750');		
									    	};
									    });
						    		};
						    	};
						    });
			    		}
			    		/* Jakarta Barat */
			    		else if($(this).val() == "Jakarta Barat"){
			    			$.each(jakBarOption, function(key,value){
			    				$('#kecamatan').append($("<option></option>").attr("value",value).text(key));
			    			});
			    			$('#kecamatan').change(function(){
						    	if ($(this).val() == "None"){
									$('#kelurahan').empty();
						    		$('#kelurahan').prop('disabled', 'disabled');
						    		$('#kelurahan').append($("<option></option>").attr("value","None").text("Masukkan Kecamatan"));
						    		$('#kode-pos').val('Masukkan Kelurahan');
						    	}
						    	else if ($(this).val() != "None"){
						    		$('#kelurahan').prop('disabled', false);
									$('#kelurahan').empty();
									$('#kode-pos').val('Masukkan Kelurahan');
									/* Cengkareng */
						    		if ($(this).val() == "Cengkareng"){
										$.each(cengkarengOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
									    /* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Kedaung Kali Angke"){
									    		$('#kode-pos').val('11710');		
									    	}
									    	else if($(this).val() == "Kapuk"){
									    		$('#kode-pos').val('11720');		
									    	}
									    	else if($(this).val() == "Cengkareng Barat"){
									    		$('#kode-pos').val('11730');		
									    	}
									    	else if($(this).val() == "Cengkareng Timur"){
									    		$('#kode-pos').val('11730');		
									    	}
									    	else if($(this).val() == "Rawa Buaya"){
									    		$('#kode-pos').val('11740');		
									    	}
									    	else if($(this).val() == "Duri Kosambi"){
									    		$('#kode-pos').val('11750');		
									    	};
										});
						    		}
						    		/* Grogol Petamburan */
						    		else if ($(this).val() == "Grogol Petamburan"){
										$.each(grogolPetamburanOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Tomang"){
									    		$('#kode-pos').val('11440');		
									    	}
									    	else if($(this).val() == "Grogol"){
									    		$('#kode-pos').val('11450');		
									    	}
									    	else if($(this).val() == "Jelambar"){
									    		$('#kode-pos').val('11460');		
									    	}
									    	else if($(this).val() == "Jelambar Baru"){
									    		$('#kode-pos').val('11460');		
									    	}
									    	else if($(this).val() == "Wijaya Kusuma"){
									    		$('#kode-pos').val('11460');		
									    	}
									    	else if($(this).val() == "Tanjung Duren Utara"){
									    		$('#kode-pos').val('10470');		
									    	}
									    	else if($(this).val() == "Tanjung Duren Selatan"){
									    		$('#kode-pos').val('11470');		
									    	};
									    });
						    		}
						    		/* Kalideres */
						    		else if ($(this).val() == "Kalideres"){
										$.each(kalideresOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Kamal"){
									    		$('#kode-pos').val('11810');		
									    	}
									    	else if($(this).val() == "Tegal Alur"){
									    		$('#kode-pos').val('11820');		
									    	}
									    	else if($(this).val() == "Pegadungan"){
									    		$('#kode-pos').val('11830');		
									    	}
									    	else if($(this).val() == "Kalideres"){
									    		$('#kode-pos').val('11840');		
									    	}
									    	else if($(this).val() == "Semanan"){
									    		$('#kode-pos').val('11850');		
									    	};
									    });
						    		}
						    		/* Kebon Jeruk */
						    		else if ($(this).val() == "Kebon Jeruk"){
										$.each(kebonJerukOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Duri Kepa"){
									    		$('#kode-pos').val('11510');		
									    	}
									    	else if($(this).val() == "Kedoya Selatan"){
									    		$('#kode-pos').val('11520');		
									    	}
									    	else if($(this).val() == "Kedoya Utara"){
									    		$('#kode-pos').val('11520');		
									    	}
									    	else if($(this).val() == "Kebon Jeruk"){
									    		$('#kode-pos').val('11530');		
									    	}
									    	else if($(this).val() == "Sukabumi Utara"){
									    		$('#kode-pos').val('11540');		
									    	}
									    	else if($(this).val() == "Kelapa Dua"){
									    		$('#kode-pos').val('11550');		
									    	}
									    	else if($(this).val() == "Sukabumi Selatan"){
									    		$('#kode-pos').val('11560');		
									    	};
									    });
						    		}
						    		/* Kembangan */
						    		else if ($(this).val() == "Kembangan"){
										$.each(kembanganOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Kembangan Selatan"){
									    		$('#kode-pos').val('11610');		
									    	}
									    	else if($(this).val() == "Kembangan Utara"){
									    		$('#kode-pos').val('11610');		
									    	}
									    	else if($(this).val() == "Meruya Utara"){
									    		$('#kode-pos').val('11620');		
									    	}
									    	else if($(this).val() == "Srengseng"){
									    		$('#kode-pos').val('11630');		
									    	}
									    	else if($(this).val() == "Joglo"){
									    		$('#kode-pos').val('11640');		
									    	}
									    	else if($(this).val() == "Meruya Selatan"){
									    		$('#kode-pos').val('11650');		
									    	};
									    });
						    		}
						    		/* Palmerah */
						    		else if ($(this).val() == "Palmerah"){
										$.each(palmerahOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Slipi"){
									    		$('#kode-pos').val('11410');		
									    	}
									    	else if($(this).val() == "Kota Bambu Utara"){
									    		$('#kode-pos').val('11420');		
									    	}
									    	else if($(this).val() == "Jati Pulo"){
									    		$('#kode-pos').val('11430');		
									    	}
									    	else if($(this).val() == "Palmerah"){
									    		$('#kode-pos').val('11480');		
									    	}
									    	else if($(this).val() == "Kemanggisan"){
									    		$('#kode-pos').val('11480');		
									    	}
									    	else if($(this).val() == "Kota Bambu Selatan"){
									    		$('#kode-pos').val('11420');		
									    	};
									    });
						    		}
						    		/* Taman Sari */
						    		else if ($(this).val() == "Taman Sari"){
										$.each(tamanSariOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Pinangsia"){
									    		$('#kode-pos').val('11110');		
									    	}
									    	else if($(this).val() == "Glodok"){
									    		$('#kode-pos').val('11120');		
									    	}
									    	else if($(this).val() == "Keagungan"){
									    		$('#kode-pos').val('11130');		
									    	}
									    	else if($(this).val() == "Krukut"){
									    		$('#kode-pos').val('11140');		
									    	}
									    	else if($(this).val() == "Taman Sari"){
									    		$('#kode-pos').val('11150');		
									    	}
									    	else if($(this).val() == "Maphar"){
									    		$('#kode-pos').val('11160');		
									    	}
									    	else if($(this).val() == "Tangki"){
									    		$('#kode-pos').val('11170');		
									    	}
									    	else if($(this).val() == "Mangga Besar"){
									    		$('#kode-pos').val('11180');		
									    	};
									    });
						    		}
						    		/* Tambora */
						    		else if ($(this).val() == "Tambora"){
										$.each(tamboraOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Tanah Sereal"){
									    		$('#kode-pos').val('11210');		
									    	}
									    	else if($(this).val() == "Tambora"){
									    		$('#kode-pos').val('11220');		
									    	}
									    	else if($(this).val() == "Roa Malaka"){
									    		$('#kode-pos').val('11230');		
									    	}
									    	else if($(this).val() == "Pekojan"){
									    		$('#kode-pos').val('11240');		
									    	}
									    	else if($(this).val() == "Jembatan Lima"){
									    		$('#kode-pos').val('11250');		
									    	}
									    	else if($(this).val() == "Krendang"){
									    		$('#kode-pos').val('11260');		
									    	}
									    	else if($(this).val() == "Duri Utara"){
									    		$('#kode-pos').val('11270');		
									    	}
									    	else if($(this).val() == "Duri Selatan"){
									    		$('#kode-pos').val('11270');		
									    	}
									    	else if($(this).val() == "Kalianyar"){
									    		$('#kode-pos').val('11310');		
									    	}
									    	else if($(this).val() == "Jembatan Besi"){
									    		$('#kode-pos').val('11320');		
									    	}
									    	else if($(this).val() == "Angke"){
									    		$('#kode-pos').val('11330');		
									    	};
									    });
						    		};
						    	};
						    });
			    		}
			    		/* Jakarta Selatan */
			    		else if($(this).val() == "Jakarta Selatan"){
			    			$.each(jakSelOption, function(key,value){
			    				$('#kecamatan').append($("<option></option>").attr("value",value).text(key));
			    			});
			    			$('#kecamatan').change(function(){
						    	if ($(this).val() == "None"){
									$('#kelurahan').empty();
						    		$('#kelurahan').prop('disabled', 'disabled');
						    		$('#kelurahan').append($("<option></option>").attr("value","None").text("Masukkan Kecamatan"));
						    		$('#kode-pos').val('Masukkan Kelurahan');
						    	}
						    	else if ($(this).val() != "None"){
						    		$('#kelurahan').prop('disabled', false);
									$('#kelurahan').empty();
									$('#kode-pos').val('Masukkan Kelurahan');
									/* Kebayoran Baru */
						    		if ($(this).val() == "Kebayoran Baru"){
										$.each(kebayoranBaruOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
									    /* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Selong"){
									    		$('#kode-pos').val('12110');		
									    	}
									    	else if($(this).val() == "Gunung"){
									    		$('#kode-pos').val('12120');		
									    	}
									    	else if($(this).val() == "Kramat Pela"){
									    		$('#kode-pos').val('12130');		
									    	}
									    	else if($(this).val() == "Gandaria Utara"){
									    		$('#kode-pos').val('12140');		
									    	}
									    	else if($(this).val() == "Cipete Utara"){
									    		$('#kode-pos').val('12150');		
									    	}
									    	else if($(this).val() == "Pulo"){
									    		$('#kode-pos').val('12160');		
									    	}
									    	else if($(this).val() == "Petogogan"){
									    		$('#kode-pos').val('12170');		
									    	}
									    	else if($(this).val() == "Rawa Barat"){
									    		$('#kode-pos').val('12180');		
									    	}
									    	else if($(this).val() == "Senayan"){
									    		$('#kode-pos').val('12190');		
									    	};
										});
						    		}
						    		/* Kebayoran Lama */
						    		else if ($(this).val() == "Kebayoran Lama"){
										$.each(kebayoranLamaOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Grogol Utara"){
									    		$('#kode-pos').val('12210');		
									    	}
									    	else if($(this).val() == "Grogol Selatan"){
									    		$('#kode-pos').val('12220');		
									    	}
									    	else if($(this).val() == "Cipulir"){
									    		$('#kode-pos').val('12230');		
									    	}
									    	else if($(this).val() == "Kebayoran Lama Utara"){
									    		$('#kode-pos').val('12240');		
									    	}
									    	else if($(this).val() == "Kebayoran Lama Selatan"){
									    		$('#kode-pos').val('12240');		
									    	}
									    	else if($(this).val() == "Pondok Pinang"){
									    		$('#kode-pos').val('12310');		
									    	};
									    });
						    		}
						    		/* Pesanggrahan */
						    		else if ($(this).val() == "Pesanggrahan"){
										$.each(pesanggrahanOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Ulujami"){
									    		$('#kode-pos').val('12250');		
									    	}
									    	else if($(this).val() == "Petukangan Utara"){
									    		$('#kode-pos').val('12260');		
									    	}
									    	else if($(this).val() == "Petukangan Selatan"){
									    		$('#kode-pos').val('12270');		
									    	}
									    	else if($(this).val() == "Pesanggrahan"){
									    		$('#kode-pos').val('12320');		
									    	}
									    	else if($(this).val() == "Bintaro"){
									    		$('#kode-pos').val('12330');		
									    	};
									    });
						    		}
						    		/* Cilandak */
						    		else if ($(this).val() == "Cilandak"){
										$.each(cilandakOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Cipete Selatan"){
									    		$('#kode-pos').val('12410');		
									    	}
									    	else if($(this).val() == "Gandaria Selatan"){
									    		$('#kode-pos').val('12420');		
									    	}
									    	else if($(this).val() == "Cilandak Barat"){
									    		$('#kode-pos').val('12430');		
									    	}
									    	else if($(this).val() == "Lebak Bulus"){
									    		$('#kode-pos').val('12440');		
									    	}
									    	else if($(this).val() == "Pondok Labu"){
									    		$('#kode-pos').val('12450');		
									    	};
									    });
						    		}
						    		/* Pasar Minggu */
						    		else if ($(this).val() == "Pasar Minggu"){
										$.each(pasarMingguOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Pejaten Barat"){
									    		$('#kode-pos').val('12510');		
									    	}
									    	else if($(this).val() == "Pejaten Timur"){
									    		$('#kode-pos').val('12510');		
									    	}
									    	else if($(this).val() == "Pasar Minggu"){
									    		$('#kode-pos').val('12520');		
									    	}
									    	else if($(this).val() == "Kebagusan"){
									    		$('#kode-pos').val('12520');		
									    	}
									    	else if($(this).val() == "Jati Padang"){
									    		$('#kode-pos').val('12540');		
									    	}
									    	else if($(this).val() == "Ragunan"){
									    		$('#kode-pos').val('12550');		
									    	}
									    	else if($(this).val() == "Cilandak Timur"){
									    		$('#kode-pos').val('12560');		
									    	};
									    });
						    		}
						    		/* Jagakarsa */
						    		else if ($(this).val() == "Jagakarsa"){
										$.each(jagakarsaOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Tanjung Barat"){
									    		$('#kode-pos').val('12530');		
									    	}
									    	else if($(this).val() == "Lenteng Agung"){
									    		$('#kode-pos').val('12610');		
									    	}
									    	else if($(this).val() == "Jagakarsa"){
									    		$('#kode-pos').val('12620');		
									    	}
									    	else if($(this).val() == "Ciganjur"){
									    		$('#kode-pos').val('12630');		
									    	}
									    	else if($(this).val() == "Srengseng Sawah"){
									    		$('#kode-pos').val('12640');		
									    	}
									    	else if($(this).val() == "Cipedak"){
									    		$('#kode-pos').val('12630');		
									    	};
									    });
						    		}
						    		/* Mampang Prapatan */
						    		else if ($(this).val() == "Mampang Prapatan"){
										$.each(mampangPrapatanOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Kuningan Barat"){
									    		$('#kode-pos').val('12710');		
									    	}
									    	else if($(this).val() == "Pela Mampang"){
									    		$('#kode-pos').val('12270');		
									    	}
									    	else if($(this).val() == "Bangka"){
									    		$('#kode-pos').val('12730');		
									    	}
									    	else if($(this).val() == "Tegal Parang"){
									    		$('#kode-pos').val('12790');		
									    	}
									    	else if($(this).val() == "Mampang Prapatan"){
									    		$('#kode-pos').val('14470');
									    	};
									    });
						    		}
						    		/* Pancoran */
						    		else if ($(this).val() == "Pancoran"){
										$.each(pancoranOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Kalibata"){
									    		$('#kode-pos').val('12740');		
									    	}
									    	else if($(this).val() == "Rawa Jati"){
									    		$('#kode-pos').val('12750');		
									    	}
									    	else if($(this).val() == "Duren Tiga"){
									    		$('#kode-pos').val('12760');		
									    	}
									    	else if($(this).val() == "Cikoko"){
									    		$('#kode-pos').val('12770');		
									    	}
									    	else if($(this).val() == "Pengadegan"){
									    		$('#kode-pos').val('12770');		
									    	}
									    	else if($(this).val() == "Pancoran"){
									    		$('#kode-pos').val('12780');		
									    	};
									    });
						    		}
						    		/* Tebet */
						    		else if ($(this).val() == "Tebet"){
										$.each(tebetOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Tebet Barat"){
									    		$('#kode-pos').val('12810');		
									    	}
									    	else if($(this).val() == "Tebet Timur"){
									    		$('#kode-pos').val('12820');		
									    	}
									    	else if($(this).val() == "Kebon Baru"){
									    		$('#kode-pos').val('12830');		
									    	}
									    	else if($(this).val() == "Bukit Duri"){
									    		$('#kode-pos').val('12840');		
									    	}
									    	else if($(this).val() == "Manggarai"){
									    		$('#kode-pos').val('12850');		
									    	}
									    	else if($(this).val() == "Manggarai Selatan"){
									    		$('#kode-pos').val('12860');		
									    	}
									    	else if($(this).val() == "Menteng Dalam"){
									    		$('#kode-pos').val('12870');		
									    	};
									    });
						    		}
						    		/* Setiabudi */
						    		else if ($(this).val() == "Setiabudi"){
										$.each(setiabudiOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Setiabudi"){
									    		$('#kode-pos').val('12910');		
									    	}
									    	else if($(this).val() == "Karet"){
									    		$('#kode-pos').val('12920');		
									    	}
									    	else if($(this).val() == "Karet Semanggi"){
									    		$('#kode-pos').val('12930');		
									    	}
									    	else if($(this).val() == "Karet Kuningan"){
									    		$('#kode-pos').val('12940');		
									    	}
									    	else if($(this).val() == "Kuningan Timur"){
									    		$('#kode-pos').val('12950');		
									    	}
									    	else if($(this).val() == "Menteng Atas"){
									    		$('#kode-pos').val('12960');		
									    	}
									    	else if($(this).val() == "Pasar Manggis"){
									    		$('#kode-pos').val('12970');		
									    	}
									    	else if($(this).val() == "Guntur"){
									    		$('#kode-pos').val('12980');		
									    	};
									    });
						    		};
						    	};
						    });
			    		}
			    		/* Jakarta Timur */
			    		else if($(this).val() == "Jakarta Timur"){
			    			$.each(jakTimOption, function(key,value){
			    				$('#kecamatan').append($("<option></option>").attr("value",value).text(key));
			    			});
			    			$('#kecamatan').change(function(){
						    	if ($(this).val() == "None"){
									$('#kelurahan').empty();
						    		$('#kelurahan').prop('disabled', 'disabled');
						    		$('#kelurahan').append($("<option></option>").attr("value","None").text("Masukkan Kecamatan"));
						    		$('#kode-pos').val('Masukkan Kelurahan');
						    	}
						    	else if ($(this).val() != "None"){
						    		$('#kelurahan').prop('disabled', false);
									$('#kelurahan').empty();
									$('#kode-pos').val('Masukkan Kelurahan');
									/* Matraman */
						    		if ($(this).val() == "Matraman"){
										$.each(matramanOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
									    /* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Pisangan Baru"){
									    		$('#kode-pos').val('13110');		
									    	}
									    	else if($(this).val() == "Utan Kayu Selatan"){
									    		$('#kode-pos').val('13120');		
									    	}
									    	else if($(this).val() == "Utan Kayu Utara"){
									    		$('#kode-pos').val('13120');		
									    	}
									    	else if($(this).val() == "Kayu Manis"){
									    		$('#kode-pos').val('13130');		
									    	}
									    	else if($(this).val() == "Pal Meriam"){
									    		$('#kode-pos').val('13140');		
									    	}
									    	else if($(this).val() == "Kebon Manggis"){
									    		$('#kode-pos').val('13150');		
									    	};
										});
						    		}
						    		/* Pulo Gadung */
						    		else if ($(this).val() == "Pulo Gadung"){
										$.each(puloGadungOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Kayu Putih"){
									    		$('#kode-pos').val('13210');		
									    	}
									    	else if($(this).val() == "Jati"){
									    		$('#kode-pos').val('13220');		
									    	}
									    	else if($(this).val() == "Rawamangun"){
									    		$('#kode-pos').val('13220');		
									    	}
									    	else if($(this).val() == "Pisangan Timur"){
									    		$('#kode-pos').val('13230');		
									    	}
									    	else if($(this).val() == "Cipinang"){
									    		$('#kode-pos').val('13240');		
									    	}
									    	else if($(this).val() == "Jatinegra Kaum"){
									    		$('#kode-pos').val('13250');		
									    	}
									    	else if($(this).val() == "Pulo Gadung"){
									    		$('#kode-pos').val('13260');		
									    	};
									    });
						    		}
						    		/* Jatinegara */
						    		else if ($(this).val() == "Jatinegara"){
										$.each(jatinegaraOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Bali Mester"){
									    		$('#kode-pos').val('13310');		
									    	}
									    	else if($(this).val() == "Kampung Melayu"){
									    		$('#kode-pos').val('13320');		
									    	}
									    	else if($(this).val() == "Bidaracina"){
									    		$('#kode-pos').val('13330');		
									    	}
									    	else if($(this).val() == "Cipinang Cempedak"){
									    		$('#kode-pos').val('13340');		
									    	}
									    	else if($(this).val() == "Rawa Bunga"){
									    		$('#kode-pos').val('13350');		
									    	}
									    	else if($(this).val() == "Cipinang Besar Utara"){
									    		$('#kode-pos').val('13410');		
									    	}
									    	else if($(this).val() == "Cipinang Besar Selatan"){
									    		$('#kode-pos').val('13410');		
									    	}
									    	else if($(this).val() == "Cipinang Muara"){
									    		$('#kode-pos').val('13420');		
									    	};
									    });
						    		}
						    		/* Duren Sawit */
						    		else if ($(this).val() == "Duren Sawit"){
										$.each(durenSawitOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Pondok Bambu"){
									    		$('#kode-pos').val('13430');		
									    	}
									    	else if($(this).val() == "Duren Sawit"){
									    		$('#kode-pos').val('13440');		
									    	}
									    	else if($(this).val() == "Pondok Kelapa"){
									    		$('#kode-pos').val('13450');		
									    	}
									    	else if($(this).val() == "Pondok Kopi"){
									    		$('#kode-pos').val('13450');		
									    	}
									    	else if($(this).val() == "Malaka Jaya"){
									    		$('#kode-pos').val('13460');		
									    	}
									    	else if($(this).val() == "Malaka Sari"){
									    		$('#kode-pos').val('13460');		
									    	}
									    	else if($(this).val() == "Klender"){
									    		$('#kode-pos').val('13460');		
									    	};
									    });
						    		}
						    		/* Kramat Jati */
						    		else if ($(this).val() == "Kramat Jati"){
										$.each(kramatJatiOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Kramat Jati"){
									    		$('#kode-pos').val('13510');		
									    	}
									    	else if($(this).val() == "Batu Ampar"){
									    		$('#kode-pos').val('13520');		
									    	}
									    	else if($(this).val() == "Balekambang"){
									    		$('#kode-pos').val('13530');		
									    	}
									    	else if($(this).val() == "Kampung Tengah"){
									    		$('#kode-pos').val('13540');		
									    	}
									    	else if($(this).val() == "Dukuh"){
									    		$('#kode-pos').val('13550');		
									    	}
									    	else if($(this).val() == "Cawang"){
									    		$('#kode-pos').val('13630');		
									    	}
									    	else if($(this).val() == "Cililitan"){
									    		$('#kode-pos').val('13640');		
									    	};
									    });
						    		}
						    		/* Makasar */
						    		else if ($(this).val() == "Makasar"){
										$.each(makasarOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Pinang Ranti"){
									    		$('#kode-pos').val('13560');		
									    	}
									    	else if($(this).val() == "Makasar"){
									    		$('#kode-pos').val('13570');		
									    	}
									    	else if($(this).val() == "Halim Perdanakusuma"){
									    		$('#kode-pos').val('13610');		
									    	}
									    	else if($(this).val() == "Cipinang Melayu"){
									    		$('#kode-pos').val('13620');		
									    	}
									    	else if($(this).val() == "Kebon Pala"){
									    		$('#kode-pos').val('13650');		
									    	};
									    });
						    		}
						    		/* Pasar Rebo */
						    		else if ($(this).val() == "Pasar Rebo"){
										$.each(pasarReboOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Pekayon"){
									    		$('#kode-pos').val('13710');		
									    	}
									    	else if($(this).val() == "Kampung Gedong"){
									    		$('#kode-pos').val('13760');		
									    	}
									    	else if($(this).val() == "Cijantung"){
									    		$('#kode-pos').val('13770');		
									    	}
									    	else if($(this).val() == "Kampung Baru"){
									    		$('#kode-pos').val('13780');		
									    	}
									    	else if($(this).val() == "Kalisari"){
									    		$('#kode-pos').val('13790');
									    	};
									    });
						    		}
						    		/* Ciracas */
						    		else if ($(this).val() == "Ciracas"){
										$.each(ciracasOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Cibubur"){
									    		$('#kode-pos').val('13720');		
									    	}
									    	else if($(this).val() == "Kelapa Dua Wetan"){
									    		$('#kode-pos').val('13730');		
									    	}
									    	else if($(this).val() == "Ciracas"){
									    		$('#kode-pos').val('13740');		
									    	}
									    	else if($(this).val() == "Susukan"){
									    		$('#kode-pos').val('13750');		
									    	}
									    	else if($(this).val() == "Rambutan"){
									    		$('#kode-pos').val('13830');		
									    	};
									    });
						    		}
						    		/* Cipayung */
						    		else if ($(this).val() == "Cipayung"){
										$.each(cipayungOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Lubang Buaya"){
									    		$('#kode-pos').val('13810');		
									    	}
									    	else if($(this).val() == "Ceger"){
									    		$('#kode-pos').val('13820');		
									    	}
									    	else if($(this).val() == "Cipayung"){
									    		$('#kode-pos').val('13840');		
									    	}
									    	else if($(this).val() == "Munjul"){
									    		$('#kode-pos').val('13850');		
									    	}
									    	else if($(this).val() == "Pondok Ranggon"){
									    		$('#kode-pos').val('13630');		
									    	}
									    	else if($(this).val() == "Cilangkap"){
									    		$('#kode-pos').val('13870');		
									    	}
									    	else if($(this).val() == "Setu"){
									    		$('#kode-pos').val('13880');		
									    	}
									    	else if($(this).val() == "Bambu Apus"){
									    		$('#kode-pos').val('13890');		
									    	};
									    });
						    		}
						    		/* Cakung */
						    		else if ($(this).val() == "Cakung"){
										$.each(cakungOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Cakung"){
									    		$('#kode-pos').val('13910');		
									    	}
									    	else if($(this).val() == "Cakung Timur"){
									    		$('#kode-pos').val('13910');		
									    	}
									    	else if($(this).val() == "Rawa Terate"){
									    		$('#kode-pos').val('13920');		
									    	}
									    	else if($(this).val() == "Jatinegara"){
									    		$('#kode-pos').val('13930');		
									    	}
									    	else if($(this).val() == "Penggilingan"){
									    		$('#kode-pos').val('13940');		
									    	}
									    	else if($(this).val() == "Pulogebang"){
									    		$('#kode-pos').val('13950');		
									    	}
									    	else if($(this).val() == "Ujung Menteng"){
									    		$('#kode-pos').val('13960');		
									    	};
									    });
						    		};
						    	};
						    });
			    		}
			    		/* Jakarta Utara */
			    		else if($(this).val() == "Jakarta Utara"){
			    			$.each(jakUtOption, function(key,value){
			    				$('#kecamatan').append($("<option></option>").attr("value",value).text(key));
			    			});
			    			$('#kecamatan').change(function(){
						    	if ($(this).val() == "None"){
									$('#kelurahan').empty();
						    		$('#kelurahan').prop('disabled', 'disabled');
						    		$('#kelurahan').append($("<option></option>").attr("value","None").text("Masukkan Kecamatan"));
						    		$('#kode-pos').val('Masukkan Kelurahan');
						    	}
						    	else if ($(this).val() != "None"){
						    		$('#kelurahan').prop('disabled', false);
									$('#kelurahan').empty();
									$('#kode-pos').val('Masukkan Kelurahan');
									/* Koja */
						    		if ($(this).val() == "Koja"){
										$.each(kojaOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
									    /* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Koja Utara"){
									    		$('#kode-pos').val('14210');		
									    	}
									    	else if($(this).val() == "Koja Selatan"){
									    		$('#kode-pos').val('14220');		
									    	}
									    	else if($(this).val() == "Rawa Badak Utara"){
									    		$('#kode-pos').val('14230');		
									    	}
									    	else if($(this).val() == "Rawa Badak Selatan"){
									    		$('#kode-pos').val('14230');		
									    	}
									    	else if($(this).val() == "Tugu Utara"){
									    		$('#kode-pos').val('14260');		
									    	}
									    	else if($(this).val() == "Tugu Selatan"){
									    		$('#kode-pos').val('14260');		
									    	}
									    	else if($(this).val() == "Lagoa"){
									    		$('#kode-pos').val('14270');		
									    	};
										});
						    		}
						    		/* Kelapa Gading */
						    		else if ($(this).val() == "Kelapa Gading"){
										$.each(kelapaGadingOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Kelapa Gading Barat"){
									    		$('#kode-pos').val('14240');		
									    	}
									    	else if($(this).val() == "Kelapa Gading Timur"){
									    		$('#kode-pos').val('14240');		
									    	}
									    	else if($(this).val() == "Pegangsaan Dua"){
									    		$('#kode-pos').val('14250');		
									    	};
									    });
						    		}
						    		/* Tanjung Priok */
						    		else if ($(this).val() == "Tanjung Priok"){
										$.each(tanjungPriokOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Tanjung Priok"){
									    		$('#kode-pos').val('14310');		
									    	}
									    	else if($(this).val() == "Kebon Bawang"){
									    		$('#kode-pos').val('14320');		
									    	}
									    	else if($(this).val() == "Sungai Bambu"){
									    		$('#kode-pos').val('14330');		
									    	}
									    	else if($(this).val() == "Papanggo"){
									    		$('#kode-pos').val('14340');		
									    	}
									    	else if($(this).val() == "Warakas"){
									    		$('#kode-pos').val('14340');		
									    	}
									    	else if($(this).val() == "Sunter Agung"){
									    		$('#kode-pos').val('14350');		
									    	}
									    	else if($(this).val() == "Sunter Jaya"){
									    		$('#kode-pos').val('14350');		
									    	};
									    });
						    		}
						    		/* Pademangan */
						    		else if ($(this).val() == "Pademangan"){
										$.each(pademanganOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Pademangan Timur"){
									    		$('#kode-pos').val('14410');		
									    	}
									    	else if($(this).val() == "Pademangan Barat"){
									    		$('#kode-pos').val('14420');		
									    	}
									    	else if($(this).val() == "Ancol"){
									    		$('#kode-pos').val('14430');		
									    	};
									    });
						    		}
						    		/* Penjaringan */
						    		else if ($(this).val() == "Penjaringan"){
										$.each(penjaringanOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Penjaringan"){
									    		$('#kode-pos').val('14430');		
									    	}
									    	else if($(this).val() == "Pluit"){
									    		$('#kode-pos').val('14440');		
									    	}
									    	else if($(this).val() == "Pejagalan"){
									    		$('#kode-pos').val('14450');		
									    	}
									    	else if($(this).val() == "Kapuk Muara"){
									    		$('#kode-pos').val('14460');		
									    	}
									    	else if($(this).val() == "Kamal Muara"){
									    		$('#kode-pos').val('14470');		
									    	};
									    });
						    		}
						    		/* Cilincing */
						    		else if ($(this).val() == "Cilincing"){
										$.each(cilincingOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Kali Baru"){
									    		$('#kode-pos').val('14110');		
									    	}
									    	else if($(this).val() == "Cilincing"){
									    		$('#kode-pos').val('14120');		
									    	}
									    	else if($(this).val() == "Semper Barat"){
									    		$('#kode-pos').val('14130');		
									    	}
									    	else if($(this).val() == "Semper Timur"){
									    		$('#kode-pos').val('14130');		
									    	}
									    	else if($(this).val() == "Sukapura"){
									    		$('#kode-pos').val('14140');		
									    	}
									    	else if($(this).val() == "Rorotan"){
									    		$('#kode-pos').val('14140');		
									    	}
									    	else if($(this).val() == "Marunda"){
									    		$('#kode-pos').val('14150');		
									    	};
									    });
						    		};
						    	};
						    });
			    		}
			    		/* Kabupaten Kepulauan Seribu */
			    		else if($(this).val() == "Kabupaten Kepulauan Seribu"){
			    			$.each(seribuOption, function(key,value){
			    				$('#kecamatan').append($("<option></option>").attr("value",value).text(key));
			    			});
			    			$('#kecamatan').change(function(){
						    	if ($(this).val() == "None"){
									$('#kelurahan').empty();
						    		$('#kelurahan').prop('disabled', 'disabled');
						    		$('#kelurahan').append($("<option></option>").attr("value","None").text("Masukkan Kecamatan"));
						    		$('#kode-pos').val('Masukkan Kelurahan');
						    	}
						    	else if ($(this).val() != "None"){
						    		$('#kelurahan').prop('disabled', false);
									$('#kelurahan').empty();
									$('#kode-pos').val('Masukkan Kelurahan');
									/* Kepulauan Seribu Utara */
						    		if ($(this).val() == "Kepulauan Seribu Utara"){
										$.each(seribuUtaraOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
									    /* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Pulau Kelapa"){
									    		$('#kode-pos').val('14540');		
									    	}
									    	else if($(this).val() == "Pulau Harapan"){
									    		$('#kode-pos').val('14540');		
									    	}
									    	else if($(this).val() == "Pulau Untung Jawa"){
									    		$('#kode-pos').val('14510');		
									    	};
										});
						    		}
						    		/* Kepulauan Seribu Selatan */
						    		else if ($(this).val() == "Kepulauan Seribu Selatan"){
										$.each(seribuSelatanOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Pulau Tidung"){
									    		$('#kode-pos').val('14520');		
									    	}
									    	else if($(this).val() == "Pulau Pari"){
									    		$('#kode-pos').val('14520');		
									    	}
									    	else if($(this).val() == "Pulau Panggang"){
									    		$('#kode-pos').val('14530');		
									    	};
									    });
						    		};
						    	};
						    });
			    		}
			    	};
		    	});
    		}
    		/* Banten */
    		else if($(this).val() == "Banten"){
    			$.each(bantenOption, function(key,value){
    				$('#kota-kab').append($("<option></option>").attr("value",value).text(key));
    			});
    			$('#kota-kab').change(function(){
			    	if ($(this).val() == "None"){
						$('#kecamatan').empty();
			    		$('#kecamatan').prop('disabled', 'disabled');
			    		$('#kecamatan').append($("<option></option>").attr("value","None").text("Masukkan Kota/Kabupaten"));
						$('#kelurahan').empty();
			    		$('#kelurahan').prop('disabled', 'disabled');
			    		$('#kelurahan').append($("<option></option>").attr("value","None").text("Masukkan Kecamatan"));
			    		$('#kode-pos').val('Masukkan Kelurahan');
			    	}
			    	else if ($(this).val() != "None"){
			    		$('#kecamatan').empty();
			    		$('#kecamatan').prop('disabled', false);
			    		$('#kelurahan').empty();
			    		$('#kelurahan').prop('disabled', 'disabled');
			    		$('#kelurahan').append($("<option></option>").attr("value","None").text("Masukkan Kecamatan"));
						$('#kode-pos').val('Masukkan Kelurahan');
			    		/* Kota Tangerang */
			    		if($(this).val() == "Kota Tangerang"){
			    			$.each(kotTangerangOption, function(key,value){
			    				$('#kecamatan').append($("<option></option>").attr("value",value).text(key));
			    			});
			    			$('#kecamatan').change(function(){
						    	if ($(this).val() == "None"){
									$('#kelurahan').empty();
						    		$('#kelurahan').prop('disabled', 'disabled');
						    		$('#kelurahan').append($("<option></option>").attr("value","None").text("Masukkan Kecamatan"));
						    		$('#kode-pos').val('Masukkan Kelurahan');
						    	}
						    	else if ($(this).val() != "None"){
						    		$('#kelurahan').prop('disabled', false);
									$('#kelurahan').empty();
									$('#kode-pos').val('Masukkan Kelurahan');
									/* Batu Ceper */
						    		if ($(this).val() == "Batu Ceper"){
										$.each(batuCeperOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
									    /* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Batu Ceper"){
									    		$('#kode-pos').val('15122');		
									    	}
									    	else if($(this).val() == "Batujaya"){
									    		$('#kode-pos').val('15121');		
									    	}
									    	else if($(this).val() == "Batusari"){
									    		$('#kode-pos').val('15121');		
									    	}
									    	else if($(this).val() == "Kebon Besar"){
									    		$('#kode-pos').val('15122');		
									    	}
									    	else if($(this).val() == "Poris Gaga"){
									    		$('#kode-pos').val('15122');		
									    	}
									    	else if($(this).val() == "Poris Gaga Baru"){
									    		$('#kode-pos').val('15122');		
									    	}
									    	else if($(this).val() == "Poris Jaya"){
									    		$('#kode-pos').val('15122');		
									    	};
										});
						    		}
						    		/* Benda */
						    		else if ($(this).val() == "Benda"){
										$.each(bendaOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Belendung"){
									    		$('#kode-pos').val('15123');		
									    	}
									    	else if($(this).val() == "Benda"){
									    		$('#kode-pos').val('15125');		
									    	}
									    	else if($(this).val() == "Jurumudi"){
									    		$('#kode-pos').val('15124');		
									    	}
									    	else if($(this).val() == "Jurumudi Baru"){
									    		$('#kode-pos').val('15124');		
									    	}
									    	else if($(this).val() == "Pajang"){
									    		$('#kode-pos').val('15126');		
									    	};
									    });
						    		}
						    		/* Cibodas */
						    		else if ($(this).val() == "Cibodas"){
										$.each(cibodasOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Cibodas"){
									    		$('#kode-pos').val('15138');		
									    	}
									    	else if($(this).val() == "Cibodasari"){
									    		$('#kode-pos').val('15138');		
									    	}
									    	else if($(this).val() == "Cibodas Baru"){
									    		$('#kode-pos').val('15138');		
									    	}
									    	else if($(this).val() == "Jatiuwung"){
									    		$('#kode-pos').val('15134');		
									    	}
									    	else if($(this).val() == "Panunggangan Barat"){
									    		$('#kode-pos').val('15139');		
									    	}
									    	else if($(this).val() == "Uwung Jaya"){
									    		$('#kode-pos').val('15139');		
									    	};
									    });
						    		}
						    		/* Ciledug */
						    		else if ($(this).val() == "Ciledug"){
										$.each(ciledugOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Paninggilan"){
									    		$('#kode-pos').val('15153');		
									    	}
									    	else if($(this).val() == "Paninggilan Utara"){
									    		$('#kode-pos').val('15153');		
									    	}
									    	else if($(this).val() == "Parung Serab"){
									    		$('#kode-pos').val('15153');		
									    	}
									    	else if($(this).val() == "Sudimara Barat"){
									    		$('#kode-pos').val('15151');		
									    	}
									    	else if($(this).val() == "Sudimara Jaya"){
									    		$('#kode-pos').val('15151');		
									    	}
									    	else if($(this).val() == "Sudimara Selatan"){
									    		$('#kode-pos').val('15151');		
									    	}
									    	else if($(this).val() == "Sudimara Timur"){
									    		$('#kode-pos').val('15151');		
									    	}
									    	else if($(this).val() == "Tajur"){
									    		$('#kode-pos').val('15152');		
									    	};
									    });
						    		}
						    		/* Cipondoh */
						    		else if ($(this).val() == "Cipondoh"){
										$.each(cipondohOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Cipondoh"){
									    		$('#kode-pos').val('15148');		
									    	}
									    	else if($(this).val() == "Cipondoh Indah"){
									    		$('#kode-pos').val('15148');		
									    	}
									    	else if($(this).val() == "Cipondoh Makmur"){
									    		$('#kode-pos').val('15148');		
									    	}
									    	else if($(this).val() == "Gondrong"){
									    		$('#kode-pos').val('15146');		
									    	}
									    	else if($(this).val() == "Kenanga"){
									    		$('#kode-pos').val('15146');		
									    	}
									    	else if($(this).val() == "Ketapang"){
									    		$('#kode-pos').val('15147');		
									    	}
									    	else if($(this).val() == "Petir"){
									    		$('#kode-pos').val('15147');		
									    	}
									    	else if($(this).val() == "Poris Plawad"){
									    		$('#kode-pos').val('15141');		
									    	}
									    	else if($(this).val() == "Poris Plawad Indah"){
									    		$('#kode-pos').val('15141');		
									    	}
									    	else if($(this).val() == "Poris Plawad Utara"){
									    		$('#kode-pos').val('15141');		
									    	};
									    });
						    		}
						    		/* Jatiuwung */
						    		else if ($(this).val() == "Jatiuwung"){
										$.each(jatiuwungOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Alam Jaya"){
									    		$('#kode-pos').val('15133');		
									    	}
									    	else if($(this).val() == "Gandasari"){
									    		$('#kode-pos').val('15137');		
									    	}
									    	else if($(this).val() == "Jatake"){
									    		$('#kode-pos').val('15136');		
									    	}
									    	else if($(this).val() == "Keroncong"){
									    		$('#kode-pos').val('15134');		
									    	}
									    	else if($(this).val() == "Manis Jaya"){
									    		$('#kode-pos').val('15136');		
									    	}
									    	else if($(this).val() == "Pasir Jaya"){
									    		$('#kode-pos').val('15135');		
									    	};
									    });
						    		}
						    		/* Karangtengah */
						    		else if ($(this).val() == "Karangtengah"){
										$.each(karangtengahOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Karang Mulya"){
									    		$('#kode-pos').val('15157');		
									    	}
									    	else if($(this).val() == "Karangtengah"){
									    		$('#kode-pos').val('15157');		
									    	}
									    	else if($(this).val() == "Karang Timur"){
									    		$('#kode-pos').val('15157');		
									    	}
									    	else if($(this).val() == "Parung Jaya"){
									    		$('#kode-pos').val('15159');		
									    	}
									    	else if($(this).val() == "Padurenan"){
									    		$('#kode-pos').val('15158');		
									    	}
									    	else if($(this).val() == "Pondok Bahar"){
									    		$('#kode-pos').val('15159');		
									    	}
									    	else if($(this).val() == "Pondok Pucung"){
									    		$('#kode-pos').val('15158');		
									    	};
									    });
						    		}
						    		/* Karawaci */
						    		else if ($(this).val() == "Karawaci"){
										$.each(karawaciOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Bojong Jaya"){
									    		$('#kode-pos').val('15115');		
									    	}
									    	else if($(this).val() == "Bugel"){
									    		$('#kode-pos').val('15113');		
									    	}
									    	else if($(this).val() == "Cimone"){
									    		$('#kode-pos').val('15114');		
									    	}
									    	else if($(this).val() == "Cimone Jaya"){
									    		$('#kode-pos').val('15114');		
									    	}
									    	else if($(this).val() == "Gerendeng"){
									    		$('#kode-pos').val('15113');		
									    	}
									    	else if($(this).val() == "Karawaci"){
									    		$('#kode-pos').val('15115');		
									    	}
									    	else if($(this).val() == "Karawaci Baru"){
									    		$('#kode-pos').val('15116');		
									    	}
									    	else if($(this).val() == "Koang Jaya"){
									    		$('#kode-pos').val('15112');		
									    	}
									    	else if($(this).val() == "Margasari"){
									    		$('#kode-pos').val('15113');		
									    	}
									    	else if($(this).val() == "Nambo Jaya"){
									    		$('#kode-pos').val('15112');		
									    	}
									    	else if($(this).val() == "Nusa Jaya"){
									    		$('#kode-pos').val('15116');		
									    	}
									    	else if($(this).val() == "Pabuaran"){
									    		$('#kode-pos').val('15114');		
									    	}
									    	else if($(this).val() == "Pabuaran Tumpeng"){
									    		$('#kode-pos').val('15112');		
									    	}
									    	else if($(this).val() == "Pasar Baru"){
									    		$('#kode-pos').val('15112');		
									    	}
									    	else if($(this).val() == "Sukajadi"){
									    		$('#kode-pos').val('15113');		
									    	}
									    	else if($(this).val() == "Sumur Pacing"){
									    		$('#kode-pos').val('15114');		
									    	};
									    });
						    		}
						    		/* Larangan */
						    		else if ($(this).val() == "Larangan"){
										$.each(laranganOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Kreo Selatan"){
									    		$('#kode-pos').val('15156');		
									    	}
									    	else if($(this).val() == "Kreo"){
									    		$('#kode-pos').val('15156');		
									    	}
									    	else if($(this).val() == "Larangan Utara"){
									    		$('#kode-pos').val('15154');		
									    	}
									    	else if($(this).val() == "Larangan Indah"){
									    		$('#kode-pos').val('15154');		
									    	}
									    	else if($(this).val() == "Larangan Selatan"){
									    		$('#kode-pos').val('15154');		
									    	}
									    	else if($(this).val() == "Cipadu"){
									    		$('#kode-pos').val('15155');		
									    	}
									    	else if($(this).val() == "Cipadu Jaya"){
									    		$('#kode-pos').val('15155');		
									    	}
									    	else if($(this).val() == "Gaga"){
									    		$('#kode-pos').val('15154');		
									    	};
									    });
						    		}
						    		/* Neglasari */
						    		else if ($(this).val() == "Neglasari"){
										$.each(neglasariOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Karang Anyar"){
									    		$('#kode-pos').val('15121');		
									    	}
									    	else if($(this).val() == "Karangsari"){
									    		$('#kode-pos').val('15121');		
									    	}
									    	else if($(this).val() == "Kedaung Baru"){
									    		$('#kode-pos').val('15128');		
									    	}
									    	else if($(this).val() == "Kedaung Wetan"){
									    		$('#kode-pos').val('15128');		
									    	}
									    	else if($(this).val() == "Mekarsari"){
									    		$('#kode-pos').val('15129');		
									    	}
									    	else if($(this).val() == "Neglasari"){
									    		$('#kode-pos').val('15129');		
									    	}
									    	else if($(this).val() == "Selapang Jaya"){
									    		$('#kode-pos').val('15127');		
									    	};;
									    });
						    		}
						    		/* Periuk */
						    		else if ($(this).val() == "Periuk"){
										$.each(periukOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Gebang Raya"){
									    		$('#kode-pos').val('15132');		
									    	}
									    	else if($(this).val() == "Gembor"){
									    		$('#kode-pos').val('15133');		
									    	}
									    	else if($(this).val() == "Periuk"){
									    		$('#kode-pos').val('15131');		
									    	}
									    	else if($(this).val() == "Periuk Jaya"){
									    		$('#kode-pos').val('15131');		
									    	}
									    	else if($(this).val() == "Sangiang Jaya"){
									    		$('#kode-pos').val('15132');		
									    	};
									    });
						    		}
						    		/* Pinang */
						    		else if ($(this).val() == "Pinang"){
										$.each(pinangOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Cipete"){
									    		$('#kode-pos').val('15142');		
									    	}
									    	else if($(this).val() == "Kunciran"){
									    		$('#kode-pos').val('15144');		
									    	}
									    	else if($(this).val() == "Kunciran Indah"){
									    		$('#kode-pos').val('15144');		
									    	}
									    	else if($(this).val() == "Kunciran Jaya"){
									    		$('#kode-pos').val('15144');		
									    	}
									    	else if($(this).val() == "Nerogtog"){
									    		$('#kode-pos').val('15145');		
									    	}
									    	else if($(this).val() == "Pakojan"){
									    		$('#kode-pos').val('15142');		
									    	}
									    	else if($(this).val() == "Panunggangan"){
									    		$('#kode-pos').val('15143');		
									    	}
									    	else if($(this).val() == "Panunggangan Timur"){
									    		$('#kode-pos').val('15143');		
									    	}
									    	else if($(this).val() == "Panunggangan Utara"){
									    		$('#kode-pos').val('15143');		
									    	}
									    	else if($(this).val() == "Pinang"){
									    		$('#kode-pos').val('15145');		
									    	}
									    	else if($(this).val() == "Sudimara Pinang"){
									    		$('#kode-pos').val('15145');		
									    	};
									    });
						    		}
						    		/* Tangerang */
						    		else if ($(this).val() == "Tangerang"){
										$.each(tangerangOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Babakan"){
									    		$('#kode-pos').val('15118');		
									    	}
									    	else if($(this).val() == "Buaran Indah"){
									    		$('#kode-pos').val('15119');		
									    	}
									    	else if($(this).val() == "Cikokol"){
									    		$('#kode-pos').val('15117');		
									    	}
									    	else if($(this).val() == "Kelapa Indah"){
									    		$('#kode-pos').val('15117');		
									    	}
									    	else if($(this).val() == "Suka Asih"){
									    		$('#kode-pos').val('15111');		
									    	}
									    	else if($(this).val() == "Sukarasa"){
									    		$('#kode-pos').val('15111');		
									    	}
									    	else if($(this).val() == "Sukasari"){
									    		$('#kode-pos').val('15118');		
									    	}
									    	else if($(this).val() == "Tanah Tinggi"){
									    		$('#kode-pos').val('15119');		
									    	};
									    });
						    		};
						    	};
						    });
			    		}
			    		else
			    		{
			    			$.each(NAOption, function(key,value){
			    				$('#kecamatan').append($("<option></option>").attr("value",value).text(key));
			    			});	
			    		};
			    	};
		    	});
    		}
    		/* Jawa Barat */
    		else if($(this).val() == "Jawa Barat"){
    			$.each(jaBarOption, function(key,value){
    				$('#kota-kab').append($("<option></option>").attr("value",value).text(key));
    			});
    			$('#kota-kab').change(function(){
			    	if ($(this).val() == "None"){
						$('#kecamatan').empty();
			    		$('#kecamatan').prop('disabled', 'disabled');
			    		$('#kecamatan').append($("<option></option>").attr("value","None").text("Masukkan Kota/Kabupaten"));
						$('#kelurahan').empty();
			    		$('#kelurahan').prop('disabled', 'disabled');
			    		$('#kelurahan').append($("<option></option>").attr("value","None").text("Masukkan Kecamatan"));
			    		$('#kode-pos').val('Masukkan Kelurahan');
			    	}
			    	else if ($(this).val() != "None"){
			    		$('#kecamatan').empty();
			    		$('#kecamatan').prop('disabled', false);
			    		$('#kelurahan').empty();
			    		$('#kelurahan').prop('disabled', 'disabled');
			    		$('#kelurahan').append($("<option></option>").attr("value","None").text("Masukkan Kecamatan"));
						$('#kode-pos').val('Masukkan Kelurahan');
			    		/* Kota Bekasi */
			    		if($(this).val() == "Kota Bekasi"){
			    			$.each(kotBekasiOption, function(key,value){
			    				$('#kecamatan').append($("<option></option>").attr("value",value).text(key));
			    			});
			    			$('#kecamatan').change(function(){
						    	if ($(this).val() == "None"){
									$('#kelurahan').empty();
						    		$('#kelurahan').prop('disabled', 'disabled');
						    		$('#kelurahan').append($("<option></option>").attr("value","None").text("Masukkan Kecamatan"));
						    		$('#kode-pos').val('Masukkan Kelurahan');
						    	}
						    	else if ($(this).val() != "None"){
						    		$('#kelurahan').prop('disabled', false);
									$('#kelurahan').empty();
									$('#kode-pos').val('Masukkan Kelurahan');
									/* Bantar Gebang */
						    		if ($(this).val() == "Bantar Gebang"){
										$.each(bantarGebangOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
									    /* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Bantargebang"){
									    		$('#kode-pos').val('17151');		
									    	}
									    	else if($(this).val() == "Cikiwul"){
									    		$('#kode-pos').val('17152');		
									    	}
									    	else if($(this).val() == "Ciketing Udik"){
									    		$('#kode-pos').val('17152');		
									    	}
									    	else if($(this).val() == "Sumur Batu"){
									    		$('#kode-pos').val('17154');		
									    	};
										});
						    		}
						    		/* Bekasi Barat */
						    		else if ($(this).val() == "Bekasi Barat"){
										$.each(bekasiBaratOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Bintara"){
									    		$('#kode-pos').val('17134');		
									    	}
									    	else if($(this).val() == "Bintara Jaya"){
									    		$('#kode-pos').val('17136');		
									    	}
									    	else if($(this).val() == "Jakasampurna"){
									    		$('#kode-pos').val('17145');		
									    	}
									    	else if($(this).val() == "Kota Baru"){
									    		$('#kode-pos').val('17133');		
									    	}
									    	else if($(this).val() == "Kranji"){
									    		$('#kode-pos').val('17135');		
									    	};
									    });
						    		}
						    		/* Bekasi Selatan */
						    		else if ($(this).val() == "Bekasi Selatan"){
										$.each(bekasiSelatanOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Jakamulya"){
									    		$('#kode-pos').val('17146');		
									    	}
									    	else if($(this).val() == "Jakasetia"){
									    		$('#kode-pos').val('17147');		
									    	}
									    	else if($(this).val() == "Kayuringin Jaya"){
									    		$('#kode-pos').val('17144');		
									    	}
									    	else if($(this).val() == "Marga Jaya"){
									    		$('#kode-pos').val('17141');		
									    	}
									    	else if($(this).val() == "Pekayon Jaya"){
									    		$('#kode-pos').val('17148');		
									    	};
									    });
						    		}
						    		/* Bekasi Timur */
						    		else if ($(this).val() == "Bekasi Timur"){
										$.each(bekasiTimurOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Aren Jaya"){
									    		$('#kode-pos').val('17111');		
									    	}
									    	else if($(this).val() == "Bekasi Jaya"){
									    		$('#kode-pos').val('17112');		
									    	}
									    	else if($(this).val() == "Duren Jaya"){
									    		$('#kode-pos').val('17111');		
									    	}
									    	else if($(this).val() == "Margahayu"){
									    		$('#kode-pos').val('17113');		
									    	};
									    });
						    		}
						    		/* Bekasi Utara */
						    		else if ($(this).val() == "Bekasi Utara"){
										$.each(bekasiUtaraOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Harapan Baru"){
									    		$('#kode-pos').val('17123');		
									    	}
									    	else if($(this).val() == "Harapan Jaya"){
									    		$('#kode-pos').val('17124');		
									    	}
									    	else if($(this).val() == "Kaliabang Tengah"){
									    		$('#kode-pos').val('17125');		
									    	}
									    	else if($(this).val() == "Marga Mulya"){
									    		$('#kode-pos').val('17142');		
									    	}
									    	else if($(this).val() == "Perwira"){
									    		$('#kode-pos').val('17122');		
									    	}
									    	else if($(this).val() == "Teluk Pucung"){
									    		$('#kode-pos').val('17121');		
									    	};
									    });
						    		}
						    		/* Jati Asih */
						    		else if ($(this).val() == "Jati Asih"){
										$.each(jatiAsihOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Jatiasih"){
									    		$('#kode-pos').val('17423');		
									    	}
									    	else if($(this).val() == "Jatikramat"){
									    		$('#kode-pos').val('17421');		
									    	}
									    	else if($(this).val() == "Jatiluhur"){
									    		$('#kode-pos').val('17425');		
									    	}
									    	else if($(this).val() == "Jatimekar"){
									    		$('#kode-pos').val('17422');		
									    	}
									    	else if($(this).val() == "Jatirasa"){
									    		$('#kode-pos').val('17424');		
									    	}
									    	else if($(this).val() == "Jatisari"){
									    		$('#kode-pos').val('17426');		
									    	};
									    });
						    		}
						    		/* Jatisampurna */
						    		else if ($(this).val() == "Jatisampurna"){
										$.each(jatisampurnaOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Jatikarya"){
									    		$('#kode-pos').val('17435');		
									    	}
									    	else if($(this).val() == "Jatiraden"){
									    		$('#kode-pos').val('17433');		
									    	}
									    	else if($(this).val() == "Jatirangga"){
									    		$('#kode-pos').val('17434');		
									    	}
									    	else if($(this).val() == "Jatiranggon"){
									    		$('#kode-pos').val('17432');		
									    	}
									    	else if($(this).val() == "Jatisampurna"){
									    		$('#kode-pos').val('17433');		
									    	};
									    });
						    		}
						    		/* Medan Satria */
						    		else if ($(this).val() == "Medan Satria"){
										$.each(medanSatriaOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Harapan Mulya"){
									    		$('#kode-pos').val('17143');		
									    	}
									    	else if($(this).val() == "Kali Baru"){
									    		$('#kode-pos').val('17133');		
									    	}
									    	else if($(this).val() == "Medan Satria"){
									    		$('#kode-pos').val('17132');		
									    	}
									    	else if($(this).val() == "Pejuang"){
									    		$('#kode-pos').val('17131');		
									    	};
									    });
						    		}
						    		/* Mustika Jaya */
						    		else if ($(this).val() == "Mustika Jaya"){
										$.each(mustikaJayaOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Cimuning"){
									    		$('#kode-pos').val('17155');		
									    	}
									    	else if($(this).val() == "Mustikajaya"){
									    		$('#kode-pos').val('17158');		
									    	}
									    	else if($(this).val() == "Mustikasari"){
									    		$('#kode-pos').val('17157');		
									    	}
									    	else if($(this).val() == "Padurenan"){
									    		$('#kode-pos').val('17156');		
									    	};
									    });
						    		}
						    		/* Pondok Gede */
						    		else if ($(this).val() == "Pondok Gede"){
										$.each(pondokGedeOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Jatibaru"){
									    		$('#kode-pos').val('17413');		
									    	}
									    	else if($(this).val() == "Jatibening"){
									    		$('#kode-pos').val('17412');		
									    	}
									    	else if($(this).val() == "Jatibening Baru"){
									    		$('#kode-pos').val('17412');		
									    	}
									    	else if($(this).val() == "Jaticempaka"){
									    		$('#kode-pos').val('17416');		
									    	}
									    	else if($(this).val() == "Jatimakmur"){
									    		$('#kode-pos').val('17413');		
									    	}
									    	else if($(this).val() == "Jatiwaringin"){
									    		$('#kode-pos').val('17411');		
									    	};
									    });
						    		}
						    		/* Pondok Melati */
						    		else if ($(this).val() == "Pondok Melati"){
										$.each(pondokMelatiOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Jatimelati"){
									    		$('#kode-pos').val('17415');		
									    	}
									    	else if($(this).val() == "Jatimurni"){
									    		$('#kode-pos').val('17431');		
									    	}
									    	else if($(this).val() == "Jatirahayu"){
									    		$('#kode-pos').val('17414');		
									    	}
									    	else if($(this).val() == "Jatiwarna"){
									    		$('#kode-pos').val('17415');		
									    	};
									    });
						    		}
						    		/* Rawa Lumbu */
						    		else if ($(this).val() == "Rawa Lumbu"){
										$.each(rawaLumbuOption, function(key,value){
											$('#kelurahan').append($("<option></option>").attr("value",value).text(key));
										});
										/* Kode Pos Auto Input */
									    $('#kelurahan').change(function () {
									    	if($(this).val() == "None"){
									    		$('#kode-pos').val('Masukkan Kelurahan');		
									    	}
									    	else if($(this).val() == "Bojong Menteng"){
									    		$('#kode-pos').val('17117');		
									    	}
									    	else if($(this).val() == "Bojong Rawalumbu"){
									    		$('#kode-pos').val('17116');		
									    	}
									    	else if($(this).val() == "Pengasinan"){
									    		$('#kode-pos').val('17115');		
									    	}
									    	else if($(this).val() == "Sepanjang Jaya"){
									    		$('#kode-pos').val('17114');		
									    	};
									    });
						    		};
						    	};
						    });
			    		}
			    		else
			    		{
			    			$.each(NAOption, function(key,value){
			    				$('#kecamatan').append($("<option></option>").attr("value",value).text(key));
			    			});	
			    		};
			    	};
		    	});
    		}
    		else
    		{
    			$.each(NAOption, function(key,value){
    				$('#kota-kab').append($("<option></option>").attr("value",value).text(key));
    			});	
    		};
    	};
    });
};