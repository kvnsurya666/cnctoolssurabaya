<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Page</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/admin/login/faviconcbm.ico') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= base_url('assets/admin/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/admin/bootstrap-select-1.12.1/bootstrap-select.min.css') ?>">
    <link href="<?= base_url('assets/admin/css/custom-admin.css') ?>" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Inconsolata' rel='stylesheet' type='text/css'>
    <script src="<?= base_url('assets/admin/js/jquery.min.js') ?>"></script>
    <style>
        body {
            background-image: url('/assets/imgs/login-bg.png');
            background-position: bottom right;
            background-repeat: no-repeat;
            background-color: #548fd0;
        }

        /* .avatar {
                background-image:url('assets/img/nigga-david.jpg');
                } */
    </style>
</head>

<div class="container">
    <div class="login-container">
        <div id="output">
            <?php
            if ($this->session->flashdata('err_login')) {
            ?>
                <div class="alert alert-danger"><?= $this->session->flashdata('err_login') ?></div>
            <?php
            }
            ?>
        </div>
        <div class="avatar"><img src="<?= base_url('assets/img/admin/logocbmbaru.png') ?>"></div>
        <p class="text-center text-danger"><?= $this->session->flashdata('log_alert') ?></p>
        <p class="text-center text-danger"><?= $this->session->flashdata('success') ?></p>
        <div class="form-box">
            <?= form_open() ?>
            <input type="text" name="username" placeholder="username" required>
            <input type="password" name="password" placeholder="password" required>
            <button class="btn btn-info btn-block login" type="submit" name="login">Login</button>
            <?= form_close() ?>
            </form>
        </div>
    </div>
</div>