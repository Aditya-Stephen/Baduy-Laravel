<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Produk Suku Baduy</title>
    <link rel="shortcut icon" href="{{ asset('images/logobadui1.webp') }}" type="image/png" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>
<body class="bg-gray-900 text-white">
    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container-fluid">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logos/logo.png" alt="image"></a>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/aboutUs') }}">about us</a></li>
                        <li><a href="{{ url('/marketplace') }}">produk</a></li>
                        <li><a href="{{ url('/artikel') }}">artikel</a></li>
                        <li><a href="{{ url('/login') }}">Login</a></li>
                    </ul>
            </div>
        </nav>
    </header>
    <div class="container">
    <section class="text-center py-12 bg-gray-800">
        <h1 class="text-4xl font-bold text-orange-400">Produk Suku Baduy</h1>
        <p class="text-gray-300 mt-2">Produk khas Suku Baduy yang dibuat secara tradisional dengan bahan alami.</p>
    </section>
    
    <section class="grid grid-cols-1 md:grid-cols-3 gap-6 p-6">
        <div class="bg-gray-700 p-4 rounded-lg shadow-lg">
            <img src="images/kain3.jpg" alt="Kain Tenun Baduy" class="rounded-lg w-full h-40 object-cover">
            <h2 class="text-lg font-semibold mt-4">Kain Tenun Baduy</h2>
            <p class="text-gray-300">Kain tenun khas yang dibuat secara tradisional oleh masyarakat Baduy.</p>
        </div>
        <div class="bg-gray-700 p-4 rounded-lg shadow-lg">
            <img src="images/tasbadui.jpg" alt="Tas Anyaman Bambu" class="rounded-lg w-full h-40 object-cover">
            <h2 class="text-lg font-semibold mt-4">Tas Anyaman Bambu</h2>
            <p class="text-gray-300">Kerajinan tangan berbahan dasar bambu dengan desain khas.</p>
        </div>
        <div class="bg-gray-700 p-4 rounded-lg shadow-lg">
            <img src="images/aksesorisbadui.jpg" alt="Aksesoris Tradisional" class="rounded-lg w-full h-40 object-cover">
            <h2 class="text-lg font-semibold mt-4">Aksesoris Tradisional</h2>
            <p class="text-gray-300">Kalung dan gelang khas yang melambangkan identitas budaya Baduy.</p>
        </div>
    </section>

    <section class="grid grid-cols-1 md:grid-cols-3 gap-6 p-6">
        <div class="bg-gray-700 p-4 rounded-lg shadow-lg">
            <img src="images/kain4.jpg" alt="Kain Tenun Baduy" class="rounded-lg w-full h-40 object-cover">
            <h2 class="text-lg font-semibold mt-4">Sarung Baduy</h2>
            <p class="text-gray-300">Kain sarung dengan motif unik yang sering dipakai oleh masyarakat Baduy.</p>
        </div>
        <div class="bg-gray-700 p-4 rounded-lg shadow-lg">
            <img src="images/topibadui.webp" alt="Tas Anyaman Bambu" class="rounded-lg w-full h-40 object-cover">
            <h2 class="text-lg font-semibold mt-4">Topi Baduy (Koja)</h2>
            <p class="text-gray-300">Penutup kepala khas yang sering digunakan oleh masyarakat Baduy Luar.</p>
        </div>
        <div class="bg-gray-700 p-4 rounded-lg shadow-lg">
            <img src="images/kerajinanbadui.jpeg" alt="Aksesoris Tradisional" class="rounded-lg w-full h-40 object-cover">
            <h2 class="text-lg font-semibold mt-4">Kerajinan Kayu</h2>
            <p class="text-gray-300">Berbagai benda dari kayu seperti sendok, piring, atau ukiran dengan sentuhan khas.</p>
        </div>
    </section>

    <section class="grid grid-cols-1 md:grid-cols-3 gap-6 p-6">
        <div class="bg-gray-700 p-4 rounded-lg shadow-lg">
            <img src="images/obatherbalbadui.jpg" alt="Kain Tenun Baduy" class="rounded-lg w-full h-40 object-cover">
            <h2 class="text-lg font-semibold mt-4">Obat Herbal Tradisional</h2>
            <p class="text-gray-300"> Ramuan obat dari tumbuhan hutan yang dipercaya memiliki berbagai khasiat.</p>
        </div>
        <div class="bg-gray-700 p-4 rounded-lg shadow-lg">
            <img src="images/gulabadui.jpg" alt="Tas Anyaman Bambu" class="rounded-lg w-full h-40 object-cover">
            <h2 class="text-lg font-semibold mt-4">Gula Aren Badui</h2>
            <p class="text-gray-300">Kerajinan tangan berbahan dasar bambu dengan desain khas.</p>
        </div>
        <div class="bg-gray-700 p-4 rounded-lg shadow-lg">
            <img src="images/madubadui.jpeg" alt="Aksesoris Tradisional" class="rounded-lg w-full h-40 object-cover">
            <h2 class="text-lg font-semibold mt-4">Madu Hutan Baduy</h2>
            <p class="text-gray-300">Madu alami yang dihasilkan dari lebah liar di hutan sekitar pemukiman Baduy.</p>
        </div>
    </section>
    </div>
    
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <img src="images/logos/logo-2.png" alt="" />
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
                            <li><a href="#">Home <span class="icon icon-arrow-right2"></span></a></li>
							<li><a href="#">Blog <span class="icon icon-arrow-right2"></span></a></li>
							<li><a href="#">Pricing <span class="icon icon-arrow-right2"></span></a></li>
							<li><a href="#">About <span class="icon icon-arrow-right2"></span></a></li>
							<li><a href="#">Faq <span class="icon icon-arrow-right2"></span></a></li>
							<li><a href="#">Contact <span class="icon icon-arrow-right2"></span></a></li>
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

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">                   
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">GoodWEB</a> Design By : 
					<a href="https://html.design/">html design</a></p>
                </div>

                
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <!-- ALL JS FILES -->
    <script src="{{ asset('js/all.js') }}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/portfolio.js') }}"></script>
    <script src="{{ asset('js/hoverdir.js') }}"></script>
    <script src="{{ asset('js/modernizer.js') }}"></script>
    <!-- jika pake vite -->
    @vite(['resources/js/app.js'])
</body>
</html>
