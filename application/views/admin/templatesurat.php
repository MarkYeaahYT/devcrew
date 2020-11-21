<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="icon" href="/bois.ico" sizes="16x16">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Template Surat</title>
    <link href="/assets/css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="sb-nav-fixed">
    <script>
    url = window.location.origin;
    </script>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="#">App</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">

            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Activity Log</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" id="logout">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="/admin">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="/admin/siswa">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Siswa
                        </a>
                        <a class="nav-link" href="/admin/tempatpkl">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tempat PKL
                        </a>
                        <a class="nav-link" href="/admin/templatesurat">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Template Surat
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Admin
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <br>
                    <!-- <h1 class="mt-4">Dashboard</h1> -->
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Template Surat</li>
                    </ol>
                    <div class="form-group">
                        <div class="col-md-9">
                            <label for="nomor">Nomor</label>
                            <input type="text" class="form-control" id="nomor">
                            <small class="form-text text-muted"></small>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-9">
                            <label for="hal">Hal</label>
                            <textarea class="form-control" id="hal" cols="30" rows="3"></textarea>
                            <small class="form-text text-muted"></small>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-9">
                            <label for="tajaran">Tahun Ajaran</label>
                            <input type="text" class="form-control" id="tajaran">
                            <small class="form-text text-muted"></small>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-9">
                            <label for="tahab">Tahab</label>
                            <input type="text" class="form-control" id="tahab">
                            <small class="form-text text-muted"></small>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-9">
                            <label for="kelas">Kelas</label>
                            <input type="text" class="form-control" id="kelas">
                            <small class="form-text text-muted"></small>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-9">
                            <label for="tglmulai">Tanggal Mulai</label>
                            <input type="date" class="form-control" id="tglmulai">
                            <small class="form-text text-muted"></small>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-9">
                            <label for="tglselesai">Tanggal Selesai</label>
                            <input type="date" class="form-control" id="tglselesai">
                            <small class="form-text text-muted"></small>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-9">
                            <label for="kepsek">Kepala Sekolah</label>
                            <input type="text" class="form-control" id="kepsek">
                            <small class="form-text text-muted"></small>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-9">
                            <label for="nip">NIP</label>
                            <input type="text" class="form-control" id="nip">
                            <small class="form-text text-muted"></small>
                        </div>
                    </div>
                    <button type="button" id="btn_save" class="btn btn-primary">Save</button>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; DevCrew 2020</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- Modal -->
    <form>
        <div class="modal fade" id="modal_done" role="dialog" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <i class="fa fa-check"></i>
                        <p class="text-info">Success</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Modal -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="/assets/js/scripts.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script> -->
    <!-- <script src="assets/demo/chart-area-demo.js"></script> -->
    <!-- <script src="assets/demo/chart-bar-demo.js"></script> -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <!-- <script src="assets/demo/datatables-demo.js"></script> -->
    <script src="/assets/js/templatesurat.js"></script>

    <script>
    var url = window.location.origin;
    
    </script>
</body>

</html>