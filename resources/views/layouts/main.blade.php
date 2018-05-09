<!doctype html>
<html class="no-js" lang="">

    <!-- Mirrored from demo.rextheme.com/edurex/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Mar 2018 18:09:03 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>MathSolutions</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        @include('templates.css')
    </head>
    <body>
        <!--[if lt IE 8]>
          <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
<!--        <div class="loading">
            <div class="wrapper">
                <div class="cssload-loader"></div>
            </div>
        </div>-->
        @include('includes.header')
        <main class="rex-main-content">
            @yield('content')
        </main>
        @include('includes.footer')
    </body>
    @include('templates.js')

</html>