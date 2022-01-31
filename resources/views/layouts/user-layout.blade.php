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
        <header>
            <div class="bg-gray-800 py-2">
                <div class="container mx-auto ">
                    <div class="flex justify-between items-center">
                        <div>
                            <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                                {{ config('app.name') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layout--bg__color border-b-1 main--border__color ">
                <div class="container mx-auto py-1">
                    <div class="flex justify-between items-center">
                        <div class="w-1/3">
                            <div class="flex">
                                <div class="dropdown inline-block relative mr-2">
                                    <span aria-expanded="false" aria-haspopup="true" class=" nav-btn-renderer p-1 bg-yellow-300 rounded" data-toggle="dropdown" type="button">
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
                        <div class="right flex items-center text-gray-500">
                            <div class="inner-left flex items-center">
                                <div class="header-nav-btn mx-3">
                                    <a class="nav-btn-renderer" href="/mypage/notifications" title="通知">
                                        <span class="inner flex flex-col  items-center hover:text-blue-500"><i class="fa mb-1 fa-fw text-2xl fa-bell-o"></i><span class="name text-xs">通知</span></span>
                                    </a>
                                </div>
                                <div class="header-nav-btn mx-3">
                                    <a class="nav-btn-renderer" href="/mypage/messages" title="メッセージ">
                                        <span class="inner flex flex-col  items-center hover:text-blue-500"><i class="fa mb-1 fa-fw text-2xl fa-envelope-o"></i><span class="name text-xs">メッセージ</span></span>
                                    </a>
                                </div>
                                <div class="header-nav-btn mx-3">
                                    <a class="nav-btn-renderer" href="/posts/likes" title="お気に入り">
                                        <span class="inner flex flex-col  items-center hover:text-blue-500"><i class="fa mb-1 fa-fw text-2xl fa-star-o"></i><span class="name text-xs">お気に入り</span></span>
                                    </a>
                                </div>
                                <div class="header-nav-btn mx-3">
                                    <a class="nav-btn-renderer" href="/mypage/cart" title="カート">
                                        <span class="inner flex flex-col  items-center hover:text-blue-500"><i class="fa mb-1 fa-fw text-2xl fa-shopping-cart"></i><span class="name text-xs">カート</span></span>
                                    </a>
                                </div>
                            </div>
                            <div class="inner-right flex items-center">
                                <div class="header-nav-btn mx-3 px-3 border-r-1 border-l-1 main--border__color">
                                    <a class="nav-btn-renderer" href="{{route('creator_info')}}" title="FC開設">
                                        <span class="inner flex flex-col  items-center text-pink-500"><i class="fa mb-1 fa-pencil text-2xl"></i><span class="name text-xs">FC開設</span></span>
                                    </a>
                                </div>
                                <div class="">
                                    <div class="dropdown inline-block relative ">
                                        <button class="py-2 px-4">
                                            <span class="mr-1 text-xs flex flex-col items-center hover:text-blue-500">
                                                <img src="{{asset('images/common/myavatar.png')}}" class="rounded-full" width="35" height="35" alt="avatar">
                                                {{ Auth::user()->name }}
                                            </span>
                                        </button>
                                        <ul class="border-1 main--border__color rounded-lg dropdown-menu absolute hidden text-gray-700 pt-1 bg-white leading-8" style="width: 240px; z-index:10;">
                                            <li class="">
                                                <a class="block p-3 nav-user" href="{{route('user_profile')}}">
                                                    <div class="media media-xxs flex items-center">
                                                        <div class="media-left mr-3">
                                                            <img src="{{asset('images/common/myavatar.png')}}" class="rounded-full" width="35" height="35" alt="avatar">
                                                        </div>
                                                        <div class="media-body" style="line-height: 1;">
                                                            <div class="small text-muted">プロフィールページへ</div>
                                                            <div class="ell font-bold" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 150px;">2021/09/22 11:10:06のDream Mug</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="divider border-b-1 main--border__color"></li>
                                            <li class="dropdown-header px-3 text-sm "><strong class="text-pink-500">参加中のファンクラブ</strong></li>
                                            <li>
                                                <a class="block px-3  hover:text-blue-500" href="{{route('participating_club')}}" title="参加中のファンクラブ">参加中のファンクラブ</a>
                                                <a class="block px-3  hover:text-blue-500" href="/mypage/posts" title="参加中のファンクラブの新着投稿"><span>新着投稿</span></a>
                                            </li>
                                            <li class="divider border-b-1 main--border__color"></li>
                                            <li class="dropdown-header px-3 text-sm "><strong class="text-green-500">コミッション機能</strong></li>
                                            <li>
                                                <a class="block px-3  hover:text-blue-500" href="/mypage/users/commissions" title="送信したリクエスト">送信したリクエスト</a>
                                            </li>
                                            <li class="divider border-b-1 main--border__color"></li>
                                            <li class="dropdown-header px-3 text-sm "><strong class="text-blue-500">商品購入</strong></li>
                                            <li>
                                                <a class="block px-3  hover:text-blue-500" href="/mypage/users/purchases" title="注文履歴・発送状況">注文履歴・発送状況</a>
                                            </li>
                                            <li>
                                                <a class="block px-3  hover:text-blue-500" href="/mypage/users/social_tippings" title="贈ったチップ">贈ったチップ</a>
                                            </li>
                                            <li class="divider border-b-1 main--border__color"></li>
                                            <li class="dropdown-header px-3 text-sm "><strong class="text-orange-500">アカウント</strong></li>
                                            <li>
                                                <a class="block px-3  hover:text-blue-500" href="/mypage/dashboard">登録情報</a>
                                                <ul class="sub-nav pl-3 text-xs">
                                                    <li>
                                                        <a class="block px-3  text-sm hover:text-blue-500" href="{{route('account_setting')}}">アカウント設定</a>
                                                    </li>
                                                    <li>
                                                        <a class="block px-3  text-sm hover:text-blue-500" href="{{route('profile_edit')}}">プロフィール設定</a>
                                                    </li>
                                                    <li>
                                                        <a class="block px-3  text-sm hover:text-blue-500" href="/mypage/notifications/setting">通知・メール受信設定</a>
                                                    </li>
                                                    <li>
                                                        <a class="block px-3  text-sm hover:text-blue-500" href="/mypage/users/payment_methods">お支払い方法</a>
                                                    </li>
                                                    <li>
                                                        <a class="block px-3  text-sm hover:text-blue-500" href="/mypage/shipping_addresses">住所の登録・変更</a>
                                                    </li>
                                                    <li>
                                                        <a class="block px-3  text-sm hover:text-blue-500" href="/mypage/users/refunds">返金の受け取り申請</a>
                                                    </li>
                                                </ul>
                                                <a class="block px-3 disabled">Language</a>
                                                <ul class="sub-nav pl-3">
                                                    <li>
                                                        <a class="block px-3" data-toggle="modal" href="#modal-language-select">Select Language</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="divider border-b-1 main--border__color"></li>
                                            <li class="p-3">
                                                <div class="coin-widget">
                                                    <div class="mb-3">
                                                        <small class="mr-2">とらコイン残高:</small>
                                                        <strong class="mr-2 text-green-500">
                                                            0
                                                        </strong>
                                                        <small>C</small>
                                                    </div>
                                                    <div class="flex  mb-3">
                                                        <div class="w-1/2 mr-3">
                                                            <a class="block px-2 hover:bg-gray-100 rounded border-1 main--border__color text-center  " href="{{route('user_coin_balance')}}"><small>詳細表示</small></a>
                                                        </div>
                                                        <div class="w-1/2">
                                                            <a class="block px-2 bg-orange-400 hover:bg-orange-500 rounded border-1 main--border__color text-center " href="{{route('coin_charge')}}"><small>チャージ</small></a>
                                                        </div>
                                                    </div>
                                                    <p class="text-right text-sm text-blue-500">
                                                        <a class="block px-3 hover:underline" href="https://help.fantia.jp/301" target="_blank">
                                                            <small>とらコインについて<i class="fa fa-caret-right ml-1"></i></small>
                                                        </a>
                                                        <a class="block px-3 hover:underline" href="/mypage/users/coin_vesting_campaigns">
                                                            <small>配布キャンペーン情報はこちら<i class="fa fa-caret-right ml-1"></i></small>
                                                        </a>
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="divider border-b-1 main--border__color"></li>
                                            <li class="py-2">
                                                <a class="block px-3  text-sm hover:text-blue-500" href="{{route('invite_friend')}}">
                                                    <span class="text-xs label py-1 px-2 bg-green-500 text-white label-success mr-2">NEW</span>
                                                    <span>友達招待してコインGET</span>
                                                </a>
                                            </li>
                                            <li class="divider border-b-1 main--border__color"></li>
                                            <li class="py-2">
                                                <a class="block px-3 link-create-fanclub" href="/mypage/fanclubs/new">
                                                    <span class="text-pink-500">無料クリエイター登録</span>
                                                </a>
                                            </li>
                                            <li class="divider border-b-1 main--border__color"></li>
                                            <li class="hover:text-blue-500 pt-2 pl-2">
                                                <a href="/">ホーム</a>
                                            </li>
                                            <li class="hover:text-blue-500 p-2">
                                                <a href="/auth/logout" onclick="return confirm(本当にログアウトしますか？)">ログアウト</a>
                                            </li>
                                            <!-- <li class=""><a class="block rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="{{ route('user_profile') }}">アカウント</a></li>
                                            <li class=""><a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">Two</a></li>
                                            <li class=""><a class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">Three is the magic number</a></li> -->
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="main--border__color w-full">
                <div class="container mx-auto py-3 header--menu__bar">
                    <p class="text-gray-500 text-sm"> <a href="{{url('/')}}" class="text-blue-500 hover:underline">ドリームステージ</a> / 2021/09/22 11:10:06 の {{ Auth::user()->name }} さんのプロフィール</p>
                </div>
            </div>
        </header>

        <div>
            @yield('content')
        </div>
        <br>
        <div>
            @include('layouts.footer')
        </div>
    </div>
</body>

</html>