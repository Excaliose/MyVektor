<nav class="navbar navbar-expand-lg">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">
			<i class="fas fa-film mr-2"></i>
			My-Vektor
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fas fa-bars"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto mb-2 mb-lg-0">
				<?php if ($this->session->userdata('email')) : ?>
					<li class="nav-item">
						<a class="nav-link nav-link-1 active" aria-current="page" href="">Upgrade Account</a>
					</li>
					<li class="nav-item">
						<a class="nav-link nav-link-1 active" aria-current="page" href="<?php echo site_url('welcome/logout') ?>">Logout</a>
					</li>
				<?php else : ?>
					<li class="nav-item">
						<a class="nav-link nav-link-1 active" aria-current="page" href="<?php echo site_url('welcome/login') ?>">Login</a>
					</li>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</nav>
