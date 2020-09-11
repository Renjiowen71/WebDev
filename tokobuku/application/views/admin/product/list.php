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
					<h1 class="mt-4">List</h1>
					<!-- Heading untuk halaman ini -->
					<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

					<!-- Isi untuk halaman ini -->
					<div class="card mb-3">
						<div class="card-header">
							<a href="<?php echo site_url('admin/products/add') ?>"><i class="fas fa-plus"></i> Add New</a>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table tablehover" id="dataTable" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>Name</th>
											<th>Price</th>
											<th>Photo</th>
											<th>Description</th>
											<th>Stock</th>
											<th>Action</th>
											
										</tr>
									</thead>
									<tbody>
										<?php foreach ($products as $product): ?>
										<tr>
											<td width="150">
												<?php echo $product->name ?>
											</td>
											<td>
												<?php echo $product->price ?>
											</td>
											<td>
												<img src="<?php echo base_url('upload/product/'.$product->image) ?>" width="64" />
											</td>
											<td class="small">
												<?php echo substr($product->description, 0, 120) ?>...</td>
											<td>
												<?php echo $product->stock ?>
											</td>	
											<td width="250">
												<a href="<?php echo site_url('admin/products/edit/'.$product->product_id) ?>" class="btn btnsmall"><i class="fas fa-edit"></i> Edit</a>
												<a onclick="deleteConfirm('<?php echo site_url('admin/products/delete/'.$product->product_id) ?>')" href="#!" class="btn btnsmall text-danger"><i class="fas fa-trash"></i> Hapus</a>
											</td>
										</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
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
	<script>
		function deleteConfirm(url){
			$('#btn-delete').attr('href', url);
			$('#deleteModal').modal();
		}
	</script>
</body>
</html>