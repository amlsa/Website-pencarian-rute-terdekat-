<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?= NAMA_APLIKASI?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?= base_url('assets/landing/')?>images/favicon.ico">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="<?= base_url('assets/landing/')?>css/bootstrap.min.css" type="text/css">

        <!--Material Icon -->
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/landing/')?>css/materialdesignicons.min.css" />
		
        <!-- Custom  sCss -->
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/landing/')?>css/style.css" />
		<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.js'></script>
    	<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.css' rel='stylesheet' />
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    </head>

    <body>

        <!--Navbar Start-->
        <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark bg-dark">
            <div class="container-fluid">
                <!-- LOGO -->
                <a class="logo text-uppercase" href="<?= site_url()?>">
                	<h3 class="logo-light text-white"><?= NAMA_APLIKASI?></h3>
                	<h4 class="logo-dark text-primary"><b><?= NAMA_APLIKASI?></b></h4>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                     <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                        <a href="<?= site_url()?>" class="nav-link">Beranda</a>
                      </li>
                    </ul>
                    <ul class="navbar-nav ml-auto navbar-center" id="mySidenav">
                        <li class="nav-item">
                            <a href="<?= site_url('Auth')?>" class="nav-link">Login <i class="mdi mdi-login-variant"></i> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- contact start -->
        <section class="section pb-0" >
            <div class="bg-shape">
            </div>
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-6 mt-4">
                    	<div class="row">
                    		<div class="col-12">
    			        	<div class="card">
                            	<div class="card-body">
                	               <form method="POST" action="#" id="formCariRute">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Lokasi awal</label>
                                        <select class="custom-select" id="lokasiAwal" name="lokasiAwal">
                                          <option selected>Pilih lokasi awal</option>
                                            <script type="text/javascript">
        									var datas = [];	

                                            </script>
                                            <?php foreach ($dt_simpul as $v):?>
                                            <script type="text/javascript">
        										datas.push({simpulID:"<?= $v->simpulID ?>",simpulType:"<?= $v->simpulType ?>",simpulNama:"<?= $v->simpulNama ?>",simpulLat:"<?= $v->simpulLat?>",simpulLng:"<?= $v->simpulLng?>"});
                                            </script>
                                            <option value="<?= $v->simpulID?>"><?= $v->simpulNama?></option>
                                            <?php endforeach;?>
                                        </select>
    <!--                                     <small id="emailHelp" class="form-text text-muted">Lokasi awal</small> -->
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Lokasi akhir</label>
                                        <select class="custom-select" id="lokasiAkhir" name="lokasiAkhir">
                                          <option selected>Pilih lokasi akhir</option>
                                            <?php foreach ($dt_simpul as $v):?>
                                            <?php if($v->simpulType == 'gym'){?>
                                            <option value="<?= $v->simpulID?>"><?= $v->simpulNama?></option>
                                            <?php }?>
                                            <?php endforeach;?>
                                        </select>
    <!--                                     <small id="emailHelp" class="form-text text-muted">Lokasi akhir</small> -->
                                      </div>
                                      <button id="cariRute" class="btn btn-primary">Cari Rute Terdekat</button>
                                    </form>
                            	</div>
                        	</div>
                    		</div>
                    		<div class="col-12">
                        		<div class="card overflow-auto" style="height: 400px;">
                        			<div class="card-body">
                        				<div><h3>Hasil</h3></div>
                        				<p>Jarak : <span id="lJarak"></span></p>
                        				<p>Lokasi Awal : <span id="lAsal"></span></p>
                        				<p>Lokasi Akhir : <span id="lAkhir"></span></p>
                        				<p>Path : <span id="lPath"></span></p>
                        			</div>
                        		</div>
                    		</div>
                    	</div>
            
                    </div>
                    <div class="col-lg-6 mt-4">
         				<div id="maps" style="height: 600px;"></div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </section>
        <!-- contact end -->
        <!-- Back to top -->    
		
        <a href="<?= base_url('assets/landing/')?>#" class="back-to-top" id="back-to-top"> <i class="mdi mdi-chevron-up"> </i> </a>

        <!-- javascript -->
        <script src="<?= base_url('assets/landing/')?>js/jquery.min.js"></script>
        <script src="<?= base_url('assets/landing/')?>js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url('assets/landing/')?>js/jquery.easing.min.js"></script>
        <script src="<?= base_url('assets/landing/')?>js/scrollspy.min.js"></script>

		<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
        <!-- custom js -->
        <script src="<?= base_url('assets/landing/')?>js/app.js"></script>
        <script src="https://unpkg.com/@turf/turf/turf.min.js"></script>
    </body>
