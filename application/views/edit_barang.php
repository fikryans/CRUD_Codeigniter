<title>
    Edit Barang
</title>
Ubah Barang
<hr>
<?php echo form_open('c_barang/edit_barang'); ?>
<?php echo form_hidden('id',$this->uri->segment(3)); ?>
<table>

    <tr>
        <td>KODE</td><td><?php echo form_input('kode',$get_barang['kode'],array('placeholder'=>'Kode Barang')); ?></td><tr>
        <td>NAMA</td><td><?php echo form_input('nama',$get_barang['nama'],array('placeholder'=>'Nama Barang'));  ?></td><tr>
        <td>HARGA</td><td><?php echo form_input('harga',$get_barang['harga'],array('placeholder'=>'Harga Barang'));?></td><tr>
    </tr>
    <tr><td colspan="2"><?php echo form_submit('Tambah','Simpan Data') ?></td></tr>
</table>

<?php echo form_close(); ?>

