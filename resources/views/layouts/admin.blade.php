<html>
    <head>
        @include('includes.admin.head.index')
    </head>
    <body>
        <header>
            @include('includes.admin.header.index')
        </header>

        <div class="container mt-4">
            @yield('content')
        </div>

        <footer>
            @include('includes.admin.footer.index')
        </footer>
    </body>
</html>