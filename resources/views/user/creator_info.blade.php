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
    <header>
        <div class="layout--bg__color border-b-1 main--border__color text-center p-5">
            <img src="{{asset('images/logo/logo-star.png')}}" width="250" class="mx-auto" alt="logo-star">
        </div>
        <div class="layout--bg__color border-b-1 main--border__color text-center p-5 text-sm text-gray-500">
            <a href="{{url('/')}}" class="text-blue-400 hover:underline hover:text-blue-500">ドリームステージ</a> / クリエイター情報の入力
        </div>
    </header>
    <main class="container mx-auto px-20">
        <div class=" px-20  mt-10">
            <form class="new_fanclub" id="new_fanclub" action="/mypage/fanclubs" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="b3VzEpKPKbL7Q4dvk_Hw-9LzQXRRCCtiWupXJUAIKFVTV99LgUB5hmzcVc_amvN9e2Z5LZYeQWCd3MV47EcdTw">
                <div class="px-20 text-gray-500">
                    <div class="bg-white border-1 main--border__color rounded-lg">
                        <div class="p-5 panel-heading panel-heading-lg border-b-1 main--border__color">
                            <h1 class="panel-title">クリエイター情報の入力</h1>
                        </div>
                        <div class="list-group list-group-lg">
                            <div class="p-5 bg-gray-800 text-white list-group-item list-group-item-muted"><span class="text-bold">基本情報</span></div>
                            <div class="p-5 form-group list-group-item border-b-1 main--border__color">
                                <div class="flex">
                                    <div class="w-1/4 mr-10"><span class="label text-sm text-white bg-pink-700 mr-2">必須</span><label class="control-label">ブランド</label></div>
                                    <div class="w-3/4"><select class="form-control input-lg w-full border-gray-300 px-3 py-2 border-1 rounded" name="fanclub[brand]" id="fanclub_brand">
                                            <option selected="selected" value="pangender">総合(男性向け)</option>
                                            <option value="female">女性向け</option>
                                            <option value="all_age">全年齢(成人向け投稿不可)</option>
                                        </select>
                                        <span class="help-block text-sm block mt-2">ブランドについて詳しくは<a class="text-blue-500" href="https://help.fantia.jp/?p=1018" target="_blank"><span>こちら</span><i class="fa fa-fw fa-external-link"></i></a>をご参照ください。</span>
                                        <p class="text-pink-700 text-sm mt-4">[New!] 全年齢を選択できるようになりました！</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-5 form-group list-group-item border-b-1 main--border__color">
                                <div class="flex">
                                    <div class="w-1/4 mr-10"><span class="label text-sm text-white bg-pink-700 mr-2">必須</span><label class="control-label">クリエイター名</label></div>
                                    <div class="w-3/4"><input value="" class="form-control input-lg w-full border-gray-300 px-3 py-2 border-1 rounded" type="text" name="fanclub[creator_name]" id="fanclub_creator_name">
                                        <span class="help-block text-sm leading-6">ユーザー名とは別に設定できます。<br><span class="text-green-500 text-sm">例：虎々</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-5 form-group list-group-item border-b-1 main--border__color">
                                <div class="flex">
                                    <div class="w-1/4 mr-10"><span class="label text-sm text-white bg-pink-700 mr-2">必須</span><label class="control-label">ファンクラブ名</label></div>
                                    <div class="w-3/4"><input value="" class="form-control input-lg w-full border-gray-300 px-3 py-2 border-1 rounded" type="text" name="fanclub[creator_name]" id="fanclub_creator_name">
                                        <span class="text-green-500 text-sm leading-6">例：虎々のファンティア</span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-5 form-group list-group-item border-b-1 main--border__color">
                                <div class="flex">
                                    <div class="w-1/4 mr-10"><span class="label text-sm text-white bg-gray-600 mr-2">任意</span><label class="control-label">サブタイトル</label></div>
                                    <div class="w-3/4"><textarea rows="3" value="" class="leading-6 form-control input-lg w-full border-gray-300 px-3 py-2 border-1 rounded" type="text" name="fanclub[creator_name]" id="fanclub_creator_name"></textarea>
                                        <span class="help-block text-sm leading-6">ファンクラブの短い説明です。<br><span class="text-green-500 text-sm leading-6">例：イラストを書くのが好きで、毎日イラストを描いています。</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-5 form-group list-group-item border-b-1 main--border__color">
                                <div class="flex">
                                    <div class="w-1/4 mr-10"><span class="label text-sm text-white bg-pink-700 mr-2">必須</span><label class="control-label">カテゴリー</label></div>
                                    <div class="w-3/4"><select class="form-control input-lg w-full border-gray-300 px-3 py-2 border-1 rounded" name="fanclub[brand]" id="fanclub_brand">
                                            <option value="">選択してください。</option>
                                            <option value="1">イラスト</option>
                                            <option value="2">漫画</option>
                                            <option value="21">VTuber</option>
                                            <option value="5">コスプレ</option>
                                            <option value="8">音声作品・ASMR</option>
                                            <option value="7">声優・歌い手</option>
                                            <option value="6">アイドル</option>
                                            <option value="10">YouTuber・配信者</option>
                                            <option value="12">実写（写真・映像）</option>
                                            <option value="23">2Dアニメ</option>
                                            <option value="20">3D</option>
                                            <option value="9">ゲーム制作</option>
                                            <option value="4">音楽</option>
                                            <option value="3">小説</option>
                                            <option value="19">ドール</option>
                                            <option value="11">アート・デザイン</option>
                                            <option value="18">プログラム</option>
                                            <option value="13">創作・ハンドメイド</option>
                                            <option value="14">歴史・評論・情報</option>
                                            <option value="15">鉄道・旅行・ミリタリー</option>
                                            <option value="22">ショップ</option>
                                            <option value="16">その他</option>
                                            <option value="17">未設定</option>
                                        </select>
                                        <span class="help-block text-sm block mt-2">ランキングや検索のときに、選択したカテゴリー上に表示されます。</span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-5 form-group list-group-item border-b-1 main--border__color">
                                <div class="flex">
                                    <div class="w-1/4 mr-10"><span class="label text-sm text-white bg-gray-600 mr-2">任意</span><label class="control-label text-sm">ファンクラブの紹介文</label></div>
                                    <div class="w-3/4"><textarea rows="7" value="" class="leading-6 form-control input-lg w-full border-gray-300 px-3 py-2 border-1 rounded" type="text" name="fanclub[creator_name]" id="fanclub_creator_name"></textarea>
                                        <span class="text-green-500 text-sm leading-6">例：はじめまして！イラストレーター虎々（ここ）です。<br>
                                            ファンティアでは、日常ブログのほか、週に１〜２回くらいのペースでイラスト進捗・下書きなどをアップしていきます！
                                            またみなさんのご意見やご要望もお待ちしております！コメントやメッセージ等でお気軽にどうぞ♪</span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-5 bg-gray-800 text-white list-group-item list-group-item-muted"><span class="text-bold">招待コード登録</span></div>
                            <div class="p-5 form-group list-group-item border-b-1 main--border__color">
                                <div class="flex">
                                    <div class="w-1/4 mr-10"><span class="label text-sm text-white bg-gray-600 mr-2">任意</span><label class="control-label text-sm">招待コード</label></div>
                                    <div class="w-3/4"><input value="" class="form-control input-lg w-full border-gray-300 px-3 py-2 border-1 rounded" type="text" name="fanclub[creator_name]" id="fanclub_creator_name">
                                        <span class="help-block text-sm leading-6">Fantia営業担当からの招待コードをお持ちの場合は入力してください。<br>
                                            ※クリエイターからの招待コードは2021年8月30日をもって終了しました。</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-5 panel-body">
                            <div class="border-1 border-blue-300 bg-blue-100 p-4 rounded text-center">カバー画像、アイコン画像などは、クリエイター登録後に編集することができます。</div>
                            <p class="text-center mt-5"><input type="submit" name="commit" value="無料クリエイター登録" data-disable-with="送信中" class="bg-pink-500 rounded text-white p-5 hover:bg-pink-600"></p>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </main>
    <footer class="footer-1 border-t-1 main--border__color layout--bg__color pt-4 pb-8 mt-8 text-gray-500 sm:pb-12 font-normal">
        <div class="footer--top__button pb-4 border-b-1 text-center  main--border__color">
            <a href="#" class="no-underline block"><i class="fa fa-arrow-up"></i> トップへ戻る </a>
        </div>
        <p class="footer-copyright pt-10 text-center">
            <small>
                <span>{{date("Y")}}</span>
                <i class="fa fa-copyright fa-fw"></i>
                <a href="/" title="ドリームステージ[Dream Stage]">ドリームステージ[Dream Stage]</a>
            </small>
        </p>
    </footer>
</body>

</html>