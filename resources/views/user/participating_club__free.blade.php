@extends('layouts.user-layout')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/help_page.css')}}" />

<div class="container mx-auto mt-10 text-gray-500">
    <div class="flex">
        <div class="w-1/4 mr-10">
            <ul class="border-1 main--border__color rounded-lg  text-gray-500 pt-1 bg-white leading-8">
                <li class="">
                    <a class="block p-5 nav-user" href="{{route('user_profile')}}">
                        <div class="media media-xxs flex items-center">
                            <div class="media-left mr-3">
                                <img src="{{asset('images/common/myavatar.png')}}" class="rounded-full" width="35" height="35" alt="avatar">
                            </div>
                            <div class="media-body" style="line-height: 1;">
                                <div class="small text-muted">プロフィールページへ</div>
                                <div class="ell font-bold" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 200px;">2021/09/22 11:10:06のDream Mug</div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="divider border-b-1 main--border__color"></li>
                <li class="dropdown-header px-5 text-sm "><strong class="text-pink-500">参加中のファンクラブ</strong></li>
                <li>
                    <a class="block px-5  hover:text-blue-500" href="{{route('participating_club')}}" title="参加中のファンクラブ">参加中のファンクラブ</a>
                    <a class="block px-5  hover:text-blue-500" href="/mypage/posts" title="参加中のファンクラブの新着投稿"><span>新着投稿</span></a>
                </li>
                <li class="divider border-b-1 main--border__color"></li>
                <li class="dropdown-header px-5 text-sm "><strong class="text-green-500">コミッション機能</strong></li>
                <li>
                    <a class="block px-5  hover:text-blue-500" href="/mypage/users/commissions" title="送信したリクエスト">送信したリクエスト</a>
                </li>
                <li class="divider border-b-1 main--border__color"></li>
                <li class="dropdown-header px-5 text-sm "><strong class="text-blue-500">商品購入</strong></li>
                <li>
                    <a class="block px-5  hover:text-blue-500" href="/mypage/users/purchases" title="注文履歴・発送状況">注文履歴・発送状況</a>
                </li>
                <li>
                    <a class="block px-5  hover:text-blue-500" href="/mypage/users/social_tippings" title="贈ったチップ">贈ったチップ</a>
                </li>
                <li class="divider border-b-1 main--border__color"></li>
                <li class="dropdown-header px-5 text-sm "><strong class="text-orange-500">アカウント</strong></li>
                <li>
                    <a class="block px-5  hover:text-blue-500" href="/mypage/dashboard">登録情報</a>
                    <ul class="sub-nav pl-3 text-xs">
                        <li>
                            <a class="block px-5  text-sm hover:text-blue-500" href="{{route('account_setting')}}">アカウント設定</a>
                        </li>
                        <li>
                            <a class="block px-5  text-sm hover:text-blue-500" href="{{route('profile_edit')}}">プロフィール設定</a>
                        </li>
                        <li>
                            <a class="block px-5  text-sm hover:text-blue-500" href="/mypage/notifications/setting">通知・メール受信設定</a>
                        </li>
                        <li>
                            <a class="block px-5  text-sm hover:text-blue-500" href="/mypage/users/payment_methods">お支払い方法</a>
                        </li>
                        <li>
                            <a class="block px-5  text-sm hover:text-blue-500" href="/mypage/shipping_addresses">住所の登録・変更</a>
                        </li>
                        <li>
                            <a class="block px-5  text-sm hover:text-blue-500" href="/mypage/users/refunds">返金の受け取り申請</a>
                        </li>
                    </ul>
                    <!-- <a class="block px-5 disabled">Language</a>
                    <ul class="sub-nav pl-3">
                        <li>
                            <a class="block px-5" data-toggle="modal" href="#modal-language-select">Select Language</a>
                        </li>
                    </ul> -->
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
                            <a class="block px-5 hover:underline" href="https://help.fantia.jp/301" target="_blank">
                                <small>とらコインについて<i class="fa fa-caret-right ml-1"></i></small>
                            </a>
                            <a class="block px-5 hover:underline" href="/mypage/users/coin_vesting_campaigns">
                                <small>配布キャンペーン情報はこちら<i class="fa fa-caret-right ml-1"></i></small>
                            </a>
                        </p>
                    </div>
                </li>
                <li class="divider border-b-1 main--border__color"></li>
                <li class="py-2">
                    <a class="block px-5  text-sm hover:text-blue-500" href="{{route('invite_friend')}}">
                        <span class="text-xs label py-1 px-2 bg-green-500 text-white label-success mr-2">NEW</span>
                        <span>友達招待してコインGET</span>
                    </a>
                </li>

                <li class="divider border-b-1 main--border__color"></li>

                <li class="hover:text-blue-500 p-2">
                    <a href="/auth/logout" onclick="return confirm(本当にログアウトしますか？)">ログアウト</a>
                </li>
            </ul>

            <div class="list-group mb-5 border-1 main--border__color rounded-lg bg-white overflow-hidden mt-5">
                <a class="block px-5 pt-5 pb-2 link-create-fanclub hover:bg-gray-200 hover:text-blue-500" href="/mypage/fanclubs/new">
                    <span class="text-pink-500">無料クリエイター登録</span>
                </a>
                <a href="{{route('what_register')}}" class="px-5 pb-5 pt-2  block hover:bg-gray-200 hover:text-blue-500">クリエイター登録とは？</a>
            </div>

            <div class="list-group mb-5 border-1 main--border__color rounded-lg bg-white overflow-hidden mt-5">
                <a class="list-group-item px-5 py-2 block hover:bg-gray-200 hover:text-blue-500" href="https://help.fantia.jp/" target="_blank">ヘルプセンター<i class="fa fa-external-link ml-5"></i></a>
                <a class="list-group-item px-5 py-2 block hover:bg-gray-200 hover:text-blue-500" href="/help/usage">楽しみ方・使い方</a>
                <a class="list-group-item px-5 py-2 block hover:bg-gray-200 hover:text-blue-500" href="/help/terms">お問い合わせ</a>
                <a class="list-group-item px-5 py-2 block hover:bg-gray-200 hover:text-blue-500" href="https://help.fantia.jp/guideline" target="_blank">最新情報・TIPS<i class="fa fa-external-link ml-5"></i></a>
            </div>

            <div class="panel  panel-default ">
                <div class="list-group  mb-5 border-1 main--border__color rounded-lg bg-white overflow-hidden">
                    <a class="list-group-item px-5 pt-4 pb-2 block hover:bg-gray-200 hover:text-blue-500" href="https://help.fantia.jp/" target="_blank" title="よくある質問"><span>ヘルプセンター</span><i class="fa fa-external-link ml-3"></i></a>
                    <a class="list-group-item px-5 py-2 block hover:bg-gray-200 hover:text-blue-500" href="/help/usage" title="楽しみ方・使い方"><span>楽しみ方・使い方</span></a>
                    <a class="list-group-item px-5 py-2 block hover:bg-gray-200 hover:text-blue-500" href="/help/inquiry" title="お問い合わせ"><span>お問い合わせ</span></a>
                    <a class="list-group-item px-5 pb-4 pt-2 block hover:bg-gray-200 hover:text-blue-500" href="https://spotlight.fantia.jp" target="_blank" title="最新情報・TIPS"><span>最新情報・TIPS</span><i class="fa fa-external-link ml-3"></i></a>
                </div>
                <div class="panel panel-default bg-white rounded-lg border-1 main--border__color panel-widget panel-recruit">
                    <div class="panel-heading border-b-1 main--border__color p-5">
                        <h2 class="panel-title"><i class="fa fa-fw fa-star text-pink-500"></i><span>採用情報</span></h2>
                    </div>
                    <a href="https://yumenosora.co.jp/tora-lab/recruit?utm_source=fantia&amp;utm_medium=sidebar_bnr&amp;utm_campaign=recruiting_202007" target="_blank">
                        <img alt="エンジニア正社員採用" class="img-fluid lazyloaded" height="150" src="{{asset('images/footer/girl-engineer.jpg')}}" width="100%">
                    </a>
                    <div class="list-group jobs-container" data-type="sidebar">
                        <a class="list-group-item hover:bg-gray-200 hover:text-blue-500 px-5 block text-sm py-3" href="https://yumenosora.co.jp/archives/job/1724?utm_source=fantia&amp;utm_medium=sidebar_text&amp;utm_campaign=recruiting_202007" target="_blank"><span>Webエンジニア中途採用（正社員）</span></a>
                        <a class="list-group-item hover:bg-gray-200 hover:text-blue-500 px-5 block text-sm py-3" href="https://yumenosora.co.jp/archives/job/1930?utm_source=fantia&amp;utm_medium=sidebar_text&amp;utm_campaign=recruiting_202007" target="_blank"><span>UI・UXデザイナー中途採用（正社員）</span></a>
                        <a class="list-group-item hover:bg-gray-200 hover:text-blue-500 px-5 block text-sm py-3" href="https://yumenosora.co.jp/archives/job/1936?utm_source=fantia&amp;utm_medium=sidebar_text&amp;utm_campaign=recruiting_202007" target="_blank"><span>Webマーケター中途採用（正社員）</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-3/4">
            <div class="border-1 main--border__color rounded-lg text-gray-500 bg-white">
                <div class="p-5 border-b-1 main--border__color">
                    <h1 class="panel-title">参加しているファンクラブ</h1>
                </div>
                <div class="flex">
                    <div class="w-1/2  py-5 font-bold border-b-1 border-r-1 main--border__color text-center"><a href="{{route('participating_club')}}"><span>有料プラン</span></a></div>
                    <div class="w-1/2 tab-active text-pink-500 text-center border-b-4 border-pink-500 font-bold text-center py-5"><a href="{{route('participating_club__free')}}"><span>無料プラン</span></a></div>
                </div>
                <div class="tab--button__gray p-3">
                    <div class="gray--button__box py-7 rounded bg-gray-100">
                        <p class="text-center">
                            ファンになっているクリエイターがいません！
                        </p>
                        <a href="#" class="block mt-8 text-center">
                            <span class="p-2 bg-white border-1 main-border-color text-blue-400 rounded hover:bg-blue-100">
                                人気のクリエイターをみてみる
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="paid--plan mt-5 relative">
                <a style="left:17px; top: 220px;" class="inline-block a--btn__1 border-1 main--border__color rounded absolute bg-white p-3 text-blue-400 hover:bg-blue-100" href="https://help.fantia.jp/291" target="_blank">さらに詳しく<i class="fa fa-external-link ml-2"></i></a>
                <a style="left:17px; top: 475px;" class="inline-block a--btn__2 border-1 main--border__color rounded absolute bg-white p-3 text-blue-400 hover:bg-blue-100" href="https://help.fantia.jp/291" target="_blank">さらに詳しく<i class="fa fa-external-link ml-2"></i></a>
                <a style="left:17px; top: 715px;" class="inline-block a--btn__3 border-1 main--border__color rounded absolute bg-white p-3 text-blue-400 hover:bg-blue-100" href="https://help.fantia.jp/291" target="_blank">さらに詳しく<i class="fa fa-external-link ml-2"></i></a>
                <a style="left:17px; bottom: 15px;" class="inline-block a--btn__4 border-1 main--border__color rounded absolute bg-white p-3 text-blue-400 hover:bg-blue-100" href="https://help.fantia.jp/291" target="_blank">さらに詳しく<i class="fa fa-external-link ml-2"></i></a>
                <img src="{{asset('images/common/paid_plan1.png')}}" class="border-1 rounded-lg main--border__color" width="100%" height="auto">
            </div>
        </div>
    </div>
</div>

@endsection