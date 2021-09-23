<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Amcham.uz</title>
    @stack('script')
    <style>
        .list-unstyled li:hover a{
            color: #ffffff !important
        }
        .navbar, #sidebarCollapse{
            background-color: #113372 !important;
        }
        #sidebarCollapse span{
            background: #ff5e00 !important;
        }
        .nav-item a{
            color: #ff5e00 !important;
            font-weight: bold
        }
        #content{
            padding: 0 !important;
        }
        .sidebar-header{
            background: #113372 !important;
        }
        /* .sidebar-header img{
            background: white !important;
            border-radius: 50%;
            border:1px solid #ff5e00 !important;
        } */
        .list-unstyled > .active{
            background-color: #ff5e00 !important;
        }
        .color{
            text-transform: uppercase;
            font-weight: bold;
            padding-left: 25px !important;
        }
    </style>
</head>

<body>
<div id="app"></div>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar" style="background:#113372">
            <div class="sidebar-header">
                <h3 class="text-center"><img src="{{asset('frontend/img/amcham_logo.png')}}" ></h3>
            </div>
            <ul class="list-unstyled components">
                <p class="font-weight-bold text-center" style="color:#ff5e00;font-size:18px;text-transform:uppercase"><a href="">Amcham Uzbekistan</a></p>
                <li class="">
                    <a href="" class="color">Bosh Sahifa</a>
                </li>
                <li class="">
                    <a href="" class="color">Post</a>
                </li>

            </ul>

            <ul class="list-unstyled CTAs">
                <li >
                    <a href="/" class="" style=" background-color:#ff5e00; color: #fff !important;">Back to home</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a id="questionDropdown" href="#" class="nav-link bg-transparent" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer">
                                    <i class="far fa-question-circle"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="questionDropdown">
                                    <div class="container" style="max-width: 20em">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem corporis enim et eum, laborum maiores modi. Aliquam, cupiditate delectus doloremque in ipsa natus, perferendis quia sed tempora velit vero voluptate?
                                    </div>
                                </div>
                            </li>

                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="/login">
                                    Tizimga kirish
                                    <i class="fas fa-sign-in-alt"></i>
                                </a>
                            </li>
                            @else

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link bg-transparent" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer">
                                    {{ Auth::user()->username . ' ' }}

                                    <i class="ml-2 fas fa-sign-out-alt"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right text-center" aria-labelledby="navbarDropdown">
                                    <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}"  method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->

    <script type="text/javascript">
        $(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>

</body>

</html>
