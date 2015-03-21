<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<?php $this->load->view($license); ?>
<html lang="es_ES">
<head>
    <?php $this->load->view($config); ?>

    <?php $this->load->view($globalseo,$meta); ?>
    <title><?= isset($this->title) && !empty($this->title) ? $this->title : '';?><?= lang('appendtitle'); ?></title>
    <?php $this->load->view($seo); ?>

    <?php $this->load->view($globalhead,$data); ?>
    <?php $this->load->view($head,$data); ?>
</head>
<body data-twttr-rendered="true">
	<?php $this->load->view($body,$data); ?>
</body>
<?php $this->load->view($globalplugins);?>
<?php $this->load->view($plugins);?>
<?php $this->load->view($globalfooter); ?>
<?php $this->load->view($footer); ?>
</html>