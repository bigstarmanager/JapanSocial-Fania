<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('css/mine_custom.css')}}" rel="stylesheet">
    <link href="{{asset('css/auth_custom.css')}}" rel="stylesheet">
</head>

<body class="h-screen overflow-y-hidden antialiased leading-none font-sans main--bg__color">
    <div id="app">
        <header class="flex flex-col justify-center items-center">
            <div class="mt-8">
                <img src="{{asset('images/logo/logo-star.png')}}" width="300" alt="logo-star">
            </div>
            <h2 class="mt-6">
                <strong class="auth--title">
                    ログイン
                </strong>
            </h2>
        </header>

        <div>
            @yield('content')
        </div>

        <footer class="mt-10 layout--bg__color">
            <div class="container mx-auto  pt-7 pb-40">
                <div class="footer-nav flex justify-around">
                    <div class="footer-nav-left  flex">
                        <a href="/help/terms" target="_blank" class="mr-5 text-gray-500 text-xs">
                            <span style="vertical-align: inherit;">
                                <span style="vertical-align: inherit;">利用規約 </span>
                            </span>
                        </a>
                        <a href="/help/faq" target="_blank" class="mr-5 text-gray-500 text-xs">
                            <span style="vertical-align: inherit;">
                                <span style="vertical-align: inherit;">よくある質問 </span>
                            </span>
                        </a>
                        <a href="/help/company" target="_blank" class="mr-5 text-gray-500 text-xs">
                            <span style="vertical-align: inherit;">
                                <span style="vertical-align: inherit;">運営会社 </span>
                            </span>
                        </a>
                    </div>
                    <div class="footer-nav-right flex">
                        <div class="footer-nav-language flex">
                            <a rel="nofollow" class="mr-5 text-gray-500 text-xs" href="/sessions/signin?locale=ja">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">日本語 </span>
                                </span>
                            </a>
                            <a rel="nofollow" class="mr-5 text-gray-500 text-xs" href="/sessions/signin?locale=en">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">English </span>
                                </span>
                            </a>
                            <a rel="nofollow" class="mr-5 text-gray-500 text-xs" href="/sessions/signin?locale=zh-cn">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">简体中文 </span>
                                </span>
                            </a>
                            <a rel="nofollow" class="mr-5 text-gray-500 text-xs" href="/sessions/signin?locale=zh-tw">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">繁體中文 </span>
                                </span>
                            </a>
                        </div>
                        <a href="/" title="Dream Stage [Dream Stage]" class="mr-5 text-gray-500 text-xs"><i class="fa fa-fw fa-copyright"></i>
                            <span style="vertical-align: inherit;">
                                <span style="vertical-align: inherit;">ドリームステージ [Dream Stage]</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>