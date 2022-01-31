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
                    <h1 class="panel-title">アカウント設定</h1>
                </div>
                <label class=" p-5 block  font-bold text-black">成人向け投稿の表示・非表示
                    <div class="my-3 checkbox border-1 main--border__color rounded p-3 font-normal text-gray-500">
                        <label>
                            <input name="user[rating]" type="hidden" value="general">
                            <input type="checkbox" value="adult" name="user[rating]" id="user_rating" class="mr-2 text-sm">成人向け投稿を表示する
                        </label>
                    </div>
                    <div class="">
                        <input type="submit" name="commit" value="変更を保存" data-disable-with="送信中" class="bg-pink-500 p-3 rounded text-white text-sm">
                    </div>
                </label>
                <div class="p-5 border-b-1 main--border__color">
                    <div class="p-3 leading-6 bg-gray-100 rounded">
                        <p class="text-red-500"><b>※18歳未満の方は、チェックボックスの入力をご遠慮ください。</b></p>
                        <p>当サイトには一部、成人向けコンテンツが含まれています。これら成人向けコンテンツの閲覧につきましては、 18歳未満および高校在学中の方のご利用を制限させていただいております。</p>
                        <p>18歳の高校生のお客様につきましては、「卒業月の月末まで」を18歳未満の期間として扱わせていただきます。 年齢詐称等によりお客様に不利益が生じた場合、弊社では責任を負いかねますのでご了承ください。</p>
                    </div>
                </div>
                <div class="p-5 border-b-1 main--border__color">
                    <form class="edit_user" id="user-nickname-form_edit_user" action="/mypage/users/update_name" accept-charset="UTF-8" method="post">
                        <label class="block  font-bold text-black">ニックネーム
                            <div class="my-3  font-normal text-gray-500">
                                <label>
                                    <input name="user[rating]" type="hidden" value="general">
                                    <input class="form-control input-lg border-1 main--border__color rounded p-3 w-full" id="user-nickname-form_user-nickname-input" placeholder="ニックネーム/Nick Name" required="required" type="text" value="" name="user[name]">
                                </label>
                            </div>
                            <div class="">
                                <input type="submit" name="commit" value="変更を保存" data-disable-with="送信中" class="bg-pink-500 p-3 rounded text-white text-sm">
                            </div>
                        </label>
                    </form>
                </div>
                <div class="p-5 border-b-1 main--border__color">
                    <label class="block  font-bold text-black">アイコン
                        <div class="p-5 mt-2 leading-6 bg-gray-100 rounded text-center">
                            <img src="{{asset('images/common/myavatar.png')}}" width="100" class="rounded-full mx-auto" style="object-fit:cover; height:100px !important" alt="">
                            <div class="mt-5">
                                <input type="submit" name="commit" value="画像を編集" data-disable-with="送信中" class="bg-pink-500 py-2 px-3 rounded text-white text-sm">
                            </div>
                        </div>
                    </label>
                </div>
                <div class="p-5 border-b-1 main--border__color">
                    <form class="edit_user" id="user-nickname-form_edit_user" action="/mypage/users/update_name" accept-charset="UTF-8" method="post">
                        <label class="block  font-bold text-black">メールアドレス
                            <div class="my-3  font-normal text-gray-500">
                                <label>
                                    <input name="user[rating]" type="hidden" value="general">
                                    <p class="text-gray-500 text-sm mb-3">新しいメールアドレス宛に、確認用URLを記載したメールを送信します。</p>
                                    <input class="form-control input-lg border-1 main--border__color rounded p-3 w-full" id="user-nickname-form_user-nickname-input" placeholder="メールアドレス/Email" required="required" type="text" value="" name="user[name]">
                                </label>
                            </div>
                            <div class="">
                                <input type="submit" name="commit" value="メール送信" data-disable-with="送信中" class="bg-pink-500 p-3 rounded text-white text-sm">
                            </div>
                        </label>
                    </form>
                </div>
                <div class="p-5 border-b-1 main--border__color">
                    <form class="edit_user" id="user-nickname-form_edit_user" action="/mypage/users/update_name" accept-charset="UTF-8" method="post">
                        <label class="block  font-bold text-black">パスワード
                            <div class="my-3  font-normal text-gray-500">
                                <label>
                                    <p class="text-gray-500 text-sm mb-3">アカウントに登録されたメールアドレス宛に、パスワード再設定用URLを記載したメールを送信します。</p>
                                </label>
                            </div>
                            <div class="">
                                <input type="submit" name="commit" value="メール送信" data-disable-with="送信中" class="bg-pink-500 p-3 rounded text-white text-sm">
                            </div>
                        </label>
                    </form>
                </div>
                <div class="p-5 border-b-1 main--border__color">
                    <label class="block  font-bold text-black">Twitter連携
                        <div class="my-3  font-normal text-gray-500">
                            <label>
                                <p class="text-gray-500 text-sm mb-3">Twitterアカウントでファンティアにログインすることができます。</p>
                            </label>
                        </div>
                        <a class="py-2 px-3 rounded text-white inline-block items-center bg-blue-500 font-normal" href="/mypage/auth/twitter" title="Twitter連携">
                            <div class="btn-logo mr-3 inline"><i class="fa fa-twitter fa-2x"></i></div>
                            <div class="btn-title inline "><span>Twitterアカウントと連携</span></div>
                        </a>
                    </label>
                </div>
                <div class="p-5 border-b-1 main--border__color">
                    <label class="block  font-bold text-black">とらのあな通販連携
                        <div class="my-3  font-normal text-gray-500">
                            <label>
                                <p class="text-gray-500 text-sm mb-3">とらのあな通販アカウントでファンティアにログインすることができます。</p>
                            </label>
                        </div>
                        <a class="py-2 px-3 rounded text-white inline-block items-center bg-yellow-300 font-normal" href="/mypage/auth/twitter" title="Twitter連携">
                            <img alt="" height="40" class="inline" src="{{asset('images/logo/trona.png')}}" width="40">
                            <div class="btn-title inline "><span>とらのあな通販アカウントと連携</span></div>
                        </a>
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection