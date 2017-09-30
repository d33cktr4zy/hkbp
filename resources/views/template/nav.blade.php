       <div class="row" id="nav">
        <nav class="navbar navbar-default" role="navigation" id="navi">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        @yield('pageTitle')
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active">
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown">
                                Data Umat<b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="#">Data Umat Keseluruhan</a>
                                </li>
                                <li>
                                    <a href="#">Umat per Wilayah</a>
                                </li>
                                <li class="divider"></li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Umat Pindah Keluar</a>
                                    <ul class="dropdown-menu" style="width:100%">
                                        <li><a href="#">Lihat Data Pindah</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Buat data Pindah Umat</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Umat Pindah Masuk</a>
                                    <ul class="dropdown-menu" style="width:100%">
                                        <li><a href="#">Buat Data Umat Masuk</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Lihat Data</a></li>
                                    </ul>
                                </li>
                                <li class="divider"></li>

                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Umat Meninggal Dunia</a>
                                    <ul class="dropdown-menu" style="width:150%">
                                        <li><a href="#">Input Data Meninggal Dunia</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Lihat Data</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown">
                                Informasi Gereja <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="#">Statistik Umum</a>
                                </li>
                                <li class="divider"></li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manajemen Pejabat</a>
                                    <ul class="dropdown-menu" style="width:100%">
                                        <li><a href="#">Lihat Pejabat</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Atur Pejabat</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manajemen Jabatan Organisasi</a>
                                    <ul class="dropdown-menu" style="width:100%">
                                        <li><a href="#">Lihat Jabatan Organisasi</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Atur Jabatan Organisasi</a></li>
                                        <li><a href="#">Tambah/Ubah pejabat Jabatan Organisasi</a></li>
                                    </ul>
                                </li>

                                <li class="divider"></li>

                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manajemen Wilayah</a>
                                    <ul class="dropdown-menu" style="width:100%">
                                        <li><a href="#">Lihat Wilayah</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Edit Wilayah</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manajemen Status</a>
                                    <ul class="dropdown-menu" style="width:100%">
                                        <li><a href="#">Lihat Status</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Edit Status</a></li>
                                    </ul>
                                </li>


                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown">
                                Data Keluarga<b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="#">
                                        Lihat Detail Keluarga
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        Keluarga Berdasarkan wilayah
                                    </a>
                                </li>

                                <li class="divider"></li>

                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        Data Keluarga
                                    </a>
                                    <ul class="dropdown-menu" style="width: auto">
                                        <li>
                                            <a href="#">
                                                Buat Keluarga Baru
                                            </a>
                                        </li>

                                        <li class="divider"></li>

                                        <li>
                                            <a href="#">
                                                Pencarian Keluarga
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        Man. Istri
                                    </a>
                                    <ul class="dropdown-menu" style="width: auto">
                                        <li>
                                            <a href="#">
                                                Set Istri
                                            </a>
                                        </li>

                                        <li class="divider"></li>

                                        <li>
                                            <a href="#">
                                                Ubah data Istri
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        Man. Anak
                                    </a>
                                    <ul class="dropdown-menu" style="width: auto">
                                        <li>
                                            <a href="#">
                                                Set Anak
                                            </a>
                                        </li>

                                        <li class="divider"></li>

                                        <li>
                                            <a href="#">
                                                Ubah data Anak
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        Man. Tanggungan
                                    </a>
                                    <ul class="dropdown-menu" style="width: 80%">
                                        <li>
                                            <a href="#">
                                                Set Tanggungan
                                            </a>
                                        </li>

                                        <li class="divider"></li>

                                        <li>
                                            <a href="#">
                                                Ubah data tanggungan
                                            </a>
                                        </li>
                                    </ul>
                                </li>


                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown">
                                Aktivitas<b class='caret'></b>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        Baptis
                                    </a>
                                    <ul class="dropdown-menu" style="width: auto">
                                        <li>
                                            <a href="#">
                                                Lihat Data Baptis
                                            </a>
                                        </li>

                                        <li class="divider"></li>

                                        <li>
                                            <a href="#">
                                                Baptis Baru
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        Naik Sidi
                                    </a>
                                    <ul class="dropdown-menu" style="width: auto">
                                        <li>
                                            <a href="#">
                                                Lihat data Naik Sidi
                                            </a>
                                        </li>

                                        <li class="divider"></li>

                                        <li>
                                            <a href="#">
                                                Input data Naik Sidi
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        Pernikahan
                                    </a>
                                    <ul class="dropdown-menu" style="width: 120%">
                                        <li>
                                            <a href="#">
                                                Lihat data Pernikahan
                                            </a>
                                        </li>

                                        <li class="divider"></li>

                                        <li>
                                            <a href="#">
                                                Input data Pernikahan
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        RPP
                                    </a>
                                    <ul class="dropdown-menu" style="width: 130%">
                                        <li>
                                            <a href="#">
                                                Lihat data RPP
                                            </a>
                                        </li>

                                        <li class="divider"></li>

                                        <li>
                                            <a href="#">
                                                Masukan Umat RPP
                                            </a>
                                        </li>

                                        <li class="divider"></li>

                                        <li>
                                            <a href="#">
                                                Maintainance data RPP</br>
                                                per hari ini
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Laporan <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">
                                        Laporan Jemaat Aktif
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Laporan Jemaat Aktif per wilayah
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        Laporan Jemaat Pindah
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        Laporan Jemaat Meninggal Dunia
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        Laporan Jemaat Masuk
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        Laporan Anak Kawin
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        Laporan ulang tahun Jemaat
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        Laporan Jemaat dalam status RPP
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manajemen User <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">
                                        Lihat User
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Add User
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <form role="form">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="inputUname" placeholder="Username">
                                        </div>
                                <li role="presentation" class="divider">Action</li>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="" placeholder="Password">
                                </div>
                                <div class="checkbox">
                                    <label class="control-label">
                                        <input type="checkbox"> Remember Me
                                    </label>
                                </div>
                                <button type="submit" class="btn pull-right">Submit</button>
                                </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>