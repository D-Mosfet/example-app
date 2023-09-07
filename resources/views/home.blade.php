<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>PT. Dinamika Indo Media</title>
    <meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="../favicon.ico">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/default.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/component.css') }}"/>
    <link rel="icon" href="{!! asset('image/logo.png') !!}">
    <link rel="stylesheet" href="{{ asset('css/navbar_style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="js/modernizr.custom.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-custom navbar-mainbg">
        <section id="beranda"><a class="navbar-brand navbar-logo" href="home"><img src="{{ asset('image/logo.png') }}" alt="logo" style="height: 45px;"></a></section>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item">
                    <a class="nav-link" href="#beranda"><i class="fas fa-tachometer-alt"></i><strong>Beranda</strong></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#profile"><i class="far fa-address-book"></i><strong>Profile</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-clone"></i><strong>Product</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#customer"><i class="far fa-calendar-alt"></i><strong>Customer</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#hubungi"><i class="far fa-chart-bar"></i><strong>Hubungi</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-copy"></i><strong>Mitra</strong></a>
                </li>
            </ul>
        </div>
    </nav>



    <!-- Image Slider -->
    <div id="hero-slider">
        <div id="logo" class="mask">
            <span class="logo-text masked">PT. Dinamika Indo Media</span>
        </div>
        <div id="slideshow">
            <div id="slides-main" class="slides">
                <div class="slide" data-index="0">
                    <div class="abs-mask">
                        <div class="slide-image"><img src="{{ asset('image/slide-1.jpg') }}" alt="error"></div>
                    </div>
                </div>
                <div class="slide" data-index="1">
                    <div class="abs-mask">
                    <div class="slide-image"><img src="{{ asset('image/slide-2.jpg') }}" alt="error"></div>
                    </div>
                </div>
                <div class="slide" data-index="2">
                    <div class="abs-mask">
                    <div class="slide-image"><img src="{{ asset('image/slide-3.jpg') }}" alt="error"></div>
                    </div>
                </div>
                <div class="slide" data-index="3">
                    <div class="abs-mask">
                    <div class="slide-image"><img src="{{ asset('image/slide-4.jpg') }}" alt="error"></div>
                    </div>
                </div>
            </div>
            <div id="slides-aux" class="slides mask">
                <h2 class="slide-title slide" data-index="0"><a href="#">#64 Paradigm</a></h2>
                <h2 class="slide-title slide" data-index="1"><a href="#">Industrial Works</a></h2>
                <h2 class="slide-title slide" data-index="2"><a href="#">Future Lights</a></h2>
                <h2 class="slide-title slide" data-index="3"><a href="#">The Colossal</a></h2>
            </div>
        </div>
        <div id="info">
            <div class="slider-title-wrapper">
                <span class="line"></span>
                <h1 class="slider-title">
                </h1>
            </div>
        </div>
        <nav id="slider-nav">
            <span class="current">01</span>
            <span class="sep"></span>
            <span class="total">04</span>
        </nav>
    </div>

    <!-- About Company -->
<div class= "aboutus"><h3>Dinamika Indo Media</h3><p>PT. DINAMIKA INDO MEDIA berdiri pada hari Kamis tanggal 10 Februari 2011 di Kabupaten Bekasi, saat ini kami bergerak dibidang pengadaan barang untuk pemenuhan kebutuhan instansi, Lembaga, dan satuan kerja pemerintahan yang bertempat di Kota Surabaya.</p></div>

