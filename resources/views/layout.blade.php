
<head>
    <title>@yield('title')</title>
</head>
<body>
    <nav>
    <table class="table">
        @include('partials.navbar')
        @yield('content')
    </table>
    </nav>


