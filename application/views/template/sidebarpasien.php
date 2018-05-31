        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                	<li class="text-center">
                    <i class="fa fa-user-md"  style="font-size:150px" ></i>
					</li>

                    <li>
                        <a href="<?php echo base_url().'Welcome/beranda' ?>" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Data Master<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url().'datdok/dadok' ?>">Data Dokter</a>
                                <a href="<?php echo base_url().'pendaftaran/daftar' ?>">Pendaftaran Pasien</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>