<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Aerovale</title>

    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<div id="web">

    @include('layouts/web/navbar')

    <section class="container">
        @yield('content')
    </section>

    <footer class="footer">
        @include('layouts/web/footer')
    </footer>
</div>

<script src="{{ elixir('js/app.js') }}"></script>
</body>
</html>
