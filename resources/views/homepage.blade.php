<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>HomePage Baduy Project</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="{{ asset('images/logobadui1.webp') }}" type="image/png" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900">
<header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container-fluid">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logobadui1.webp" class="gambar-kecil" alt="image"></a>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/aboutUs') }}">About Us</a></li>
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
        </nav>
    </header>
    
	<!-- <div class="slider-area">
		<div class="slider-wrapper owl-carousel">
			<div class="slider-item home-one-slider-otem slider-item-four slider-bg-one">
				<div class="container">
					<div class="row">
						<div class="slider-content-area">
							<div class="slide-text">
								<h1 class="homepage-three-title">Konten <span>Article</span> Slider</h1>
								<h2>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius soluta quo, error alias quod facere suscipit deleniti ullam aperiam laudantium ad quis iusto in quae, molestias consectetur eligendi. Sed, delectus. </h2>
								<div class="slider-content-btn">
									<a class="button btn btn-light btn-radius btn-brd" href="#">Read More</a>
									<a class="button btn btn-light btn-radius btn-brd" href="#">Contact</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="slider-item text-center home-one-slider-otem slider-item-four slider-bg-two">
				<div class="container">
					<div class="row">
						<div class="slider-content-area">
							<div class="slide-text">
								<h1 class="homepage-three-title">Konten <span>Article</span> Slider</h1>
								<h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente rem nisi facilis pariatur. Culpa, nihil voluptatibus! Totam accusantium, excepturi vel illo amet ex, distinctio corporis autem itaque sapiente facere qui! </h2>
								<div class="slider-content-btn">
									<a class="button btn btn-light btn-radius btn-brd" href="#">Read More</a>
									<a class="button btn btn-light btn-radius btn-brd" href="#">Contact</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="slider-item home-one-slider-otem slider-item-four slider-bg-three">
				<div class="container">
					<div class="row">
						<div class="slider-content-area">
							<div class="slide-text">
								<h1 class="homepage-three-title">Konten <span>Article</span> Slider</h1>
								<h2>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus tempora quasi, reiciendis obcaecati illum quas vero hic est iste, assumenda similique enim beatae adipisci, rerum ut incidunt corporis numquam vitae!</h2>
								<div class="slider-content-btn">
									<a class="button btn btn-light btn-radius btn-brd" href="#">Read More</a>
									<a class="button btn btn-light btn-radius btn-brd" href="#">Contact</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 

    <div class="relative max-w-7xl mx-auto px-4 py-12">
        <!-- Slides wrapper -->
        <div id="carousel" class="overflow-hidden relative">
          <div id="carousel-slides" class="flex transition-transform duration-500 ease-in-out" style="transform: translateX(0%)">
            
            <!-- Slide 1 -->
            <div class="min-w-full flex-shrink-0 p-4">
              <div class="bg-blue-900 rounded-lg overflow-hidden shadow-lg text-center text-black">
                <img src="suasana1.jpg" alt="Slide 1" class="w-full h-64 object-cover">
                <h2 class="mt-4 text-xl font-bold text-yellow-500">Slide 1: artikel</h2>
                <p class="mb-4 px-4">Konten.</p>
              </div>
            </div>
    
            <!-- Slide 2 -->
            <div class="min-w-full flex-shrink-0 p-4">
              <div class="bg-blue-900 rounded-lg overflow-hidden shadow-lg text-center text-black">
                <img src="suasana1.jpg" alt="Slide 2" class="w-full h-64 object-cover">
                <h2 class="mt-4 text-xl font-bold text-yellow-500">Slide 2: artikel</h2>
                <p class="mb-4 px-4">Konten.</p>
              </div>
            </div>
    
            <!-- Slide 3 -->
            <div class="min-w-full flex-shrink-0 p-4">
              <div class="bg-blue-900 rounded-lg overflow-hidden shadow-lg text-center text-black">
                <img src="suasana1.jpg" alt="Slide 3" class="w-full h-64 object-cover">
                <h2 class="mt-4 text-xl font-bold text-yellow-500">Slide 3: artikel</h2>
                <p class="mb-4 px-4">Konten.</p>
              </div>
            </div>
    
          </div>
    
          <!-- Buttons -->
          <button id="prev" class="absolute top-1/2 left-2 transform -translate-y-1/2 bg-blue-800 hover:bg-blue-900 text-white px-3 py-2 rounded-full">
            &#8592;
          </button>
          <button id="next" class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-blue-800 hover:bg-blue-900 text-white px-3 py-2 rounded-full">
            &#8594;
          </button>
        </div>
      </div>

  <section class="max-w-7xl mx-auto px-4 py-12">
    <div class="grid md:grid-cols-2 gap-8 items-center">
      <div>
        <h2 class="text-sm text-blue-300 uppercase font-semibold mb-2">About Baduy</h2>
        <h1 class="text-3xl text-yellow-400 font-bold mb-4">Welcome to Suku Baduy</h1>
        <p class="italic text-gray-300 mb-4">
          The Baduy are an indigenous community in Indonesia, living in Banten Province. They are known for their simple and traditional way of life, avoiding modern technology and following strict customs.
        </p>
        <p class="text-gray-300 mb-6">
          The Baduy community, with their rich cultural heritage and long-preserved traditions, seeks to introduce their local wisdom to a wider audience. Through broader promotion, they hope that their traditional values, handcrafted products such as weaving, weaving crafts, and natural goods can become more recognized and appreciated by the general public. This way, not only will their culture remain preserved, but it will also provide economic benefits for their community, opening new opportunities in trade while maintaining the principles of sustainability and environmental preservation that they deeply uphold.
        </p>
        <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Learn More</button>
      </div>
      <div>
        <img src="suasana1.jpg" alt="Baduy Group" class="rounded-lg shadow-md">
      </div>
    </div>
  </section>

  <hr class="border-dashed-gray-600 mx-4 my-8">

  <section class="max-w-7xl mx-auto px-4 pb-12">
    <div class="grid md:grid-cols-2 gap-8 items-center">
      <div>
        <img src="suasana1.jpg" alt="Baduy Village" class="rounded-lg shadow-md">
      </div>
      <div>
        <h2 class="text-sm text-blue-300 uppercase font-semibold mb-2">Konten</h2>
        <h1 class="text-2xl text-yellow-400 font-bold mb-4">Konten</h1>
        <p class="italic text-gray-300 mb-4">
          Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.
        </p>
        <p class="text-gray-300 mb-6">
          Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed vitae rutrum neque. Ut id erat sit amet libero bibendum aliquam. Donec ac egestas libero, eu bibendum risus. Phasellus et congue justo.
        </p>
        <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Learn More</button>
      </div>
    </div>
  </section>
  
  <section class="bg-cover bg-center py-16" style="background-image: url('suasana1.jpg')">
    <div class="max-w-7xl mx-auto px-4">
      <div class="grid grid-cols-2 md:grid-cols-4 gap-6">

        <!-- Item -->
        <div class="relative bg-white shadow rounded overflow-hidden">
          <img src="suasana1.jpg" alt="Kain Tenun" class="w-full h-48 object-cover">
          <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
            <div class="w-12 h-12 bg-blue-900 rounded-md flex items-center justify-center">
              <div class="w-3 h-3 border-2 border-white"></div>
            </div>
          </div>
          <div class="bg-blue-600 text-center py-2">
            <p class="text-yellow-400 font-bold">Kain Tenun</p>
          </div>
        </div>

        <!-- Item -->
        <div class="relative bg-white shadow rounded overflow-hidden">
          <img src="suasana1.jpg" alt="Madu Badui" class="w-full h-48 object-cover">
          <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
            <div class="w-12 h-12 bg-blue-900 rounded-md flex items-center justify-center">
              <div class="w-3 h-3 border-2 border-white"></div>
            </div>
          </div>
          <div class="bg-blue-600 text-center py-2">
            <p class="text-yellow-400 font-bold">Madu Badui</p>
          </div>
        </div>

        <!-- Item -->
        <div class="relative bg-white shadow rounded overflow-hidden">
          <img src="suasana1.jpg" alt="Obat Herbal" class="w-full h-48 object-cover">
          <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
            <div class="w-12 h-12 bg-blue-900 rounded-md flex items-center justify-center">
              <div class="w-3 h-3 border-2 border-white"></div>
            </div>
          </div>
          <div class="bg-blue-600 text-center py-2">
            <p class="text-yellow-400 font-bold">Obat Herbal</p>
          </div>
        </div>

        <!-- Item -->
        <div class="relative bg-white shadow rounded overflow-hidden">
          <img src="suasana1.jpg" alt="Topi Suku Badui" class="w-full h-48 object-cover">
          <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
            <div class="w-12 h-12 bg-blue-900 rounded-md flex items-center justify-center">
              <div class="w-3 h-3 border-2 border-white"></div>
            </div>
          </div>
          <div class="bg-blue-600 text-center py-2">
            <p class="text-yellow-400 font-bold">Topi Suku Badui</p>
          </div>
        </div>

      </div>
    </div>
  </section>
	
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <img src="{{ asset('images/logobadui1.webp') }}" class="gambar-kecil" alt="" />
                        </div>
                        <p>Integer rutrum ligula eu dignissim laoreet...</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Pages</h3>
                        </div>
                        <ul class="footer-links hov">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/aboutUs') }}">About Us</a></li>
                            <li><a href="{{ url('/marketplace') }}">Product</a></li>
                            <li><a href="{{ url('/artikel') }}">Article</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-distributed widget clearfix">
                        <div class="widget-title">
                            <h3>Subscribe</h3>
                            <p>There are many variations of passages...</p>
                        </div>
                        <div class="footer-right">
                            <form method="get" action="#">
                                <input placeholder="Subscribe our newsletter.." name="search">
                                <i class="fa fa-envelope-o"></i>
                            </form>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="{{ asset('js/all.js') }}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/portfolio.js') }}"></script>
    <script src="{{ asset('js/hoverdir.js') }}"></script>
    <script src="{{ asset('js/modernizer.js') }}"></script>

    <script src="{{ asset('js/carousel.js') }}"></script>
    <!-- jika pake vite -->
    @vite(['resources/js/app.js'])    

</body>

</html>
