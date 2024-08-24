<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('Haider Ali ') }}</title>
    @include('layouts.inc.styles')
    @yield('style')
</head>

<body class="bg-[#0A1429]">
    <div class="container mx-auto">
        <!--  Header Started Here -->
        @include('layouts.inc.header')

        <main>
            @yield('content')
        </main>
        <!-- Main Header End Here -->
        <!-- Footer Start Here -->
        @include('layouts.inc.footer')
        <!-- Footer End Here -->

    </div>

    {{-- scripts here --}}

    @include('layouts.inc.scripts')

</body>

</html>
