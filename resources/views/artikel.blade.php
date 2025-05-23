<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Artikel Page Baduy</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- font tambahan -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ asset('images/logobadui1.webp') }}" type="image/png" />

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <!-- Panggil file CSS dan JavaScript menggunakan Vite -->
    @vite(['resources/js/app.js'])


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/artikel') }}"><img src="images/logobadui1.webp" class="gambar-kecil" alt="image"></a>
                    <!-- fitur searching -->
                    <form action="{{ url('/artikel') }}" method="GET" class="search-container" role="search">
                        <label for="search">Cari artikel</label>
                        <input id="search" type="search" name="search" placeholder="Cari artikel..." required autofocus />
                        <button type="submit">GO</button> 
                    </form>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/aboutUs') }}">about us</a></li>
                        <li><a href="{{ url('/marketplace') }}">Product</a></li>
                        <li><a href="{{ url('/artikel') }}">Article</a></li>
                        <!-- Menampilkan nama pengguna setelah login, atau tombol login jika belum login -->
                        @auth
                            <!-- Menampilkan nama pengguna yang login dengan menu dropdown -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="btn btn-link" style="text-decoration: none; color: inherit;">
                                                Logout
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <!-- Jika belum login, tampilkan tombol login -->
                            <li><a href="{{ route('login') }}">Login</a></li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    </header>

   	<div class="banner-area banner-bg-artikel">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
                    <div class="banner">
						<h2>Welcome To Artikel</h2>
						<ul class="page-title-link">
							<li><a href="#">“Tak perlu listrik untuk menyinari kehidupan Baduy mengajarkan bahwa cahaya sejati berasal dari kesederhanaan dan keharmonisan.” </a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- Section Kategori Horizontal -->
    <div class="category-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="category-list">
                        <li><a href="{{ route('artikel', ['genre' => 'all']) }}" 
                               class="{{ !request('genre') || request('genre') == 'all' ? 'active' : '' }}">
                            Terbaru
                        </a></li>
                        <li><a href="{{ route('artikel', ['genre' => request('genre') == 'Budaya & Tradisi' ? 'all' : 'Budaya & Tradisi']) }}" 
                               class="{{ request('genre') == 'Budaya & Tradisi' ? 'active' : '' }}">
                            Budaya & Tradisi
                        </a></li>
                        <li><a href="{{ route('artikel', ['genre' => request('genre') == 'Kearifan Lokal' ? 'all' : 'Kearifan Lokal']) }}" 
                               class="{{ request('genre') == 'Kearifan Lokal' ? 'active' : '' }}">
                            Kearifan Lokal
                        </a></li>
                        <li><a href="{{ route('artikel', ['genre' => request('genre') == 'Mitos & Kepercayaan' ? 'all' : 'Mitos & Kepercayaan']) }}" 
                               class="{{ request('genre') == 'Mitos & Kepercayaan' ? 'active' : '' }}">
                            Mitos & Kepercayaan
                        </a></li>
                        <li><a href="{{ route('artikel', ['genre' => request('genre') == 'Lokasi' ? 'all' : 'Lokasi']) }}" 
                               class="{{ request('genre') == 'Lokasi' ? 'active' : '' }}">
                            Lokasi
                        </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="article-section" class="article-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="article-content">
                        @if(request()->has('search'))
                            @if($articles->isEmpty())
                                <div class="alert alert-warning">
                                    Tidak ditemukan hasil untuk: <strong>{{ request('search') }}</strong>
                                </div>
                            @else
                                <div class="alert alert-success">
                                    Menampilkan hasil untuk: <strong>{{ request('search') }}</strong>
                                </div>
                            @endif
                        @endif
                        <!-- Letakkan di bagian atas sebelum loop artikel -->
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        <!-- Artikel Pertama --> <!-- Tampilkan daftar artikel -->
                        @foreach ($articles as $article)
                            <div class="article-post">
                                <div class="author-profile">
                                    <img src="{{ $article->user->profile_photo_path ? (filter_var($article->user->profile_photo_path, FILTER_VALIDATE_URL) ? $article->user->profile_photo_path : asset('storage/'.$article->user->profile_photo_path)) : asset('images/user-profile.png') }}" alt="{{ $article->user->name }}" class="profile-image">                                
                                </div>
                                <div class="post-content12">
                                    <!-- Nama penulis & relasi user -->
                                    <h3>{{ $article->user->name }}</h3>
                                    <!-- Judul artikel -->
                                    <h4> <a href="{{ route('artikel.show', $article->id) }}" class="title-link">{{ $article->title }}</a> </h4>
                                    <!-- Tanggal artikel -->
                                    <p class="date">
                                        @if($article->created_at)
                                            {{ $article->created_at->format('F j, Y') }}
                                        @else
                                            Tanggal tidak tersedia
                                        @endif
                                    </p>
                                    <!-- Potongan isi artikel -->
                                    <p>{{ Str::limit($article->content, 400) }}</p>
                                    <!-- Link baca lebih banyak -->
                                    <a href="{{ route('artikel.show', $article->id) }}" class="read-more">Baca lebih banyak...</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="create-article-btn">
                <a href="{{ route('artikel.create') }}" class="plusButton" tabindex="0">
                    <svg class="plusIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                        <g mask="url(#mask0_21_345)">
                            <path d="M13.75 23.75V16.25H6.25V13.75H13.75V6.25H16.25V13.75H23.75V16.25H16.25V23.75H13.75Z"></path>
                        </g>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Article Carousel Section -->
<div id="article-carousel" class="parallax section db" style="background-color: #f8f9fa; padding: 60px 0;">
    <div class="container">
        <div class="section-title text-center">
            <h3>Artikel Terbaru</h3>
            <p class="lead">Temukan artikel-artikel terbaru dari komunitas kami</p>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div id="articleCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        @foreach($carouselArticles as $key => $article)
                            <li data-target="#articleCarousel" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></li>
                        @endforeach
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        @foreach($carouselArticles as $key => $article)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="carousel-image-container">
                                            <img src="{{ $article->header_image ?? asset('images/default-header.jpg') }}" 
                                                 alt="{{ $article->title }}" 
                                                 class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="carousel-caption">
                                            <h4>{{ $article->title }}</h4>
                                            <p>{{ Str::limit($article->content, 200) }}</p>
                                            <a href="{{ route('artikel.show', $article->id) }}" class="btn btn-primary">Baca Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Controls -->
                    <a class="carousel-control-prev" href="#articleCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#articleCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <img src="images/logobadui1.webp" class="gambar-kecil" alt="" />
                        </div>
                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>
                        <p>Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>
                    </div><!-- end clearfix -->
                </div><!-- end col -->

				<div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Pages</h3>
                        </div>

                        <ul class="footer-links hov">
                        <li><a class="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/aboutUs') }}">About Us</a></li>
                        <li><a href="{{ url('/marketplace') }}">Product</a></li>
                        <li><a href="{{ url('/artikel') }}">Article</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-distributed widget clearfix">
                        <div class="widget-title">
                            <h3>Subscribe</h3>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which one know this tricks.</p>
                        </div>
						
						<div class="footer-right">
							<form method="get" action="#">
								<input placeholder="Subscribe our newsletter.." name="search">
								<i class="fa fa-envelope-o"></i>
							</form>
						</div>                        
                    </div><!-- end clearfix -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

   <!-- JS Files -->
    <script src="{{ asset('js/all.js') }}"></script>
    <script src="{{ asset('js/portfolio.js') }}"></script>
    <script src="{{ asset('js/hoverdir.js') }}"></script>
    <script src="{{ asset('js/modernizer.js') }}"></script>

    <!-- Panggil custom.js PALING BAWAH -->
    <script src="{{ asset('js/custom.js') }}"></script>

    <!-- Jika pakai Vite, panggilan ini HARUS yang terakhir -->
    @vite(['resources/js/app.js'])

</body>
</html>