<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('Haider Ali') }}</title>
    @include('layouts.inc.styles')
</head>

<body style="background: url('{{ asset('img/services/brcm.jpg') }}') no-repeat center center/cover;">
    <div class="container mx-auto">
        <!--  Header Started Here -->
        @include('layouts.inc.headerapp')

        <main>
            @yield('content')
        </main>
        <!-- Main Header End Here -->
        <!-- Footer Start Here -->
        @include('layouts.inc.footer')
        <!-- Footer End Here -->

    </div>
    @include('layouts.inc.scripts')
    @include('layouts.inc.admin.flashmessagefrontend')
</body>

</html>
