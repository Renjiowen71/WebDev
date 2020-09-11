<!DOCTYPE html>
<html lang="en">
<head>
	<style>
	#more{display:none}
	</style>
	<?php $this->load->view("home/_partials/head.php") ?>
	
		
</head>
<body class="sb-nav-fixed">
	<?php $this->load->view("home/_partials/navbar.php") ?>
	<div id="layoutSidenav">
		<?php $this->load->view("home/_partials/sidebar.php") ?>
		<div id="layoutSidenav_content">
			<main>
				<div class="container-fluid">
					<!-- Heading untuk halaman ini -->
					<h1 class="mt-4">Details</h1>
					
					<!-- Heading untuk halaman ini -->
					<?php $this->load->view("home/_partials/breadcrumb.php") ?>
					<!-- Isi untuk halaman ini -->
					<a href="<?php echo site_url('home/products/') ?>">
					<i class="fas fa-arrow-left"></i>  List</a>
					<br>
					<br>
					<div class="card mb-3">
						<div class="card-header">
						<h2><?php echo $product->name ?></h1>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-sm-4">
									<img src="<?php echo base_url('upload/product/'.$product->image) ?>" width="100%" />
								</div>
								<div class="col-sm-8">
									<div class="row">
										<div class="col-sm-3">
											<h4>Price</h4>
										</div>
										<div class="col-sm-9">
											<h4><?php echo $product->price ?></h4>
										</div>
										<div class="col-sm-3">
											<h4>Stock</h4>
										</div>
										<div class="col-sm-9">
											<h4><?php echo $product->stock ?></h4>
										</div>
										
									</div>
								</div>
								<div class="col-sm-11">
									<h4>Description</h4>
								</div>
								<div class="col-sm-11">
									<pre><?php echo substr($product->description, 0, 120) ?> <span id="dots"></span><span id="more"><?php echo substr($product->description, 121,) ?>
									</pre>
								</div>
							</div>
						</div>
						
					</div>
					<!-- Isi untuk halaman ini -->
				</div>
			</main>
			<?php $this->load->view("admin/_partials/footer.php") ?>
		</div>
	</div>
	<?php $this->load->view("admin/_partials/modal.php") ?>
	<?php $this->load->view("admin/_partials/js.php") ?>

</body>
</html>

