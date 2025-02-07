<div id="layoutSidenav_nav">
	<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
		<div class="sb-sidenav-menu">
			<div class="nav">
			<a class="nav-link" href="<?php echo site_url('admin') ?>">
				<div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
				Overview
			</a>
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
				<div class="sb-nav-link-icon"><i class="fas fa-boxes"></i></div>
					Products
				<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
			</a>
			<div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
				<nav class="sb-sidenav-menu-nested nav">
					<a class="nav-link" href="<?php echo site_url('admin/products/add') ?>">New Product</a>
					<a class="nav-link" href="<?php echo site_url('admin/products') ?>">Product List</a>
				</nav>
			</div>
			<a class="nav-link" href="<?php echo site_url('admin/users') ?>">
				<div class="sb-nav-link-icon"><i class="fas fa-users"></i></div> Users
			</a>
			<a class="nav-link" href="<?php echo site_url('admin/settings') ?>">
				<div class="sb-nav-link-icon"><i class="fas fa-cog"></i></div>
				Settings
			</a>
			</div>
		</div>
	</nav>
</div>