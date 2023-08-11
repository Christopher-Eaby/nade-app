<html>
    <head>
        @include('includes.head.index')
    </head>
    <body>
        <header>
            @include('includes.header.index')
        </header>

        <div class="container mt-4">
            @yield('content')
        </div>

        <footer>
            @include('includes.footer.index')
        </footer>
    </body>
</html>