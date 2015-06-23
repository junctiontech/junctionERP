<body class="page-body ">	
<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
			
		<!-- Add "fixed" class to make the sidebar fixed always to the browser viewport. -->
		<!-- Adding class "toggle-others" will keep only one menu item open at a time. -->
		<!-- Adding class "collapsed" collapse sidebar root elements and show only icons. -->
		<div class="sidebar-menu toggle-others fixed">
			
			<div class="sidebar-menu-inner">	
				
				<header class="logo-env">
					
					<!-- logo -->
					<div class="logo">
						<a href="javascript:;" class="logo-expanded">
							<img src="<?php echo base_url(); ?>assets/images/logo@2x.png" width="200" alt="" />
						</a>
						
						<a href="javascript:;" class="logo-collapsed">
							<img src="<?php echo base_url(); ?>assets/images/logo-collapsed@2x.png" width="40" alt="" />
						</a>
					</div>
					
					<!-- This will toggle the mobile menu and will be visible only on mobile devices -->
					<div class="mobile-menu-toggle visible-xs">
						
						
						<a href="javascript:;" data-toggle="mobile-menu">
							<i class="fa-bars"></i>
						</a>
					</div>
					
					<!-- This will open the popup with user profile settings, you can use for any purpose, just be creative -->
					
					
								
				</header>
				<!-- header ends -->
				<!-- menu starts added by palak on 20 june -->
							
				<ul id="main-menu" class="main-menu">
					<!-- add class "multiple-expanded" to allow multiple submenus to open -->
					<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
					<li>
						<a href="<?php echo base_url(); ?>home/manage_organization">
							<i class="linecons-cog"></i>
							<span class="title">Organization</span>
						</a>
					
					</li>
					<li>
						<a href="<?php echo base_url(); ?>home/manage_departments">
							<i class="linecons-database"></i>
							<span class="title">Departments</span>
						</a>
				
					</li>
					<li>
						<a href="<?php echo base_url(); ?>home/manage_emp">
							<i class="linecons-user"></i>
							<span class="title">Employee</span>
						</a>
				
					</li>
				</ul>
		</div>
	</div>
<div class="main-content">
					
			<!-- User Info, Notifications and Menu Bar -->
				<nav class="navbar user-info-navbar" role="navigation">
				
				<!-- Left links for user info navbar -->
				<ul class="user-info-menu left-links list-inline list-unstyled">
					
					<li class="hidden-sm hidden-xs">
						<a href="javascript:;" data-toggle="sidebar">
							<i class="fa-bars"></i>
						</a>
					</li>
				</ul>
				
				
				<!-- Right links for user info navbar -->
				<ul class="user-info-menu right-links list-inline list-unstyled">
					
					
					
					<li class="dropdown user-profile">
						<a href="javascript:;" data-toggle="dropdown">
							<img src="<?php echo base_url(); ?>assets/images/user-4.png" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
							<span>
								Arlind Nushi
								<i class="fa-angle-down"></i>
							</span>
						</a>
						
						<ul class="dropdown-menu user-profile-menu list-unstyled">
							
							<li>
								<a href="#settings">
									<i class="fa-wrench"></i>
									Settings
								</a>
							</li>
							<li>
								<a href="#profile">
									<i class="fa-user"></i>
									Profile
								</a>
							</li>
							
							<li class="last">
								<a href="<?php echo base_url(); ?>home/">
									<i class="fa-lock"></i>
									Logout
								</a>
							</li>
						</ul>
					</li>
				
				</ul>
						<!-- Right links for user info navbar -->
			</nav>