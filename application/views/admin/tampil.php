<table border=1>
	<tr><td>No</td><td>kategori</td><td>aksi</td></tr>
	
	<?php $no=1;foreach ($kategori as $key => $value) {?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $value->id_admin ?></td></tr>
			<tr>
			<td><?php echo $value->nama_admin ?></td></tr>
			<tr>
			<td><?php echo $value->username ?></td></tr>
			<td><a href="<?php echo base_url()?>index.php/
			kategori/hapus/<?php echo $value->id_kategori ?>
			">Hapus</a></td>
		</tr>
		<?php
	} ?>
</table>