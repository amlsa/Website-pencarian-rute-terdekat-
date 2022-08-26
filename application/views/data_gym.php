<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title><?= NAMA_APLIKASI?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta
	content="A fully featured admin theme which can be used to build CRM, CMS, etc."
	name="description" />
<meta content="Coderthemes" name="author" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<!-- App favicon -->
<link rel="shortcut icon"
	href="<?= base_url('assets/landing/')?>images/favicon.ico">

<!-- Bootstrap core CSS -->
<link rel="stylesheet"
	href="<?= base_url('assets/landing/')?>css/bootstrap.min.css"
	type="text/css">

<!--Material Icon -->
<link rel="stylesheet" type="text/css"
	href="<?= base_url('assets/landing/')?>css/materialdesignicons.min.css" />

<!-- Custom  sCss -->
<link rel="stylesheet" type="text/css"
	href="<?= base_url('assets/landing/')?>css/style.css" />
<script
	src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.js'></script>
<link
	href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.css'
	rel='stylesheet' />
<link
	href=" https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css"
	rel="stylesheet" type="text/css" />
<link
	href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap4.min.css "
	rel="stylesheet" type="text/css" />
</head>

<body class=" bg-light">

	<!--Navbar Start-->
	<nav
		class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark bg-dark">
		<div class="container-fluid">
			<!-- LOGO -->
			<a class="logo text-uppercase" href="<?= site_url()?>">
				<h3 class="logo-light text-white"><?= NAMA_APLIKASI?></h3>
				<h4 class="logo-dark text-primary">
					<b><?= NAMA_APLIKASI?></b>
				</h4>
			</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse"
				data-target="#navbarCollapse" aria-controls="navbarCollapse"
				aria-expanded="false" aria-label="Toggle navigation">
				<i class="mdi mdi-menu"></i>
			</button>

			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active"><a href="<?= site_url()?>"
						class="nav-link">Beranda</a></li>
					<li class="nav-item"><a href="<?= site_url('Beranda/data_gym')?>"
						class="nav-link">Lokasi Pusat Informasi</a></li>
				</ul>
				<ul class="navbar-nav ml-auto navbar-center" id="mySidenav">
					<li class="nav-item"><a href="<?= site_url('Auth')?>"
						class="nav-link">Login <i class="mdi mdi-login-variant"></i>
					</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Navbar End -->

	<!-- contact start -->
	<section class="section pb-0" id="contact">
		<div class="bg-shape"></div>
		<div class="container-fluid">

			<div class="row">
				<div class="col-lg-3 mt-4">
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
									<form method="POST" action="#" id="formCariRute">
										<div class="form-group">
											<label for="exampleInputEmail1"></label> <input type='text'
												class='form-control' id='search' name='search'>
										</div>
										<button id="cariRute" class="btn btn-primary">Cari Wahana</button>
									</form>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="col-lg-9 mt-4">
					<div class="card">
						<div class="card-body">
							<table id="basic-datatable"
								class="display table-striped w-100 text-nowrap">
								<thead>
									<tr>
										<th class="col-1">No.</th>
										<th class="col-1">Pusat Informasi</th>
										<th class="col-3">Alamat</th>
										<th class="col-2">Lat</th>
										<th class="col-2">Lng</th>
										<th class="col-2">Aksi</th>
									</tr>
								</thead>
								<tbody>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- end col -->
			</div>
			<!-- end row -->
		</div>
		<!-- end container-fluid -->
	</section>
	<!-- contact end -->
	<!-- Back to top -->
	<a href="<?= base_url('assets/landing/')?>#" class="back-to-top"
		id="back-to-top"> <i class="mdi mdi-chevron-up"> </i>
	</a>

	<!-- javascript -->
	<script src="<?= base_url('assets/landing/')?>js/jquery.min.js"></script>
	<script
		src="<?= base_url('assets/landing/')?>js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('assets/landing/')?>js/jquery.easing.min.js"></script>
	<script src="<?= base_url('assets/landing/')?>js/scrollspy.min.js"></script>

	<!-- custom js -->
	<script src="<?= base_url('assets/landing/')?>js/app.js"></script>
	<script src="https://unpkg.com/@turf/turf/turf.min.js"></script>
	<!-- third party js -->
	<script
		src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
	<script
		src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
	<script
		src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
	<script
		src="https://cdn.datatables.net/responsive/2.2.5/js/responsive.bootstrap4.min.js "></script>
</body>
<script type="text/javascript">
var tb_ = $('#basic-datatable').DataTable({
	"scrollX": true,
    "searching": false,
    "processing": true,
    "bLengthChange": false,
    "serverSide": true,
    "ordering": false,
    'ajax': {
        'url': '<?= site_url('Beranda/get')?>',
        'type': "POST",
        'data': function(data) {
            data.search = $("#search").val();
        }
    },
});
$("#search").on('keyup',function(){
    console.log($(this).val());
    tb_.draw();
})
mapboxgl.accessToken = 'pk.eyJ1IjoiZWZoYWwiLCJhIjoiY2ptOXRiZ3k2MDh4bzNrbnljMjk5Z2d5aSJ9.8dSNgeAjpdTlZ3x-b2vsog';
var map = new mapboxgl.Map({
    container: 'maps', // container id
    style: 'mapbox://styles/mapbox/streets-v9', // stylesheet location
    center: [<?= LNG?>,<?= LAT?>], // starting position [lng, lat]
    zoom: 16, // starting zoom
    logoPosition:'top-right',
});

