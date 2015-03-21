<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- librerias css -->
<?php if(isset($this->csslib) && !empty($this->csslib) && is_array($this->csslib)): ?>
	<?php foreach ($this->csslib as $key => $css) { ?>
		<link rel="stylesheet" href="<?= CSSLIB.$css ?>.css" type="text/css">
	<?php } ?>
<?php endif; ?>

<!-- css externos -->
<?php if(isset($data['urlcss']) && !empty($data['urlcss']) && is_array($data['urlcss'])): ?>
	<?php foreach ($data['urlcss'] as $key => $css): ?>
		<link rel="stylesheet" href="<?= $css ?>" type="text/css">
	<?php endforeach; ?>
<?php endif; ?>

<!-- css local -->
<?php if(isset($this->css) && !empty($this->css) && is_array($this->css)): ?>
	<?php foreach ($this->css as $key => $css) { ?>
		<link rel="stylesheet" href="<?= CSS.$css ?>.css" type="text/css">
	<?php } ?>
<?php endif; ?>

<?php $this->load->view($view); /* Vista */ ?>

<!-- librerias js -->
<?php if(isset($this->jslib) && !empty($this->jslib) && is_array($this->jslib)): ?>
	<?php foreach ($this->jslib as $key => $js) { ?>
		<script type="text/javascript" src="<?=JSLIB.$js;?>.js"></script>
	<?php } ?>
<?php endif; ?>

<!-- js externo -->
<?php if(isset($data['urlscript']) && !empty($data['urlscript']) && is_array($data['urlscript'])): ?>
	<?php foreach ($data['urlscript'] as $key => $js): ?>
		<script src="<?= $js; ?>" type="text/javascript"></script>
	<?php endforeach; ?>
<?php endif; ?>

<!-- js local -->
<?php if(isset($this->js) && !empty($this->js) && is_array($this->js)): ?>
	<?php foreach ($this->js as $key => $js) { ?>
		<script type="text/javascript" src="<?=JS.$js;?>.js"></script>
	<?php } ?>
<?php endif; ?>
