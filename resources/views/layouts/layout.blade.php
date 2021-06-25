
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Violet Rooms</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="" />

    <!--<link rel="stylesheet" href="css/bootstrap/bootstrap-reboot.min.css" type="text/css" media="all" />-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('css/FontAwesome/fontawesome-all.min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('css/slick-1.8.1.min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" type="text/css" media="all" />

    <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/slick-1.8.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>

</head>
<body>
    <div class="page__fullimg-popup page__fullimg-popup--gallery">
    </div>
    <div class="container">
        <main>
            @include('layouts.left-menu')
            @include('layouts.top-menu')

            @yield('content')
        </main>>
    </div>
</body>
</html>
