<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="/bois.ico" sizes="16x16">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Buat Surat</title>
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
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-info">
        <a class="navbar-brand" href="#">App</a>
        <!-- <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i
                class="fas fa-bars"></i></button> -->
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
                    <!-- <a class="dropdown-item" href="#">Settings</a> -->
                    <a class="dropdown-item" href="#">Login</a>
                    <!-- <div class="dropdown-divider"></div> -->
                    <a class="dropdown-item" id="logout">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <!-- <div id="layoutSidenav"> -->

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <!-- <h1 class="mt-4">Dashboard</h1> -->
                <br>
                <br>
                <br>
                <ol class="breadcrumb mb-4">
                    <!-- <li class="breadcrumb-item active">Dashboard</li> -->
                </ol>


                <div class="container">
                    <div class="p-3 mb-5 bg-white">
                        <div class="pl-5 pr-5 row h-100">
                            <div class="shadow rounded p-4 col-sm-9 center_div">
                               
                                <div class="row form-group ">
                                    <div class="col-md-12">
                                        <label for="jurusan">Jurusan</label>
                                        <input type="text" id="jurusan" class="form-control"
                                            placeholder="Rekayasa Perangkat Lunak">
                                    </div>
                                </div>
                                <div class="row form-group ">
                                    <div class="form-inline">
                                        <div class="col-md-12">
                                            <label for="tglmulai">dilaksanakan</label>
                                            <input type="date" id="tglmulai" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-inline">
                                        <div class="col-md-12">
                                            <label for="tglselesai">Selesai</label>
                                            <input type="date" id="tglselesai" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="niz">
                                    <div class="row form-group ">
                                        <div class="col-md-6">
                                            <label for="nis">NIS</label>
                                            <input type="text" name="nis[]" class="form-control" placeholder="00000">
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row form-inline">
                                        <div class="form-group">
                                            <button class="btn btn-info addperson"> <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-warning delperson"> <i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <div class="row form-group ">
                                    <div class="col-md-12">
                                        <label for="tempat">Tempat</label>
                                        <select name="tempat" id="tempat" class="form-control">

                                            <!-- Js -->

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button id="buat" class="btn btn-primary">Buat</button>
                                </div>
                                <!-- </form> -->
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nizcopy" style="display: none">
                    <div class="row nes form-group ">
                        <div class="col-md-6">
                            <input type="text" name="nis[]" class="form-control" placeholder="NIS">
                        </div>
                    </div>
                </div>

                <ol class="breadcrumb mb-4">

                </ol>
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
                        <p><a href="/app/login">Login</a> untuk melihat status konfirmasi  </p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Modal -->
    <!-- </div> -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="/assets/js/scripts.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="/assets/js/buatsurat.js"></script>


    <script>
    $(document).ready(function() {
        var maxGroup = 9;
        var length = 0;

        $(".addperson").on("click", function() {
            if (length < maxGroup) {
                length += 1;
                var fieldHTML = $(".nizcopy").html();
                $(".niz:last").append(fieldHTML);
                // $('body').find('.niz:last').after(fieldHTML);
            } else {
                alert('Maximum 10 groups are allowed.');
            }
        });

        $(".delperson").on("click", function() {
            $(".nes").last().remove();

        });
    });
    </script>

    <style>
    .center_div {
        margin: 0 auto;
        width: 80%
            /* value of your choice which suits your alignment */
    }
    </style>
</body>

</html>