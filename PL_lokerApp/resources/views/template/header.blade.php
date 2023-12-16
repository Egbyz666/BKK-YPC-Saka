
<header id="header" class="fixed-top d-flex align-items-center">
  <div class="container d-flex justify-content-between align-items-center">

    <div class="logo">
      <h1><a href="index.html">BKK YPC</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    </div>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="" href="/">Home</a></li>
        <li><a class="" href="{{ route('features') }}">Features</a></li>
        <li><a href="{{ route('loker') }}">Post</a></li>
        <li class="dropdown"><a href="#"><span>Option</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="{{ route('uploadDocument') }}">Upload Dokumen</a></li>
            <li class="dropdown"><a href=""><span>Tentang Lowongan</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="{{ route('uploadLoker') }}">Upload Lowongan</a></li>
                <li><a href="#">Ajukan Lowongan</a></li>
              </ul>
            </li>
           
          </ul>
        </li>
        <li><a href="{{ route('contact') }}">Contact Us</a></li>
        @if (!empty(Auth::user()->id))
        <li><a href="{{ url('logout') }}"><i class="fa fa-right-to-bracket"></i></a></li>
        @else
        <li><a href="{{ url('login') }}"><i class="fa fa-user"></i></a></li>
        @endif
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->