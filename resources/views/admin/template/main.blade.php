<DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title','Default') | Panel de Administración |</title>
        <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
    </head>

    <body>

    @include('admin.template.partials.nav')





    <section>

        @yield('content')

    </section>

    <script src="{{asset('plugins/jquery/js/jquery-3.2.1.js')}}"></script>

    <script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>


    </body>
    </html>