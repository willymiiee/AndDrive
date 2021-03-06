<html>
    <head>
        <title>@yield('title')</title>
        @include('stack.css')
        @include('stack.meta')
        @stack('common-meta')
        @stack('global-styles')
        @stack('custom-css')
    </head>
    <body>
        @include('component.nav')
        @section('sidebar')
        @show

        <div class="container">
            @include('component.alert')
            @yield('content')
        </div>
    </body>
    @include('stack.javascript')
    @stack('global-scripts')
    @stack('custom-js')
</html>