<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'My App')</title>
</head>
<body>
    <header>
        @include('components.header')
    </header>

    <div>
        <main>
            @yield('content')
        </main>
    </div>

    <footer>
        @include('components.footer')
    </footer>
</body>
</html>