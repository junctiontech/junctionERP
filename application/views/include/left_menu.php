<?php $userdata = $this->session->userdata('user_data');
?>
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
						<a href="javascript:;" onclick="show_hr()">
							<i class="linecons-graduation-cap"></i>
							<span id="hr" class="title">Human Resource</span>
						</a>
					
					</li>
					<li>
						<a href="javascript:;" onclick="show_sales()">
							<i class="linecons-shop"></i>
							<span id="sales" class="title">Sales</span>
						</a>
				
					</li>
					<li>
						<a href="javascript:;" onclick="show_crm()">
							<i class="linecons-comment"></i>
							<span id="crm" class="title">CRM</span>
						</a>
				
					</li>
					<li>
						<a href="javascript:;" onclick="show_purchasing()">
							<i class="linecons-user"></i>
							<span id="marketing" class="title">Purchasing</span>
						</a>
				
					</li>
					<li>
						<a href="javascript:;" onclick="show_inventory()">
							<i class="linecons-pencil"></i>
							<span class="title">Inventory</span>
						</a>
				
					</li>
					<li>
						<a href="javascript:;" onclick="show_reporting()">
							<i class="linecons-money"></i>
							<span id="payable" class="title">Reporting</span>
						</a>
				
					</li>
				</ul>
				<ul class="nav nav-userinfo navbar-right">
				
					<li class="dropdown user-profile">
					<a href="#" data-toggle="dropdown">
						<img src="<?php echo base_url(); ?>assets/images/user-1.png" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
						<span>
							<?=$userdata['role_id']?>
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
			
							
				<ul id="main-menu" class="main-menu hr">
					<!-- add class "multiple-expanded" to allow multiple submenus to open -->
					<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
					<li>
						<a href="<?php echo base_url(); ?>home">
							<i class="linecons-lightbulb"></i>
							<span class="title">Dashboard</span>
						</a>
					
					</li>
					<li>
						<a href="<?php echo base_url(); ?>master/manage_organization">
							<i class="linecons-cog"></i>
							<span class="title">Organization</span>
						</a>
					
					</li>
					<li>
						<a href="<?php echo base_url(); ?>master/manage_departments">
							<i class="linecons-database"></i>
							<span class="title">Departments</span>
						</a>
				
					</li>
					<li>
						<a href="<?php echo base_url(); ?>master/manage_designation">
							<i class="linecons-doc"></i>
							<span class="title">Designations</span>
						</a>
				
					</li>
					<li>
						<a href="<?php echo base_url(); ?>employee/manage_emp">
							<i class="linecons-user"></i>
							<span class="title">Employee</span>
						</a>
				
					</li>
					<li>
						<a href="javascript:;">
							<i class="linecons-calendar"></i>
							<span class="title">Attendance</span>
						</a>
						<ul>
							<li class="active">
								<a href="<?php echo base_url(); ?>attendance/manage_attendance">
									<span class="title">Attendance Management</span>
								</a>
							</li>
							<li class="active">
								<a href="<?php echo base_url(); ?>attendance/attendance_report">
									<span class="title">Attendance Report</span>
								</a>
							</li>
						
						</ul>
					</li>
					<li><a href="<?=base_url()?>role/user_role"> <i class="linecons-t-shirt"></i><span class="title">User Management</span></a></li>
					<li><a href="<?=base_url()?>role/role_management"> <i class="linecons-comment"></i><span class="title">Role Management</span></a></li>
				</ul>
				
				<!--  ul start for sales -->
				
				<ul id="main-menu" class="main-menu sales">
					<!-- add class "multiple-expanded" to allow multiple submenus to open -->
					<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
						<li>
						<a href="<?php echo base_url(); ?>home">
							<i class="linecons-lightbulb"></i>
							<span class="title">Dashboard</span>
						</a>
					
					</li>
					<li>
						<a href="javascript:;">
							<i class="linecons-money"></i>
							<span class="title">Sales</span>
						</a>
						<ul>
							<li class="javascript:;">
								<a href="javascript:;">
									<span class="title">Customers</span>
								</a>
							</li>
							<li class="">
								<a href="javascript:;">
									<span class="title">Products</span>
								</a>
							</li>
							<li class="">
								<a href="javascript:;">
									<span class="title">Inquiry</span>
								</a>
							</li>
							<li class="">
								<a href="javascript:;">
									<span class="title">Quotation</span>
								</a>
							</li>
							<li class="">
								<a href="javascript:;">
									<span class="title">Sales Order</span>
								</a>
							</li>
								<li class="">
								<a href="javascript:;">
									<span class="title">Delivery</span>
								</a>
							</li>
							<li class="">
								<a href="javascript:;">
									<span class="title">Invoice</span>
								</a>
							</li>
							<li class="">
								<a href="javascript:;">
									<span class="title">Contract Order</span>
								</a>
							</li>
						</ul>
					</li>
				</ul>
				
				<!--  ul End for sales -->
				
				<!--  ul End for crm -->
				<ul id="main-menu" class="main-menu crm">
					<!-- add class "multiple-expanded" to allow multiple submenus to open -->
					<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
						<li>
						<a href="<?php echo base_url(); ?>home">
							<i class="linecons-lightbulb"></i>
							<span class="title">Dashboard</span>
						</a>
					
					</li>
						<li class="javascript:;">
								<a href="<?php echo base_url(); ?>crm/crm/customers">
								<i class="linecons-user"></i>
									<span class="title">Customers</span>
								</a>
							</li>
							<li class="javascript:;">
								<a href="javascript:;">
								<i class="linecons-lightbulb"></i>
									<span class="title">Leads</span>
								</a>
							</li>
							<li class="">
								<a href="javascript:;">
								<i class="linecons-lightbulb"></i>
									<span class="title">Opportunity</span>
								</a>
							</li>
							<li class="">
								<a href="javascript:;">
								<i class="linecons-lightbulb"></i>
									<span class="title">Campaign</span>
								</a>
							</li>
							<li class="">
								<a href="javascript:;">
								<i class="linecons-lightbulb"></i>
									<span class="title">Help Desk</span>
								</a>
							</li>
							<li class="">
								<a href="javascript:;">
								<i class="linecons-lightbulb"></i>
									<span class="title">Reporting</span>
								</a>
							</li>
						
					
				</ul>
				<!--  ul End for crm -->
				
				<!--  ul End for marketing -->
				<ul id="main-menu" class="main-menu purchasing">
					<!-- add class "multiple-expanded" to allow multiple submenus to open -->
					<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
						<li>
						<a href="<?php echo base_url(); ?>home">
							<i class="linecons-lightbulb"></i>
							<span class="title">Dashboard</span>
						</a>
					
					</li>
					<li>
						<a href="javascript:;">
							<i class="linecons-params"></i>
							<span class="title">Purchasing</span>
						</a>
							<ul>
							<li class="javascript:;">
								<a href="javascript:;">
									<span class="title">RFQ</span>
								</a>
							</li>
							<li class="">
								<a href="javascript:;">
									<span class="title">Purchase Order</span>
								</a>
							</li>
							<li class="">
								<a href="javascript:;">
									<span class="title">Receipt</span>
								</a>
							</li>
							<li class="">
								<a href="javascript:;">
									<span class="title">Payment Invoice</span>
								</a>
							</li>
								<li class="">
								<a href="javascript:;">
									<span class="title">Vendor Supplier</span>
								</a>
							</li>
								<li class="">
								<a href="javascript:;">
									<span class="title">Material</span>
								</a>
							</li>
						</ul>
					</li>
				</ul>
				<!--  ul End for marketing -->
				
		
				
				<!--  ul End for inventory -->
				<ul id="main-menu" class="main-menu inventory">
					<!-- add class "multiple-expanded" to allow multiple submenus to open -->
					<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
					<li>
						<a href="<?php echo base_url(); ?>home">
							<i class="linecons-lightbulb"></i>
							<span class="title">Dashboard</span>
						</a>
					
					</li>
					<li>
						<a href="javascript:;">
							<i class="linecons-cog"></i>
							<span class="title">Inventory </span>
						</a>
						<ul>
							<li class="javascript:;">
								<a href="javascript:;">
									<span class="title">Stock Status </span>
								</a>
							</li>
							<li class="javascript:;">
								<a href="javascript:;">
									<span class="title">Item Movements</span>
								</a>
							</li>
							<li class="javascript:;">
								<a href="javascript:;">
									<span class="title">Stock Transfer</span>
								</a>
							</li>
							<li class="javascript:;">
								<a href="javascript:;">
									<span class="title">Reporting</span>
								</a>
							</li>
						</ul>
					</li>
					
						
				</ul>
				<!--  ul End for inventory -->
						<!--  ul End for payable -->
				<ul id="main-menu" class="main-menu reporting">
					<!-- add class "multiple-expanded" to allow multiple submenus to open -->
					<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
						<li>
						<a href="<?php echo base_url(); ?>home">
							<i class="linecons-lightbulb"></i>
							<span class="title">Dashboard</span>
						</a>
					
					</li>
					<li>
						<a href="javascript:;">
							<i class="linecons-diamond"></i>
							<span class="title">Reporting</span>
						</a>
						
					</li>
						
				</ul>
				<!--  ul End for payable -->
			</div>
		
		</div>
