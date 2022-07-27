<?php 
$session = \Config\Services::session();
use App\Models\Dasbor_model;
$m_dasbor = new Dasbor_model();
?>
<div class="alert alert-info">
	<h4>Hai <em class="text-warning"><?php echo $session->get('nama') ?></em></h4>
	<hr>
	<p>Selamat datang di website <strong><?php echo namaweb() ?></strong>. lorem ipsum.</p>
</div>
