
<nav id="navbar" class="push better-nav fixed-top">
  <div class="container">
    <div class="head">
      <a href="/" class="brand">
        <div class="logo">
          <img class="image" src="{{ asset('images/log.jpg') }}" alt="Branding" />
        </div>
        <div class="title">
          <h3>Mall Stand</h3>
        </div>
      </a>
    </div>
    <div class="body">
      <ul>
        <li class="home active"><a href="/">Home</a></li>
        <li class="blog dropdown"><a href="#">our services</a>
          <span class="selector"></span>
          <ul>
            <li><a href="#">Latest</a></li>
            <li><a href="#">Popular</a></li>
          </ul>
          <li class="dropdown"><a href="#">Categories</a>
              <span class="selector"></span>
              <ul>
                <li class="dropdown"><a href="#">Shops</a>
                  <span class="selector"></span>
                  <ul>
                    <li><a href="#">Kids</a></li>
                    <li><a href="#">Women</a></li>
                    <li><a href="#">Men</a></li>
                  </ul>
                </li>
                <li><a href="#">coffee shops</a></li>
                <li><a href="#">Restaurants</a></li>

                <li class="dropdown"><a href="#">Others</a>
                  <span class="selector"></span>
                  <ul>
                    <li><a href="#">Kids park</a></li>
                    <li><a href="#">Baby sitting</a></li>
                  </ul>
                </li>
            </li>
          </ul>
        </li>
        <li class="page"><a href="#">Contacts</a></li>
      @if (Session::has('user'))

        <li class="more dropdown"><a href="#"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
          <span class="selector"></span>
          <ul>
            <li><i class="fa fa-user-circle-o" aria-hidden="true"></i> <a href="#">{{Session::get('user')['fname']}}'s profile</a></li>
            <li><i class="fa fa-shopping-bag" aria-hidden="true"></i><a href="#">Card</a></li>
            <li><i class="fa fa-heart-o" aria-hidden="true"></i><a href="#">Likes</a></li>
            <li><i class="fa fa-bookmark-o" aria-hidden="true"></i><a href="#">Saved</a></li>
            -
            <li><a href="logout">LogOut</a></li>
            </ul>
            </li>
      </ul>
        
        @else
        <li class="more dropdown"><a href="#"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
          <span class="selector"></span>
          <ul>
          <li><a href="login">LogIN</a></li>
            <li><a href="register">Register</a></li>
            </ul>
            </li>
      </ul>
        
        @endif
          
          
       
    </div>
    </nav>
    <style>
    /* General */
  @import 'https://fonts.googleapis.com/css?family=Comfortaa:400,700';
  html, body { /* height: 100%; */ }
  body { background: #f5f5f5; position: relative; }

/* Navbar */
  .better-nav { word-wrap: break-word; background: #fff; height: 100px; margin-bottom: 30px; } /* Set the height of the navbar */
  .better-nav a { color: #000; opacity: 0.6; }
  .better-nav a:hover,
  .better-nav a:focus { opacity: 1; }
  .better-nav .container { height: 100%; }
  .container .better-nav .container { max-width: 100%; }
  /* Fixed */
    .better-nav.fixed-top { position: fixed; top: 0; left: 0; right: 0; z-index: 90; }
    .better-nav.fixed-bottom { position: fixed; bottom: 0; left: 0; right: 0; z-index: 90; }
  /* Head */
    .better-nav .head { float: left; height: 100%; }
    .better-nav .head .brand { display: block; opacity: 1; padding: 15px 0; height: 100%; text-decoration: none; }
    .better-nav .head .brand .logo { float: left; margin-right: 15px; height: 100%; }
    .better-nav .head .brand .logo .image { height: 100%; width: auto; width: auto; color: #f2e8cf;
  justify-self: start;
  margin-left: 20px;
  cursor: pointer;
  text-decoration: none;
  font-size: 2rem;
  display: flex;
  align-items: center; }
    .better-nav .head .brand .title { float: left; display: table; height: 100%; }
    .better-nav .head .brand .title h3 { opacity: 0.7; display: table-cell; vertical-align: middle; font-size: 24px; font-weight: bold; font-family: 'Comfortaa', cursive; }
    .better-nav .head .brand .title h3:hover,
    .better-nav .head .brand .title h3:focus { opacity: 1; }
   /* Body */
    .better-nav .body { float: right; height: 100%; }
    .better-nav .body li:hover,
    .better-nav .body li:focus { background: #ffe082; }
    .better-nav .body li:hover > a,
    .better-nav .body li:focus > a { opacity: 1; }
    .better-nav .body ul { list-style: none; margin: 0; padding: 0; height: 100%; }
    .better-nav .body ul li.active { background: #ffe082; }
    .better-nav .body > ul > li { display: table; float: left; height: 100%; }
    .better-nav .body > ul > li > a { display: table-cell; vertical-align: middle; text-decoration: none; padding: 0 15px; }
    /* Dropdown */
      .better-nav .body ul li.dropdown { position: relative; }
      .better-nav .body ul li.dropdown > a::after { content: "\f0d7"; font: normal normal normal 14px/1 FontAwesome; margin-left: 5px; text-decoration: none; opacity: 0.2; }
      .better-nav .body ul li.dropdown:hover a:after { opacity: 1; }
      .better-nav .body ul li.dropdown:hover > ul { transform: scale(1); max-height: 500px; }
      .better-nav .body ul li.dropdown ul { min-width: 160px; max-width: 240px; transform: scale(0); transition: all 300ms ease; background: #fff; max-height: 0; position: absolute; top: 100%; right: 0; z-index: 10; height: initial;  }
      .better-nav .body ul li.dropdown ul li { height: initial; }
      .better-nav .body ul li.dropdown ul li a { display: block; padding: 15px; text-decoration: none; }
      .better-nav .body ul li.dropdown ul .dropdown ul { right: 100%; top: 0; }
      /* Fixed Bottom */
        .better-nav.fixed-bottom .body ul li.dropdown ul { bottom: 100%; top: initial; }
        .better-nav.fixed-bottom .body ul li.dropdown ul .dropdown ul { bottom: 0; top: initial; }
    /* Search */
      .better-nav .body .more a::after { display: none; }
      .better-nav .body .search { padding: 15px; }
      .better-nav .body .search form { position: relative; min-width: 160px; width: 100%; }
      .better-nav .body .search form input { width: 100%; height: 40px; padding: 10px 50px 10px 10px; }
      .better-nav .body .search form button { width: 40px; height: 40px; padding: 0; position: absolute; right: 0; top: 0; }
/* Toggle */
  .better-nav .toggle { display: none; float: right; height: 100%; }
  .better-nav .toggle a { display: table; height: 100%; text-decoration: none; }
  .better-nav .toggle a i { display: table-cell; vertical-align: middle; padding: 0 15px; font-size: 24px; }

/* Navbar Slide */
  #navbar-slide { position: fixed; top: 0; bottom: 0; left: -80%; width: 80%; z-index: 94; background: #fff; overflow: auto; padding: 0; margin: 0; }

/* Navbar Pills */
  .container .better-nav-pills .container { max-width: 100%; }
  .better-nav-pills { padding: 0 15px; background: #fff; margin-bottom: 30px; }
  .better-nav-pills a { color: #000; opacity: 0.6; }
  .better-nav-pills a:hover,
  .better-nav-pills a:focus { opacity: 1.0; }
  .better-nav-pills .head { height: 100%; }
  .better-nav-pills .head .brand { display: block; opacity: 1; padding: 15px 0; height: 100%; text-decoration: none; }
  .better-nav-pills .head .brand .logo { margin: 30px; text-align: center; height: 100%; }
  .better-nav-pills .head .brand .logo .image { height: 100%; width: auto; width: auto; }
  .better-nav-pills .head .brand .title { margin: 30px 0; display: table; text-align: center; width: 100%; height: 100%; }
  .better-nav-pills .head .brand .title h3 { opacity: 0.7; display: table-cell; vertical-align: middle; font-size: 24px; font-weight: bold; font-family: 'Comfortaa', cursive; }
  .better-nav-pills .head .brand .title h3:hover,
  .better-nav-pills .head .brand .title h3:focus { opacity: 1; }
  .better-nav-pills .body { margin: 0 0 30px; }
  .better-nav-pills .body a { opacity: 0.6; background-color: #e3e3e3; }
  .better-nav-pills .body a:hover,
  .better-nav-pills .body a:focus { opacity: 1.0; }
  .better-nav-pills .body ul { transition: all 300ms ease; list-style: none; margin: 0; padding: 0; }
  .better-nav-pills .body ul li { margin: 1px 0 1px; }
  .better-nav-pills .body ul li a { position: relative; display: block; padding: 15px; text-decoration: none; }
  .better-nav-pills .body ul li.active > a::before { content: "\f0da"; font: normal normal normal 14px/1 FontAwesome; position: absolute; left: 5px; top: 50%; margin-top: -7px; opacity: 0.5; }
    /* Dropdowns */
      .better-nav-pills .body ul li.dropdown ul { max-height: 0; overflow: hidden; margin: 0 0 0 30px; }
      .better-nav-pills .body ul li.dropdown.opened > ul { max-height: 1000px; margin: 0 0 -1px 30px; }
      .better-nav-pills .body ul li.dropdown ul li a { position: relative; }
      .better-nav-pills .body ul li.dropdown > a { margin-right: 51px; }
      .better-nav-pills .body ul li.dropdown > .selector { position: absolute; cursor: pointer; z-index: 30; top: 0; right: 0; width: 50px; height: 50px; background: rgba(0,0,0,0.1); text-align: center; opacity: 0.6; }
      .better-nav-pills .body ul li.dropdown > .selector:hover { opacity: 1; }
      .better-nav-pills .body ul li.dropdown > .selector::before { transition: all 300ms ease; content: "\f0d7"; font: normal normal normal 24px/1 FontAwesome; margin-top: 12px; display: block; opacity: 0.5; }
      .better-nav-pills .body ul li.dropdown.opened > .selector::before { content: "\f00d"; }
    /* Search */
      .better-nav-pills .body .search { padding: 15px; }
      .better-nav-pills .body .search form { position: relative; min-width: 160px; width: 100%; }
      .better-nav-pills .body .search form input { width: 100%; height: 40px; padding: 10px 50px 10px 10px; }
      .better-nav-pills .body .search form button { width: 40px; height: 40px; padding: 0; position: absolute; right: 0; top: 0; }

/* Underlay */
  .better-nav-mobile-underlay { transition: all 300ms ease; position: absolute; left: 100%; right: 0; top: 0; bottom: 0; background: rgba(0,0,0,0.8); z-index: 92; }
  .better-nav-mobile-underlay.active { left: 0; }

/* Media Queries */
  @media (min-width: 768px) {
  }
  @media (min-width: 992px) {
  }
  @media (min-width: 1200px) {
  }
  @media (max-width: 1199px) {
  }
  @media (max-width: 991px) {
  }
  @media (max-width: 767px) {
    .better-nav .body { display: none; }
    .better-nav .toggle { display: block; }
  }

    </style>