@extends('layouts.user-layout')
@section('content')

<div class="container mx-auto p-20">
    <div class="px-20">
        <div class="px-20">
            <div class="panel panel-default panel-user bg-white border-1 main--border__color rounded-lg">
                <div class="list-group list-group-lg">
                    <div class="list-group-item text-center flex flex-col items-center p-10">
                        <div class="user-avatar mb-3"><img class="rounded-full object-cover" width="128" style="height: 128px;" src="{{asset('images/common/myavatar.png')}}"></div>
                        <h1 class="user-name font-bold text-lg text-gray-700 mb-7"><span>2021/09/22 11:10:06 の {{ Auth::user()->name }}</span></h1>
                        <div class="user-btns"><a class="text-white py-2 px-3 rounded bg-blue-500" href="/mypage/messages/5861443"><i class="fa fa-envelope"></i></a></div>
                        <div class="text-center mt-7"><a class="text-white text-sm py-1 px-5 bg-pink-500 rounded" href="{{route('account_setting')}}"><span>アイコン・ニックネームを編集</span></a></div>
                    </div>
                    <hr class="main--border__color">
                    <div class="list-group-item  px-10 text-gray-500">
                        <h2 class="my-10 title text-center">プロフィール</h2>
                        <div class="my-10 text-muted">自己紹介文が登録されていません。</div>
                        <div class="my-10 text-center mt-5"><a class="text-white text-sm py-1 px-5 bg-pink-500 rounded" href="{{route('profile_edit')}}"><span>プロフィールを編集</span></a></div>
                    </div>
                    <hr class="main--border__color">
                    <div class="list-group-item  px-10 text-gray-500">
                        <h2 class="my-10 title text-center">参加しているファンクラブ</h2>
                        <div class="my-10 well"><span class="text-muted">公開していません。</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection