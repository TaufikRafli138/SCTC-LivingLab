<form action="<?php echo base_url('admin/konfigurasi/Struktur') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
<?php 
echo csrf_field(); 
?>

<input type="hidden" name="id_konfigurasi" value="<?php echo $konfigurasi['id_konfigurasi'] ?>">
<div class="form-group row">
	<label class="col-3">Upload Struktur Organisasi</label>
	<div class="col-6">
		<input type="file" name="logo" value="<?php echo $konfigurasi['Struktur'] ?>" class="form-control">
		<small class="text-secondary">Format: JPG, PNG, GIF</small>
	</div>
	<div class="col-3">
		<img src="<?php echo base_url('assets/upload/image/' . $konfigurasi['Struktur']) ?>" class="img img-thumbnail">
	</div>
</div>

<div class="form-group row">
	<label class="col-3"></label>
	<div class="col-9">
		<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
	</div>
</div>

<?php echo form_close(); ?>