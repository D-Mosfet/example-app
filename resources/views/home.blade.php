<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>PT. Dinamika Indo Media</title>
    <link rel="icon" href="{!! asset('image/logo.png') !!}">
    <link rel="stylesheet" href="{{ asset('css/navbar_style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="home"><img src="{{ asset('image/logo.png') }}" alt="logo" style="height: 45px;"></a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="fas fa-tachometer-alt"></i><strong>Beranda</strong></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-address-book"></i><strong>Profile</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-clone"></i><strong>Product</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-calendar-alt"></i><strong>Customer</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-chart-bar"></i><strong>Hubungi</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-copy"></i><strong>Mitra</strong></a>
                </li>
            </ul>
        </div>
    </nav>
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
                    <span>Projects</span>
                </h1>
            </div>
            <div class="about">
                <p>
                    A pure CSS/JS slider layout<br/>
                    Developed for Toptal engineering blog<br/>
                    by <a href="http://stefan.lynxdev.io" target="_blank">Stefan V</a>,
                    repo on <a href="https://github.com/vitass/pure-css-js-slider" target="_blank">Github</a>
                </p>
            </div>
        </div>
        <nav id="slider-nav">
            <span class="current">01</span>
            <span class="sep"></span>
            <span class="total">04</span>
        </nav>
    </div>

    <div><h1>Dinamika Indo Media</h1><p>PT. DINAMIKA INDO MEDIA berdiri pada hari Kamis tanggal 10 Februari 2011
di Kabupaten Bekasi, saat ini kami bergerak dibidang pengadaan barang
untuk pemenuhan kebutuhan instansi, Lembaga, dan satuan kerja
pemerintahan yang bertempat di Kota Surabaya.</p></div>
<div class= "customer"><h3>Customer Kami</h3><p>Komitmen kami dalam kualitas untuk menjaga nilai produk customer kami.</p></div>
    <!-- slider customer -->
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
    <ul class="social-icon">
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-facebook"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-twitter"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-instagram"></ion-icon>
        </a></li>
    </ul>
    <ul class="menu">
      <li class="menu__item"><a class="menu__link" href="#">Home</a></li>
      <li class="menu__item"><a class="menu__link" href="#">About</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Services</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Team</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Contact</a></li>

    </ul>
    <p>&copy;2023 Mahasiswa It Telkom Surabaya | All Right Reserved</p>
  </footer>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
