<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Buat surat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Animate.css -->
    <link rel="stylesheet" href="/assets/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="/assets/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="/assets/css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="/assets/css/style.css">

    <!-- Modernizr JS -->
    <script src="/assets/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>

    <div class="colorlib-loader"></div>

    <div id="page">
		<div class="container pb-3">
			<nav class="colorlib-nav" role="navigation">
				<div class="top-menu">
					<div class="container">
						<div class="row">
							<div class="col-md-2">
								<div id=""><a href="/">App</a></div>
							</div>
						</div>
					</div>
				</div>
			</nav>
			<br>
			<br>
		</div>
		<br>

        <div class="nizcopy" style="display: none">
            <div class="row nes form-group qbstp-header-subscribe">
                <div class="col-md-6">
                    <input type="text" name="nis[]" class="form-control" placeholder="NIS">
                </div>
            </div>
        </div>

        <section id="home" class="video-hero"
            style="height: auto; background-image: url(images/cover_img_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;"
            data-section="home">
            <div class="overlay"></div>
            <div class="display-t">
                <div class="display-tc">
                    <div class="container">
                        <div class="col-md-12 col-md-offset-0">
                            <div class="row justify-content-center">
                                <!-- <form> -->
                                    <div class="row form-group qbstp-header-subscribe">
                                        <div class="col-md-6">
                                            <label for="hal">Hal</label>
											<input type="text" id="hal" class="form-control" placeholder="Permohonan Tempat Ker ...">
                                        </div>
                                    </div>
                                    <div class="row form-group qbstp-header-subscribe">
                                        <div class="col-md-6">
                                            <label for="tajaran">Tahun Ajaran</label>
											<input type="text" id="tajaran" class="form-control" placeholder="2020 - 2021">
                                        </div>
                                    </div>
                                    <div class="row form-group qbstp-header-subscribe">
                                        <div class="col-md-6">
                                            <label for="kelas">Kelas</label>
											<input type="text" id="kelas" class="form-control" placeholder="XI">
                                        </div>
                                    </div>
                                    <div class="row form-group qbstp-header-subscribe">
                                        <div class="col-md-6">
                                            <label for="jurusan">Jurusan</label>
											<input type="text" id="jurusan" class="form-control" placeholder="Rekayasa Perangkat Lunak">
                                        </div>
                                    </div>
                                    <div class="row form-inline qbstp-header-subscribe">
										<div class="form-inline">
											<div class="col-md-6">
												<label for="rglmulai">dilaksanakan</label>
												<input type="date" id="rglmulai" class="form-control">
											</div>
										</div>
										<div class="form-inline">
											<div class="col-md-6">
												<label for="tglselesai">Selesai</label>
												<input type="date" id="tglselesai" class="form-control">
											</div>
										</div>
                                    </div>
                                    <div class="niz">
                                        <div class="row form-group qbstp-header-subscribe">
                                            <div class="col-md-6">
                                                <label for="nis">NIS</label>
                                                <input type="text" name="nis[]" class="form-control" placeholder="00000">
                                            </div>
                                        </div>
                                    </div>
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
                                    <div class="row form-group qbstp-header-subscribe">
                                        <div class="col-md-6">
                                            <label for="tempat">Tempat</label>
                                            <select name="" id="" class="form-control">
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button id="buat" class="btn btn-primary">Buat</button>
                                    </div>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="copy">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>
                            Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                            </script> <small> All rights reserved | This template is made with <i class="icon-heart"
                                    aria-hidden="true"></i> by <a href="https://colorlib.com"
                                    target="_blank">Colorlib</a> </small>
                            Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a>, <a
                                href="http://pexels.com/" target="_blank">Pexels</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </footer>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
    </div>

    <!-- jQuery -->
    <script src="/assets/js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="/assets/js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="/assets/js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="/assets/js/jquery.waypoints.min.js"></script>
    <!-- Stellar Parallax -->
    <script src="/assets/js/jquery.stellar.min.js"></script>
    <!-- YTPlayer -->
    <script src="/assets/js/jquery.mb.YTPlayer.min.js"></script>
    <!-- Owl carousel -->
    <script src="/assets/js/owl.carousel.min.js"></script>
    <!-- Magnific Popup -->
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/js/magnific-popup-options.js"></script>
    <!-- Counters -->
    <script src="/assets/js/jquery.countTo.js"></script>
    <!-- Main -->
    <script src="/assets/js/main.js"></script>

    <script>
    $(document).ready(function() {
        var maxGroup = 10

        $(".addperson").on("click", function() {
            if ($('body').find('.niz').length < maxGroup) {
                var fieldHTML = $(".nizcopy").html();
                $(".niz:last").append(fieldHTML);
                // $('body').find('.niz:last').after(fieldHTML);
            } else {
                alert('Maximum ' + maxGroup + ' groups are allowed.');
            }
        });

        $(".delperson").on("click", function() {
            $(".nes").last().remove();

        });
    });
    </script>

</body>

</html>