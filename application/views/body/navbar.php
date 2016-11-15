<style>
	body{
		background-color: white;
	}
	.navbar{
		border-radius: 0px;
	}

	.navbar-default .navbar-brand:hover,
	.navbar-default .navbar-brand:focus {
	  color: #3498db;
	  background-color: transparent;
	}

	.navbar-default .navbar-nav > .active > a,
	.navbar-default .navbar-nav > .active > a:hover,
	.navbar-default .navbar-nav > .active > a:focus {
			color: #FFFFFF;
			background-color: #3498db;
	}
	.navbar-unread{
		background-color: #3498db;
	}
	.navbar-default .navbar-nav > li > a:hover,
	.navbar-default .navbar-nav > li > a:focus {
			color: #3498db;
			background-color: transparent;
	}
	.navbar-default .navbar-nav > .dropdown > a:hover .caret,
	.navbar-default .navbar-nav > .dropdown > a:focus .caret {
	  border-top-color: #3498db;
	  border-bottom-color: #3498db;
	}

	.navbar-default .navbar-nav > .open > a,
	.navbar-default .navbar-nav > .open > a:hover,
	.navbar-default .navbar-nav > .open > a:focus {
	  background-color: transparent;
	  color: #3498db;
	}

</style>
<body>

	<nav class="navbar navbar-default " role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-5">
					<span class="sr-only">Toggle navigation</span>
				</button>
				<a class="navbar-brand" href="#">LoginSystem APP</a>

			</div>

			<div class="collapse navbar-collapse" id="navbar-collapse-5">
				<ul class="nav navbar-nav nav-link">
					<li><a href="<?=base_url();?>home">Home</a></li>
					<li><a href="<?=base_url();?>users">Users</a></li>
					<li><a href="#">Groups</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">User Logged<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Information</a></li>
							<li class="divider"></li>
							<li><a href="<?=base_url();?>login">Log Out</a></li>              
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>