<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Light Logo-->
        <a href="dashboard.php" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logo-sm3.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo3.png" alt="" height="60">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="dashboard.php">
                        <i class="ri-dashboard-line"></i> <span data-key="t-dashboards">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="biodata.php">
                        <i class="ri-file-user-line"></i> <span data-key="t-dashboards">Biodata</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="pilih-skema.php">
                        <i class="ri-list-check"></i> <span data-key="t-dashboards">Transaksi</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="data-transaksi.php">
                        <i class="ri-database-2-line"></i> <span data-key="t-dashboards">Data Transaksi</span>
                    </a>
                </li>
                
                <!-- <li class="nav-item">
                    <a class="nav-link menu-link" href="master-skema.php">
                        <i class="ri-file-paper-2-line"></i> <span data-key="t-dashboards">Master Skema</span>
                    </a>
                </li> -->    
                <?php if($_SESSION['role_acc'] == 'admin'){ 
                echo 
                 "<li class='menu-title'><span data-key='t-menu'>Panel Admin</span></li>
                    
                 <li class='nav-item'>
                    <a class='nav-link menu-link' href='master.php'>
                        <i class='ri-database-2-line'></i> <span data-key='t-dashboards'>Master</span>
                    </a>
                </li>

                 <li class='nav-item'>
                    <a class='nav-link menu-link' href='#'>
                        <i class='ri-database-2-line'></i> <span data-key='t-dashboards'>Asesi</span>
                    </a>
                </li>

                 <li class='nav-item'>
                    <a class='nav-link menu-link' href='#log' role='button'
                        aria-expanded='true' aria-controls='log'>
                        <i class='ri-file-transfer-line'></i> <span data-key='t-multi-level'>Log</span>
                    </a>
                    <div class='menu-dropdown collapse' id='log' style=''>
                        <ul class='nav nav-sm flex-column'>
                            <li class='nav-item'>
                                <a href='log-account.php' class='nav-link' data-key='log-account'> Log Account</a>
                            </li>
                            <li class='nav-item'>
                                <a href='log-master.php' class='nav-link' data-key='log-master'> Log Master</a>
                            </li>
                            <li class='nav-item'>
                                <a href='log-trx.php' class='nav-link' data-key='log-trx'> Log Trx</a>
                            </li>
                        </ul>
                    </div>
                </li>";
                } ?>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>