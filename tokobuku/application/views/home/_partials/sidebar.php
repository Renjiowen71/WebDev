<div id="layoutSidenav_nav">
	<nav class="sb-sidenav accordion" id="sidenavAccordion">
		<div class="sb-sidenav-menu ">
			<div class="nav">
				<div class="rox">
					<div class ="col-sm-11">
						<br>
						<br>
						
						<div class = "card">
						<a class="nav-link card-header" href="<?php echo site_url('home') ?>">
							<div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
							Home
						</a>
						<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
							<div class="sb-nav-link-icon"><i class="fas fa-boxes"></i></div>
								Products
							<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
						</a>
						<div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
							<nav class="sb-sidenav-menu-nested nav">
								<a class="nav-link" href="<?php echo site_url('home/products') ?>">Product List</a>
							</nav>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>
</div>