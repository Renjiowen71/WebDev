<!DOCTYPE html>
<html lang="en">
	<head>
		<?php $this->load->view("home/_partials/head.php") ?>
	</head>
	<body class="sb-nav-fixed">
		<?php $this->load->view("home/_partials/navbar.php") ?>
		<div id="layoutSidenav">
			<?php $this->load->view("home/_partials/sidebar.php") ?>
			<div id="layoutSidenav_content">
				<main>
					<div class="container-fluid">
                        <h1 class="mt-4"><?php echo SITE_NAME ?></h1>
						<?php $this->load->view("admin/_partials/breadcrumb.php") ?>
						<p> Hi, I was made for web project. So....., here some item for you! </p>
						<div class="row">
							<?php	
							$i = 0;
							foreach ($products as $product){
								if($i<9){
							?>
							<div class="col-sm-4">
								<div class="card mb-3">
									<div class="card-header">
									<h4><a href = "<?php echo site_url('home/products/show/'.$product->product_id) ?>"><?php echo $product->name ?></h4><a>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-sm-4">
												<img src="<?php echo base_url('upload/product/'.$product->image) ?>" width="100%" />
											</div>
											<div class="col-sm-8">
												<div class="row">
													<div class="col-sm-4" >
														Price
													</div>
													<div class="col-sm-8">
														<?php echo $product->price ?>
													</div>
													<div class="col-sm-4">
														Stock
													</div>
													<div class="col-sm-8">
														<?php echo $product->stock ?>
													</div>
												</div>
											</div>
										<div class="col-sm-12">
											<?php echo substr($product->description, 0, 120) ?>
										</div>
										</div>
									</div>
								</div>
							</div>
							<?php
								}
								$i++;
							}
							?>
						</div>
						<a href ="<?php echo site_url("home/products")?>">List</a>
					</div>
					<br>
					<br>
					<div class ="container-fluid">
					
					<p style ="font-size : 11px">Click <a href="<?php echo site_url('about') ?>"> here</a> if you wanted to know more about me </p>
					<p style ="font-size : 11px">Click <a href="<?php echo site_url('contact') ?>"> here</a> if you wanted to contact me </p>
				</main>
				<?php $this->load->view("home/_partials/footer.php") ?>
			</div>
		</div>
		<?php $this->load->view("home/_partials/modal.php") ?>
		<?php $this->load->view("home/_partials/js.php") ?>

	</body>
</html>
