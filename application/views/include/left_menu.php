<?php $userdata = $this->session->userdata('user_data');?>
<body class="page-body ">
<nav class="navbar horizontal-menu navbar-fixed-top"><!-- set fixed position by adding class "navbar-fixed-top" -->
		
		<div class="navbar-inner">
			<!-- Navbar Brand -->
			<div class="navbar-brand">
				<a href="javascript:;" class="logo">
					<img src="<?php echo base_url(); ?>assets/images/logo-white-bg@2x.png" width="150" alt="" class="hidden-xs" />
					<img src="<?php echo base_url(); ?>assets/images/logo@2x.png" width="150" alt="" class="visible-xs" />
				</a>
			
			</div>
				<!-- Mobile Toggles Links -->
			<div class="nav navbar-mobile">
			
				<!-- This will toggle the mobile menu and will be visible only on mobile devices -->
				<div class="mobile-menu-toggle">
					<!-- This will open the popup with user profile settings, you can use for any purpose, just be creative -->
				
					<!-- data-toggle="mobile-menu-horizontal" will show horizontal menu links only -->
					<!-- data-toggle="mobile-menu" will show sidebar menu links only -->
					<!-- data-toggle="mobile-menu-both" will show sidebar and horizontal menu links -->
					<a href="javascript:;" data-toggle="mobile-menu-both">
							<i class="fa-bars"></i>
						</a>
				</div>
				
			</div>
			
			<div class="navbar-mobile-clear"></div>
			<ul class="navbar-nav">
					<!-- add class "multiple-expanded" to allow multiple submenus to open -->
					<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
					<li>
						<a href="javascript:;">
							<i class="linecons-graduation-cap"></i>
							<span class="title">Human Resource</span>
						</a>
					
					</li>
					<li>
						<a href="javascript:;">
							<i class="linecons-shop"></i>
							<span class="title">Sales</span>
						</a>
				
					</li>
					<li>
						<a href="javascript:;">
							<i class="linecons-comment"></i>
							<span class="title">CRM</span>
						</a>
				
					</li>
					<li>
						<a href="javascript:;">
							<i class="linecons-user"></i>
							<span class="title">Marketing</span>
						</a>
				
					</li>
						<li>
						<a href="javascript:;">
							<i class="linecons-money"></i>
							<span class="title">Payable</span>
						</a>
				
					</li>
					<li>
						<a href="javascript:;">
							<i class="linecons-pencil"></i>
							<span class="title">Inventory</span>
						</a>
				
					</li>
				</ul>
				<ul class="nav nav-userinfo navbar-right">
				
					<li class="dropdown user-profile">
					<a href="#" data-toggle="dropdown">
						<img src="<?php echo base_url(); ?>assets/images/user-1.png" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
						<span>
							<?=$userdata['user_name']?>
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
								<a href="<?php echo base_url(); ?>login/login_view">
									<i class="fa-lock"></i>
									Logout
								</a>
							</li>
					</ul>
				</li>
				
				</ul>
			</div>
		
	</nav>
<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
			
		<!-- Add "fixed" class to make the sidebar fixed always to the browser viewport. -->
		<!-- Adding class "toggle-others" will keep only one menu item open at a time. -->
		<!-- Adding class "collapsed" collapse sidebar root elements and show only icons. -->
		<div class="sidebar-menu toggle-others fixed">
			
			<div class="sidebar-menu-inner">	
			
							
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
						<a href="<?php echo base_url(); ?>home/manage_designation">
							<i class="linecons-doc"></i>
							<span class="title">Designations</span>
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
					
			