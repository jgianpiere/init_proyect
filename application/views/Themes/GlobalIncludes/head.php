<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- stylesheets -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,300" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?=CSSLIB;?>base.css">
<!-- add more stylesheets -->
<style type="text/css">

</style>

<!-- librerias css -->
<?php if(isset($data['csslib']) && !empty($data['csslib']) && is_array($data['csslib'])): ?>
	<?php foreach ($data['csslib'] as $key => $css): ?>
		<link rel="stylesheet" href="<?= CSSLIB.$css ?>.css" type="text/css">
	<?php endforeach; ?>
<?php endif; ?>

<!-- css externos -->
<?php if(isset($data['urlcss']) && !empty($data['urlcss']) && is_array($data['urlcss'])): ?>
	<?php foreach ($data['urlcss'] as $key => $css): ?>
		<link rel="stylesheet" href="<?= $css ?>" type="text/css">
	<?php endforeach; ?>
<?php endif; ?>

<!-- css local -->
<?php if(isset($data['css']) && !empty($data['css']) && is_array($data['css'])): ?>
	<?php foreach ($data['css'] as $key => $css): ?>
		<link rel="stylesheet" href="<?= CSS.$css ?>.css" type="text/css">
	<?php endforeach; ?>
<?php endif; ?>