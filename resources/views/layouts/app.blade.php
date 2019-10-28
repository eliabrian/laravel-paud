<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--Font Awsome-->
    <link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/all.min.css')}}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('vendor/css/sb-admin-2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
</head>

<body class="bg-gradient-primary">
    <div id="app">
        @yield('content')
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    {{-- <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script> --}}

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <script>
        $(document).ready( function () {
            $('#dataTable').DataTable();
        } );
    </script>

    <!-- Core plugin JavaScript-->
    <!-- Custom scripts for all pages-->
    <script src="{{asset('vendor/js/sb-admin-2.min.js')}}"></script>
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}" defer></script>

    <!--Data Tables JavaScript-->

</body>

</html>