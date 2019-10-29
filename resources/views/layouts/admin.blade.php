
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard 2</title>

    <!-- Fontfaces CSS-->
    <link href="{{  asset('assets/template/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/template/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/template/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/template/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('assets/template/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('assets/template/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/template/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/template/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/template/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/template/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/template/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/template/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/template/vendor/vector-map/jqvmap.min.css')}}" rel="stylesheet" media="all">
   <link rel="stylesheet" type="text/css" href="{{asset('asset/DataTables/datatables.min.css')}}"/>

    <!-- Main CSS-->
    <link href="{{  asset('assets/template/css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <h1>

                    <small><b>My Library</b></small>

                </h1>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-120">
                        <img src="{{  asset('assets/template/images/icon/adminbro.jpg')}}" alt="Admin" />
                    </div>
                    <h4 class="name">Admin</h4>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                       @guest
                                       @else
                                       @role('admin')
                                <li>
                                    <a href="{{ url('admin/penerbit')}}">
                                        <i class="fas fa-tachometer-alt"></i>Penerbit</a>
                                </li>
                                <li>
                                    <a href="{{ url ('admin/petugas')}}">
                                        <i class="fas fa-tachometer-alt"></i>Petugas</a>
                                </li>
                                <li>
                                    <a href="{{ url ('admin/kategori')}}">
                                        <i class="fas fa-tachometer-alt"></i>Kategori</a>
                                </li>
                                <li>
                                     <a href="{{ url ('admin/buku')}}">
                                        <i class="fas fa-tachometer-alt"></i>Buku</a>
                                </li>
                                 <li>
                                     <a href="{{ url ('admin/peminjam')}}">
                                        <i class="fas fa-tachometer-alt"></i>Peminjam</a>
                                </li>
                                 <li>
                                     <a href="{{ url ('admin/peminjaman')}}">
                                        <i class="fas fa-tachometer-alt"></i>Peminjaman</a>
                                </li>
                                 <li>
                                     <a href="{{ url ('admin/detail')}}">
                                        <i class="fas fa-tachometer-alt"></i>Detail Buku</a>
                                </li>
                                  <li>
                                     <a href="{{ url ('admin/kartu')}}">
                                        <i class="fas fa-tachometer-alt"></i>Kartu Pendaftaran</a>
                                </li>
                                @endrole
                                @endguest

                                @guest
                                       @else
                                       @role('member')
                                 <li>
                                     <a href="{{ url ('/peminjam')}}">
                                        <i class="fas fa-tachometer-alt"></i>Peminjam</a>
                                </li>
                                 <li>
                                     <a href="{{ url ('/kartul')}}">
                                        <i class="fas fa-tachometer-alt"></i>Kartu Pendaftaran</a>
                                </li>
                                 <li>
                                     <a href="{{ url ('/buku')}}">
                                        <i class="fas fa-tachometer-alt"></i>Buku</a>
                                </li>
                                <li>
                                     <a href="{{ url ('/detail')}}">
                                        <i class="fas fa-tachometer-alt"></i>Detail Buku</a>
                                </li>
                                @endguest
                                @endrole
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="#">
                                    <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                                </a>
                            </div>
                            <div class="header-button2">
                                <div class="header-button-item js-item-menu">
                                    <i class="zmdi zmdi-search"></i>
                                    <div class="search-dropdown js-dropdown">
                                        <form action="">
                                            <input class="au-input au-input--full au-input--h65" type="text" placeholder="Search for datas &amp; reports..." />
                                            <span class="search-dropdown__icon">
                                                <i class="zmdi zmdi-search"></i>
                                            </span>
                                        </form>
                                    </div>
                                </div>
                                <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                                <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                <i class="fa fa-sign-out" style="font-size:36px;color:red\"></i>Logout</a>
                                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                <div class="logo">
                    <a href="#">
                        <img src="images/icon/logo-white.png" alt="Cool Admin" />
                    </a>
                </div>
                <div class="menu-sidebar2__content js-scrollbar2">
                    <div class="account2">
                        <div class="image img-cir img-120">
                            <img src="images/icon/adminbro.jpg" alt="John Doe" />
                        </div>
                    </div>
                </div>
            </aside>
            <!-- END HEADER DESKTOP-->

            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <span class="au-breadcrumb-span">You are here:</span>
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="#">Home</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item"   href=" "></a>>Dashboard</li>
                                        </ul>
                                    </div>
                                    {{-- <button class="au-btn au-btn-icon au-btn--green">
                                        <i class="zmdi zmdi-plus"></i>add item</button> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

            <!-- STATISTIC-->
           @yield('content')
            <!-- END STATISTIC-->

            <section>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-8">
                                <!-- RECENT REPORT 2-->
                              {{-- ini tadinya dihapus --}}
                                <!-- END RECENT REPORT 2             -->
                            </div>
                            <div class="col-xl-4">
                                <!-- TASK PROGRESS-->
                               {{-- ini task progres --}}
                                <!-- END TASK PROGRESS-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-6">
                                <!-- USER DATA-->
                                {{-- ini user data --}}
                                <!-- END USER DATA-->
                            </div>
                            <div class="col-xl-6">
                                <!-- MAP DATA-->
                               {{-- map data --}}
                                <!-- END MAP DATA-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Black Book Store</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{  asset('assets/template/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{  asset('assets/template/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{  asset('assets/template/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{  asset('assets/template/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{  asset('assets/template/vendor/wow/wow.min.js')}}"></script>
    <script src="{{  asset('assets/template/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{  asset('assets/template/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <script src="{{  asset('assets/template/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{  asset('assets/template/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{  asset('assets/template/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{  asset('assets/template/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{  asset('assets/template/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{  asset('assets/template/vendor/select2/select2.min.js')}}">
    </script>
    <script src="{{  asset('assets/template/vendor/vector-map/jquery.vmap.js')}}"></script>
    <script src="{{  asset('assets/template/vendor/vector-map/jquery.vmap.min.js')}}"></script>
    <script src="{{  asset('assets/template/vendor/vector-map/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{  asset('assets/template/vendor/vector-map/jquery.vmap.world.js')}}"></script>
    <script src="{{  asset('assetss/ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/DataTables/datatables.min.js')}}"></script>
    <script>
    $(document).ready(function() {
    $('#datatable').DataTable();
});
</script>

    <!-- Main JS-->
    <script src="{{  asset('assets/template/js/main.js')}}"></script>


</body>

</html>
<!-- end document-->
