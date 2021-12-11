<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Catalog-Z Bootstrap 5.0 HTML Template</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/templatemo-style.css') ?>">
	<!--
    
TemplateMo 556 Catalog-Z

https://templatemo.com/tm-556-catalog-z

-->
</head>

<body>
	<!-- Page Loader -->
	<div id="loader-wrapper">
		<div id="loader"></div>

		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>

	</div>
	<?php include('header.php') ?>

	<div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="<?php echo base_url('assets/img/hero.jpg') ?>">
		<form class="d-flex tm-search-form">
			<input class="form-control tm-search-input" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success tm-search-btn" type="submit">
				<i class="fas fa-search"></i>
			</button>
		</form>
	</div>

	<?php $this->load->view($page); ?>

	<?php include('footer.php') ?>

	<script src="<?php echo base_url('assets/js/plugins.js') ?>"></script>
	<script>
		$(window).on("load", function() {
			$('body').addClass('loaded');
		});
	</script>
</body>

</html>
