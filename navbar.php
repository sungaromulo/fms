<style>

</style>

<nav id="sidebar" class='mx-lt-5 bg-info text-white'>
		<div class="sidebar-list">

				<a href="index.php?page=home" class="nav-item bg-info text-white"><span class='icon-field'><i class="fa fa-home"></i></span> Home</a>
				<a href="index.php?page=files" class="nav-item bg-info text-white"><span class='icon-field'><i class="fa fa-file"></i></span> Files</a>
				
				<?php if($_SESSION['login_type'] == 1): ?>
				<a href="index.php?page=users" class="nav-item bg-info text-white"><span class='icon-field'><i class="fa fa-user"></i></span> Users</a>
			<?php endif; ?>
			<a href="ajax.php?action=logout" class="nav-item bg-info text-white"><span class='icon-field'><i class="fa fa-power-off"></i></span> Logout</a>
		</div>
</nav>
</nav>
<script>
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>