<section class="service_section layout_padding">
    <div class="service_container3">
        <div class="container3 ">
            <div class="heading_container3">
            <h2>
            Our <span>Services</span>
            </h2>
            <p>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
            </p>
            </div>
            <div class="row3">
                <div class="col-md-6 ">
                    <div class="box3">
                        <div class="img-box3">
                        <img src="{{ asset('image/customer-service.png') }}" alt="">
                        </div>
                            <div class="detail-box3">
                            <h5>
                            Penyedia Jasa
                            </h5>
                            <p>
                            fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using
                            </p>
                            </div>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div   div class="box3">
                        <div class="img-box3">
                        <img src="{{ asset('image/sale.png') }}" alt="">
                        </div>
                            <div class="detail-box3">
                            <h5>
                            Retail
                            </h5>
                            <p>
                            fact that a reader will be distracted by the readable content of a page when looking at its layout.
                            The
                            point of using
                            </p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <ul class="grid cs-style-3">
				<li>
					<figure>
						<img src="{{ asset('image/alatkesehatan.png') }}" alt="img04">
						<figcaption>
							<h3>Alat Kesehatan</h3>
							<span>Dinamika Indo Media</span>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="{{ asset('image/alatpraktik.png') }}" alt="img01">
						<figcaption>
							<h3>Alat Praktik</h3>
							<span>Dinamika Indo Media</span>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="{{ asset('image/ape.png') }}" alt="img02">
						<figcaption>
							<h3>APE</h3>
							<span>Dinamika Indo Media</span>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="{{ asset('image/meubelair.png') }}" alt="img05">
						<figcaption>
							<h3>Meubel Air</h3>
							<span>Dinamika Indo Media</span>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="{{ asset('image/multimedia.png') }}" alt="img03">
						<figcaption>
							<h3>Multimedia</h3>
							<span>Dinamika Indo Media</span>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="{{ asset('image/moco.png') }}" alt="img06">
						<figcaption>
							<h3>Moco</h3>
							<span>Dinamika Indo Media</span>
						</figcaption>
					</figure>
				</li>
			</ul>

    <div class= "customer"><h3>Customer Kami</h3><p>Komitmen kami dalam kualitas untuk menjaga nilai produk customer kami.</p></div>
    <!-- slider customer -->
    <section id="customer"></section>
    <div class="wrapper">
	<div class="slider">
	    <div class="slide-track">

			<!-- Img Code -->
			<div class="slide">
                <img src="{{ asset('image/kemendikbud.png') }}" alt="error">
			</div>

			<div class="slide">
                <img src="{{ asset('image/viva.png') }}" alt="error">
			</div>

			<div class="slide">
                <img src="{{ asset('image/kebab.png') }}" alt="error">
			</div>

			<div class="slide">
                <img src="{{ asset('image/indomaret.png') }}" alt="error">
			</div>

			<div class="slide">
                <img src="{{ asset('image/wilmar.png') }}" alt="error">
			</div>

			<div class="slide">
                <img src="{{ asset('image/jawapos.png') }}" alt="error">
			</div>

			<div class="slide">
                <img src="{{ asset('image/duakelinci.png') }}" alt="error">
			</div>

			<div class="slide">
                <img src="{{ asset('image/kpu.png') }}" alt="error">
			</div>

			<div class="slide">
                <img src="{{ asset('image/kemendikbud.png') }}" alt="error">
			</div>

			<div class="slide">
                <img src="{{ asset('image/viva.png') }}" alt="error">
			</div>

			<div class="slide">
                <img src="{{ asset('image/kebab.png') }}" alt="error">
			</div>

			<div class="slide">
                <img src="{{ asset('image/indomaret.png') }}" alt="error">
			</div>

			<div class="slide">
                <img src="{{ asset('image/wilmar.png') }}" alt="error">
			</div>

			<div class="slide">
                <img src="{{ asset('image/jawapos.png') }}" alt="error">
			</div>
			<!-- Img Code End -->

		</div>
	</div>
</div>

<footer class="footer">
    <div class="waves">
      <div class="wave" id="wave1"></div>
      <div class="wave" id="wave2"></div>
      <div class="wave" id="wave3"></div>
      <div class="wave" id="wave4"></div>
    </div>
    <div class="row3">
      <div class="col">
        <img src="{{ asset('image/logo.png') }}" class="logo">
        <section id="hubungi"><p>PT. DINAMIKA INDO MEDIA berdiri pada hari Kamis tanggal 10 Februari 2011
          di Kabupaten Bekasi, saat ini kami bergerak dibidang pengadaan barang
          untuk pemenuhan kebutuhan instansi, Lembaga, dan satuan kerja
          pemerintahan yang bertempat di Kota Surabaya</p></section>
      </div>
      <div class="col">
        <h3>Office</h3>
        <p>JL. Karah Agung 45</p>
        <p>Surabaya, Jawa Timur</p>
        <p class="email-id"> info.jepepress@gmail.com</p>
        <h4>+62318289999</h4>
      </div>
      <div class="col">
        <h3>Links</h3>
        <ul>
          <li><a href="https://siplah.temprina.co.id/">SIPLah Temprina</a></li>
          <li><a href="https://www.jpbooks.id/">JPBooks Store</a></li>
          <li><a href="https://cahayaquran.com/">Cahaya Quran</a></li>
          <li><a href="https://temprina.com/main/index#">TemaTrade</a></li>
          <li><a href="https://www.temapack.co.id/">TemaPack</a></li>
          <li><a href="https://temprina.com/main/index#">BeLa Pengadaan</a></li>
        </ul>
      </div>
      <div class="col">
        <h3>Email</h3>
        <form>
          <i class="far fa-envelope"></i>
          <input type="email" placeholder="Enter your email id" required>
          <button type="Submit"><i class="fas fa-arrow3-right"></i></button>
        </form>
      </div>
    </div>
    </ul>
    <p>&copy;2023 Mahasiswa It Telkom Surabaya | All Right Reserved</p>
  </footer>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/toucheffects.js') }}"></script>
</body>
</html>
