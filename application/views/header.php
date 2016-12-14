<html>

    <head>
        <title>Hallo ini header</title>
    </head>
    <body>
        <?php echo 'Barang Dagang <br>'; ?>
        <?php echo anchor('c_barang/tambah', 'Tambah Data') ?>


        <h1>Login berhasil !</h1>
        <h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
        <a href="<?php echo base_url('c_login/logout'); ?>">Logout</a>

        <hr>