
        <meta charset="utf-8" />
        <title><?= $title?> | <?= NAMA_APLIKASI?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?= base_url() ?>/assets/images/favicon.ico">
		<link href="<?= base_url() ?>/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- App css -->
        <link href="<?= base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
        <link href="<?= base_url() ?>/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

        <link href="<?= base_url() ?>/assets/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
        <link href="<?= base_url() ?>/assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled />

        <!-- icons -->
        <link href="<?= base_url() ?>/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <style>
            h3.logo-sm{
                position: relative;
                bottom: -9px;
                color: white;
                font-size: 12px;
            }
            h3.logo-lg{
                position: relative;
                bottom: -9px;
                color: white;
            }
        </style>
        <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.js'></script>
        <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.css' rel='stylesheet' />
        <style type="text/css">
        .marker {
            display: block;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            padding: 0;
            background-position: top;
        }
        </style>