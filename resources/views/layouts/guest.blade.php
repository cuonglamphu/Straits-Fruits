<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700">
    <!-- Fonts Awsome -->
    <script src="https://kit.fontawesome.com/a2d5e3b1ee.js" crossorigin="anonymous"></script>
    <!-- Styles Development
        <script src="https://cdn.tailwindcss.com"></script> -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!--  refresh the page when it gets to the end of the session. -->
    <meta http-equiv="refresh" content="{{ config('session.lifetime') * 60 }}">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        html {
            font-size: 14px
        }

        body {
            font-family: Montserrat, Arial, sans-serif;
            font-size: 14px;
            line-height: 1.42857143;
            -webkit-font-smoothing: antialiased
        }

        .footer-disclaimer {
            font-size: 13px;
            color: #a8acb1;
            background: #242a30;
            -webkit-box-shadow: inset 0 100px 80px -80px rgba(0, 0, 0, .7);
            -moz-box-shadow: inset 0 100px 80px -80px rgba(0, 0, 0, .7);
            box-shadow: inset 0 100px 80px -80px rgba(0, 0, 0, .7)
        }

        #login-btn {
            color: #fff;
            background: #50c8e8;
            border-color: #50c8e8
        }

        #login-btn:hover {
            color: #fff;
            background: #3abcdf;
            border-color: #3abcdf
        }


        #regis-btn {
            color: #fff;
            background: #6c757d;
            border-color: #6c757d
        }

        #regis-btn:hover {
            color: #fff;
            background: #5a6268;
            border-color: #5a6268
        }
    </style>
</head>
{{-- <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">--}}
{{-- <div>--}}
{{-- <a href="/">--}}
{{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{-- </a>--}}
{{-- </div>--}}

{{-- <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">--}}
{{-- {{ $slot }}--}}
{{-- </div>--}}
{{-- </div>--}}

<body class="font-sans text-gray-900 flex flex-col min-h-screen">


    <header class="bg-white p-2 ">
        <div class="bg-white grid grid-cols-12 gap-0 px-2 w-full">
            <div class="col-span-4 p-2">
                <a href="/" class="flex">
                    <!-- Replace with your logo component or image -->
                    <x-application-logo alt="Logo" class="h-10 w-auto" />
                </a>
            </div>
            <div class="col-span-8 flex justify-end items-center p-2">
                <a href="/login" class="pr-1 hover:text-gray-300"> <i class="fa-solid fa-user "></i></a>
                <a href="/login" class="text-black hover:text-gray-300 hidden md:inline-block">Login / Register</a>
            </div>
        </div>
    </header>

    <main class="flex-grow grid grid-cols-12">
        <div class="col-span-12 p-6">
            {{ $slot }}
        </div>
    </main>



    <footer id="footer" class="footer-disclaimer mt-auto p-4">
        <!-- BEGIN container -->
        <div class=" grid grid-cols-12 gap-0 px-2">
            <div class="copyright col-span-12">
                <p>
                    DISCLAIMER : Trading commodity futures and options
                    products present a high degree of risk and losses in
                    excess of your initial investment may occur. Past
                    performance is not necessarily indicative of future
                    results. Please contact your account representative with
                    any concerns or questions.
                </p>
            </div>
        </div>
        <!-- END container -->
    </footer>
</body>

</html>