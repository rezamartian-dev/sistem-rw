

<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
        </a>
    </div>


    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <!-- Search -->
        <div class="navbar-nav align-items-center">
            <div class="nav-item navbar-search-wrapper mb-0">
                Hallo <?=$this->session->username?>, Welcome At Dashboard Sistem RW
            </div>
        </div>
        <!-- /Search -->
        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- Style Switcher -->
            <li class="nav-item me-2 me-xl-0">
                <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
                    <i class='bx bx-sm'></i>
                </a>
            </li>
			<!-- User -->
			<li class='nav-item navbar-dropdown dropdown-user dropdown'>
				<a class='nav-link dropdown-toggle hide-arrow' href='javascript:void(0);' data-bs-toggle='dropdown'>
					<div class='avatar avatar-online'>
						<img src='<?=$this->url?>assets/backoffice/img/default_user.png' alt class='w-px-40 h-auto rounded-circle'>
					</div>
				</a>
				<ul class='dropdown-menu dropdown-menu-end'>
					<li>
						<a class='dropdown-item' href='pages-account-settings-account.html'>
							<div class='d-flex'>
								<div class='flex-shrink-0 me-3'>
									<div class='avatar avatar-online'>
										<img src='<?=$this->url?>assets/backoffice/img/default_user.png' alt
											 class='w-px-40 h-auto rounded-circle'>
									</div>
								</div>
								<div class='flex-grow-1'>
									<span class='fw-medium d-block'><?=$this->session->username?></span>
									<small class='text-muted'>Admin</small>
								</div>
							</div>
						</a>
					</li>
					<li>
						<div class='dropdown-divider'></div>
					</li>
					<li>
						<a class='dropdown-item' href='pages-profile-user.html'>
							<i class='bx bx-user me-2'></i>
							<span class='align-middle'>My Profile</span>
						</a>
					</li>

					<li>
						<div class='dropdown-divider'></div>
					</li>
					<li>
						<a class='dropdown-item' href="<?=base_url().'backoffice/auth/logout'?>" >
							<i class='bx bx-power-off me-2'></i>
							<span class='align-middle'>Log Out</span>
						</a>
					</li>
				</ul>
			</li>
			<!--/ User -->
        </ul>
    </div>


    <!-- Search Small Screens -->
    <div class="navbar-search-wrapper search-input-wrapper  d-none">
        <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..." aria-label="Search...">
        <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
    </div>


</nav>

