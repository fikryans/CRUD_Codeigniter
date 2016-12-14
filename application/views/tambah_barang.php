<title>
    Input Barang
</title>
Tambah Barang
<hr>
<?php echo form_open('c_barang/tambah_barang'); ?>
<table>

    <tr>
        <td>KODE</td><td><?php echo form_input('kode','',array('placeholder'=>'Kode Barang')); ?></td><tr>
        <td>NAMA</td><td><?php echo form_input('nama','',array('placeholder'=>'Nama Barang'));  ?></td><tr>
        <td>HARGA</td><td><?php echo form_input('harga','',array('placeholder'=>'Harga Barang'));?></td><tr>
    </tr>
    <tr><td colspan="2"><?php echo form_submit('Tambah','Simpan Data') ?></td></tr>
</table>

<?php echo form_close(); ?>

