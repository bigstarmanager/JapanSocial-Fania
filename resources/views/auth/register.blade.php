@extends('layouts.auth-layout')

@section('content')
<main class="container mx-auto">
    <div class="flex">
        <div class="w-1/2 p-5">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="font-semibold layout--bg__color text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    メールアドレスで登録する
                </header>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="flex flex-wrap">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            名前
                        </label>

                        <input id="name" type="text" class="form-input w-full @error('name')  border-red-500 @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            メールアドレス
                        </label>

                        <input id="email" type="email" class="form-input w-full @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            パスワード
                        </label>

                        <input id="password" type="password" class="form-input w-full @error('password') border-red-500 @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            パスワードを認証するF
                        </label>

                        <input id="password-confirm" type="password" class="form-input w-full" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="flex flex-wrap">
                        <button type="submit" class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4">
                            確認メールを送信
                        </button>
                        <div class="w-full flex justify-between items-center">
                            <p class="text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                                すでにアカウントをお持ちですか？
                                <a class="text-blue-500 hover:text-blue-700 no-underline hover:underline" href="{{ route('login') }}">
                                    ログイン
                                </a>
                            </p>
                            <div>
                                <a class="display-block text-center" style="color: #337ab7;" href="/help/terms" target="_blank">利用規約はこちら<i class="fa fa-external-link ml-5"></i></a>
                            </div>
                        </div>
                    </div>

                </form>

            </section>
        </div>
        <div class="w-1/2 p-5">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="font-semibold layout--bg__color text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md text-center">
                    外部サービスでログイン
                </header>
                <div class="externel--login p-10">
                    <a class="twitter--link__animaition" title="Follow @MikeMJHarris on Twitter" target="_blank" href="https://twitter.com/intent/follow?original_referer=http%3A%2F%2Flocalhost%3A8000%2Fposts%23&amp;region=follow_link&amp;screen_name=MikeMJHarris&amp;tw_p=followbutton">
                        <svg class="twitter--svg mx-auto" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-450 -100 600 200" version="1.0">
                            <g transform="">
                                <path fill="#2aa9e0" d="m 100, -50 c -6.3097,2.79897 -13.09189,4.68982 -20.20852,5.54049 7.26413,-4.35454 12.84406,-11.24992 15.47067,-19.46675 -6.79934,4.03295 -14.3293,6.96055 -22.34461,8.53841 -6.41775,-6.83879 -15.56243,-11.111 -25.68298,-11.111 -19.43159,0 -35.18696,15.75365 -35.18696,35.18525 0,2.75781 0.31128,5.44359 0.91155,8.01875 -29.24344,-1.46723 -55.16995,-15.47582 -72.52461,-36.76396 -3.02879,5.19662 -4.76443,11.24048 -4.76443,17.6891 0,12.20777 6.21194,22.97747 15.65332,29.28716 -5.76773,-0.18265 -11.19331,-1.76565 -15.93716,-4.40083 -0.004,0.14663 -0.004,0.29412 -0.004,0.44248 0,17.04767 12.12889,31.26806 28.22555,34.50266 -2.95247,0.80436 -6.06101,1.23398 -9.26989,1.23398 -2.2673,0 -4.47114,-0.22124 -6.62011,-0.63114 4.47801,13.97857 17.47214,24.15143 32.86992,24.43441 -12.04227,9.43796 -27.21366,15.06335 -43.69965,15.06335 -2.84014,0 -5.64082,-0.16722 -8.39349,-0.49223 15.57186,9.98421 34.06703,15.8094 53.93768,15.8094 64.72024,0 100.11301,-53.61524 100.11301,-100.11387 0,-1.52554 -0.0343,-3.04251 -0.10204,-4.55261 6.87394,-4.95995 12.83891,-11.15646 17.55618,-18.21305 z">
                                    <animate attributeName="fill" attributeType="XML" from="white" to="white" dur="1s" />
                                </path>
                                <animateMotion path="M -500,0 c100,60 100,-50 200,0 c100,50 100,0 300,0" begin="1s" dur="2s" />

                            </g>

                            <g transform="scale(0.2)">
                                <path style="fill:#2aa9e0" d="m 100, -50 c -6.3097,2.79897 -13.09189,4.68982 -20.20852,5.54049 7.26413,-4.35454 12.84406,-11.24992 15.47067,-19.46675 -6.79934,4.03295 -14.3293,6.96055 -22.34461,8.53841 -6.41775,-6.83879 -15.56243,-11.111 -25.68298,-11.111 -19.43159,0 -35.18696,15.75365 -35.18696,35.18525 0,2.75781 0.31128,5.44359 0.91155,8.01875 -29.24344,-1.46723 -55.16995,-15.47582 -72.52461,-36.76396 -3.02879,5.19662 -4.76443,11.24048 -4.76443,17.6891 0,12.20777 6.21194,22.97747 15.65332,29.28716 -5.76773,-0.18265 -11.19331,-1.76565 -15.93716,-4.40083 -0.004,0.14663 -0.004,0.29412 -0.004,0.44248 0,17.04767 12.12889,31.26806 28.22555,34.50266 -2.95247,0.80436 -6.06101,1.23398 -9.26989,1.23398 -2.2673,0 -4.47114,-0.22124 -6.62011,-0.63114 4.47801,13.97857 17.47214,24.15143 32.86992,24.43441 -12.04227,9.43796 -27.21366,15.06335 -43.69965,15.06335 -2.84014,0 -5.64082,-0.16722 -8.39349,-0.49223 15.57186,9.98421 34.06703,15.8094 53.93768,15.8094 64.72024,0 100.11301,-53.61524 100.11301,-100.11387 0,-1.52554 -0.0343,-3.04251 -0.10204,-4.55261 6.87394,-4.95995 12.83891,-11.15646 17.55618,-18.21305 z">
                                    <animate attributeName="fill" attributeType="XML" from="white" to="white" dur="2s" />
                                </path>
                                <animateMotion path="M -500,0 c100,60 100,-50 200,0 c100,50 100,-30 330,0" begin="2s" dur="2s" rotate="auto" />
                            </g>
                            <g transform="scale(0.3)">
                                <path style="fill:#2aa9e0" d="m 100, -50 c -6.3097,2.79897 -13.09189,4.68982 -20.20852,5.54049 7.26413,-4.35454 12.84406,-11.24992 15.47067,-19.46675 -6.79934,4.03295 -14.3293,6.96055 -22.34461,8.53841 -6.41775,-6.83879 -15.56243,-11.111 -25.68298,-11.111 -19.43159,0 -35.18696,15.75365 -35.18696,35.18525 0,2.75781 0.31128,5.44359 0.91155,8.01875 -29.24344,-1.46723 -55.16995,-15.47582 -72.52461,-36.76396 -3.02879,5.19662 -4.76443,11.24048 -4.76443,17.6891 0,12.20777 6.21194,22.97747 15.65332,29.28716 -5.76773,-0.18265 -11.19331,-1.76565 -15.93716,-4.40083 -0.004,0.14663 -0.004,0.29412 -0.004,0.44248 0,17.04767 12.12889,31.26806 28.22555,34.50266 -2.95247,0.80436 -6.06101,1.23398 -9.26989,1.23398 -2.2673,0 -4.47114,-0.22124 -6.62011,-0.63114 4.47801,13.97857 17.47214,24.15143 32.86992,24.43441 -12.04227,9.43796 -27.21366,15.06335 -43.69965,15.06335 -2.84014,0 -5.64082,-0.16722 -8.39349,-0.49223 15.57186,9.98421 34.06703,15.8094 53.93768,15.8094 64.72024,0 100.11301,-53.61524 100.11301,-100.11387 0,-1.52554 -0.0343,-3.04251 -0.10204,-4.55261 6.87394,-4.95995 12.83891,-11.15646 17.55618,-18.21305 z">
                                    <animate attributeName="fill" attributeType="XML" from="white" to="white" dur="2.5s" />
                                </path>
                                <animateMotion path="M -500,10 c100,70 100,-40 200,10 c100,60 100,-40 300, 10" begin="2.5s" dur="2s" rotate="auto" />
                            </g>

                            <g transform="scale(0.15)">
                                <path style="fill:#2aa9e0" d="m 100, -50 c -6.3097,2.79897 -13.09189,4.68982 -20.20852,5.54049 7.26413,-4.35454 12.84406,-11.24992 15.47067,-19.46675 -6.79934,4.03295 -14.3293,6.96055 -22.34461,8.53841 -6.41775,-6.83879 -15.56243,-11.111 -25.68298,-11.111 -19.43159,0 -35.18696,15.75365 -35.18696,35.18525 0,2.75781 0.31128,5.44359 0.91155,8.01875 -29.24344,-1.46723 -55.16995,-15.47582 -72.52461,-36.76396 -3.02879,5.19662 -4.76443,11.24048 -4.76443,17.6891 0,12.20777 6.21194,22.97747 15.65332,29.28716 -5.76773,-0.18265 -11.19331,-1.76565 -15.93716,-4.40083 -0.004,0.14663 -0.004,0.29412 -0.004,0.44248 0,17.04767 12.12889,31.26806 28.22555,34.50266 -2.95247,0.80436 -6.06101,1.23398 -9.26989,1.23398 -2.2673,0 -4.47114,-0.22124 -6.62011,-0.63114 4.47801,13.97857 17.47214,24.15143 32.86992,24.43441 -12.04227,9.43796 -27.21366,15.06335 -43.69965,15.06335 -2.84014,0 -5.64082,-0.16722 -8.39349,-0.49223 15.57186,9.98421 34.06703,15.8094 53.93768,15.8094 64.72024,0 100.11301,-53.61524 100.11301,-100.11387 0,-1.52554 -0.0343,-3.04251 -0.10204,-4.55261 6.87394,-4.95995 12.83891,-11.15646 17.55618,-18.21305 z">
                                    <animate attributeName="fill" attributeType="XML" from="white" to="white" dur="1.75s" />
                                </path>
                                <animateMotion path="M -500, 0 c75,-50 75,60 150,10 c100,-40 100,40 300, 20" begin="1.75s" dur="2s" rotate="auto" />
                            </g>

                            <g>
                                <rect id="rect" x="-450" y="-97" width="600" height="194" stroke="#2aa9e0" fill="none" stroke-width="3px" stroke-dasharray="20, 1700">
                                </rect>
                            </g>

                            <defs>
                                <clipPath id="clipPath5">
                                    <text x="-250" y="50" style="font-size: 100px;" text-anchor="middle" font-family="Verdana">
                                        Follow
                                    </text>
                                </clipPath>
                            </defs>

                            <g style="clip-path: url(#clipPath5);">

                                <circle id="circle" cx="-400" cy="-15" r="500" style="stroke: none; fill: #2aa9e0;">
                                    <animate dur="5s" begin="0s" attributeName="cx" values="-2000 ; -400">
                                    </animate>

                                </circle>
                            </g>

                        </svg>
                    </a>
                    <small>
                        閲覧履歴・購入履歴などを、ファンティアが勝手にSNSに投稿することはありません。ご安心ください。
                    </small>
                </div>
                <div class="mx-auto">
                    <div class=" pb-13">
                        <a href="/account/signup/toranoana_ec" class="flex justify-center animation-div items-center draw">
                            <span class="text-4xl font-normal mr-2" style="color: rgb(224 42 218);">
                                Toranoana
                            </span>
                            <img src="{{asset('images/logo/trona.png')}}" width="80" alt="trona-logo">
                        </a>
                        <small>
                            とらのあな通販アカウントを利用して登録できます。
                        </small>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $(".auth--title").html('新規登録');
        });
    </script>
</main>
@endsection