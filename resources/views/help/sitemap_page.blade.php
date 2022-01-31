@extends('layouts.help-layout')

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/help_page.css')}}" />
<div class="help--page__content">
    <div class="help--content__box border-1 main--border__color rounded-lg bg-white text-gray-500">
        <div class="content--box__header p-5 border-b-1 main--border_color">
            ドリームステージ[Dream Stage]サイトマップ
        </div>
        <div class="content--box__body p-5">
            <div id="sitemap">
                <nav class="leading-6">
                    <h2 class="text-xl mb-4 font-bold">ファンティアについて</h2>
                    <ul>
                        <li><a class="text-blue-800 text-sm hover:underline mr-10" href="/?brand_type=0" title="ファンティア総合TOP">総合ホーム</a></li>
                        <li><a class="text-blue-800 text-sm hover:underline" href="/?brand_type=2" title="ファンティア女性向けTOP">女性向けホーム</a></li>
                        <li><a class="text-blue-800 text-sm hover:underline" href="/?brand_type=3" title="全年齢向けTOP">全年齢向けホーム</a></li>
                        <li><a class="text-blue-800 text-sm hover:underline" href="/help/about">サービスについて</a></li>
                        <li><a class="text-blue-800 text-sm hover:underline" href="/help/usage">楽しみ方・使い方</a></li>
                        <li><a class="text-blue-800 text-sm hover:underline" href="https://help.fantia.jp/" target="_blank" title="よくある質問"><span>よくある質問(ヘルプセンター)</span><i class="fa fa-fw fa-external-link"></i></a></li>
                        <li><a class="text-blue-800 text-sm hover:underline" href="/help/company">会社概要</a></li>
                        <li><a class="text-blue-800 text-sm hover:underline" href="/help/terms">利用規約</a></li>
                        <li><a class="text-blue-800 text-sm hover:underline" href="https://help.fantia.jp/guideline" target="_blank" title="投稿ガイドライン"><span>投稿ガイドライン</span><i class="fa fa-fw fa-external-link"></i></a></li>
                        <li><a class="text-blue-800 text-sm hover:underline" href="/help/law">特定商取引法に基づく表記</a></li>
                        <li><a class="text-blue-800 text-sm hover:underline" href="/help/privacy">プライバシーポリシー</a></li>
                        <li><a class="text-blue-800 text-sm hover:underline" href="/help/antisocialist">反社会的勢力に対する基本方針</a></li>
                        <li><a class="text-blue-800 text-sm hover:underline" href="/help/inquiry">お問い合わせ</a></li>
                        <li><a class="text-blue-800 text-sm hover:underline" href="/help/inquiry">不正なユーザー・コンテンツの報告</a></li>
                        <li><a class="text-blue-800 text-sm hover:underline" href="https://help.fantia.jp/240" target="_blank" title="ロゴ素材のダウンロード"><span>ロゴ素材のダウンロード</span><i class="fa fa-fw fa-external-link"></i></a></li>
                        <li><a class="text-blue-800 text-sm hover:underline" href="/help/sitemap">サイトマップ</a></li>
                    </ul>
                </nav>
                <nav class="leading-6">
                    <h2 class="text-xl my-4 font-bold">ランキング</h2>
                    <ul>
                        <li><a class="text-blue-800 text-sm hover:underline" href="/ranking?content=fanclub"><span>人気のクリエイター</span></a></li>
                        <li><a class="text-blue-800 text-sm hover:underline" href="/ranking?content=post"><span>人気の投稿</span></a></li>
                        <li><a class="text-blue-800 text-sm hover:underline" href="/ranking?content=product"><span>人気の商品</span></a></li>
                        <li><a class="text-blue-800 text-sm hover:underline" href="/ranking?content=commission"><span>人気のコミッション</span></a></li>
                    </ul>
                </nav>
                <nav class="leading-6">
                    <h2 class="text-xl my-4 font-bold">探す</h2>
                    <ul>
                        <li><a class="text-blue-800 text-sm hover:underline" href="/fanclubs"><span>クリエイターを探す</span></a></li>
                        <li><a class="text-blue-800 text-sm hover:underline" href="/posts"><span>投稿を探す</span></a></li>
                        <li><a class="text-blue-800 text-sm hover:underline" href="/products"><span>商品を探す</span></a></li>
                        <li><a class="text-blue-800 text-sm hover:underline" href="/commissions"><span>コミッションを探す</span></a></li>
                        <li><a class="text-blue-800 text-sm hover:underline" href="/tags"><span>投稿タグを探す</span></a></li>
                    </ul>
                </nav>
                <nav class="leading-6">
                    <h2 class="text-xl my-4 font-bold">最新情報・TIPS</h2>
                    <ul>
                        <li><a class="text-blue-800 text-sm hover:underline" href="https://spotlight.fantia.jp/" target="_blank" title="ファンティアスポットライト"><span>ファンティアスポットライト[Fantia Spotlight]</span><i class="fa fa-fw fa-external-link"></i></a></li>
                        <li><a class="text-blue-800 text-sm hover:underline" href="https://spotlight.fantia.jp/news" target="_blank" title="お知らせ | ファンティアスポットライト"><span>お知らせ</span><i class="fa fa-fw fa-external-link"></i></a></li>
                        <li><a class="text-blue-800 text-sm hover:underline" href="https://spotlight.fantia.jp/creator" target="_blank" title="クリエイター紹介 | ファンティアスポットライト"><span>クリエイター紹介</span><i class="fa fa-fw fa-external-link"></i></a></li>
                        <li><a class="text-blue-800 text-sm hover:underline" href="https://spotlight.fantia.jp/interview" target="_blank" title="インタビュー | ファンティアスポットライト"><span>インタビュー</span><i class="fa fa-fw fa-external-link"></i></a></li>
                        <li><a class="text-blue-800 text-sm hover:underline" href="https://spotlight.fantia.jp/tips" target="_blank" title="ファンティアの使い方 | ファンティアスポットライト"><span>ファンティアの使い方</span><i class="fa fa-fw fa-external-link"></i></a></li>
                    </ul>
                </nav>
                <nav class="leading-6">
                    <h2 class="text-xl my-4 font-bold">ソーシャルアカウント</h2>
                    <ul>
                        <li><a class="text-blue-800 text-sm hover:underline" href="https://twitter.com/fantia_jp" target="_blank" title="ファンティア公式Twitter"><span>ファンティア公式Twitter</span><i class="fa fa-fw fa-external-link"></i></a></li>
                        <li><a class="text-blue-800 text-sm hover:underline" href="https://www.facebook.com/fantiajp" target="_blank" title="ファンティア公式Facebook"><span>ファンティア公式Facebook</span><i class="fa fa-fw fa-external-link"></i></a></li>
                        <li><a class="text-blue-800 text-sm hover:underline" href="https://www.instagram.com/fantiajp/" target="_blank" title="ファンティア公式Instagram"><span>ファンティア公式Instagram</span><i class="fa fa-fw fa-external-link"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection