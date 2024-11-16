<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
	<div class="container-fluid">
		<a class="navbar-brand" href="{{ url('/') }}"> Roles y Permisos </a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
			<span class="navbar-toggler-icon"></span>
      	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<!-- Lado Izquierdo del Navbar -->
		<ul class="navbar-nav me-auto">
			@can('user-list')
				<li><a class="nav-link" href="{{ route('users.index') }}">Usuarios</a></li>
			@endcan
			@can('role-list')
				<li><a class="nav-link" href="{{ route('roles.index') }}">Roles</a></li>
			@endcan
			@can('product-list')
				<li><a class="nav-link" href="{{ route('products.index') }}">Productos</a></li>
			@endcan
        </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ms-auto">
              <!-- Authentication Links -->
              @guest
                  @if (Route::has('login'))
                      <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                  @endif

                  @if (Route::has('register'))
                      <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                  @endif
              @else
                  
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }}
                      </a>

                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
          </ul>
      </div>
  </div>
</nav>


{{-- <nav class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto px-0">
            <div id="sidebar" class="collapse collapse-horizontal show border-end">
                <div id="sidebar-nav" class="list-group border-0 rounded-0 text-sm-start min-vh-100">
                    <a href="#" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar"> <span>Usuarios</span> </a>
                    <a href="#" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar"> <span>Roles</span></a>
                    <a href="#" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar"> <span>Productos</span></a>
                    <a href="#" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar"> <span>Item</span></a>
                    <a href="#" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar"> <span>Item</span></a>
                    <a href="#" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar"> <span>Item</span></a>
                    <a href="#" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar"> <span>Item</span></a>
                    <a href="#" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar"> <span>Item</span></a>
                    <a href="#" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar"> <span>Item</span></a>
                </div>
            </div>
        </div>

        <main class="col ps-md-2 pt-2">
            <a href="#" data-bs-target="#sidebar" data-bs-toggle="collapse" class="border rounded-3 p-1 text-decoration-none"><i class="bi bi-list bi-lg py-2 p-1"></i> Menu</a>
            <div class="page-header pt-3">
                <h2>Bootstrap 5 Sidebar Menu - Simple</h2>
            </div>
            <p class="lead">A offcanvas "push" vertical nav menu example.</p>
            <hr>
            <div class="row">
                <div class="col-12">
                    <p>This is a simple collapsing sidebar menu for Bootstrap 5. Unlike the Offcanvas component that overlays the content, this sidebar will "push" the content. Sriracha biodiesel taxidermy organic post-ironic, Intelligentsia salvia mustache 90's code editing brunch. Butcher polaroid VHS art party, hashtag Brooklyn deep v PBR narwhal sustainable mixtape swag wolf squid tote bag. Tote bag cronut semiotics, raw denim deep v taxidermy messenger bag. Tofu YOLO Etsy, direct trade ethical Odd Future jean shorts paleo. Forage Shoreditch tousled aesthetic irony, street art organic Bushwick artisan cliche semiotics ugh synth chillwave meditation. Shabby chic lomo plaid vinyl chambray Vice. Vice sustainable cardigan, Williamsburg master cleanse hella DIY 90's blog.</p>
                    <p>Ethical Kickstarter PBR asymmetrical lo-fi. Dreamcatcher street art Carles, stumptown gluten-free Kickstarter artisan Wes Anderson wolf pug. Godard sustainable you probably haven't heard of them, vegan farm-to-table Williamsburg slow-carb readymade disrupt deep v. Meggings seitan Wes Anderson semiotics, cliche American Apparel whatever. Helvetica cray plaid, vegan brunch Banksy leggings +1 direct trade. Wayfarers codeply PBR selfies. Banh mi McSweeney's Shoreditch selfies, forage fingerstache food truck occupy YOLO Pitchfork fixie iPhone fanny pack art party Portland.</p>
                </div>
            </div>
        </main>
    </div>
</nav> --}}

