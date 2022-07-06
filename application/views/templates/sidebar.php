

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= site_url('dashboard'); ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <!-- <i class="fas fa-laugh-wink"></i> -->
                    <h1>Q</h1>
                </div>
                <div class="sidebar-brand-text mx-3">QURBAN<sup>1443H</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?php if( $this->uri->segment(1) == 'dashboard' ) { echo 'active'; } ?>">
                <a class="nav-link" href="<?= site_url('dashboard'); ?>">
                    <i class="fas fa-fw fa-solid fa-tachograph-digital"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Main
            </div>

            <!-- Nav Item - Qurban -->
            <li class="nav-item <?php if( $this->uri->segment(1) == 'qurban' ) { echo 'active'; } ?>">
                <a class="nav-link" href="<?= site_url('qurban'); ?>">
                    <i class="fas fa-fw fa-solid fa-clock"></i>
                    <span>Qurban</span></a>
            </li>

            <!-- Nav Item - Penimbangan -->
            <li class="nav-item <?php if( $this->uri->segment(1) == 'penimbangan' ) { echo 'active'; } ?>">
                <a class="nav-link" href="<?= site_url('penimbangan'); ?>">
                    <i class="fas fa-fw fa-solid fa-weight"></i>
                    <span>Penimbangan</span></a>
            </li>

            <?php if (is_admin()) : ?>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Distribusi -->
            <li class="nav-item <?php if( $this->uri->segment(1) == 'distribusi' ) { echo 'active'; } ?>">
                <a class="nav-link" href="<?= site_url('distribusi'); ?>">
                    <i class="fas fa-fw fa-solid fa-chart-bar"></i>
                    <span>Distribusi</span></a>
            </li>

            <!-- Nav Item - Users -->
            <li class="nav-item <?php if( $this->uri->segment(1) == 'users' ) { echo 'active'; } ?>">
                <a class="nav-link" href="<?= site_url('users'); ?>">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Users</span></a>
            </li>
            <?php endif; ?>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle align-center text-center" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div>
                        <img class="img-profile rounded-circle" src="<?= base_url('assets/'); ?>img/undraw_profile.svg">
                    </div>
                    <span class="mr-2 d-none d-lg-inline text-white-600 small"><b>
                    <?= 
                    $this->session->userdata('login_session')['name'] . ' | ' . $this->session->userdata('login_session')['name'];
                    ?>
                    </b></span>
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                    aria-labelledby="userDropdown">
                    <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
