<!DOCTYPE html>
<html lang="en">

<head>

    <title>Authentication Page</title>


    <link rel="stylesheet" href="/libs/bower/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/libs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="/libs/bower/animate.css/animate.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/core.css">
    <link rel="stylesheet" href="/assets/css/misc-pages.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
</head>

<body class="simple-page">
    <div id="back-to-home">
        <a href="/" class="btn btn-outline btn-default"><i class="fa fa-home animated zoomIn"></i></a>
    </div>
    <div class="simple-page-wrap">
        <div class="simple-page-logo animated swing">
            <span style="color: white"><i class="fa fa-gg"></i></span>
            <span class="text-white text-2xl font-bold">
                @if (Route::currentRouteName() === 'login')
                    Doctor - Login
                @elseif (Route::currentRouteName() === 'register')
                    Doctor - Register
                @else
                    Doctor - Auth
                @endif
        </div>
        @yield('content')
        <div class="simple-page-footer">
            @yield('footer')
        </div>
    </div>
</body>

</html>