var a_mark = [];
map.on("click",function(e){
	
	if(a_mark.length > 0){
		a_mark[1].remove();
	}
	function getRuteTerdekatDenganMarker(){
    	var dist_r = [];
		a_mark_lngLat = a_mark[1].getLngLat();
		console.log(marker);
		marker.forEach(function(i,k){
			dist_r[k] = [turf.distance(turf.point([i[0].getLngLat().lng,i[0].getLngLat().lat]), turf.point([a_mark_lngLat.lng,a_mark_lngLat.lat]), {units: 'kilometers'}).toFixed(2),k];
		});
		dist_r.sort(function(a,b){
			return a[0] - b[0];
		})
		return dist_r[0][1];
		
	}
		
	a_mark[1] = new mapboxgl.Marker({color:"#2c3e50"}).setLngLat([e.lngLat['lng'],e.lngLat['lat']]).addTo(map);
	map.flyTo({center:[e.lngLat['lng'],e.lngLat['lat']],zoom: 17,
		  curve: 1,
		  easing(t) {
		    return t;
		  }});	
	$("#lokasiAwal").val(getRuteTerdekatDenganMarker());
});
var marker = [];
function createMarker(){
    datas.forEach(function(index){
    	if(index.simpulType == 'gym'){
			marker[index.simpulID] = [new mapboxgl.Marker({color:"#2c3e50"}).setLngLat([index.simpulLng,index.simpulLat]).addTo(map).setPopup(new mapboxgl.Popup({ offset: 25 })
			.setText(index.simpulNama)).addTo(map)];
		}
		if(index.simpulType == '-'){
			marker[index.simpulID] = [new mapboxgl.Marker({color:"#d35400"}).setLngLat([index.simpulLng,index.simpulLat]).addTo(map).setPopup(new mapboxgl.Popup({ offset: 25 })
			.setText(index.simpulNama)).addTo(map)];
		}
    });
}
$("#lokasiAwal").change(function(e){
	map.flyTo({center:marker[$(this).val()][0]._lngLat,zoom: 19,
		  curve: 1,
		  easing(t) {
		    return t;
		  }});	
});

var lineMapLayer;

function buatLine(Obj){
	var cor = [];
	Obj.forEach(function(i){
		cor.push([marker[i][0]._lngLat.lng,marker[i][0]._lngLat.lat]);
	});
	lineMapLayer = map.addLayer({
		"id": "route",
		"type": "line",
		"source": {
		"type": "geojson",
		"data": {
        		"type": "Feature",
        		"properties": {},
        		"geometry": {
            		"type": "LineString",
                		"coordinates": cor
            		}
        		}
		},
		"layout": {
            		"line-join": "round",
            		"line-cap": "round"
            		},
		"paint": {
            		"line-color": "#2980b9",
            		"line-width": 4
            		}
		});
}
$("#formCariRute").on('submit',function(e){
	e.preventDefault();
	if($("#lokasiAwal").val()==$("#lokasiAkhir").val()){
		alert("Pastikan anda memilih lokasi asal dan tujuan yang berbeda !");
		return;
	}
	$.ajax({
		url  : "<?= site_url('Beranda/cariRute')?>",
		type : "POST",
		data : $("#formCariRute").serialize(),
		success : function(e){
			var Obj = JSON.parse(e);
			console.log(Obj);
			if(Obj.length < 1){
				alert("Rute tidak ditemukan !");
			}else{
    			if(Obj.distance){
    				if(lineMapLayer)
    				{
    				 	map.removeLayer("route");
    				 	map.removeSource("route");
    	    			$("#lAsal").text(Obj.from_);
    	    			$("#lAkhir").text(Obj.to_);
    	    			$("#lJarak").text(Obj.distance);
    	    			$("#lPath").text(Obj.path_);
    	    			$("#res").show();
            			$("#resNone").hide();
    	    			buatLine(Obj.path);
    	    			map.flyTo({center:marker[Obj.from][0]._lngLat,zoom: 14,
    	    				  curve: 1,
    	    				  easing(t) {
    	    				    return t;
    	    				  }});	
    				}else{
    	    			map.flyTo({center:marker[Obj.from][0]._lngLat,zoom: 14,
    	    				  curve: 1,
    	    				  easing(t) {
    	    				    return t;
    	    				  }});	
    	    			buatLine(Obj.path);
    	    			$("#lAsal").text(Obj.from_);
    	    			$("#lAkhir").text(Obj.to_);
    	    			$("#lJarak").text(Obj.distance);
    	    			$("#lPath").text(Obj.path_);
    	    			$("#res").show();
            			$("#resNone").hide();
    				}
    
    			}else{
        			$("#res").hide();
        			$("#resNone").show();
        			$("#resTidakDitemukan").text("Jalur tidak ditemukan !");
    			}
			}
		} 

	});
	
})
createMarker();
</script>
</html>