<!DOCTYPE html>
<html lang="en">
    <head>
        @include('canvas::shared.meta')
        @yield('title')
        <meta name="description" content="{{ $meta_description }}">
        @include('canvas::frontend.partials.css')
        @include('partials.css')
        @include('canvas::frontend.partials.user-generated-css')
    </head>
    <body>
        @include('partials.swblogheader')
        @include('canvas::frontend.partials.header')
        @yield('content')
        @yield('unique-js')
        @include('canvas::frontend.partials.user-generated-js')
        @include('canvas::frontend.partials.footer')
    </body>
</html>
