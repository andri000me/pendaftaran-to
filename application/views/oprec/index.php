<!--<?php if($this->session->userdata('role')=='admin')
							{
							  ?>
				<script type="text/javascript">
			$(function() {
				var oTable1 = $('#sample-table-2').dataTable( {
				"aoColumns": [
			      null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
				  { "bSortable": false }
				] } );
				
			})
		</script>			
			<?php } ?>

<?php if($this->session->userdata('role')=='user')
							{
							  ?>
				<script type="text/javascript">
			$(function() {
				var oTable1 = $('#sample-table-2').dataTable( {
				"aoColumns": [
			      null, null, null, null, null, null, null, null, null, null, null, null, null, null,
				  { "bSortable": false }
				] } );
				
			})
		</script>			
			<?php } ?>	-->		

<script type="text/javascript">
			$(function() {
				var oTable1 = $('#sample-table-2').dataTable( {
				"aoColumns": [
			      null, null, null, null, null, null, null, null, null, null,
				  { "bSortable": false }
				] } );
				
			})
		</script>


	<p><a href="<?php echo base_url(); ?>form/insert" class="btn btn-primary btn-small">Tambah</a>
		<a href="<?php echo base_url(); ?>assets/cetak/export.php" class="btn btn-primary btn-small">export excel</a>
	</p>
	
	<?php echo $this->session->flashdata('sukses'); ?>
	<table id="sample-table-2" class="table table-striped table-bordered table-hover">

	<thead>
		<tr>
			<th>No</th>
			<th>Hapus</th>
			<th>update</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Agama</th>
			<th>Tanggal Lahir</th>
			<th>Asal daerah</th>
			<th>Asal Sekolah</th>
			<th>No HP</th>
			<th>Instagram</th>
			<th>Email</th>
			<th>Password</th>
			<th>Tgl Daftar</th>
			<th>Foto</th>
		</tr>
	</thead>

	<tbody>
		<tr>
		<?php
		$no = 1;
		foreach($data as $key => $value) { 
		?>
			<th><?= $no++ ?></th>
			<th>
			<a href="<?= base_url() ?>form/deletedata/<?= $value->id; ?>" class="icon-trash bigger-100" onclick="return confirm('Anda ingin menghapus data ini bro ???');">Delete</a>
			</th>
			<th>
			<a href="<?= base_url() ?>form/update/<?= $value->id; ?>" class="icon-edit bigger-100">Update</a>
			</th>
			<th><?= $value->nama_depan ?></th>
			<th><?= $value->jenis_kelamin ?></th>
			<th><?= $value->agama ?></th>
			<th><?= $value->tanggal_lahir ?></th>
			<th><?= $value->asal ?></th>
			<th><?= $value->asal_sekolah?></th>
			<th><?= $value->nohp ?></th>
			<th><?= $value->instagram ?></th>
			<th><?= $value->email ?></th>
			<th><?= $value->pass_apl ?></th>
			<th><?= $value->tgl_daftar ?></th>
			<th>
			<a target="_blank" href="<?= base_url() ?>assets/img/data/<?= $value->gambar ?>" class="icon-edit bigger-100">Lihat</a>
			</th>			
		</tr>
		<?php } ?>
	</tbody>
</table>