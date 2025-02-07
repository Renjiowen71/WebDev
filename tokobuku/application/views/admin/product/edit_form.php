<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body class="sb-nav-fixed">
	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="layoutSidenav">
		<?php $this->load->view("admin/_partials/sidebar.php") ?>
		<div id="layoutSidenav_content">
			<main>
				<div class="container-fluid">
					<!-- Heading untuk halaman ini -->
					<h1 class="mt-4">Edit</h1>
					<!-- Heading untuk halaman ini -->
					<?php $this->load->view("admin/_partials/breadcrumb.php") ?>
					<!-- Isi untuk halaman ini -->
					<?php if ($this->session->flashdata('success')): ?>
					<div class="alert alert-success" role="alert">
						<?php echo $this->session->flashdata('success'); ?>
					</div>
					<?php endif; ?>
					<div class="card mb-3">
						<div class="card-header">
						<a href="<?php echo site_url('admin/products/') ?>"><i class="fas fa-arrow-left"></i>
							Back
						</a>
						</div>
						<div class="card-body">
							<form action="" method="post" enctype="multipart/form-data">
								<!-
								- Note: atribut action dikosongkan, artinya action-nya akan diproses
								oleh controller tempat vuew ini digunakan. Yakni
								index.php/admin/products/edit/ID --->
								<input type="hidden" name="id" value="<?php echo $product->product_id?>" />
								<div class="form-group">
									<label for="name">Name*</label>
									<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"type="text" name="name" placeholder="Product name" value="<?php echo $product->name ?>" />
									<div class="invalid-feedback">
										<?php echo form_error('name') ?>
									</div>
								</div>
								<div class="form-group">
									<label for="price">Price</label>
									<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"type="number" name="price" min="0" placeholder="Product price" value="<?php echo $product->price ?>" />
									<div class="invalid-feedback">
										<?php echo form_error('price') ?>
									</div>
								</div>
								<div class="form-group">
									<label for="price">Stock</label>
									<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"type="number" name="stock" min="0" placeholder="Stock product" value="<?php echo $product->stock ?>" />
									<div class="invalid-feedback">
										<?php echo form_error('stock') ?>
									</div>
								</div>
								<div class="form-group">
									<label for="name">Photo</label>
									<input class="form-controlfile <?php echo form_error('image') ? 'is-invalid':'' ?>"type="file" name="image" />
									<input type="hidden" name="old_image" value="
									<?php echo $product->image ?>" />
									<div class="invalid-feedback">
											<?php echo form_error('image') ?>
									</div>
								</div>
								<div class="form-group">
									<label for="name">Description*</label>
									<textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"name="description" placeholder="Product description..."><?php echo $product->description ?></textarea>
									<div class="invalid-feedback">
										<?php echo form_error('description') ?>
									</div>
								</div>
								<input class="btn btnsuccess" type="submit" name="btn" value="Save" />
							</form>
						</div>
						<div class="card-footer small text-muted">
							* required fields
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
