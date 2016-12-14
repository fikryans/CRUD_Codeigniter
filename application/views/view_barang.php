<?php $this->load->view('header') ?>


<table border="1">
    <tr>
        <th>NOMOR</th>
        <th>KODE BARANG</th>
        <th>NAMA BARANG</th>
        <th>HARGA BARANG</th></tr>
<?php
$no =1;
foreach ($barang as $b) {
?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $b->kode?></td>
        <td><?php echo $b->nama?></td>
        <td><?php echo $b->harga?></td>
        <td><?php echo anchor('c_barang/edit/'.$b->id,'EDIT'); ?></td>
        <td><?php echo anchor('c_barang/hapus/'.$b->id,'HAPUS'); ?></td>
    </tr>
<?php } ?>
</table>



