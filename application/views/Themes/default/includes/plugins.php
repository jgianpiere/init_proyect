<!-- Plugins Adicionales -->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

<!-- librerias js -->
<?php if(isset($data['jslib']) && !empty($data['jslib']) && is_array($data['jslib'])): ?>
	<?php foreach ($data['jslib'] as $key => $js): ?>
		<script src="<?= JSLIB.$js; ?>.js" type="text/javascript"></script>
	<?php endforeach; ?>
<?php endif; ?>

<!-- js externo -->
<?php if(isset($data['urlscript']) && !empty($data['urlscript']) && is_array($data['urlscript'])): ?>
	<?php foreach ($data['urlscript'] as $key => $js): ?>
		<script src="<?= $js; ?>" type="text/javascript"></script>
	<?php endforeach; ?>
<?php endif; ?>

<!-- js local -->
<?php if(isset($data['js']) && !empty($data['js']) && is_array($data['js'])): ?>
	<?php foreach ($data['js'] as $key => $js): ?>
		<script src="<?= JS.$js; ?>.js" type="text/javascript"></script>
	<?php endforeach; ?>
<?php endif; ?>