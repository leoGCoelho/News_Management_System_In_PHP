<!doctype html>
<html lang="en pt-br">
    <head>
        @include('layout._head')
    </head>

    <body>
        <!-- Barra de navegacao -->
        @include('layout._navBar')
        <!-- Corpo -->
        <div class="container">
            @yield('content')

            @include('layout._footer')
        </div>
        <!-- Optional JavaScript -->
        @include('layout._js')
        @yield('scrips')

    </body>

</html>
