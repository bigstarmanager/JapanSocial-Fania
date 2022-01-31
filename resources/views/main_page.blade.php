@extends('layouts.app')

@section('content')

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
<link rel="stylesheet" type="text/css" href="{{asset('css/main_page.css')}}" />

<div class="container--box">
    <div class="header--slider">
        <div> <img class="img-fluid lazyloaded" width="600" height="200" data-src="https://spotlight.fantia.jp/wp-content/uploads/2021/09/0930_お友達紹介でコインが貰える！_900x300-768x256.jpg" src="https://spotlight.fantia.jp/wp-content/uploads/2021/09/0930_お友達紹介でコインが貰える！_900x300-768x256.jpg" alt="Fnatiaへ「招待した人」も「された人」もコインが貰える！"> </div>
        <div> <img class="img-fluid lazyloaded" width="600" height="200" data-src="https://spotlight.fantia.jp/wp-content/uploads/2021/09/コスプレジャンルの最新ダウンロード商品こちら_900x300-768x256.jpg" src="https://spotlight.fantia.jp/wp-content/uploads/2021/09/コスプレジャンルの最新ダウンロード商品こちら_900x300-768x256.jpg" alt="コスプレジャンルの最新ダウンロード商品こちら"> </div>
        <div> <img class="img-fluid lazyloaded" width="600" height="200" data-src="https://spotlight.fantia.jp/wp-content/uploads/2021/02/とらコインJCB導入_900x300-768x256.jpg" src="https://spotlight.fantia.jp/wp-content/uploads/2021/02/とらコインJCB導入_900x300-768x256.jpg" alt="【アップデート情報】とらコイン購入にJCBがご利用できるようになりました！"> </div>
        <div> <img class="img-fluid lazyloaded" width="600" height="200" data-src="https://spotlight.fantia.jp/wp-content/uploads/2021/09/0930_お友達紹介でコインが貰える！_900x300-768x256.jpg" src="https://spotlight.fantia.jp/wp-content/uploads/2021/09/0930_お友達紹介でコインが貰える！_900x300-768x256.jpg" alt="Fnatiaへ「招待した人」も「された人」もコインが貰える！"> </div>
        <div> <img class="img-fluid lazyloaded" width="600" height="200" data-src="https://spotlight.fantia.jp/wp-content/uploads/2021/09/コスプレジャンルの最新ダウンロード商品こちら_900x300-768x256.jpg" src="https://spotlight.fantia.jp/wp-content/uploads/2021/09/コスプレジャンルの最新ダウンロード商品こちら_900x300-768x256.jpg" alt="コスプレジャンルの最新ダウンロード商品こちら"> </div>
        <div> <img class="img-fluid lazyloaded" width="600" height="200" data-src="https://spotlight.fantia.jp/wp-content/uploads/2021/02/とらコインJCB導入_900x300-768x256.jpg" src="https://spotlight.fantia.jp/wp-content/uploads/2021/02/とらコインJCB導入_900x300-768x256.jpg" alt="【アップデート情報】とらコイン購入にJCBがご利用できるようになりました！"> </div>
    </div>
    <div class="container mx-auto w-full text-gray-500 flex mt-15">
        <div class="flex justify-between w-3/4">
            <div class="w-1/4 left-sidebar mr-3">
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
                            <img alt="エンジニア正社員採用" class="img-fluid lazyloaded" height="150" src="{{asset('images/footer/girl-engineer.jpg')}}" width="300">
                        </a>
                        <div class="list-group jobs-container" data-type="sidebar">
                            <a class="list-group-item hover:bg-gray-200 hover:text-blue-500 px-5 block py-3" href="https://yumenosora.co.jp/archives/job/1724?utm_source=fantia&amp;utm_medium=sidebar_text&amp;utm_campaign=recruiting_202007" target="_blank"><span>Webエンジニア中途採用（正社員）</span></a>
                            <a class="list-group-item hover:bg-gray-200 hover:text-blue-500 px-5 block py-3" href="https://yumenosora.co.jp/archives/job/1930?utm_source=fantia&amp;utm_medium=sidebar_text&amp;utm_campaign=recruiting_202007" target="_blank"><span>UI・UXデザイナー中途採用（正社員）</span></a>
                            <a class="list-group-item hover:bg-gray-200 hover:text-blue-500 px-5 block py-3" href="https://yumenosora.co.jp/archives/job/1936?utm_source=fantia&amp;utm_medium=sidebar_text&amp;utm_campaign=recruiting_202007" target="_blank"><span>Webマーケター中途採用（正社員）</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-3/4 side-content">
                <div class="panel bg-white border-1 rounded-lg main--border__color panel-default panel-widget">
                    <div class="panel-heading overflow-hidden p-5 border-b-1 main--border__color">
                        <h2 class="panel-title "><i class="fa fa-fw fa-bullhorn text-muted"></i> <span>お知らせ・アップデート情報など</span></h2>
                    </div>
                    <div class="list-group px-5 py-2" ng-controller="mypage.mypage.index.feed.news as news">
                        <div class="card-body overflow-hidden relative bg-white">
                            <ul class="news-list js-index-top-news-container">
                                <div class="alert alert-danger alert-fail" style="display: none;">読み込みに失敗しました。時間をおいて再度リロードしてください。</div>
                                <li class="pt-3 flex">
                                    <p class="post-date text-muted mr-5 leading-6">2021.09.22</p>
                                    <h4 class="post-title leading-6 text-blue-500 hover:underline"><a target="_blank" href="https://spotlight.fantia.jp/news/20210922_invitation" title="【キャンペーン】Fantiaへ「招待した人」も「された人」もコインが貰える！友達招待キャンペーン！">【キャンペーン】Dream Stageへ「招待した人」も「された人」もコインが貰える！友達招待キャンペーン！</a></h4>
                                </li>
                                <li class="pt-3 flex">
                                    <p class="post-date text-muted mr-5 leading-6">2021.09.17</p>
                                    <h4 class="post-title leading-6 text-blue-500 hover:underline"><a target="_blank" href="https://spotlight.fantia.jp/news/20210917_3dsecure" title="【重要】3Dセキュア（本人認証）非対応カードをお持ちで、Fantiaの決済ができなくなった皆様へご案内">【重要】3Dセキュア（本人認証）非対応カードをお持ちで、Dream Stageの決済ができなくなった皆様へご案内</a></h4>
                                </li>
                                <li class="pt-3 flex">
                                    <p class="post-date text-muted mr-5 leading-6">2021.09.15</p>
                                    <h4 class="post-title leading-6 text-blue-500 hover:underline"><a target="_blank" href="https://spotlight.fantia.jp/news/20210915_security" title="【重要】ファンティアのセキュリティ対策の取り組みについて">【重要】ファンティアのセキュリティ対策の取り組みについて</a></h4>
                                </li>
                                <li class="pt-3 flex">
                                    <p class="post-date text-muted mr-5 leading-6">2021.09.01</p>
                                    <h4 class="post-title leading-6 text-blue-500 hover:underline"><a target="_blank" href="https://spotlight.fantia.jp/news/20210901_creatiapr" title="[PR] 人気イラストレイターやVtuberが参加中！ファンティアアカウントでCreatiaのファンクラブに入会するとCreatia限定とらコインもらえる！">[PR] 人気イラストレイターやVtuberが参加中！ファンティアアカウントでCreatiaのファンクラブに入会するとCreatia限定とらコインもらえる！</a></h4>
                                </li>
                                <li class="pt-3 flex">
                                    <p class="post-date text-muted mr-5 leading-6">2021.09.01</p>
                                    <h4 class="post-title leading-6 text-blue-500 hover:underline"><a target="_blank" href="https://spotlight.fantia.jp/news/20210901_toranoanapoint" title="ファンティアでのお支払い金額に応じて、「とらのあな通販ポイント」がもらえるようになります！">ファンティアでのお支払い金額に応じて、「とらのあな通販ポイント」がもらえるようになります！</a></h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default panel-widget border-1 rounded-lg main--border__color bg-white my-5">
                    <div class="panel-heading p-5 border-b-1 main--border__color">
                        <h2 class="panel-title "><i class="fa fa-fw fa-pencil text-blue-500"></i> <span>新しい投稿</span></h2>
                    </div>
                    <div class="select-bar px-5 pt-5">
                        <select class="w-full border bg-white rounded px-3 py-2 outline-none">
                            <option class="py-1">Option 1</option>
                            <option class="py-1">Option 2</option>
                            <option class="py-1">Option 3</option>
                        </select>
                    </div>
                    <div class="list-group" ng-controller="mypage.mypage.index.feed.news as news">
                        <div class="grid grid-cols-4 grid-flow-row gap-2 bg-white  px-5 py-2">
                            <div class="blog--post__image mb-5">
                                <img src="{{asset('images/footer/screenshot.png')}}" class="w-full" alt="post-img">
                            </div>
                            <div class="blog--post__image mb-5">
                                <img src="{{asset('images/footer/screenshot.png')}}" class="w-full" alt="post-img">
                            </div>
                            <div class="blog--post__image mb-5">
                                <img src="{{asset('images/footer/screenshot.png')}}" class="w-full" alt="post-img">
                            </div>
                            <div class="blog--post__image mb-5">
                                <img src="{{asset('images/footer/screenshot.png')}}" class="w-full" alt="post-img">
                            </div>
                            <div class="blog--post__image mb-5">
                                <img src="{{asset('images/footer/screenshot.png')}}" class="w-full" alt="post-img">
                            </div>
                            <div class="blog--post__image mb-5">
                                <img src="{{asset('images/footer/screenshot.png')}}" class="w-full" alt="post-img">
                            </div>
                        </div>
                        <div class="card-footer border-t-1 main--border__color p-5 text-sm text-center"><a href="/?brand_type=0" title="ファンティア総合(男性向け)TOP">もっとみる<i class="fa fa-caret-right ml-2"></i></a></div>
                    </div>
                </div>
                <div class="panel panel-default panel-widget border-1 rounded-lg main--border__color bg-white my-5">
                    <div class="panel-heading p-5 border-b-1 main--border__color">
                        <h2 class="panel-title "><i class="fa fa-fw fa-pencil text-blue-500"></i> <span>新しい投稿</span></h2>
                    </div>
                    <div class="select-bar px-5 pt-5">
                        <select class="w-full border bg-white rounded px-3 py-2 outline-none">
                            <option class="py-1">Option 1</option>
                            <option class="py-1">Option 2</option>
                            <option class="py-1">Option 3</option>
                        </select>
                    </div>
                    <div class="list-group" ng-controller="mypage.mypage.index.feed.news as news">
                        <div class="grid grid-cols-4 grid-flow-row gap-2 bg-white  px-5 py-2">
                            <div class="blog--post__image mb-5">
                                <img src="{{asset('images/footer/sc.png')}}" class="w-full" alt="post-img">
                            </div>
                            <div class="blog--post__image mb-5">
                                <img src="{{asset('images/footer/sc.png')}}" class="w-full" alt="post-img">
                            </div>
                            <div class="blog--post__image mb-5">
                                <img src="{{asset('images/footer/sc.png')}}" class="w-full" alt="post-img">
                            </div>
                            <div class="blog--post__image mb-5">
                                <img src="{{asset('images/footer/sc.png')}}" class="w-full" alt="post-img">
                            </div>
                            <div class="blog--post__image mb-5">
                                <img src="{{asset('images/footer/sc.png')}}" class="w-full" alt="post-img">
                            </div>
                            <div class="blog--post__image mb-5">
                                <img src="{{asset('images/footer/sc.png')}}" class="w-full" alt="post-img">
                            </div>
                        </div>
                        <div class="card-footer border-t-1 main--border__color p-5 text-sm text-center"><a href="/?brand_type=0" title="ファンティア総合(男性向け)TOP">もっとみる<i class="fa fa-caret-right ml-2"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/4 right-sidebar  ml-3">
            <div class="rounded-lg overflow-hidden shadow-lg border-1 rounded-lg main--border__color bg-white text-gray-500">
                <div class="panel-heading overflow-hidden p-5 border-b-1 main--border__color">
                    <a href="/ranking?content=fanclub&amp;category=comic&amp;kind=point&amp;period=daily&amp;brand_type=0"><i class="fa fa-trophy text-warning mr-3 text-yellow-300"></i><span class="ng-binding">クリエイターデイリーランキング</span></a>
                </div>
                <div class="card-body overflow-hidden relative bg-white">
                    <nav class="scroll-tabs relative scroll-tabs-sm border-b-1 main--border__color mb-5 ng-isolate-scope" loading-promise="$ctrl.categoryLoadingPromise">
                        <div ng-if="status == Status.RESOLVED" ng-transclude="" class="ng-scope">
                            <div class="scroll-tabs-main ng-scope" scroll-tabs="" style="padding-right:21px">
                                <a class="tab-item tab-item-text ng-binding ng-scope" ng-class="{active: isActiveCategory(item.slug)}" tab-active="false" ng-repeat="item in $ctrl.allCategories" href="/ranking?content=fanclub&amp;category=illust&amp;kind=point&amp;period=daily&amp;brand_type=0">イラスト</a><!-- end ngRepeat: item in $ctrl.allCategories --><a class="tab-item tab-item-text ng-binding ng-scope active" ng-class="{active: isActiveCategory(item.slug)}" tab-active="true" ng-repeat="item in $ctrl.allCategories" href="/ranking?content=fanclub&amp;category=comic&amp;kind=point&amp;period=daily&amp;brand_type=0">漫画</a><!-- end ngRepeat: item in $ctrl.allCategories --><a class="tab-item tab-item-text ng-binding ng-scope" ng-class="{active: isActiveCategory(item.slug)}" tab-active="false" ng-repeat="item in $ctrl.allCategories" href="/ranking?content=fanclub&amp;category=vtuber&amp;kind=point&amp;period=daily&amp;brand_type=0">VTuber</a><!-- end ngRepeat: item in $ctrl.allCategories --><a class="tab-item tab-item-text ng-binding ng-scope" ng-class="{active: isActiveCategory(item.slug)}" tab-active="false" ng-repeat="item in $ctrl.allCategories" href="/ranking?content=fanclub&amp;category=cosplay&amp;kind=point&amp;period=daily&amp;brand_type=0">コスプレ</a><!-- end ngRepeat: item in $ctrl.allCategories --><a class="tab-item tab-item-text ng-binding ng-scope" ng-class="{active: isActiveCategory(item.slug)}" tab-active="false" ng-repeat="item in $ctrl.allCategories" href="/ranking?content=fanclub&amp;category=voice&amp;kind=point&amp;period=daily&amp;brand_type=0">音声作品・ASMR</a><!-- end ngRepeat: item in $ctrl.allCategories --><a class="tab-item tab-item-text ng-binding ng-scope" ng-class="{active: isActiveCategory(item.slug)}" tab-active="false" ng-repeat="item in $ctrl.allCategories" href="/ranking?content=fanclub&amp;category=voiceactor&amp;kind=point&amp;period=daily&amp;brand_type=0">声優・歌い手</a><!-- end ngRepeat: item in $ctrl.allCategories --><a class="tab-item tab-item-text ng-binding ng-scope" ng-class="{active: isActiveCategory(item.slug)}" tab-active="false" ng-repeat="item in $ctrl.allCategories" href="/ranking?content=fanclub&amp;category=idol&amp;kind=point&amp;period=daily&amp;brand_type=0">アイドル</a><!-- end ngRepeat: item in $ctrl.allCategories --><a class="tab-item tab-item-text ng-binding ng-scope" ng-class="{active: isActiveCategory(item.slug)}" tab-active="false" ng-repeat="item in $ctrl.allCategories" href="/ranking?content=fanclub&amp;category=youtuber&amp;kind=point&amp;period=daily&amp;brand_type=0">YouTuber・配信者</a><!-- end ngRepeat: item in $ctrl.allCategories --><a class="tab-item tab-item-text ng-binding ng-scope" ng-class="{active: isActiveCategory(item.slug)}" tab-active="false" ng-repeat="item in $ctrl.allCategories" href="/ranking?content=fanclub&amp;category=photo_movie&amp;kind=point&amp;period=daily&amp;brand_type=0">実写（写真・映像）</a><!-- end ngRepeat: item in $ctrl.allCategories --><a class="tab-item tab-item-text ng-binding ng-scope" ng-class="{active: isActiveCategory(item.slug)}" tab-active="false" ng-repeat="item in $ctrl.allCategories" href="/ranking?content=fanclub&amp;category=3d&amp;kind=point&amp;period=daily&amp;brand_type=0">3D</a><!-- end ngRepeat: item in $ctrl.allCategories --><a class="tab-item tab-item-text ng-binding ng-scope" ng-class="{active: isActiveCategory(item.slug)}" tab-active="false" ng-repeat="item in $ctrl.allCategories" href="/ranking?content=fanclub&amp;category=2d_anime&amp;kind=point&amp;period=daily&amp;brand_type=0">2Dアニメ</a><!-- end ngRepeat: item in $ctrl.allCategories --><a class="tab-item tab-item-text ng-binding ng-scope" ng-class="{active: isActiveCategory(item.slug)}" tab-active="false" ng-repeat="item in $ctrl.allCategories" href="/ranking?content=fanclub&amp;category=game&amp;kind=point&amp;period=daily&amp;brand_type=0">ゲーム制作</a><!-- end ngRepeat: item in $ctrl.allCategories --><a class="tab-item tab-item-text ng-binding ng-scope" ng-class="{active: isActiveCategory(item.slug)}" tab-active="false" ng-repeat="item in $ctrl.allCategories" href="/ranking?content=fanclub&amp;category=music&amp;kind=point&amp;period=daily&amp;brand_type=0">音楽</a><!-- end ngRepeat: item in $ctrl.allCategories --><a class="tab-item tab-item-text ng-binding ng-scope" ng-class="{active: isActiveCategory(item.slug)}" tab-active="false" ng-repeat="item in $ctrl.allCategories" href="/ranking?content=fanclub&amp;category=novel&amp;kind=point&amp;period=daily&amp;brand_type=0">小説</a><!-- end ngRepeat: item in $ctrl.allCategories --><a class="tab-item tab-item-text ng-binding ng-scope" ng-class="{active: isActiveCategory(item.slug)}" tab-active="false" ng-repeat="item in $ctrl.allCategories" href="/ranking?content=fanclub&amp;category=doll&amp;kind=point&amp;period=daily&amp;brand_type=0">ドール</a><!-- end ngRepeat: item in $ctrl.allCategories --><a class="tab-item tab-item-text ng-binding ng-scope" ng-class="{active: isActiveCategory(item.slug)}" tab-active="false" ng-repeat="item in $ctrl.allCategories" href="/ranking?content=fanclub&amp;category=art&amp;kind=point&amp;period=daily&amp;brand_type=0">アート・デザイン</a><!-- end ngRepeat: item in $ctrl.allCategories --><a class="tab-item tab-item-text ng-binding ng-scope" ng-class="{active: isActiveCategory(item.slug)}" tab-active="false" ng-repeat="item in $ctrl.allCategories" href="/ranking?content=fanclub&amp;category=program&amp;kind=point&amp;period=daily&amp;brand_type=0">プログラム</a><!-- end ngRepeat: item in $ctrl.allCategories --><a class="tab-item tab-item-text ng-binding ng-scope" ng-class="{active: isActiveCategory(item.slug)}" tab-active="false" ng-repeat="item in $ctrl.allCategories" href="/ranking?content=fanclub&amp;category=handmade&amp;kind=point&amp;period=daily&amp;brand_type=0">創作・ハンドメイド</a><!-- end ngRepeat: item in $ctrl.allCategories --><a class="tab-item tab-item-text ng-binding ng-scope" ng-class="{active: isActiveCategory(item.slug)}" tab-active="false" ng-repeat="item in $ctrl.allCategories" href="/ranking?content=fanclub&amp;category=history&amp;kind=point&amp;period=daily&amp;brand_type=0">歴史・評論・情報</a><!-- end ngRepeat: item in $ctrl.allCategories --><a class="tab-item tab-item-text ng-binding ng-scope" ng-class="{active: isActiveCategory(item.slug)}" tab-active="false" ng-repeat="item in $ctrl.allCategories" href="/ranking?content=fanclub&amp;category=railroad&amp;kind=point&amp;period=daily&amp;brand_type=0">鉄道・旅行・ミリタリー</a><!-- end ngRepeat: item in $ctrl.allCategories --><a class="tab-item tab-item-text ng-binding ng-scope" ng-class="{active: isActiveCategory(item.slug)}" tab-active="false" ng-repeat="item in $ctrl.allCategories" href="/ranking?content=fanclub&amp;category=shop&amp;kind=point&amp;period=daily&amp;brand_type=0">ショップ</a><!-- end ngRepeat: item in $ctrl.allCategories --><a class="tab-item tab-item-text ng-binding ng-scope" ng-class="{active: isActiveCategory(item.slug)}" tab-active="false" ng-repeat="item in $ctrl.allCategories" href="/ranking?content=fanclub&amp;category=other&amp;kind=point&amp;period=daily&amp;brand_type=0">その他</a><!-- end ngRepeat: item in $ctrl.allCategories -->
                            </div>
                        </div>
                    </nav>
                    <div class="js-index-top-fanclubs-container flex flex-wrap px-5" data-brand-type="3" data-limit="6">
                        <div class="w-1/2 mb-5">
                            <div class="module fanclub p-1 fanclub-sm">
                                <div class="fanclub-header relative"><img class="img-fluid rounded-full w-full lazyloaded" data-src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" alt="GRINP Dream Stage (ねことうふ)">
                                    <div class="fanclub-fan-count">
                                        <span class="text-primary text-pink-500">
                                            <i class="fa fa-fw fa-heart " aria-hidden="true"></i>
                                            702
                                        </span>
                                    </div>
                                    <span class="fanclub-tip  text-gray-500 font-bold absolute">
                                        #1
                                    </span>
                                </div>
                                <div class="fanclub-body">
                                    <h3 class="fanclub-name py-2 text-sm">GRINP Dream Stage (ねことうふ)</h3>
                                </div>
                                <a class="link-block hidden-xs hidden-sm" href="/fanclubs/1446" title="" data-content="サークルGRINP/ねことうふのファンクラブ的なやつ" data-container="body" data-placement="top" data-toggle="popover" data-trigger="hover" data-original-title="GRINP Dream Stage (ねことうふ)"></a><a class="link-block visible-xs-block visible-sm-block" href="/fanclubs/1446" title="GRINP Dream Stage (ねことうふ)"></a>
                                <a ng-if="!isLoggedIn()" class="inline-block pt-1 px-2 text-white bg-pink-500 rounded-md" ng-class="getBtnClass()" href="/sessions/signin"><span>ファンになる</span></a>
                            </div>
                        </div>
                        <div class="w-1/2 mb-5">
                            <div class="module fanclub p-1 fanclub-sm">
                                <div class="fanclub-header relative"><img class="img-fluid rounded-full w-full lazyloaded" data-src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" alt="GRINP Dream Stage (ねことうふ)">
                                    <div class="fanclub-fan-count">
                                        <span class="text-primary text-pink-500">
                                            <i class="fa fa-fw fa-heart " aria-hidden="true"></i>
                                            702
                                        </span>
                                    </div>
                                    <span class="fanclub-tip  text-gray-500 font-bold absolute">
                                        #2
                                    </span>
                                </div>
                                <div class="fanclub-body">
                                    <h3 class="fanclub-name py-2 text-sm">GRINP Dream Stage (ねことうふ)</h3>
                                </div>
                                <a class="link-block hidden-xs hidden-sm" href="/fanclubs/1446" title="" data-content="サークルGRINP/ねことうふのファンクラブ的なやつ" data-container="body" data-placement="top" data-toggle="popover" data-trigger="hover" data-original-title="GRINP Dream Stage (ねことうふ)"></a><a class="link-block visible-xs-block visible-sm-block" href="/fanclubs/1446" title="GRINP Dream Stage (ねことうふ)"></a>
                                <a ng-if="!isLoggedIn()" class="inline-block pt-1 px-2 text-white bg-pink-500 rounded-md" ng-class="getBtnClass()" href="/sessions/signin"><span>ファンになる</span></a>
                            </div>
                        </div>
                        <div class="w-1/2 mb-5">
                            <div class="module fanclub p-1 fanclub-sm">
                                <div class="fanclub-header relative"><img class="img-fluid rounded-full w-full lazyloaded" data-src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" alt="GRINP Dream Stage (ねことうふ)">
                                    <div class="fanclub-fan-count">
                                        <span class="text-primary text-pink-500">
                                            <i class="fa fa-fw fa-heart " aria-hidden="true"></i>
                                            702
                                        </span>
                                    </div>
                                    <span class="fanclub-tip  text-gray-500 font-bold absolute">
                                        #3
                                    </span>
                                </div>
                                <div class="fanclub-body">
                                    <h3 class="fanclub-name py-2 text-sm">GRINP Dream Stage (ねことうふ)</h3>
                                </div>
                                <a class="link-block hidden-xs hidden-sm" href="/fanclubs/1446" title="" data-content="サークルGRINP/ねことうふのファンクラブ的なやつ" data-container="body" data-placement="top" data-toggle="popover" data-trigger="hover" data-original-title="GRINP Dream Stage (ねことうふ)"></a><a class="link-block visible-xs-block visible-sm-block" href="/fanclubs/1446" title="GRINP Dream Stage (ねことうふ)"></a>
                                <a ng-if="!isLoggedIn()" class="inline-block pt-1 px-2 text-white bg-pink-500 rounded-md" ng-class="getBtnClass()" href="/sessions/signin"><span>ファンになる</span></a>
                            </div>
                        </div>
                        <div class="w-1/2 mb-5">
                            <div class="module fanclub p-1 fanclub-sm">
                                <div class="fanclub-header relative"><img class="img-fluid rounded-full w-full lazyloaded" data-src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" alt="GRINP Dream Stage (ねことうふ)">
                                    <div class="fanclub-fan-count">
                                        <span class="text-primary text-pink-500">
                                            <i class="fa fa-fw fa-heart " aria-hidden="true"></i>
                                            702
                                        </span>
                                    </div>
                                    <span class="fanclub-tip  text-gray-500 font-bold absolute">
                                        #4
                                    </span>
                                </div>
                                <div class="fanclub-body">
                                    <h3 class="fanclub-name py-2 text-sm">GRINP Dream Stage (ねことうふ)</h3>
                                </div>
                                <a class="link-block hidden-xs hidden-sm" href="/fanclubs/1446" title="" data-content="サークルGRINP/ねことうふのファンクラブ的なやつ" data-container="body" data-placement="top" data-toggle="popover" data-trigger="hover" data-original-title="GRINP Dream Stage (ねことうふ)"></a><a class="link-block visible-xs-block visible-sm-block" href="/fanclubs/1446" title="GRINP Dream Stage (ねことうふ)"></a>
                                <a ng-if="!isLoggedIn()" class="inline-block pt-1 px-2 text-white bg-pink-500 rounded-md" ng-class="getBtnClass()" href="/sessions/signin"><span>ファンになる</span></a>
                            </div>
                        </div>
                        <div class="w-1/2 mb-5">
                            <div class="module fanclub p-1 fanclub-sm">
                                <div class="fanclub-header relative"><img class="img-fluid rounded-full w-full lazyloaded" data-src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" alt="GRINP Dream Stage (ねことうふ)">
                                    <div class="fanclub-fan-count">
                                        <span class="text-primary text-pink-500">
                                            <i class="fa fa-fw fa-heart " aria-hidden="true"></i>
                                            702
                                        </span>
                                    </div>
                                    <span class="fanclub-tip  text-gray-500 font-bold absolute">
                                        #5
                                    </span>
                                </div>
                                <div class="fanclub-body">
                                    <h3 class="fanclub-name py-2 text-sm">GRINP Dream Stage (ねことうふ)</h3>
                                </div>
                                <a class="link-block hidden-xs hidden-sm" href="/fanclubs/1446" title="" data-content="サークルGRINP/ねことうふのファンクラブ的なやつ" data-container="body" data-placement="top" data-toggle="popover" data-trigger="hover" data-original-title="GRINP Dream Stage (ねことうふ)"></a><a class="link-block visible-xs-block visible-sm-block" href="/fanclubs/1446" title="GRINP Dream Stage (ねことうふ)"></a>
                                <a ng-if="!isLoggedIn()" class="inline-block pt-1 px-2 text-white bg-pink-500 rounded-md" ng-class="getBtnClass()" href="/sessions/signin"><span>ファンになる</span></a>
                            </div>
                        </div>
                        <div class="w-1/2 mb-5">
                            <div class="module fanclub p-1 fanclub-sm">
                                <div class="fanclub-header relative"><img class="img-fluid rounded-full w-full lazyloaded" data-src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" alt="GRINP Dream Stage (ねことうふ)">
                                    <div class="fanclub-fan-count">
                                        <span class="text-primary text-pink-500">
                                            <i class="fa fa-fw fa-heart " aria-hidden="true"></i>
                                            702
                                        </span>
                                    </div>
                                    <span class="fanclub-tip  text-gray-500 font-bold absolute">
                                        #6
                                    </span>
                                </div>
                                <div class="fanclub-body">
                                    <h3 class="fanclub-name py-2 text-sm">GRINP Dream Stage (ねことうふ)</h3>
                                </div>
                                <a class="link-block hidden-xs hidden-sm" href="/fanclubs/1446" title="" data-content="サークルGRINP/ねことうふのファンクラブ的なやつ" data-container="body" data-placement="top" data-toggle="popover" data-trigger="hover" data-original-title="GRINP Dream Stage (ねことうふ)"></a><a class="link-block visible-xs-block visible-sm-block" href="/fanclubs/1446" title="GRINP Dream Stage (ねことうふ)"></a>
                                <a ng-if="!isLoggedIn()" class="link-block  " ng-class="getBtnClass()" href="/sessions/signin"><span>ファンになる</span></a>
                            </div>
                        </div>
                        <div class="w-1/2 mb-5">
                            <div class="module fanclub p-1 fanclub-sm">
                                <div class="fanclub-header relative"><img class="img-fluid rounded-full w-full lazyloaded" data-src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" alt="GRINP Dream Stage (ねことうふ)">
                                    <div class="fanclub-fan-count">
                                        <span class="text-primary text-pink-500">
                                            <i class="fa fa-fw fa-heart " aria-hidden="true"></i>
                                            702
                                        </span>
                                    </div>
                                    <span class="fanclub-tip  text-gray-500 font-bold absolute">
                                        #7
                                    </span>
                                </div>
                                <div class="fanclub-body">
                                    <h3 class="fanclub-name py-2 text-sm">GRINP Dream Stage (ねことうふ)</h3>
                                </div>
                                <a class="link-block hidden-xs hidden-sm" href="/fanclubs/1446" title="" data-content="サークルGRINP/ねことうふのファンクラブ的なやつ" data-container="body" data-placement="top" data-toggle="popover" data-trigger="hover" data-original-title="GRINP Dream Stage (ねことうふ)"></a><a class="link-block visible-xs-block visible-sm-block" href="/fanclubs/1446" title="GRINP Dream Stage (ねことうふ)"></a>
                                <a ng-if="!isLoggedIn()" class="inline-block pt-1 px-2 text-white bg-pink-500 rounded-md" ng-class="getBtnClass()" href="/sessions/signin"><span>ファンになる</span></a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-footer border-t-1 main--border__color p-5 text-sm text-center"><a href="/?brand_type=0" title="ファンティア総合(男性向け)TOP">もっとみる<i class="fa fa-caret-right ml-2"></i></a></div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $(document).ready(function() {
        $('.header--slider').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            dots: true,
            arrows: true,
        });
    });
</script>


@endsection