<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dashboard - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <!-- CSS files -->
    <link href="{{ url('') }}/dist/css/tabler.min.css" rel="stylesheet" />
    <link href="{{ url('') }}/dist/css/tabler-flags.min.css" rel="stylesheet" />
    <link href="{{ url('') }}/dist/css/tabler-payments.min.css" rel="stylesheet" />
    <link href="{{ url('') }}/dist/css/tabler-vendors.min.css" rel="stylesheet" />
    <link href="{{ url('') }}/dist/css/demo.min.css" rel="stylesheet" />
    @livewireStyles
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body>
    <script src="{{ url('') }}/dist/js/demo-theme.min.js"></script>

    <div class="page">
        <!-- Sidebar -->
        <x-layouts.navigation />


        <div class="page-wrapper">

            {{ $slot }}

            <x-layouts.footer />
        </div>
    </div>
    <!-- Libs JS -->
    @isset($script)
        {{ $script }}
    @endisset
    {{-- <script src="{{ url('') }}/dist/libs/apexcharts./dist/apexcharts.min.js" defer></script>
    <script src="{{ url('') }}/dist/libs/jsvectormap./dist/js/jsvectormap.min.js" defer></script>
    <script src="{{ url('') }}/dist/libs/jsvectormap./dist/maps/world.js" defer></script>
    <script src="{{ url('') }}/dist/libs/jsvectormap./dist/maps/world-merc.js" defer></script> --}}
    <!-- Tabler Core -->
    <script src="{{ url('') }}/dist/js/tabler.min.js" defer></script>
    <script src="{{ url('') }}/dist/js/demo.min.js" defer></script>
    @livewireScripts
</body>

</html>