<script type="text/javascript">
$('#lokasiAwal').select2();
$('#lokasiAkhir').select2();
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
		a_mark_lngLat = e.lngLat;
		marker.forEach(function(i,k){
			dist_r[k] = [turf.distance(turf.point([i[0]._lngLat.lng,i[0]._lngLat.lat]), turf.point([a_mark_lngLat.lng,a_mark_lngLat.lat]), {units: 'kilometers'}).toFixed(2),k];
		});
		dist_r.sort(function(a,b){
			return a[0] - b[0];
		})
		console.log(dist_r[0][1]);
		return dist_r[0][1];
	}
		
	a_mark[1] = new mapboxgl.Marker({color:"#2c3e50"}).setLngLat([e.lngLat['lng'],e.lngLat['lat']]).addTo(map);
	map.flyTo({center:[e.lngLat['lng'],e.lngLat['lat']],zoom: 17,
		  curve: 1,
		  easing(t) {
		    return t;
		  }});	
// 	$("#lokasiAwal").val(getRuteTerdekatDenganMarker());
	$('#lokasiAwal').val(getRuteTerdekatDenganMarker()); // Select the option with a value of '1'
	$('#lokasiAwal').trigger('change'); // Notify any JS components that the value changed
	console.log(a_mark[1].getLngLat());
});
var marker = [];
function createMarker(){
    datas.forEach(function(index){
    	if(index.simpulType == 'gym'){
			marker[index.simpulID] = [new mapboxgl.Marker({color:"#2c3e50"}).setLngLat([index.simpulLng,index.simpulLat]).addTo(map).setPopup(new mapboxgl.Popup({ offset: 25 })
			.setText(index.simpulNama)).addTo(map)];
		}
		if(index.simpulType == '-'){
			/* marker[index.simpulID] = [new mapboxgl.Marker({color:"#d35400"}).setLngLat([index.simpulLng,index.simpulLat]).addTo(map).setPopup(new mapboxgl.Popup({ offset: 25 })
			.setText(index.simpulNama)).addTo(map)]; */
            marker[index.simpulID] = [{_lngLat :
            {
                lng : index.simpulLng,
                lat : index.simpulLat,
            }
        }];
		}
    });
}
$("#lokasiAwal").change(function(e){
	map.flyTo({center:marker[$(this).val()][0]._lngLat,zoom: 19,
		  curve: 1,
		  easing(t) {
		    return t;
		  }});	
	console.log(marker[$(this).val()]);
	if(a_mark.length > 0){
		a_mark[1].remove();
	}
	a_mark[1] = new mapboxgl.Marker({color:"#2c3e50"}).setLngLat([marker[$(this).val()][0]._lngLat.lng,marker[$(this).val()][0]._lngLat.lat]).addTo(map);
	  
});

var lineMapLayer;

function buatLine(Obj){
	var cor = [];
	Obj.forEach(function(i){
		cor.push([marker[i][0]._lngLat.lng,marker[i][0]._lngLat.lat]);
	});
	console.log(cor);
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
    	    			$("#lPath").html(Obj.path_+"<br/>"+Obj.detail_perhitungan);
    	    			$("#res").show();
            			$("#resNone").hide();
    	    			buatLine(Obj.path);
    	    			map.flyTo({center:marker[Obj.from][0]._lngLat,zoom: 17,
    	    				  curve: 1,
    	    				  easing(t) {
    	    				    return t;
    	    				  }});	
    				}else{
    	    			map.flyTo({center:marker[Obj.from][0]._lngLat,zoom: 17,
    	    				  curve: 1,
    	    				  easing(t) {
    	    				    return t;
    	    				  }});	
    	    			buatLine(Obj.path);
    	    			$("#lAsal").text(Obj.from_);
    	    			$("#lAkhir").text(Obj.to_);
    	    			$("#lJarak").text(Obj.distance);
    	    			$("#lPath").html(Obj.path_+Obj.detail_perhitungan);
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
function lineTersedia() {
            map.on("load", function() {
                $.ajax({
                    url: "<?= site_url('Graph/getAll') ?>",
                    success: function(e) {
                        console.log(e);
                        var Obj = JSON.parse(e);
                        Obj.forEach(function(item) {
                            map.addLayer({
                                "id": "route" + item.graphID,
                                "type": "line",
                                "source": {
                                    "type": "geojson",
                                    "data": {
                                        "type": "Feature",
                                        "properties": {},
                                        "geometry": {
                                            "type": "LineString",
                                            "coordinates": [
                                                [item.simpulAwalLng, item.simpulAwalLat],
                                                [item.simpulAkhirLng, item.simpulAkhirLat]
                                            ]
                                        }
                                    }
                                },
                                "layout": {
                                    "line-join": "round",
                                    "line-cap": "round"
                                },
                                "paint": {
                                    "line-color": "#0a2405",
                                    "line-width": 5
                                }
                            });
                        });
                    }
                });
            })

        }
        lineTersedia();
		


</script>
</html>