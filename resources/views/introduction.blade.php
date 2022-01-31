@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/main_page.css')}}" />
<main class="container mx-auto">
    <div class="pt-20 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-8 text-blue-600 text-sm">
        <!--Card 1-->
        <div class="rounded-lg overflow-hidden shadow-lg bg-white">
            <a class="js-bnr-href" href="https://spotlight.fantia.jp/news/20210921_200cp?utm_source=fantia_top&amp;#038;utm_medium=banner&amp;#038;utm_campaign=20210921_200cp" target="_blank">
                <img class="img-fluid js-bnr-src" height="200" src="https://spotlight.fantia.jp/wp-content/uploads/2021/09/200コインプレゼント_900x300-512x171.jpg" width="600" style="">
            </a>
            <div class="px-8 py-6">
                <a class="clamp-2 js-bnr-href js-bnr-text leading-6" href="https://spotlight.fantia.jp/news/20210921_200cp?utm_source=fantia_top&amp;#038;utm_medium=banner&amp;#038;utm_campaign=20210921_200cp">【キャンペーン情報】有料プラン新規入会で200コインプレゼント！</a>
            </div>
        </div>
        <!--Card 2-->
        <div class="rounded-lg overflow-hidden shadow-lg bg-white">
            <a class="js-bnr-href" href="https://spotlight.fantia.jp/news/20210917_bonuscoin?utm_source=fantia_top&amp;#038;utm_medium=banner&amp;#038;utm_campaign=20210917_bonuscoin" target="_blank">
                <img class="img-fluid js-bnr-src" height="200" src="https://spotlight.fantia.jp/wp-content/uploads/2021/09/とらコイン増量中バナー_900x300-1-512x171.jpg" width="600">
            </a>
            <div class="px-8 py-6 ">
                <a class="clamp-2 js-bnr-href js-bnr-text leading-6" href="https://spotlight.fantia.jp/news/20210917_bonuscoin?utm_source=fantia_top&amp;#038;utm_medium=banner&amp;#038;utm_campaign=20210917_bonuscoin">とらコイン 最大4.5％コイン増量中！</a>
            </div>
        </div>

        <!--Card 3-->
        <div class="rounded-lg overflow-hidden shadow-lg bg-white">
            <a class="js-bnr-href" href="https://spotlight.fantia.jp/lp/feature-udx-2021summer?utm_source=fantia_top&amp;#038;utm_medium=banner&amp;#038;utm_campaign=20210913_feature-udx-2021summer" target="_blank">
                <img class="img-fluid js-bnr-src" height="200" src="https://spotlight.fantia.jp/wp-content/uploads/2021/09/UDX交流会バナー_900x300-512x171.jpg" width="600">
            </a>
            <div class="px-8 py-6 ">
                <a class="clamp-2 js-bnr-href js-bnr-text leading-6" href="https://spotlight.fantia.jp/lp/feature-udx-2021summer?utm_source=fantia_top&amp;#038;utm_medium=banner&amp;#038;utm_campaign=20210913_feature-udx-2021summer">Dream Stage＆Creatia 交流会2021 SUMMER in UDX</a>
            </div>
        </div>
    </div>

    <div class="pt-20 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-8">
        <div class="rounded-lg overflow-hidden shadow-lg bg-white text-gray-500">
            <h2 class="card-header relative py-10 px-10 bg-blue-100 text-center"><a href="/?brand_type=3" class="underline text-blue-500 font-bold">全年齢<i class="fa fa-caret-right ml-5"></i></a>
                <div class="chara absolute"><img alt="全年齢" class="img-fluid" height="300" src="{{asset('images/icon/man.png')}}" width="300"></div>
            </h2>
            <div class="card-body overflow-hidden relative bg-white">
                <div class="text-center py-5">
                    <h3 class="card-sub-title bg-gray-700 py-2 px-5 bg-black text-white rounded-full inline-block font-bold text-sm">注目クリエイター</h3>
                </div>
                <div class="js-index-top-fanclubs-container flex flex-wrap px-5" data-brand-type="3" data-limit="6">
                    <!-- <div class="alert alert-danger alert-fail" style="display: none;">読み込みに失敗しました。時間をおいて再度リロードしてください。</div> -->
                    <div class="w-1/2">
                        <div class="module fanclub p-5 fanclub-sm">
                            <div class="fanclub-header relative"><img class="img-fluid rounded-full w-full lazyloaded" data-src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" alt="GRINP Dream Stage (ねことうふ)">
                                <div class="fanclub-fan-count">
                                    <span class="text-primary text-pink-500">
                                        <i class="fa fa-fw fa-heart " aria-hidden="true"></i>
                                        702
                                    </span>
                                </div>
                                <a class="fanclub-cat rounded-full text-white py-1 px-5 text-xs absolute" href="/fanclubs?category=comic" title="カテゴリー「漫画」クリエイター一覧">
                                    漫画
                                </a>
                            </div>
                            <div class="fanclub-body">
                                <h3 class="fanclub-name py-2 text-sm">GRINP Dream Stage (ねことうふ)</h3>
                            </div><a class="link-block hidden-xs hidden-sm" href="/fanclubs/1446" title="" data-content="サークルGRINP/ねことうふのファンクラブ的なやつ" data-container="body" data-placement="top" data-toggle="popover" data-trigger="hover" data-original-title="GRINP Dream Stage (ねことうふ)"></a><a class="link-block visible-xs-block visible-sm-block" href="/fanclubs/1446" title="GRINP Dream Stage (ねことうふ)"></a>
                        </div>
                    </div>
                    <div class="w-1/2">
                        <div class="module fanclub p-5 fanclub-sm">
                            <div class="fanclub-header relative"><img class="img-fluid rounded-full w-full lazyloaded" data-src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" alt="GRINP Dream Stage (ねことうふ)">
                                <div class="fanclub-fan-count">
                                    <span class="text-primary text-pink-500">
                                        <i class="fa fa-fw fa-heart " aria-hidden="true"></i>
                                        702
                                    </span>
                                </div>
                                <a class="fanclub-cat rounded-full text-white py-1 px-5 text-xs absolute" href="/fanclubs?category=comic" title="カテゴリー「漫画」クリエイター一覧">
                                    漫画
                                </a>
                            </div>
                            <div class="fanclub-body">
                                <h3 class="fanclub-name py-2 text-sm">GRINP Dream Stage (ねことうふ)</h3>
                            </div><a class="link-block hidden-xs hidden-sm" href="/fanclubs/1446" title="" data-content="サークルGRINP/ねことうふのファンクラブ的なやつ" data-container="body" data-placement="top" data-toggle="popover" data-trigger="hover" data-original-title="GRINP Dream Stage (ねことうふ)"></a><a class="link-block visible-xs-block visible-sm-block" href="/fanclubs/1446" title="GRINP Dream Stage (ねことうふ)"></a>
                        </div>
                    </div>
                    <div class="w-1/2">
                        <div class="module fanclub p-5 fanclub-sm">
                            <div class="fanclub-header relative"><img class="img-fluid rounded-full w-full lazyloaded" data-src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" alt="GRINP Dream Stage (ねことうふ)">
                                <div class="fanclub-fan-count">
                                    <span class="text-primary text-pink-500">
                                        <i class="fa fa-fw fa-heart " aria-hidden="true"></i>
                                        702
                                    </span>
                                </div>
                                <a class="fanclub-cat rounded-full text-white py-1 px-5 text-xs absolute" href="/fanclubs?category=comic" title="カテゴリー「漫画」クリエイター一覧">
                                    漫画
                                </a>
                            </div>
                            <div class="fanclub-body">
                                <h3 class="fanclub-name py-2 text-sm">GRINP Dream Stage (ねことうふ)</h3>
                            </div><a class="link-block hidden-xs hidden-sm" href="/fanclubs/1446" title="" data-content="サークルGRINP/ねことうふのファンクラブ的なやつ" data-container="body" data-placement="top" data-toggle="popover" data-trigger="hover" data-original-title="GRINP Dream Stage (ねことうふ)"></a><a class="link-block visible-xs-block visible-sm-block" href="/fanclubs/1446" title="GRINP Dream Stage (ねことうふ)"></a>
                        </div>
                    </div>
                    <div class="w-1/2">
                        <div class="module fanclub p-5 fanclub-sm">
                            <div class="fanclub-header relative"><img class="img-fluid rounded-full w-full lazyloaded" data-src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" alt="GRINP Dream Stage (ねことうふ)">
                                <div class="fanclub-fan-count">
                                    <span class="text-primary text-pink-500">
                                        <i class="fa fa-fw fa-heart " aria-hidden="true"></i>
                                        702
                                    </span>
                                </div>
                                <a class="fanclub-cat rounded-full text-white py-1 px-5 text-xs absolute" href="/fanclubs?category=comic" title="カテゴリー「漫画」クリエイター一覧">
                                    漫画
                                </a>
                            </div>
                            <div class="fanclub-body">
                                <h3 class="fanclub-name py-2 text-sm">GRINP Dream Stage (ねことうふ)</h3>
                            </div><a class="link-block hidden-xs hidden-sm" href="/fanclubs/1446" title="" data-content="サークルGRINP/ねことうふのファンクラブ的なやつ" data-container="body" data-placement="top" data-toggle="popover" data-trigger="hover" data-original-title="GRINP Dream Stage (ねことうふ)"></a><a class="link-block visible-xs-block visible-sm-block" href="/fanclubs/1446" title="GRINP Dream Stage (ねことうふ)"></a>
                        </div>
                    </div>
                    <div class="w-1/2">
                        <div class="module fanclub p-5 fanclub-sm">
                            <div class="fanclub-header relative"><img class="img-fluid rounded-full w-full lazyloaded" data-src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" alt="GRINP Dream Stage (ねことうふ)">
                                <div class="fanclub-fan-count">
                                    <span class="text-primary text-pink-500">
                                        <i class="fa fa-fw fa-heart " aria-hidden="true"></i>
                                        702
                                    </span>
                                </div>
                                <a class="fanclub-cat rounded-full text-white py-1 px-5 text-xs absolute" href="/fanclubs?category=comic" title="カテゴリー「漫画」クリエイター一覧">
                                    漫画
                                </a>
                            </div>
                            <div class="fanclub-body">
                                <h3 class="fanclub-name py-2 text-sm">GRINP Dream Stage (ねことうふ)</h3>
                            </div><a class="link-block hidden-xs hidden-sm" href="/fanclubs/1446" title="" data-content="サークルGRINP/ねことうふのファンクラブ的なやつ" data-container="body" data-placement="top" data-toggle="popover" data-trigger="hover" data-original-title="GRINP Dream Stage (ねことうふ)"></a><a class="link-block visible-xs-block visible-sm-block" href="/fanclubs/1446" title="GRINP Dream Stage (ねことうふ)"></a>
                        </div>
                    </div>
                    <div class="w-1/2">
                        <div class="module fanclub p-5 fanclub-sm">
                            <div class="fanclub-header relative"><img class="img-fluid rounded-full w-full lazyloaded" data-src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" alt="GRINP Dream Stage (ねことうふ)">
                                <div class="fanclub-fan-count">
                                    <span class="text-primary text-pink-500">
                                        <i class="fa fa-fw fa-heart " aria-hidden="true"></i>
                                        702
                                    </span>
                                </div>
                                <a class="fanclub-cat rounded-full text-white py-1 px-5 text-xs absolute" href="/fanclubs?category=comic" title="カテゴリー「漫画」クリエイター一覧">
                                    漫画
                                </a>
                            </div>
                            <div class="fanclub-body">
                                <h3 class="fanclub-name py-2 text-sm">GRINP Dream Stage (ねことうふ)</h3>
                            </div><a class="link-block hidden-xs hidden-sm" href="/fanclubs/1446" title="" data-content="サークルGRINP/ねことうふのファンクラブ的なやつ" data-container="body" data-placement="top" data-toggle="popover" data-trigger="hover" data-original-title="GRINP Dream Stage (ねことうふ)"></a><a class="link-block visible-xs-block visible-sm-block" href="/fanclubs/1446" title="GRINP Dream Stage (ねことうふ)"></a>
                        </div>
                    </div>
                    <div class="w-1/2">
                        <div class="module fanclub p-5 fanclub-sm">
                            <div class="fanclub-header relative"><img class="img-fluid rounded-full w-full lazyloaded" data-src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" alt="GRINP Dream Stage (ねことうふ)">
                                <div class="fanclub-fan-count">
                                    <span class="text-primary text-pink-500">
                                        <i class="fa fa-fw fa-heart " aria-hidden="true"></i>
                                        702
                                    </span>
                                </div>
                                <a class="fanclub-cat rounded-full text-white py-1 px-5 text-xs absolute" href="/fanclubs?category=comic" title="カテゴリー「漫画」クリエイター一覧">
                                    漫画
                                </a>
                            </div>
                            <div class="fanclub-body">
                                <h3 class="fanclub-name py-2 text-sm">GRINP Dream Stage (ねことうふ)</h3>
                            </div><a class="link-block hidden-xs hidden-sm" href="/fanclubs/1446" title="" data-content="サークルGRINP/ねことうふのファンクラブ的なやつ" data-container="body" data-placement="top" data-toggle="popover" data-trigger="hover" data-original-title="GRINP Dream Stage (ねことうふ)"></a><a class="link-block visible-xs-block visible-sm-block" href="/fanclubs/1446" title="GRINP Dream Stage (ねことうふ)"></a>
                        </div>
                    </div>

                </div>
                <p class="pt-7 pb-15 text-center"><a class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-4 px-10 rounded-full" href="/ranking?brand_type=3&amp;category=illust&amp;content=fanclub&amp;kind=point&amp;period=daily" title="全年齢クリエイターデイリーカテゴリー">デイリーランキングをみる<i class="fa fa-caret-right ml-5"></i></a></p>
            </div>
            <div class="card-footer border-t-1 main--border__color p-8 text-sm text-right"><a href="/?brand_type=0" title="ファンティア総合(男性向け)TOP">総合(男性向け)TOP<i class="fa fa-caret-right ml-2"></i></a></div>
        </div>
        <div class="rounded-lg overflow-hidden shadow-lg bg-white text-gray-500">
            <h2 class="card-header relative py-10 px-10 bg-red-100 text-center"><a href="/?brand_type=3" class="underline text-red-500 font-bold">総合(男性向け)<i class="fa fa-caret-right ml-5"></i></a>
                <div class="chara absolute"><img alt="全年齢" class="img-fluid" height="300" src="{{asset('images/icon/woman.png')}}" width="300"></div>
            </h2>
            <div class="card-body overflow-hidden relative bg-white">
                <div class="text-center py-5">
                    <h3 class="card-sub-title bg-gray-700 py-2 px-5 bg-black text-white rounded-full inline-block font-bold text-sm">注目クリエイター</h3>
                </div>
                <div class="js-index-top-fanclubs-container flex flex-wrap px-5" data-brand-type="3" data-limit="6">
                    <!-- <div class="alert alert-danger alert-fail" style="display: none;">読み込みに失敗しました。時間をおいて再度リロードしてください。</div> -->
                    <div class="w-1/2">
                        <div class="module fanclub p-5 fanclub-sm">
                            <div class="fanclub-header relative"><img class="img-fluid rounded-full w-full lazyloaded" data-src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" alt="GRINP Dream Stage (ねことうふ)">
                                <div class="fanclub-fan-count">
                                    <span class="text-primary text-pink-500">
                                        <i class="fa fa-fw fa-heart " aria-hidden="true"></i>
                                        702
                                    </span>
                                </div>
                                <a class="fanclub-cat rounded-full text-white py-1 px-5 text-xs absolute" href="/fanclubs?category=comic" title="カテゴリー「漫画」クリエイター一覧">
                                    漫画
                                </a>
                            </div>
                            <div class="fanclub-body">
                                <h3 class="fanclub-name py-2 text-sm">GRINP Dream Stage (ねことうふ)</h3>
                            </div><a class="link-block hidden-xs hidden-sm" href="/fanclubs/1446" title="" data-content="サークルGRINP/ねことうふのファンクラブ的なやつ" data-container="body" data-placement="top" data-toggle="popover" data-trigger="hover" data-original-title="GRINP Dream Stage (ねことうふ)"></a><a class="link-block visible-xs-block visible-sm-block" href="/fanclubs/1446" title="GRINP Dream Stage (ねことうふ)"></a>
                        </div>
                    </div>
                    <div class="w-1/2">
                        <div class="module fanclub p-5 fanclub-sm">
                            <div class="fanclub-header relative"><img class="img-fluid rounded-full w-full lazyloaded" data-src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" alt="GRINP Dream Stage (ねことうふ)">
                                <div class="fanclub-fan-count">
                                    <span class="text-primary text-pink-500">
                                        <i class="fa fa-fw fa-heart " aria-hidden="true"></i>
                                        702
                                    </span>
                                </div>
                                <a class="fanclub-cat rounded-full text-white py-1 px-5 text-xs absolute" href="/fanclubs?category=comic" title="カテゴリー「漫画」クリエイター一覧">
                                    漫画
                                </a>
                            </div>
                            <div class="fanclub-body">
                                <h3 class="fanclub-name py-2 text-sm">GRINP Dream Stage (ねことうふ)</h3>
                            </div><a class="link-block hidden-xs hidden-sm" href="/fanclubs/1446" title="" data-content="サークルGRINP/ねことうふのファンクラブ的なやつ" data-container="body" data-placement="top" data-toggle="popover" data-trigger="hover" data-original-title="GRINP Dream Stage (ねことうふ)"></a><a class="link-block visible-xs-block visible-sm-block" href="/fanclubs/1446" title="GRINP Dream Stage (ねことうふ)"></a>
                        </div>
                    </div>
                    <div class="w-1/2">
                        <div class="module fanclub p-5 fanclub-sm">
                            <div class="fanclub-header relative"><img class="img-fluid rounded-full w-full lazyloaded" data-src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" alt="GRINP Dream Stage (ねことうふ)">
                                <div class="fanclub-fan-count">
                                    <span class="text-primary text-pink-500">
                                        <i class="fa fa-fw fa-heart " aria-hidden="true"></i>
                                        702
                                    </span>
                                </div>
                                <a class="fanclub-cat rounded-full text-white py-1 px-5 text-xs absolute" href="/fanclubs?category=comic" title="カテゴリー「漫画」クリエイター一覧">
                                    漫画
                                </a>
                            </div>
                            <div class="fanclub-body">
                                <h3 class="fanclub-name py-2 text-sm">GRINP Dream Stage (ねことうふ)</h3>
                            </div><a class="link-block hidden-xs hidden-sm" href="/fanclubs/1446" title="" data-content="サークルGRINP/ねことうふのファンクラブ的なやつ" data-container="body" data-placement="top" data-toggle="popover" data-trigger="hover" data-original-title="GRINP Dream Stage (ねことうふ)"></a><a class="link-block visible-xs-block visible-sm-block" href="/fanclubs/1446" title="GRINP Dream Stage (ねことうふ)"></a>
                        </div>
                    </div>
                    <div class="w-1/2">
                        <div class="module fanclub p-5 fanclub-sm">
                            <div class="fanclub-header relative"><img class="img-fluid rounded-full w-full lazyloaded" data-src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" alt="GRINP Dream Stage (ねことうふ)">
                                <div class="fanclub-fan-count">
                                    <span class="text-primary text-pink-500">
                                        <i class="fa fa-fw fa-heart " aria-hidden="true"></i>
                                        702
                                    </span>
                                </div>
                                <a class="fanclub-cat rounded-full text-white py-1 px-5 text-xs absolute" href="/fanclubs?category=comic" title="カテゴリー「漫画」クリエイター一覧">
                                    漫画
                                </a>
                            </div>
                            <div class="fanclub-body">
                                <h3 class="fanclub-name py-2 text-sm">GRINP Dream Stage (ねことうふ)</h3>
                            </div><a class="link-block hidden-xs hidden-sm" href="/fanclubs/1446" title="" data-content="サークルGRINP/ねことうふのファンクラブ的なやつ" data-container="body" data-placement="top" data-toggle="popover" data-trigger="hover" data-original-title="GRINP Dream Stage (ねことうふ)"></a><a class="link-block visible-xs-block visible-sm-block" href="/fanclubs/1446" title="GRINP Dream Stage (ねことうふ)"></a>
                        </div>
                    </div>
                    <div class="w-1/2">
                        <div class="module fanclub p-5 fanclub-sm">
                            <div class="fanclub-header relative"><img class="img-fluid rounded-full w-full lazyloaded" data-src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" alt="GRINP Dream Stage (ねことうふ)">
                                <div class="fanclub-fan-count">
                                    <span class="text-primary text-pink-500">
                                        <i class="fa fa-fw fa-heart " aria-hidden="true"></i>
                                        702
                                    </span>
                                </div>
                                <a class="fanclub-cat rounded-full text-white py-1 px-5 text-xs absolute" href="/fanclubs?category=comic" title="カテゴリー「漫画」クリエイター一覧">
                                    漫画
                                </a>
                            </div>
                            <div class="fanclub-body">
                                <h3 class="fanclub-name py-2 text-sm">GRINP Dream Stage (ねことうふ)</h3>
                            </div><a class="link-block hidden-xs hidden-sm" href="/fanclubs/1446" title="" data-content="サークルGRINP/ねことうふのファンクラブ的なやつ" data-container="body" data-placement="top" data-toggle="popover" data-trigger="hover" data-original-title="GRINP Dream Stage (ねことうふ)"></a><a class="link-block visible-xs-block visible-sm-block" href="/fanclubs/1446" title="GRINP Dream Stage (ねことうふ)"></a>
                        </div>
                    </div>
                    <div class="w-1/2">
                        <div class="module fanclub p-5 fanclub-sm">
                            <div class="fanclub-header relative"><img class="img-fluid rounded-full w-full lazyloaded" data-src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" alt="GRINP Dream Stage (ねことうふ)">
                                <div class="fanclub-fan-count">
                                    <span class="text-primary text-pink-500">
                                        <i class="fa fa-fw fa-heart " aria-hidden="true"></i>
                                        702
                                    </span>
                                </div>
                                <a class="fanclub-cat rounded-full text-white py-1 px-5 text-xs absolute" href="/fanclubs?category=comic" title="カテゴリー「漫画」クリエイター一覧">
                                    漫画
                                </a>
                            </div>
                            <div class="fanclub-body">
                                <h3 class="fanclub-name py-2 text-sm">GRINP Dream Stage (ねことうふ)</h3>
                            </div><a class="link-block hidden-xs hidden-sm" href="/fanclubs/1446" title="" data-content="サークルGRINP/ねことうふのファンクラブ的なやつ" data-container="body" data-placement="top" data-toggle="popover" data-trigger="hover" data-original-title="GRINP Dream Stage (ねことうふ)"></a><a class="link-block visible-xs-block visible-sm-block" href="/fanclubs/1446" title="GRINP Dream Stage (ねことうふ)"></a>
                        </div>
                    </div>
                    <div class="w-1/2">
                        <div class="module fanclub p-5 fanclub-sm">
                            <div class="fanclub-header relative"><img class="img-fluid rounded-full w-full lazyloaded" data-src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" alt="GRINP Dream Stage (ねことうふ)">
                                <div class="fanclub-fan-count">
                                    <span class="text-primary text-pink-500">
                                        <i class="fa fa-fw fa-heart " aria-hidden="true"></i>
                                        702
                                    </span>
                                </div>
                                <a class="fanclub-cat rounded-full text-white py-1 px-5 text-xs absolute" href="/fanclubs?category=comic" title="カテゴリー「漫画」クリエイター一覧">
                                    漫画
                                </a>
                            </div>
                            <div class="fanclub-body">
                                <h3 class="fanclub-name py-2 text-sm">GRINP Dream Stage (ねことうふ)</h3>
                            </div><a class="link-block hidden-xs hidden-sm" href="/fanclubs/1446" title="" data-content="サークルGRINP/ねことうふのファンクラブ的なやつ" data-container="body" data-placement="top" data-toggle="popover" data-trigger="hover" data-original-title="GRINP Dream Stage (ねことうふ)"></a><a class="link-block visible-xs-block visible-sm-block" href="/fanclubs/1446" title="GRINP Dream Stage (ねことうふ)"></a>
                        </div>
                    </div>

                </div>
                <p class="pt-7 pb-15 text-center"><a class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-4 px-10 rounded-full" href="/ranking?brand_type=3&amp;category=illust&amp;content=fanclub&amp;kind=point&amp;period=daily" title="全年齢クリエイターデイリーカテゴリー">デイリーランキングをみる<i class="fa fa-caret-right ml-5"></i></a></p>
            </div>
            <div class="card-footer border-t-1 main--border__color p-8 text-sm text-right"><a href="/?brand_type=0" title="ファンティア総合(男性向け)TOP">総合(男性向け)TOP<i class="fa fa-caret-right ml-2"></i></a></div>
        </div>
        <div class="rounded-lg overflow-hidden shadow-lg bg-white text-gray-500">
            <h2 class="card-header relative py-10 px-10 bg-green-100 text-center"><a href="/?brand_type=3" class="underline text-green-500 font-bold">女性向け<i class="fa fa-caret-right ml-5"></i></a>
                <div class="chara absolute"><img alt="全年齢" class="img-fluid" height="300" src="{{asset('images/icon/all-age.png')}}" width="300"></div>
            </h2>
            <div class="card-body overflow-hidden relative bg-white">
                <div class="text-center py-5">
                    <h3 class="card-sub-title bg-gray-700 py-2 px-5 bg-black text-white rounded-full inline-block font-bold text-sm">注目クリエイター</h3>
                </div>
                <div class="js-index-top-fanclubs-container flex flex-wrap px-5" data-brand-type="3" data-limit="6">
                    <!-- <div class="alert alert-danger alert-fail" style="display: none;">読み込みに失敗しました。時間をおいて再度リロードしてください。</div> -->
                    <div class="w-1/2">
                        <div class="module fanclub p-5 fanclub-sm">
                            <div class="fanclub-header relative"><img class="img-fluid rounded-full w-full lazyloaded" data-src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" alt="GRINP Dream Stage (ねことうふ)">
                                <div class="fanclub-fan-count">
                                    <span class="text-primary text-pink-500">
                                        <i class="fa fa-fw fa-heart " aria-hidden="true"></i>
                                        702
                                    </span>
                                </div>
                                <a class="fanclub-cat rounded-full text-white py-1 px-5 text-xs absolute" href="/fanclubs?category=comic" title="カテゴリー「漫画」クリエイター一覧">
                                    漫画
                                </a>
                            </div>
                            <div class="fanclub-body">
                                <h3 class="fanclub-name py-2 text-sm">GRINP Dream Stage (ねことうふ)</h3>
                            </div><a class="link-block hidden-xs hidden-sm" href="/fanclubs/1446" title="" data-content="サークルGRINP/ねことうふのファンクラブ的なやつ" data-container="body" data-placement="top" data-toggle="popover" data-trigger="hover" data-original-title="GRINP Dream Stage (ねことうふ)"></a><a class="link-block visible-xs-block visible-sm-block" href="/fanclubs/1446" title="GRINP Dream Stage (ねことうふ)"></a>
                        </div>
                    </div>
                    <div class="w-1/2">
                        <div class="module fanclub p-5 fanclub-sm">
                            <div class="fanclub-header relative"><img class="img-fluid rounded-full w-full lazyloaded" data-src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" alt="GRINP Dream Stage (ねことうふ)">
                                <div class="fanclub-fan-count">
                                    <span class="text-primary text-pink-500">
                                        <i class="fa fa-fw fa-heart " aria-hidden="true"></i>
                                        702
                                    </span>
                                </div>
                                <a class="fanclub-cat rounded-full text-white py-1 px-5 text-xs absolute" href="/fanclubs?category=comic" title="カテゴリー「漫画」クリエイター一覧">
                                    漫画
                                </a>
                            </div>
                            <div class="fanclub-body">
                                <h3 class="fanclub-name py-2 text-sm">GRINP Dream Stage (ねことうふ)</h3>
                            </div><a class="link-block hidden-xs hidden-sm" href="/fanclubs/1446" title="" data-content="サークルGRINP/ねことうふのファンクラブ的なやつ" data-container="body" data-placement="top" data-toggle="popover" data-trigger="hover" data-original-title="GRINP Dream Stage (ねことうふ)"></a><a class="link-block visible-xs-block visible-sm-block" href="/fanclubs/1446" title="GRINP Dream Stage (ねことうふ)"></a>
                        </div>
                    </div>
                    <div class="w-1/2">
                        <div class="module fanclub p-5 fanclub-sm">
                            <div class="fanclub-header relative"><img class="img-fluid rounded-full w-full lazyloaded" data-src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" alt="GRINP Dream Stage (ねことうふ)">
                                <div class="fanclub-fan-count">
                                    <span class="text-primary text-pink-500">
                                        <i class="fa fa-fw fa-heart " aria-hidden="true"></i>
                                        702
                                    </span>
                                </div>
                                <a class="fanclub-cat rounded-full text-white py-1 px-5 text-xs absolute" href="/fanclubs?category=comic" title="カテゴリー「漫画」クリエイター一覧">
                                    漫画
                                </a>
                            </div>
                            <div class="fanclub-body">
                                <h3 class="fanclub-name py-2 text-sm">GRINP Dream Stage (ねことうふ)</h3>
                            </div><a class="link-block hidden-xs hidden-sm" href="/fanclubs/1446" title="" data-content="サークルGRINP/ねことうふのファンクラブ的なやつ" data-container="body" data-placement="top" data-toggle="popover" data-trigger="hover" data-original-title="GRINP Dream Stage (ねことうふ)"></a><a class="link-block visible-xs-block visible-sm-block" href="/fanclubs/1446" title="GRINP Dream Stage (ねことうふ)"></a>
                        </div>
                    </div>
                    <div class="w-1/2">
                        <div class="module fanclub p-5 fanclub-sm">
                            <div class="fanclub-header relative"><img class="img-fluid rounded-full w-full lazyloaded" data-src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" alt="GRINP Dream Stage (ねことうふ)">
                                <div class="fanclub-fan-count">
                                    <span class="text-primary text-pink-500">
                                        <i class="fa fa-fw fa-heart " aria-hidden="true"></i>
                                        702
                                    </span>
                                </div>
                                <a class="fanclub-cat rounded-full text-white py-1 px-5 text-xs absolute" href="/fanclubs?category=comic" title="カテゴリー「漫画」クリエイター一覧">
                                    漫画
                                </a>
                            </div>
                            <div class="fanclub-body">
                                <h3 class="fanclub-name py-2 text-sm">GRINP Dream Stage (ねことうふ)</h3>
                            </div><a class="link-block hidden-xs hidden-sm" href="/fanclubs/1446" title="" data-content="サークルGRINP/ねことうふのファンクラブ的なやつ" data-container="body" data-placement="top" data-toggle="popover" data-trigger="hover" data-original-title="GRINP Dream Stage (ねことうふ)"></a><a class="link-block visible-xs-block visible-sm-block" href="/fanclubs/1446" title="GRINP Dream Stage (ねことうふ)"></a>
                        </div>
                    </div>
                    <div class="w-1/2">
                        <div class="module fanclub p-5 fanclub-sm">
                            <div class="fanclub-header relative"><img class="img-fluid rounded-full w-full lazyloaded" data-src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" alt="GRINP Dream Stage (ねことうふ)">
                                <div class="fanclub-fan-count">
                                    <span class="text-primary text-pink-500">
                                        <i class="fa fa-fw fa-heart " aria-hidden="true"></i>
                                        702
                                    </span>
                                </div>
                                <a class="fanclub-cat rounded-full text-white py-1 px-5 text-xs absolute" href="/fanclubs?category=comic" title="カテゴリー「漫画」クリエイター一覧">
                                    漫画
                                </a>
                            </div>
                            <div class="fanclub-body">
                                <h3 class="fanclub-name py-2 text-sm">GRINP Dream Stage (ねことうふ)</h3>
                            </div><a class="link-block hidden-xs hidden-sm" href="/fanclubs/1446" title="" data-content="サークルGRINP/ねことうふのファンクラブ的なやつ" data-container="body" data-placement="top" data-toggle="popover" data-trigger="hover" data-original-title="GRINP Dream Stage (ねことうふ)"></a><a class="link-block visible-xs-block visible-sm-block" href="/fanclubs/1446" title="GRINP Dream Stage (ねことうふ)"></a>
                        </div>
                    </div>
                    <div class="w-1/2">
                        <div class="module fanclub p-5 fanclub-sm">
                            <div class="fanclub-header relative"><img class="img-fluid rounded-full w-full lazyloaded" data-src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" alt="GRINP Dream Stage (ねことうふ)">
                                <div class="fanclub-fan-count">
                                    <span class="text-primary text-pink-500">
                                        <i class="fa fa-fw fa-heart " aria-hidden="true"></i>
                                        702
                                    </span>
                                </div>
                                <a class="fanclub-cat rounded-full text-white py-1 px-5 text-xs absolute" href="/fanclubs?category=comic" title="カテゴリー「漫画」クリエイター一覧">
                                    漫画
                                </a>
                            </div>
                            <div class="fanclub-body">
                                <h3 class="fanclub-name py-2 text-sm">GRINP Dream Stage (ねことうふ)</h3>
                            </div><a class="link-block hidden-xs hidden-sm" href="/fanclubs/1446" title="" data-content="サークルGRINP/ねことうふのファンクラブ的なやつ" data-container="body" data-placement="top" data-toggle="popover" data-trigger="hover" data-original-title="GRINP Dream Stage (ねことうふ)"></a><a class="link-block visible-xs-block visible-sm-block" href="/fanclubs/1446" title="GRINP Dream Stage (ねことうふ)"></a>
                        </div>
                    </div>
                    <div class="w-1/2">
                        <div class="module fanclub p-5 fanclub-sm">
                            <div class="fanclub-header relative"><img class="img-fluid rounded-full w-full lazyloaded" data-src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" src="https://c.fantia.jp/uploads/fanclub/icon_image/1446/thumb_23d95dee-efc6-4779-87e3-f430c8adada0.png" alt="GRINP Dream Stage (ねことうふ)">
                                <div class="fanclub-fan-count">
                                    <span class="text-primary text-pink-500">
                                        <i class="fa fa-fw fa-heart " aria-hidden="true"></i>
                                        702
                                    </span>
                                </div>
                                <a class="fanclub-cat rounded-full text-white py-1 px-5 text-xs absolute" href="/fanclubs?category=comic" title="カテゴリー「漫画」クリエイター一覧">
                                    漫画
                                </a>
                            </div>
                            <div class="fanclub-body">
                                <h3 class="fanclub-name py-2 text-sm">GRINP Dream Stage (ねことうふ)</h3>
                            </div><a class="link-block hidden-xs hidden-sm" href="/fanclubs/1446" title="" data-content="サークルGRINP/ねことうふのファンクラブ的なやつ" data-container="body" data-placement="top" data-toggle="popover" data-trigger="hover" data-original-title="GRINP Dream Stage (ねことうふ)"></a><a class="link-block visible-xs-block visible-sm-block" href="/fanclubs/1446" title="GRINP Dream Stage (ねことうふ)"></a>
                        </div>
                    </div>

                </div>
                <p class="pt-7 pb-15 text-center"><a class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-4 px-10 rounded-full" href="/ranking?brand_type=3&amp;category=illust&amp;content=fanclub&amp;kind=point&amp;period=daily" title="全年齢クリエイターデイリーカテゴリー">デイリーランキングをみる<i class="fa fa-caret-right ml-5"></i></a></p>
            </div>
            <div class="card-footer border-t-1 main--border__color p-8 text-sm text-right"><a href="/?brand_type=0" title="ファンティア総合(男性向け)TOP">総合(男性向け)TOP<i class="fa fa-caret-right ml-2"></i></a></div>
        </div>
    </div>
    <div class="rounded-lg mt-10 overflow-hidden shadow-lg bg-white">
        <h2 class="card-header relative py-10 px-10 bg-green-100 text-center font-bold text-gray-500">あなたのファンクラブをつくろう！</a>
            <div class="chara absolute"><img alt="全年齢" class="img-fluid" height="300" src="{{asset('images/icon/all-age.png')}}" width="300"></div>
        </h2>
        <div class="card-body bg-white relative p-10 overflow-hidden bg-white grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3">
            <div>
                <div class="text-center">
                    <h3 class="card-sub-title bg-gray-700  py-2 px-5 text-white rounded-full inline-block font-bold text-sm">創作活動をサポートする機能が充実！</h3>
                    <ul class="domino-style-items pt-10 px-5 border-r-1 main--border__color">
                        <li class="flex items-center mb-5 overflow-hidden border-1 main--border__color rounded-lg">
                            <div class="left w-1/2 border-r-1 main--border__color"><img alt="有料ファンだけに限定コンテンツを配信できます！" class="img-fluid" height="320" src="{{asset('images/icon/func-1.png')}}" width="320"></div>
                            <div class="right w-1/2">
                                <p>有料ファンだけに<strong>限定コンテンツ</strong>を配信できます！</p>
                            </div>
                        </li>
                        <li class="flex items-center mb-5 overflow-hidden border-1 main--border__color rounded-lg">
                            <div class="left w-1/2 border-r-1 main--border__color"><img alt="自家通販・DL販売機能が使えます！" class="img-fluid" height="320" src="{{asset('images/icon/func-2.png')}}" width="320" style=""></div>
                            <div class="right w-1/2">
                                <p><strong>自家通販・DL販売機能</strong>が使えます！</p>
                            </div>
                        </li>
                        <li class="flex items-center mb-5 overflow-hidden border-1 main--border__color rounded-lg">
                            <div class="left w-1/2 border-r-1 main--border__color"><img alt="バックナンバーを毎月自動で販売できます！" class="img-fluid" height="320" src="{{asset('images/icon/func-3.png')}}" width="320"></div>
                            <div class="right w-1/2">
                                <p><strong>バックナンバーを毎月自動で販売</strong>できます！</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="text-center">
                    <h3 class="card-sub-title bg-gray-700  py-2 px-5 text-white rounded-full inline-block font-bold text-sm">創作活動をサポートする機能が充実！</h3>
                    <ul class="domino-style-items pt-10 px-5 border-r-1 main--border__color">
                        <li class="flex items-center mb-5 overflow-hidden border-1 main--border__color rounded-lg">
                            <div class="left w-1/2 border-r-1 main--border__color"><img alt="有料ファンだけに限定コンテンツを配信できます！" class="img-fluid" height="320" src="{{asset('images/icon/func-1.png')}}" width="320"></div>
                            <div class="right w-1/2">
                                <p>有料ファンだけに<strong>限定コンテンツ</strong>を配信できます！</p>
                            </div>
                        </li>
                        <li class="flex items-center mb-5 overflow-hidden border-1 main--border__color rounded-lg">
                            <div class="left w-1/2 border-r-1 main--border__color"><img alt="自家通販・DL販売機能が使えます！" class="img-fluid" height="320" src="{{asset('images/icon/func-2.png')}}" width="320" style=""></div>
                            <div class="right w-1/2">
                                <p><strong>自家通販・DL販売機能</strong>が使えます！</p>
                            </div>
                        </li>
                        <li class="flex items-center mb-5 overflow-hidden border-1 main--border__color rounded-lg">
                            <div class="left w-1/2 border-r-1 main--border__color"><img alt="バックナンバーを毎月自動で販売できます！" class="img-fluid" height="320" src="{{asset('images/icon/func-3.png')}}" width="320"></div>
                            <div class="right w-1/2">
                                <p><strong>バックナンバーを毎月自動で販売</strong>できます！</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="text-center">
                    <h3 class="card-sub-title bg-gray-700  py-2 px-5 text-white rounded-full inline-block font-bold text-sm">創作活動をサポートする機能が充実！</h3>
                    <ul class="domino-style-items pt-10 px-5">
                        <li class="flex items-center mb-5 overflow-hidden border-1 main--border__color rounded-lg">
                            <div class="left w-1/2 border-r-1 main--border__color"><img alt="有料ファンだけに限定コンテンツを配信できます！" class="img-fluid" height="320" src="{{asset('images/icon/func-1.png')}}" width="320"></div>
                            <div class="right w-1/2">
                                <p>有料ファンだけに<strong>限定コンテンツ</strong>を配信できます！</p>
                            </div>
                        </li>
                        <li class="flex items-center mb-5 overflow-hidden border-1 main--border__color rounded-lg">
                            <div class="left w-1/2 border-r-1 main--border__color"><img alt="自家通販・DL販売機能が使えます！" class="img-fluid" height="320" src="{{asset('images/icon/func-2.png')}}" width="320" style=""></div>
                            <div class="right w-1/2">
                                <p><strong>自家通販・DL販売機能</strong>が使えます！</p>
                            </div>
                        </li>
                        <li class="flex items-center mb-5 overflow-hidden border-1 main--border__color rounded-lg">
                            <div class="left w-1/2 border-r-1 main--border__color"><img alt="バックナンバーを毎月自動で販売できます！" class="img-fluid" height="320" src="{{asset('images/icon/func-3.png')}}" width="320"></div>
                            <div class="right w-1/2">
                                <p><strong>バックナンバーを毎月自動で販売</strong>できます！</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card-footer bg-rainbow-anim border-t-1 p-10 bg-green-100">
            <p class="text-center"><strong class="text-pink-500 leading-6">あなたのファンのために、<br>いますぐファンティアを始めよう！！<br>\ まずは会員登録から！ /</strong></p>
            <p class="text-center  "><a class="rounded-full bg-pink-500 px-10 py-5 mt-5 inline-block  text-white" href="/account/signup">無料新規登録</a></p>
        </div>
    </div>

    <div class="pt-20 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-8">
        <div class="rounded-lg overflow-hidden shadow-lg bg-white text-gray-500">
            <h2 class="card-header relative py-10 px-10 bg-blue-100 text-center"><a href="/?brand_type=3" class="text-blue-500 font-bold hover:underline">お知らせ<i class="fa fa-caret-right ml-3"></i></a>
                <div class="chara absolute"><img alt="全年齢" class="img-fluid" height="300" src="{{asset('images/icon/man.png')}}" width="300"></div>
            </h2>
            <div class="card-body overflow-hidden relative p-10 bg-white">
                <ul class="news-list js-index-top-news-container">
                    <div class="alert alert-danger alert-fail" style="display: none;">読み込みに失敗しました。時間をおいて再度リロードしてください。</div>
                    <li class="pt-3">
                        <p class="post-date text-muted leading-6">2021.09.22</p>
                        <h4 class="post-title leading-6 text-blue-500 hover:underline"><a target="_blank" href="https://spotlight.fantia.jp/news/20210922_invitation" title="【キャンペーン】Fantiaへ「招待した人」も「された人」もコインが貰える！友達招待キャンペーン！">【キャンペーン】Dream Stageへ「招待した人」も「された人」もコインが貰える！友達招待キャンペーン！</a></h4>
                    </li>
                    <li class="pt-3">
                        <p class="post-date text-muted leading-6">2021.09.17</p>
                        <h4 class="post-title leading-6 text-blue-500 hover:underline"><a target="_blank" href="https://spotlight.fantia.jp/news/20210917_3dsecure" title="【重要】3Dセキュア（本人認証）非対応カードをお持ちで、Fantiaの決済ができなくなった皆様へご案内">【重要】3Dセキュア（本人認証）非対応カードをお持ちで、Dream Stageの決済ができなくなった皆様へご案内</a></h4>
                    </li>
                    <li class="pt-3">
                        <p class="post-date text-muted leading-6">2021.09.15</p>
                        <h4 class="post-title leading-6 text-blue-500 hover:underline"><a target="_blank" href="https://spotlight.fantia.jp/news/20210915_security" title="【重要】ファンティアのセキュリティ対策の取り組みについて">【重要】ファンティアのセキュリティ対策の取り組みについて</a></h4>
                    </li>
                    <li class="pt-3">
                        <p class="post-date text-muted leading-6">2021.09.01</p>
                        <h4 class="post-title leading-6 text-blue-500 hover:underline"><a target="_blank" href="https://spotlight.fantia.jp/news/20210901_creatiapr" title="[PR] 人気イラストレイターやVtuberが参加中！ファンティアアカウントでCreatiaのファンクラブに入会するとCreatia限定とらコインもらえる！">[PR] 人気イラストレイターやVtuberが参加中！ファンティアアカウントでCreatiaのファンクラブに入会するとCreatia限定とらコインもらえる！</a></h4>
                    </li>
                    <li class="pt-3">
                        <p class="post-date text-muted leading-6">2021.09.01</p>
                        <h4 class="post-title leading-6 text-blue-500 hover:underline"><a target="_blank" href="https://spotlight.fantia.jp/news/20210901_toranoanapoint" title="ファンティアでのお支払い金額に応じて、「とらのあな通販ポイント」がもらえるようになります！">ファンティアでのお支払い金額に応じて、「とらのあな通販ポイント」がもらえるようになります！</a></h4>
                    </li>
                </ul>
            </div>
            <div class="card-footer border-t-1 main--border__color p-8 text-sm text-right"><a href="/?brand_type=0" title="ファンティア総合(男性向け)TOP">総合(男性向け)TOP<i class="fa fa-caret-right ml-2"></i></a></div>
        </div>
        <div class="rounded-lg overflow-hidden shadow-lg bg-white text-gray-500">
            <h2 class="card-header relative py-10 px-10 bg-green-100 text-center"><a href="/?brand_type=3" class="text-green-500 font-bold hover:underline">よくあるご質問<i class="fa fa-caret-right ml-3"></i></a>
                <div class="chara absolute"><img alt="全年齢" class="img-fluid" height="300" src="{{asset('images/icon/all-age.png')}}" width="300"></div>
            </h2>
            <div class="card-body overflow-hidden relative p-10 bg-white">
                <ul class="faq-list js-index-top-faqs-container">
                    <div class="alert alert-danger alert-fail" style="display: none;">読み込みに失敗しました。時間をおいて再度リロードしてください。</div>
                    <li class="pt-3">
                        <h4 class="faq-question leading-6 text-green-500">Q.クリエイター登録に費用はかかりますか？</h4>
                        <p class="faq-answer leading-6">クリエイター登録にあたって、初期費用・月額利用料は不要です。有料のファンクラブ会員プランを作成した場合、毎月のファンクラブ会員費・商品販売代金から10%(税込)を、プラットフォーム手数料として申し受けます。</p>
                    </li>
                    <li class="pt-3">
                        <h4 class="faq-question leading-6 text-green-500">Q.利用できる支払方法は何ですか？</h4>
                        <p class="faq-answer leading-6">クレジットカード決済・コンビニ決済・銀行振込(Pay-easy)がご利用いただけます。</p>
                    </li>
                    <li class="pt-3">
                        <h4 class="faq-question leading-6 text-green-500">Q.法人での登録は可能ですか？</h4>
                        <p class="faq-answer leading-6">はい、法人様もファンクラブを開設していただけます。何かご不明な点やご相談等がございましたら、お気軽にお問い合わせください。</p>
                    </li>
                </ul>
            </div>
            <div class="card-footer border-t-1 main--border__color p-8 text-sm text-right"><a href="/?brand_type=0" title="ファンティア総合(男性向け)TOP">総合(男性向け)TOP<i class="fa fa-caret-right ml-2"></i></a></div>
        </div>
    </div>
</main>


@endsection