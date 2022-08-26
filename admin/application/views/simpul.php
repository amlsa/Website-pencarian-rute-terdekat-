<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('inc/head') ?>

    <link href=" https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap4.min.css " rel="stylesheet" type="text/css" />
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <?php $this->load->view('inc/topbar') ?>

        <!-- ========== Left Sidebar Start ========== -->
        <?php $this->load->view('inc/menu'); ?>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <!-- Modal -->
        <!-- Add/edit modal -->
        <div class="modal fade" id="modal_add_edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">Form Simpul Lokasi Wahana</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="dripicons-cross "></i></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <form class="form-horizontal" id="form" method="POST">
                                <!--  -->
                                <script type="text/javascript">
                                    var data = [];
                                    <?php if ($getAllSimpul) : ?>
                                        <?php foreach ($getAllSimpul as $v) : ?>
                                            data.push({
                                                simpulNama: "<?= $v->simpulNama ?>",
                                                simpulType: "<?= $v->simpulType ?>",
                                                simpulLat: "<?= $v->simpulLat ?>",
                                                simpulLng: "<?= $v->simpulLng ?>"
                                            });
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </script>
                                <!--  -->

                                <input type="hidden" id="simpulID" name="simpulID">
                                <input type="hidden" id="simpulType" name="simpulType" value="-">
                                <div class="form-group row mb-1">
                                    <label for="inputEmail3" class="col-2 col-form-label">Nama Simpul</label>
                                    <div class="col-10">
                                        <input type="text" class="form-control" id="simpulNama" name="simpulNama" placeholder="Nama Simpul">
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="inputPassword3" class="col-2 col-form-label">Peta</label>
                                    <div class="col-10">
                                        <div id="map" style="height: 240px;width:100%;"></div>
                                    </div>
                                </div>
                                <div class="form-group row mb-1">
                                    <label for="inputEmail3" class="col-2 col-form-label">Latitude</label>
                                    <div class="col-10">
                                        <input type="text" class="form-control" id="simpulLat" name="simpulLat" placeholder="Latitude">
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="inputEmail3" class="col-2 col-form-label">Longitude</label>
                                    <div class="col-10">
                                        <input type="text" class="form-control" id="simpulLng" name="simpulLng" placeholder="Longitude">
                                    </div>
                                </div>
                                <div class="form-group mb-3 justify-content-end row">
                                    <div class="col-10">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                                        <button type="button" class="btn btn-warning waves-effect waves-light" data-dismiss="modal" aria-label="Close">Tutup</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- End Add/edit modal -->

        <!-- End Modal -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <h4 class="page-title"><?= $title ?></h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <!-- <h4 class="header-title"><?= $tableTitle ?></h4> -->
                                    <p class="text-muted font-13 mb-4">
                                        <?= $tableDesc ?>
                                    </p>

                                    <div class="d-flex row">
                                        <div class="mr-auto p-2">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_add_edit"><i class="dripicons-document-new "></i> Buat baru</button>
                                        </div>
                                        <div class="p-2">
                                            <input type="text" id="search" class="form-control input-sm" placeholder="Cari..">
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <table id="basic-datatable" class="display table-striped w-100 text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th class="col-1">ID</th>
                                                    <th class="col-3">Simpul</th>
                                                    <th class="col-2">Lat</th>
                                                    <th class="col-2">Lng</th>
                                                    <th class="col-2">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-12">
                                        <div id="map2" style="width: 100%;height: 500px;"></div>
                                    </div>

                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div>
                    <!-- end row-->

                </div> <!-- container -->

            </div> <!-- content -->

            <?php $this->load->view('inc/footer') ?>

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->
    <!-- Vendor js -->
    <script src="<?= base_url() ?>/assets/js/vendor.min.js"></script>
    <!-- third party js -->
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.5/js/responsive.bootstrap4.min.js "></script>

    <!-- App js-->
    <script src="<?= base_url() ?>/assets/js/app.min.js"></script>

    <script type="text/javascript">
        mapboxgl.accessToken = 'pk.eyJ1IjoiZWZoYWwiLCJhIjoiY2ptOXRiZ3k2MDh4bzNrbnljMjk5Z2d5aSJ9.8dSNgeAjpdTlZ3x-b2vsog';
        var map = new mapboxgl.Map({
            container: 'map', // container id
            style: 'mapbox://styles/mapbox/streets-v9', // stylesheet location
            center: [<?= LNG ?>, <?= LAT ?>], // starting position [lng, lat]
            zoom: 18, // starting zoom
            logoPosition: 'top-right',
        });
        data.forEach(function(index, item) {
            var colors = '';
            if (index.simpulType == 'gym') {
                new mapboxgl.Marker({
                    color: "#4264fb"
                }).setLngLat([index.simpulLng, index.simpulLat]).addTo(map).setPopup(new mapboxgl.Popup({
                        offset: 25
                    })
                    .setText(index.simpulNama)).addTo(map);
            } else {
                new mapboxgl.Marker({
                    color: "#1abc9c"
                }).setLngLat([index.simpulLng, index.simpulLat]).addTo(map).setPopup(new mapboxgl.Popup({
                        offset: 25
                    })
                    .setText(index.simpulNama)).addTo(map);
            }
        });
        var map2 = new mapboxgl.Map({
            container: 'map2', // container id
            style: 'mapbox://styles/mapbox/streets-v9', // stylesheet location
            center: [<?= LNG ?>, <?= LAT ?>], // starting position [lng, lat]
            zoom: 18, // starting zoom
            logoPosition: 'top-right',
        });
        data.forEach(function(index, item) {
            var colors = '';
            if (index.simpulType == 'gym') {
                new mapboxgl.Marker({
                    color: "#4264fb"
                }).setLngLat([index.simpulLng, index.simpulLat]).addTo(map2).setPopup(new mapboxgl.Popup({
                        offset: 25
                    })
                    .setText(index.simpulNama)).addTo(map2);
            } else {
                new mapboxgl.Marker({
                    color: "#1abc9c"
                }).setLngLat([index.simpulLng, index.simpulLat]).addTo(map2).setPopup(new mapboxgl.Popup({
                        offset: 25
                    })
                    .setText(index.simpulNama)).addTo(map2);
            }
        });
        map2.resize();
        var a_mark = [];
        map.on("click", function(e) {

            if (a_mark.length > 0) {
                a_mark[1].remove();
            }

            a_mark[1] = new mapboxgl.Marker({
                color: "#2c3e50"
            }).setLngLat([e.lngLat['lng'], e.lngLat['lat']]).addTo(map);
            map.flyTo({
                center: [e.lngLat['lng'], e.lngLat['lat']],
                zoom: 17,
                curve: 1,
                easing(t) {
                    return t;
                }
            });
            console.log(a_mark[1]._lngLat.lat);
            console.log(a_mark[1]._lngLat.lng);
            $("#simpulLat").val(a_mark[1]._lngLat.lat);
            $("#simpulLng").val(a_mark[1]._lngLat.lng);
        });

        var tb_ = $('#basic-datatable').DataTable({
            "scrollX": true,
            "searching": false,
            "processing": true,
            "bLengthChange": false,
            "serverSide": true,
            "ordering": false,
            'ajax': {
                'url': '<?= site_url('Simpul/get') ?>',
                'type': "POST",
                'data': function(data) {
                    data.search = $("#search").val();
                }
            },
        });
        $("#search").on('keyup', function() {
            console.log($(this).val());
            tb_.draw();
        })
        $("#form").submit(function(e) {
            e.preventDefault();
            console.log();
            $.ajax({
                url: '<?= site_url('Simpul/insert') ?>',
                data: $(this).serializeArray(),
                type: "POST",
                success: function(e) {
                    console.log(e);
                    if (e == 'TRUE') {
                        $("#modal_add_edit").modal('hide');
                        alert("Insert data berhasil");
                        tb_.draw();
                    } else {
                        alert("Insert data Gagal");
                    }
                }
            });
        });
        $(document).on("click", ".btn-del", function(e) {
            if (confirm("Hapus data ini ?")) {
                var id = $(this).attr('data-id');
                $.ajax({
                    'url': "<?= site_url('Simpul/delete/') ?>" + id,
                    'type': "POST",
                    'success': function(e) {
                        tb_.draw();
                    }
                })
            }
        })
        $(document).on("click", ".btn-edit", function(e) {
            var id = $(this).attr('data-id');
            $.ajax({
                'url': "<?= site_url('Simpul/getByID/') ?>" + id,
                'success': function(e) {
                    Obj = JSON.parse(e);
                    if (Obj) {
                        $("#modal_add_edit").modal("show");
                        $("#simpulID").val(Obj.simpulID);
                        $("#simpulNama").val(Obj.simpulNama);
                        $("#simpulType").val(Obj.simpulType);
                        $("#simpulLat").val(Obj.simpulLat);
                        $("#simpulLng").val(Obj.simpulLng);
                        marker.setLngLat([Obj.simpulLng, Obj.simpulLat]);
                        map.setCenter([Obj.simpulLng, Obj.simpulLat]);
                    }
                }
            })
        })
        $("#modal_add_edit").on('shown.bs.modal', function() {
            map.resize();
        });
        $("#modal_add_edit").on('hidden.bs.modal', function() {
            $("#simpulID").val("");
            $("#form")[0].reset();
        });
    </script>
</body>

</html>