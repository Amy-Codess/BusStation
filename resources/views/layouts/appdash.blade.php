<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css" rel="stylesheet">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body style="background-color: #DDDDDD">
    <div id="app">
        <!-- Header -->
        <header>
            <!-- Navbar -->
            <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
            <!-- Container wrapper -->
                <div class="container-fluid">
                     <!-- Toggle button -->
                    <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                      aria-expanded="false"
                     aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>

                    <!-- Collapsible wrapper -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Navbar brand -->
                        <a class="navbar-brand mt-2 mt-lg-0" href="#">
                             <h1>محطة</h1>
                        </a>
                        <!-- Left links -->
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                             <li class="nav-item">
                                 <a class="nav-link" href="#">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Team</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Projects</a>
                            </li>
                        </ul>
                        <!-- Left links -->
                    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="d-flex align-items-center">
      <!-- Icon -->
      <a class="link-secondary me-3" href="#">
        <i class="fas fa-shopping-cart"></i>
      </a>

      <!-- Notifications -->
      <div class="dropdown">
        <a
          data-mdb-dropdown-init
          class="link-secondary me-3 dropdown-toggle hidden-arrow"
          href="#"
          id="navbarDropdownMenuLink"
          role="button"
          aria-expanded="false"
        >
          <i class="fas fa-bell"></i>
          <span class="badge rounded-pill badge-notification bg-danger">1</span>
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuLink"
        >
          <li>
            <a class="dropdown-item" href="#">Some news</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Another news</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Something else here</a>
          </li>
        </ul>
      </div>
      <!-- Avatar -->
      <div class="dropdown">
        <a
          data-mdb-dropdown-init
          class="dropdown-toggle d-flex align-items-center hidden-arrow"
          href="#"
          id="navbarDropdownMenuAvatar"
          role="button"
          aria-expanded="false"
        >
          <img
            src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
            class="rounded-circle"
            height="25"
            alt="Black and White Portrait of a Man"
            loading="lazy"
          />
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuAvatar"
        >
          <li>
            <a class="dropdown-item" href="#">My profile</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Settings</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Logout</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
        </header>

        <!-- Main Content -->
        <main>
            <div class="container-fluid">
                <div class="row">
                    <!-- Main Content Area -->
                    <div class="col" style="margin-right: 200px;"> <!-- Adjust margin for content -->
                        @yield('content')
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="position-fixed top-0 end-0 vh-100 bg-dark text-white text-end p-3" style="width: 200px;">
                <a href="#" class="d-flex align-items-center mb-3 text-decoration-none text-white">
                    <span class="fs-1">محطة</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto text-end">
                    <li class="nav-item">
                        <a href="{{route('CityTrans')}}" class="nav-link text-white active" aria-current="page">
                            خدمة النقل بين المدن
                            <i class="bi bi-map-fill ms-2"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">
                            خدمة النقل الجامعي
                            <i class="bi bi-mortarboard-fill ms-2"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">
                           خدمة نقل المعلمين 
                           <i class="bi bi-buildings-fill ms-2"></i>
                            
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">
                            خدمة النقل المدرسي
                            <i class="bi bi-backpack3-fill ms-2"></i>
                            
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">
                            الحجوزات
                            <i class="bi bi-calendar-week ms-2"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">
                            الاشتراكات
                            <i class="bi bi-bookmark-plus ms-2"></i>
                            
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">
                            تعيين السائقين
                            <i class="bi bi-car-front-fill ms-2"></i>                            
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">
                            إحصاءات
                            <i class="bi bi-activity ms-2"></i>
                            
                        </a>
                    </li>
                </ul>
            </div>
        </main>

        <!-- Footer -->
        <footer>
            <!-- Add your footer content here -->
        </footer>
    </div>
</body>




</html>