<form action="<?php echo base_url('admin/berita/tambah') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
<?php 
echo csrf_field(); 
?>

<div class="form-group row">
	<label class="col-md-2">Judul Konten</label>
	<div class="col-md-10">
		<input type="text" name="judul_berita" class="form-control" value="<?php echo set_value('judul_berita') ?>" required>
	</div>
</div>
<div class="form-group row">
	<label class="col-md-2">Kategori, Jenis &amp; Status</label>
	<div class="col-md-2">
		<select name="id_kategori" class="form-control">
			<?php foreach($kategori as $kategori) { ?>
			<option value="<?php echo $kategori['id_kategori'] ?>">
				<?php echo $kategori['nama_kategori'] ?>
			</option>
			<?php } ?>
		</select>
		<small class="text-secondary">Kategori</small>
	</div>
	<div class="col-md-2">
		<select name="jenis_berita" class="form-control">
			<option value="Berita">Berita</option>
			<option value="Layanan">Layanan</option>
			<option value="Profil">Portfolio</option>
			<option value="Profil">Services</option>
		</select>
		<small class="text-secondary">Jenis konten</small>
	</div>
	<div class="col-md-2">
		<select name="status_berita" class="form-control">
			<option value="Publish">Publish</option>
			<option value="Draft">Draft</option>
		</select>
		<small class="text-secondary">Status publikasi</small>
	</div>
	<div class="col-md-2">
		<input type="text" name="icon" class="form-control" value="<?php echo set_value('icon') ?>">
		<small class="text-secondary">Icon <a href="https://fontawesome.com/icons" target="_blank">Fontawsome</a></small>
	</div>
</div>





<div class="form-group row">
	<label class="col-md-2">Ringkasan</label>
	<div class="col-md-10">
		<textarea name="ringkasan" class="form-control"><?php echo set_value('ringkasan') ?></textarea>
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2">Upload Gambar konten 1</label>
	<div class="col-md-10">
		<input type="file" name="gambar" class="form-control" value="<?php echo set_value('gambar') ?>">
	</div>
</div>


<div class="form-group row">
	<label class="col-md-2">Isi Berita</label>
	<div class="col-md-10">
		<textarea name="isi" class="form-control konten"><?php echo set_value('isi') ?></textarea>
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2">Upload Gambar Konten 2</label>
	<div class="col-md-10">
		<input type="file" name="gambar2" class="form-control" value="<?php echo set_value('gambar2') ?>">
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2">Judul Section 2</label>
	<div class="col-md-10">
		<input type="text" name="section2" class="form-control" value="<?php echo set_value('judul_berita') ?>" required>
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2">Konten Section 2</label>
	<div class="col-md-10">
		<textarea name="konten2" class="form-control konten"><?php echo set_value('isi') ?></textarea>
	</div>
</div>
<hr>
<div class="form-group row">
	<label class="col-md-2">Judul Section 3</label>
	<div class="col-md-10">
		<input type="text" name="section3" class="form-control" value="<?php echo set_value('judul_berita') ?>" required>
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2">Konten Section 3</label>
	<div class="col-md-10">
		<textarea name="konten3" class="form-control konten"><?php echo set_value('isi') ?></textarea>
	</div>
</div>
<hr>
<div class="form-group row">
	<label class="col-md-2">Judul Section 4</label>
	<div class="col-md-10">
		<input type="text" name="section4" class="form-control" value="<?php echo set_value('judul_berita') ?>" required>
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2">Konten Section 4</label>
	<div class="col-md-10">
		<textarea name="konten4" class="form-control konten"><?php echo set_value('isi') ?></textarea>
	</div>
</div>



<div class="form-group row">
	<label class="col-md-2">Keyword Berita (untuk SEO Google)</label>
	<div class="col-md-10">
		<textarea name="keywords" class="form-control"><?php echo set_value('keywords') ?></textarea>
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2"></label>
	<div class="col-md-10">
		<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
	</div>
</div>

<?php echo form_close(); ?>