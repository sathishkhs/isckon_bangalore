<!DOCTYPE html>
<html lang="en">

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!-->
<!--<![endif]-->

<head>
	<?php $this->load->view('templates/includes/head'); ?>
</head>

<body>



		<?php //$this->load->view('templates/includes/sidebar'); ?>
	
			<?php $this->load->view('templates/includes/topbar'); ?>
			<?php $this->load->view('templates/includes/navbar'); ?>
			<?php $this->load->view('templates/includes/mobile_nav'); ?>
	
		 <?php $this->load->view('templates/includes/slider'); ?>
		 <?php $this->load->view('templates/includes/home_container'); ?>
		
		 <?php $this->load->view('templates/includes/footer'); ?>
		 <?php $this->load->view('templates/includes/bottom_footer'); ?>
		
			<?php $this->load->view('templates/includes/scripts'); ?>
			<?php if (!empty($scripts) && count($scripts) > 0) : ?>
			<?php foreach ($scripts as $script) : ?>
				<script src="<?php echo $script; ?>"></script>
			<?php endforeach ?>
			<?php endif ?>

		</body>

<!-- Mirrored from html.thememascot.net/2020/charity/ecoife/ecoife-html/index-mp-layout2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Feb 2022 17:20:43 GMT -->
</html>


