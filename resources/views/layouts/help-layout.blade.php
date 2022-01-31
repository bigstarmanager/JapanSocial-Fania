<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('css/mine_custom.css')}}" rel="stylesheet">
</head>

<body class="main--bg__color h-screen antialiased leading-none font-sans">
    <div id="app">
        <div>
            @include('layouts.introduction-header')
        </div>
        <header>
            <div class="bg-gray-800 py-2">
                <div class="container mx-auto ">
                    <div class="flex justify-between items-center">
                        <div>
                            <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                                {{ config('app.name') }}
                            </a>
                        </div>
                        <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                            <a class="no-underline hover:text-red-600" href="/">Home</a>
                            <a class="no-underline hover:text-red-600" href="/blog">Blog</a>
                            @guest
                            <a class="no-underline hover:text-red-600" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                            <a class="no-underline hover:text-red-600" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                            @else
                            <span class="text-red-500 underline">{{ Auth::user()->name }}</span>

                            <a href="{{ route('logout') }}" class="no-underline hover:text-red-600" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                {{ csrf_field() }}
                            </form>
                            @endguest
                        </nav>
                    </div>

                </div>
            </div>
            <div class="layout--bg__color">
                <div class="container mx-auto py-1">
                    <div class="flex justify-between items-center">
                        <div class="w-1/3">
                            <div class="flex">
                                <div class="dropdown inline-block relative mr-2">
                                    <span aria-expanded="false" aria-haspopup="true" class="nav-btn-renderer p-1 bg-yellow-300 rounded" data-toggle="dropdown" type="button">
                                        <span class="inner flex flex-col justify-center items-center">
                                            <i class="fa fa-fw fa-trophy text-white text-3xl"></i>
                                            <span class="text-white"> <small>ランキング</small> </span>
                                        </span>
                                    </span>
                                    <ul class="dropdown-menu absolute z-10 hidden text-gray-700 pt-1">
                                        <li><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">One</a></li>
                                        <li><a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">Two</a></li>
                                        <li><a class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">Three is the magic number</a></li>
                                    </ul>
                                </div>
                                <div class="border-l-1 main--border__color">
                                </div>
                                <div class="flex items-center justify-center header--search_bar ml-2">
                                    <div class="flex border-1 main--border__color rounded">
                                        <input type="text" class="px-4 py-2 w-40 rounded" placeholder="キーワードから探す">
                                        <button class="flex items-center justify-center px-4 border-0 bg-white rounded">
                                            <svg class="w-6 h-6 text-gray-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-1/3 flex justify-center items-center">
                            <!-- <img src="{{asset('images/logo/logo.png')}}"  alt="logo-img"> -->
                            <img src="{{asset('images/logo/logo-star.png')}}" width="250" alt="logo-img">
                        </div>
                        <div class="w-1/3 flex justify-center items-center">
                            <span class="mr-3">ログイン</span>
                            <a class="no-underline" href="{{ route('login') }}"> <img src="{{asset('images/header/login1.png')}}" width="30" alt="logo-img"></a>
                        </div>
                    </div>
                </div>
                <hr class="main--border__color w-full">
                <div class="header--submenu__root border-b-1 main--border__color p-5 text-gray-500">
                    <div class="container mx-auto">
                        <a href="{{url('/')}}" class=" text-blue-500 hover:underline">ドリームステージ [Dream Stage]</a><span> / サイトマップ</span>
                    </div>
                </div>
            </div>
        </header>

        <div>
            <div class="container mx-auto mt-10 text-gray-500">
                <div class="flex">
                    <div class="w-1/4 mr-10">
                        <div class="list-group mb-5 border-1 main--border__color rounded-lg bg-white overflow-hidden">
                            <a class="list-group-item px-5 pt-4 pb-2 block hover:bg-gray-200 hover:text-blue-500" href="{{route('about_page')}}">サービスについて</a>
                            <a class="list-group-item px-5 py-2 block hover:bg-gray-200 hover:text-blue-500" href="https://help.fantia.jp/" target="_blank">ヘルプセンター<i class="fa fa-external-link ml-5"></i></a>
                            <a class="list-group-item px-5 py-2 block hover:bg-gray-200 hover:text-blue-500" href="/help/usage">ファンティアの楽しみ方・使い方</a>
                            <a class="list-group-item px-5 py-2 block hover:bg-gray-200 hover:text-blue-500" href="/help/company">会社概要</a>
                            <a class="list-group-item px-5 py-2 block hover:bg-gray-200 hover:text-blue-500" href="/help/terms">利用規約</a>
                            <a class="list-group-item px-5 py-2 block hover:bg-gray-200 hover:text-blue-500" href="https://help.fantia.jp/guideline" target="_blank">投稿ガイドライン<i class="fa fa-external-link ml-5"></i></a>
                            <a class="list-group-item px-5 py-2 block hover:bg-gray-200 hover:text-blue-500" href="/help/law">特定商取引法に基づく表記</a>
                            <a class="list-group-item px-5 py-2 block hover:bg-gray-200 hover:text-blue-500" href="/help/privacy">プライバシーポリシー</a>
                            <a class="list-group-item px-5 py-2 block hover:bg-gray-200 hover:text-blue-500" href="/help/antisocialist">反社会的勢力に対する基本方針</a>
                            <a class="list-group-item px-5 py-2 block hover:bg-gray-200 hover:text-blue-500 active" href="{{route('sitemap_page')}}">サイトマップ</a>
                            <a class="list-group-item px-5 py-2 block hover:bg-gray-200 hover:text-blue-500" href="/help/inquiry">お問い合わせ</a>
                            <a class="list-group-item px-5 pb-4 pt-2 block hover:bg-gray-200 hover:text-blue-500" href="https://docs.google.com/forms/d/e/1FAIpQLSeL9aVSjOsbXaJvwAcfdyoTCr5F4U5433tDKCa5zFjpZHFi4Q/viewform" target="_blank">ご意見箱<i class="fa fa-external-link ml-5"></i></a>
                        </div>
                    </div>
                    <div class="w-3/4">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div>
            @include('layouts.footer')
        </div>
    </div>
</body>

</html>