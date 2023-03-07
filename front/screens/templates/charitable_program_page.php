<!DOCTYPE html>
<html lang="en">

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!-->
<!--<![endif]-->

<head>
	<?php $this->load->view('templates/includes/inner_page/head'); ?>
	<link rel="stylesheet" href="https://cdn.plyr.io/3.7.3/plyr.css" />
</head>

<body>
<?php //$this->load->view('templates/includes/sidebar'); ?>
	
			<?php //$this->load->view('templates/includes/inner_page/topbar'); ?>
			<?php $this->load->view('templates/includes/inner_page/navbar'); ?>
			<?php //$this->load->view('templates/includes/charitable_banner'); ?>
	
		 <?php //$this->load->view('templates/includes/slider'); ?>
		 <?php $this->load->view($view_path); ?>
		
		 <?php $this->load->view('templates/includes/inner_page/footer'); ?>
		
			<?php $this->load->view('templates/includes/inner_page/scripts'); ?>
			<?php if (!empty($scripts) && count($scripts) > 0) : ?>
			<?php foreach ($scripts as $script) : ?>
				<script src="<?php echo $script; ?>"></script>
			<?php endforeach ?>
			<?php endif ?>
			
			<script src="https://cdn.plyr.io/3.7.3/plyr.js"></script>
            <script>
              const player = new Plyr('#player');
            </script>

		</body>

<!-- Mirrored from html.thememascot.net/2020/charity/ecoife/ecoife-html/index-mp-layout2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Feb 2022 17:20:43 GMT -->
</html>


