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
				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>
					
				</main>
				<?php $this->load->view("home/_partials/footer.php") ?>
			</div>
		</div>
		<?php $this->load->view("home/_partials/modal.php") ?>
		<?php $this->load->view("home/_partials/js.php") ?>

	</body>
</html>
