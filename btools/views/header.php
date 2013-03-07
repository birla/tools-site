<?php 

$this->load->helper('view');


?>
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="/"><?php echo $title; ?></a>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li <?php if($top_menu === 'welcome') echo ' class="active"'; ?>><a href="/">Home</a></li>
							<li <?php if($top_menu === 'about') echo ' class="active"'; ?>><a href="/#about">About</a></li>
							<li <?php if($top_menu === 'contact') echo ' class="active"'; ?>><a href="/#contact">Contact</a></li>
							<li class="dropdown <?php if($top_menu === 'tools') echo ' active'; ?>">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Tools <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li <?php if($sub_menu === 'json') echo ' class="active"'; ?>><a href="/json">JSON Visualizer</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li class="nav-header">Nav header</li>
									<li><a href="#">Separated link</a></li>
									<li><a href="#">One more separated link</a></li>
								</ul>
							</li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>

		<div class="container-fluid">