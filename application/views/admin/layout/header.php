<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Page</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/img/admin/faviconcbm.ico') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="<?= base_url('assets/admin/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/admin/bootstrap-select-1.12.1/bootstrap-select.min.css') ?>">
    <link href="<?= base_url('assets/admin/css/custom-admin.css') ?>" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Inconsolata' rel='stylesheet' type='text/css'>
    <script src="<?= base_url('assets/admin/js/jquery.min.js') ?>"></script>
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <i class="fa fa-lg fa-bars"></i>
            </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?= base_url('admin/publish/signout') ?>"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>
        </div>
    </nav>