<div class="main-content">
 <script>
        $(document).ready(function(){
			
            if($('.hr').on(':clicked'))
            {   
                 show_hr()  
            }
            else
           {
                  show_sales()
           }
           
        });
        
		
    </script>
<script type="text/javascript">
            function show_hr()
            {
              $(".sales").hide();
              $(".hr").show();
              $(".crm").hide();
              $(".purchasing").hide();
              $(".reporting").hide();
              $(".inventory").hide();
            }
            function show_sales()
            {
              $(".hr").hide();
              $(".sales").show();
              $(".crm").hide();
              $(".purchasing").hide();
              $(".reporting").hide();
              $(".inventory").hide();
            }
            function show_inventory()
            {
              $(".hr").hide();
              $(".sales").hide();
              $(".crm").hide();
              $(".purchasing").hide();
              $(".reporting").hide();
              $(".inventory").show();
            }
            function show_crm()
            {
              $(".hr").hide();
              $(".sales").hide();
              $(".crm").show();
              $(".purchasing").hide();
              $(".reporting").hide();
              $(".inventory").hide();
            }
            function show_purchasing()
            {
              $(".hr").hide();
              $(".sales").hide();
              $(".crm").hide();
              $(".purchasing").show();
              $(".reporting").hide();
              $(".inventory").hide();
            }
            function show_reporting()
            {
              $(".hr").hide();
              $(".sales").hide();
              $(".crm").hide();
              $(".purchasing").hide();
              $(".reporting").show();
              $(".inventory").hide();
            }
    </script>				
			
			
			
			
			
	
