@extends('layouts.help-layout')

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/help_page.css')}}" />
<div class="help--page__content">
    <div class="help--content__box border-1 main--border__color rounded-lg bg-white text-gray-500">
        <div class="content--box__header p-5 border-b-1 main--border_color">
            サービスについて
        </div>
        <div class="content--box__body p-5">
            <div id="about">
                <div class="about--image">
                    <img src="{{ asset('images/common/help.jpg') }}" alt="">
                </div>
                <div class="about--text text-lg my-3 leading-6">
                    ドリームステージ[Dream Stage]は、イラスト・漫画・小説・コスプレ・音楽・映像作品など、各方面で活躍されているクリエイターの皆さまに、自由な作品発表と、さらなる創作活動のための資金獲得の場を提供する、クリエイター支援プラットフォームです。
                </div>
                <div class="about--text text-lg my-3 leading-6">
                    誰でも無料で登録でき、クリエイター・ファンの皆さまとの交流をお楽しみいただけます。
                </div>
            </div>
        </div>
    </div>
</div>
@endsection