{{-- <!--Main Navigation-->
<header>
    <!-- Sidebar -->
    <nav
         id="sidebarMenu"
         class="collapse d-lg-block sidebar collapse bg-white"
         >
      <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
          <a
             href="#"
             class="list-group-item list-group-item-action py-2 ripple"
             aria-current="true"
             >
            <i class="fas fa-tachometer-alt fa-fw me-3"></i
              ><span>Main dashboard</span>
          </a>
          <a
             href="#"
             class="list-group-item list-group-item-action py-2 ripple active"
             >
            <i class="fas fa-chart-area fa-fw me-3"></i
              ><span>Webiste traffic</span>
          </a>
          <a
             href="#"
             class="list-group-item list-group-item-action py-2 ripple"
             ><i class="fas fa-lock fa-fw me-3"></i><span>Password</span></a
            >
          <a
             href="#"
             class="list-group-item list-group-item-action py-2 ripple"
             ><i class="fas fa-chart-line fa-fw me-3"></i
            ><span>Analytics</span></a
            >
          <a
             href="#"
             class="list-group-item list-group-item-action py-2 ripple"
             >
            <i class="fas fa-chart-pie fa-fw me-3"></i><span>SEO</span>
          </a>
          <a
             href="#"
             class="list-group-item list-group-item-action py-2 ripple"
             ><i class="fas fa-chart-bar fa-fw me-3"></i><span>Orders</span></a
            >
          <a
             href="#"
             class="list-group-item list-group-item-action py-2 ripple"
             ><i class="fas fa-globe fa-fw me-3"></i
            ><span>International</span></a
            >
          <a
             href="#"
             class="list-group-item list-group-item-action py-2 ripple"
             ><i class="fas fa-building fa-fw me-3"></i
            ><span>Partners</span></a
            >
          <a
             href="#"
             class="list-group-item list-group-item-action py-2 ripple"
             ><i class="fas fa-calendar fa-fw me-3"></i
            ><span>Calendar</span></a
            >
          <a
             href="#"
             class="list-group-item list-group-item-action py-2 ripple"
             ><i class="fas fa-users fa-fw me-3"></i><span>Users</span></a
            >
          <a
             href="#"
             class="list-group-item list-group-item-action py-2 ripple"
             ><i class="fas fa-money-bill fa-fw me-3"></i><span>Sales</span></a
            >
        </div>
      </div>
    </nav>
    <!-- Sidebar -->
  
    <!-- Navbar -->
    <nav
         id="main-navbar"
         class="navbar navbar-expand-lg navbar-light bg-white fixed-top"
         >
      <!-- Container wrapper -->
      <div class="container-fluid">
        <!-- Toggle button -->
        <button
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#sidebarMenu"
                aria-controls="sidebarMenu"
                aria-expanded="false"
                aria-label="Toggle navigation"
                >
          <i class="fas fa-bars"></i>
        </button>
  
        <!-- Brand -->
        <a class="navbar-brand" href="#">
          <img
               src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png"
               height="25"
               alt=""
               loading="lazy"
               />
        </a>
        <!-- Search form -->
        <form class="d-none d-md-flex input-group w-auto my-auto">
          <input
                 autocomplete="off"
                 type="search"
                 class="form-control rounded"
                 placeholder='Search (ctrl + "/" to focus)'
                 style="min-width: 225px"
                 />
          <span class="input-group-text border-0"
                ><i class="fas fa-search"></i
            ></span>
        </form>
  
        <!-- Right links -->
        <ul class="navbar-nav ms-auto d-flex flex-row">
          <!-- Notification dropdown -->
          <li class="nav-item dropdown">
            <a
               class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow"
               href="#"
               id="navbarDropdownMenuLink"
               role="button"
               data-mdb-toggle="dropdown"
               aria-expanded="false"
               >
              <i class="fas fa-bell"></i>
              <span class="badge rounded-pill badge-notification bg-danger"
                    >1</span
                >
            </a>
            <ul
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="navbarDropdownMenuLink"
                >
              <li><a class="dropdown-item" href="#">Some news</a></li>
              <li><a class="dropdown-item" href="#">Another news</a></li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
            </ul>
          </li>
  
          <!-- Icon -->
          <li class="nav-item">
            <a class="nav-link me-3 me-lg-0" href="#">
              <i class="fas fa-fill-drip"></i>
            </a>
          </li>
          <!-- Icon -->
          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="#">
              <i class="fab fa-github"></i>
            </a>
          </li>
  
          <!-- Icon dropdown -->
          <li class="nav-item dropdown">
            <a
               class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow"
               href="#"
               id="navbarDropdown"
               role="button"
               data-mdb-toggle="dropdown"
               aria-expanded="false"
               >
              <i class="united kingdom flag m-0"></i>
            </a>
            <ul
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="navbarDropdown"
                >
              <li>
                <a class="dropdown-item" href="#"
                   ><i class="united kingdom flag"></i>English
                  <i class="fa fa-check text-success ms-2"></i
                    ></a>
              </li>
              <li><hr class="dropdown-divider" /></li>
              <li>
                <a class="dropdown-item" href="#"
                   ><i class="poland flag"></i>Polski</a
                  >
              </li>
              <li>
                <a class="dropdown-item" href="#"
                   ><i class="china flag"></i>中文</a
                  >
              </li>
              <li>
                <a class="dropdown-item" href="#"
                   ><i class="japan flag"></i>日本語</a
                  >
              </li>
              <li>
                <a class="dropdown-item" href="#"
                   ><i class="germany flag"></i>Deutsch</a
                  >
              </li>
              <li>
                <a class="dropdown-item" href="#"
                   ><i class="france flag"></i>Français</a
                  >
              </li>
              <li>
                <a class="dropdown-item" href="#"
                   ><i class="spain flag"></i>Español</a
                  >
              </li>
              <li>
                <a class="dropdown-item" href="#"
                   ><i class="russia flag"></i>Русский</a
                  >
              </li>
              <li>
                <a class="dropdown-item" href="#"
                   ><i class="portugal flag"></i>Português</a
                  >
              </li>
            </ul>
          </li>
  
          <!-- Avatar -->
          <li class="nav-item dropdown">
            <a
               class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center"
               href="#"
               id="navbarDropdownMenuLink"
               role="button"
               data-mdb-toggle="dropdown"
               aria-expanded="false"
               >
              <img
                   src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg"
                   class="rounded-circle"
                   height="22"
                   alt=""
                   loading="lazy"
                   />
            </a>
            <ul
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="navbarDropdownMenuLink"
                >
              <li><a class="dropdown-item" href="#">My profile</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
  </header>
  <!--Main Navigation-->
  
  <!--Main layout-->
  <main style="margin-top: 58px">
    <div class="container pt-4">
  
    </div>
  </main>
  <!--Main layout--> --}}