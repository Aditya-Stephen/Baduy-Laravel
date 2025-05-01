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
                        <li><a href="{{ url('/login') }}">Login</a></li>
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
						<h2>Artikel</h2>
						<ul class="page-title-link">
							<li><a href="#">Home</a></li>
							<li><a href="#">Artikel</a></li>
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
                        <li><a href="#">Trending</a></li>
                        <li><a href="#">Terbaru</a></li>
                        <li><a href="#">Budaya & Tradisi</a></li>
                        <li><a href="#">Kearifan Lokal</a></li>
                        <li><a href="#">Mitos & Kepercayaan</a></li>
                        <li><a href="#">lokasi</a></li>
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
                        <!-- Artikel Pertama --> <!-- Tampilkan daftar artikel -->
                        @foreach ($articles as $article)
                            <div class="article-post">
                                <div class="author-profile">
                                    <img src="{{ $article->profile_picture }}" alt="{{ $article->author_name }}" class="profile-image">
                                </div>
                                <div class="post-content12">
                                    <!-- Nama penulis -->
                                    <h3>{{ $article->author_name }}</h3>
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
                                    <p>{{ Str::limit($article->content, 150) }}</p>
                                    <!-- Link baca lebih banyak -->
                                    <a href="{{ route('artikel.show', $article->id) }}" class="read-more">Baca lebih banyak...</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="test-box" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_01.png" alt="" class="img-responsive alignleft">
                                <h4>James Fernando <small>- Manager of Racer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_02.png" alt="" class="img-responsive alignleft">
                                <h4>Jacques Philips <small>- Designer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_03.png" alt="" class="img-responsive alignleft">
                                <h4>Venanda Mercy <small>- Newyork City</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_01.png" alt="" class="img-responsive alignleft">
                                <h4>James Fernando <small>- Manager of Racer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_02.png" alt="" class="img-responsive alignleft">
                                <h4>Jacques Philips <small>- Designer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_03.png" alt="" class="img-responsive alignleft">
                                <h4>Venanda Mercy <small>- Newyork City</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div><!-- end testimonial -->
                    </div><!-- end carousel -->
                </div><!-- end col -->
            </div><!-- end row -->

        </div><!-- end container -->
    </div><!-- end section -->

    <div id="testimonials" class="parallax section db parallax-off" style="background-image:url('uploads/parallax_03.jpg');">
        <div class="container">
            <div class="section-title text-center">
                <h3>Our Clients</h3>
                <p class="lead">We thanks for all our awesome testimonials! There are hundreds of our happy customers! <br>Let's see what others say about GoodWEB Solutions website template!</p>
            </div><!-- end title -->

            <hr class="hr1">

            <div class="row logos">
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="uploads/logo_01.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="uploads/logo_02.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="uploads/logo_03.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="uploads/logo_04.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="uploads/logo_05.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="uploads/logo_06.png" alt="" class="img-repsonsive"></a>
                </div>
            </div><!-- end row -->

        </div><!-- end container -->
    </div><!-- end section -->

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