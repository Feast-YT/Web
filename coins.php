<?php 
include('security.php');

include('includes/header.php'); 
include('includes/navbar.php');
?>

	<!-- Content Wrapper -->
	<div id="content-wrapper" class="d-flex flex-column">
	
	    <!-- Main Content -->
	    <div id="content">
	
	        <!-- Topbar -->
	        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
	
	            <!-- Sidebar Toggle (Topbar) -->
	            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
	            <i class="fa fa-bars"></i>
	          </button>
	
				<!-- Test Topbar Search -->
			     <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
			         <div class="input-group">
			             <button style="padding:15px; font-size:20px;" class="badge badge-success"><i class="fa fa-coins mr-2" style="font-size:20px;"></i> Your Coins = 11.580</button>
			             <div class="input-group-append">
			             </div>
			         </div>
			     </form>
	
	            <!-- Topbar Navbar -->
	            <ul class="navbar-nav ml-auto">
	
	                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
	                <li class="nav-item dropdown no-arrow d-sm-none">
	                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                        <i class="fas fa-search fa-fw"></i>
	                    </a>
	                    <!-- Dropdown - Messages -->
	                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
	                        <form class="form-inline mr-auto w-100 navbar-search">
	                            <div class="input-group">
	                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
	                                <div class="input-group-append">
	                                    <button class="btn btn-primary" type="button">
				                        <i class="fas fa-search fa-sm"></i>
				                      </button>
	                                </div>
	                            </div>
	                        </form>
	                    </div>
	                </li>
	
	                <!-- Nav Item - Alerts -->
	                <li class="nav-item dropdown no-arrow mx-1">
	                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                        <i class="fas fa-bell fa-fw"></i>
	                        <!-- Counter - Alerts -->
	                        <span class="badge badge-danger badge-counter">3+</span>
	                    </a>
	                    <!-- Dropdown - Alerts -->
	                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
	                        <h6 class="dropdown-header">
	                            Alerts Center
	                        </h6>
	                        <a class="dropdown-item d-flex align-items-center" href="#">
	                            <div class="mr-3">
	                                <div class="icon-circle bg-primary">
	                                    <i class="fas fa-file-alt text-white"></i>
	                                </div>
	                            </div>
	                            <div>
	                                <div class="small text-gray-500">December 12, 2019</div>
	                                <span class="font-weight-bold">A new monthly report is ready to download!</span>
	                            </div>
	                        </a>
	                        <a class="dropdown-item d-flex align-items-center" href="#">
	                            <div class="mr-3">
	                                <div class="icon-circle bg-success">
	                                    <i class="fas fa-donate text-white"></i>
	                                </div>
	                            </div>
	                            <div>
	                                <div class="small text-gray-500">December 7, 2019</div>
	                                $290.29 has been deposited into your account!
	                            </div>
	                        </a>
	                        <a class="dropdown-item d-flex align-items-center" href="#">
	                            <div class="mr-3">
	                                <div class="icon-circle bg-warning">
	                                    <i class="fas fa-exclamation-triangle text-white"></i>
	                                </div>
	                            </div>
	                            <div>
	                                <div class="small text-gray-500">December 2, 2019</div>
	                                Spending Alert: We've noticed unusually high spending for your account.
	                            </div>
	                        </a>
	                        <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
	                    </div>
	                </li>
	
	                <!-- Nav Item - Messages -->
	                <li class="nav-item dropdown no-arrow mx-1">
	                    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                        <i class="fas fa-envelope fa-fw"></i>
	                        <!-- Counter - Messages -->
	                        <span class="badge badge-danger badge-counter">7</span>
	                    </a>
	                    <!-- Dropdown - Messages -->
	                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
	                        <h6 class="dropdown-header">
	                            Message Center
	                        </h6>
	                        <a class="dropdown-item d-flex align-items-center" href="#">
	                            <div class="dropdown-list-image mr-3">
	                                <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
	                                <div class="status-indicator bg-success"></div>
	                            </div>
	                            <div class="font-weight-bold">
	                                <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
	                                <div class="small text-gray-500">Emily Fowler · 58m</div>
	                            </div>
	                        </a>
	                        <a class="dropdown-item d-flex align-items-center" href="#">
	                            <div class="dropdown-list-image mr-3">
	                                <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
	                                <div class="status-indicator"></div>
	                            </div>
	                            <div>
	                                <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
	                                <div class="small text-gray-500">Jae Chun · 1d</div>
	                            </div>
	                        </a>
	                        <a class="dropdown-item d-flex align-items-center" href="#">
	                            <div class="dropdown-list-image mr-3">
	                                <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
	                                <div class="status-indicator bg-warning"></div>
	                            </div>
	                            <div>
	                                <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
	                                <div class="small text-gray-500">Morgan Alvarez · 2d</div>
	                            </div>
	                        </a>
	                        <a class="dropdown-item d-flex align-items-center" href="#">
	                            <div class="dropdown-list-image mr-3">
	                                <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
	                                <div class="status-indicator bg-success"></div>
	                            </div>
	                            <div>
	                                <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
	                                <div class="small text-gray-500">Chicken the Dog · 2w</div>
	                            </div>
	                        </a>
	                        <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
	                    </div>
	                </li>
	
	                <div class="topbar-divider d-none d-sm-block"></div>
	
	                <!-- Nav Item - User Information -->
	                <li class="nav-item dropdown no-arrow">
	                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">
	                          
	                        <?php echo $_SESSION['username']; ?>
	
	                        </span>
	                        <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
	                    </a>
	                    <!-- Dropdown - User Information -->
	                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
	                        <a class="dropdown-item" href="#">
	                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile
	                        </a>
	                        <a class="dropdown-item" href="#">
	                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Settings
	                        </a>
	                        <a class="dropdown-item" href="#">
	                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i> Activity Log
	                        </a>
	                        <div class="dropdown-divider"></div>
	                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
	                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
	                        </a>
	                    </div>
	                </li>
	
	            </ul>
	
	        </nav>
        
			<section class="pricing py-5">
			  <div class="container">
			    <div class="row">
			      <!-- Free Tier -->
			      <div class="col-lg-4">
			        <div class="card mb-5 mb-lg-0">
			          <div class="card-body">
			            <h2 class="card-title text-muted text-uppercase text-center" style="font-weight:bold;">Starter</h2>
			            <h5 class="card-price text-center" style="font-weight:bold;">100 Coins</h5>
			            <hr>
			            <ul class="fa-ul">
			              <li><span class="fa-li"><i class="fas fa-check-circle text-success"></i></span>Access Checker</li>
			              <li><span class="fa-li"><i class="fas fa-check-circle text-success"></i></span>Access Marketplace</li>
			              <li><span class="fa-li"><i class="fas fa-times-circle text-danger"></i></span>Discount Coins</li>
			              <li><span class="fa-li"><i class="fas fa-times-circle text-danger"></i></span>Refunds</li>
			              <li><span class="fa-li"><i class="fas fa-times-circle text-danger"></i></span>Support 24/7</li>
			            </ul>
			            <a href="#" class="btn btn-block btn-primary" id="plan1" style="font-weight:bold;">Purchase | $5.00 </a>
			          </div>
			        </div>
			      </div>
			      <!-- Personal Tier -->
			      <div class="col-lg-4">
			        <div class="card mb-5 mb-lg-0">
			          <div class="card-body">
			            <h2 class="card-title text-muted text-uppercase text-center" style="font-weight:bold;">Personal</h2>
			            <h5 class="card-price text-center" style="font-weight:bold;">450 Coins + 50 Coins</h5>
			            <hr>
			            <ul class="fa-ul">
			              <li><span class="fa-li"><i class="fas fa-check-circle text-success"></i></span>Access Checker</li>
			              <li><span class="fa-li"><i class="fas fa-check-circle text-success"></i></span>Access Marketplace</li>
			              <li><span class="fa-li"><i class="fas fa-check-circle text-success"></i></span>Discount Coins</li>
			              <li><span class="fa-li"><i class="fas fa-times-circle text-danger"></i></span>Refunds</li>
			              <li><span class="fa-li"><i class="fas fa-check-circle text-success"></i></span>Support 24/7</li>
			            </ul>
			            <a href="#" class="btn btn-block btn-primary" style="font-weight:bold;">Purchase | $15.00 </a>
			          </div>
			        </div>
			      </div>
			      <!-- Standar Tier -->
			      <div class="col-lg-4">
			        <div class="card mb-5 mb-lg-0">
			          <div class="card-body">
			            <h2 class="card-title text-muted text-uppercase text-center" style="font-weight:bold;">Standar</h2>
			            <h5 class="card-price text-center" style="font-weight:bold;">100 Coins + 75 Coins</h5>
			            <hr>
			            <ul class="fa-ul">
			              <li><span class="fa-li"><i class="fas fa-check-circle text-success"></i></span>Access Checker</li>
			              <li><span class="fa-li"><i class="fas fa-check-circle text-success"></i></span>Access Marketplace</li>
			              <li><span class="fa-li"><i class="fas fa-check-circle text-success"></i></span>Discount Coins</li>
			              <li><span class="fa-li"><i class="fas fa-times-circle text-danger"></i></span>Refunds</li>
			              <li><span class="fa-li"><i class="fas fa-check-circle text-success"></i></span>Support 24/7</li>
			            </ul>
			            <a href="#" class="btn btn-block btn-primary" style="font-weight:bold;">Purchase | $25.00 </a>
			          </div>
			        </div>
			      </div>
			      <!-- Bussines Tier -->
			      <div class="col-lg-4 py-5">
			        <div class="card mb-5 mb-lg-0">
			          <div class="card-body">
			            <h2 class="card-title text-muted text-uppercase text-center" style="font-weight:bold;">Bussines</h2>
			            <h5 class="card-price text-center" style="font-weight:bold;">1750 Coins + 95 Coins</h5>
			            <hr>
			            <ul class="fa-ul">
			              <li><span class="fa-li"><i class="fas fa-check-circle text-success"></i></span>Access Checker</li>
			              <li><span class="fa-li"><i class="fas fa-check-circle text-success"></i></span>Access Marketplace</li>
			              <li><span class="fa-li"><i class="fas fa-check-circle text-success"></i></span>Discount Coins</li>
			              <li><span class="fa-li"><i class="fas fa-times-circle text-danger"></i></span>Refunds</li>
			              <li><span class="fa-li"><i class="fas fa-check-circle text-success"></i></span>Support 24/7</li>
			            </ul>
			            <a href="#" class="btn btn-block btn-primary" style="font-weight:bold;">Purchase | $35.00 </a>
			          </div>
			        </div>
			      </div>
			      <!-- Destroyer Tier -->
			      <div class="col-lg-4 py-5">
			        <div class="card mb-5 mb-lg-0">
			          <div class="card-body">
			            <h2 class="card-title text-muted text-uppercase text-center" style="font-weight:bold;">Destroyer</h2>
			            <h5 class="card-price text-center" style="font-weight:bold;">1450 Coins + 550 Coins</h5>
			            <hr>
			            <ul class="fa-ul">
			             <li><span class="fa-li"><i class="fas fa-check-circle text-success"></i></span>Access Checker</li>
			             <li><span class="fa-li"><i class="fas fa-check-circle text-success"></i></span>Access Marketplace</li>
			             <li><span class="fa-li"><i class="fas fa-check-circle text-success"></i></span>Discount Coins</li>
			             <li><span class="fa-li"><i class="fas fa-times-circle text-danger"></i></span>Refunds</li>
			             <li><span class="fa-li"><i class="fas fa-check-circle text-success"></i></span>Support 24/7</li>
			            </ul>
			            <a href="#" class="btn btn-block btn-primary" style="font-weight:bold;">Purchase | $55.00 </a>
			          </div>
			        </div>
			      </div>
			      <!-- HACKER Tier -->
			      <div class="col-lg-4 py-5">
			        <div class="card">
			          <div class="card-body">
			            <h2 class="card-title text-muted text-uppercase text-center" style="font-weight:bold;">Hackers</h2>
			            <h5 class="card-price text-center" style="font-weight:bold;">3250 Coins + 750 Coins</h5>
			            <hr>
			            <ul class="fa-ul">
			             <li><span class="fa-li"><i class="fas fa-check-circle text-success"></i></span>Access Checker</li>
			             <li><span class="fa-li"><i class="fas fa-check-circle text-success"></i></span>Access Marketplace</li>
			             <li><span class="fa-li"><i class="fas fa-check-circle text-success"></i></span>Discount Coins</li>
			             <li><span class="fa-li"><i class="fas fa-times-circle text-danger"></i></span>Refunds</li>
			             <li><span class="fa-li"><i class="fas fa-check-circle text-success"></i></span>Support 24/7</li>
			            </ul>
			            <a href="#" class="btn btn-block btn-primary" style="font-weight:bold;">Purchase | $70.00 </a>
			          </div>
			        </div>
			      </div>
			    </div>
			  </div>
			</section>
		</div>

<?php 
include('includes/footer.php'); 
include('includes/scripts.php');
?>