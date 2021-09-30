<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/plugins/datatables/datatables.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/feathericon.min.css')}}">
    <link rel="shortcut icon" href="insert here">
	<link rel="stylesheet" href="{{asset('assets/plugins/morris/morris.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}"> </head>
    <link rel="stylesheet" href="{{ URL::to('assets/css/toastr.min.css') }}">
    <script src="{{ URL::to('assets/js/toastr_jquery.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/toastr.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">

</head>
<body class="">
    <div class="main-wrapper">
    @include('layouts.backend.header')
    @include('layouts.backend.sidebar')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">

                <div class="row" id="upload">
                   <div class="col-md-12" id="app">
                    @yield('content')
                   </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    {{-- <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script> --}}
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/datatables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('assets/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
</body>
</html>
