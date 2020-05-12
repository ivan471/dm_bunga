<!--**********************************
Main wrapper start
***********************************-->
<div id="main-wrapper">
	<!--**********************************
	Nav header start
	***********************************-->
	<div class="nav-header">
		<div class="brand-logo">
			<a href="index.html">
				<b class="logo-abbr"><img src="<?= base_url().'assets/images/logo.png' ?>" alt=""> </b>
				<span class="logo-compact"><img src="./images/logo-compact.png" alt=""></span>
				<span class="brand-title">
					<img src="images/logo-text.png" alt="">
				</span>
			</a>
		</div>
	</div>
	<!--**********************************
	Nav header end
	***********************************-->
	<!--**********************************
	Header start
	***********************************-->
	<div class="header">
		<div class="header-content clearfix">

			<div class="nav-control">
				<div class="hamburger">
					<span class="toggle-icon"><i class="icon-menu"></i></span>
				</div>
			</div>
			<div class="header-left">
				<div class="input-group icons">
					<div class="input-group-prepend">
						<span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
					</div>
					<input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
					<div class="drop-down animated flipInX d-md-none">
						<form action="#">
							<input type="text" class="form-control" placeholder="Search">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--**********************************
Header end ti-comment-alt
***********************************-->
<!--**********************************
Sidebar start
***********************************-->
<div class="nk-sidebar">
	<div class="nk-nav-scroll">
		<ul class="metismenu" id="menu">
			<li class="nav-label">Dashboard</li>
			<li>
				<a href="<?= base_url() ?>" aria-expanded="false">
					<i class="icon-speedometer menu-icon"></i><span class="nav-text">Home</span>
				</a>
			</li>
			<li>
				<a href="<?= base_url().'bunga' ?>" aria-expanded="false">
					<i class="icon-badge menu-icon"></i><span class="nav-text">Bunga</span>
				</a>
			</li>
		</ul>
	</div>
</div>
<!--**********************************
Sidebar end
***********************************-->