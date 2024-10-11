<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta20
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sign in - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <!-- CSS files -->
    <link href="{{ url('') }}/dist/css/tabler.min.css" rel="stylesheet" />
    <link href="{{ url('') }}/dist/css/tabler-flags.min.css" rel="stylesheet" />
    <link href="{{ url('') }}/dist/css/tabler-payments.min.css" rel="stylesheet" />
    <link href="{{ url('') }}/dist/css/tabler-vendors.min.css" rel="stylesheet" />
    <link href="{{ url('') }}/dist/css/demo.min.css" rel="stylesheet" />
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

<body class=" d-flex flex-column">
    <script src="{{ url('') }}/dist/js/demo-theme.min.js"></script>
    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <a href="." class="navbar-brand navbar-brand-autodark">
                    <img src="{{ asset('static/logo.svg') }}" width="110" height="32" alt="Tabler"
                        class="navbar-brand-image">
                </a>
            </div>
            {{ $slot }}
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ url('') }}/dist/js/tabler.min.js" defer></script>
    <script src="{{ url('') }}/dist/js/demo.min.js" defer></script>
</body>

</html>
