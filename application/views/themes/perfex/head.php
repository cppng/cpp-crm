<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="<?php echo $locale; ?>">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php if (isset($title)){ echo $title; } ?></title>
	<?php echo compile_theme_css(); ?>
	<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js'); ?>"></script>
	<?php app_customers_head(); ?>

	<style>
		.page-bg{
			background: rgb(139,162,80, 0.5);
			background-image: url('http://localhost:90/crm/assets/images/bg.png'); 
			background-repeat: no-repeat;
			background-size: 100% 100%;
			min-height: 100vh;
		}
	</style>
	
</head>
<body class="customers page-bg <?php echo strtolower($this->agent->browser()); ?><?php if(is_mobile()){echo ' mobile';}?><?php if(isset($bodyclass)){echo ' ' . $bodyclass; } ?>" <?php if($isRTL == 'true'){ echo 'dir="rtl"';} ?>>
	<?php hooks()->do_action('customers_after_body_start'); ?>
