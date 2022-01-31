@extends('layouts.user-layout')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/help_page.css')}}" />
<style>
    .outline--none__input:focus-visible {
        outline: none !important;
    }
</style>
<div class="container mx-auto mt-10 text-gray-500">
    <div class="px-20">
        <div class="px-20">
            <div class="border-1 main--border__color rounded-lg overflow-hidden mx-auto relative" style="width: 735px;">
                <img src="{{asset('images/common/coin.png')}}" class="mx-auto">
                <img src="{{asset('images/common/coin1.png')}}" class="mx-auto">
                <p class="text-right bg-white absolute w-full p-2" style="top:170px"><a href="https://help.fantia.jp/301" class="text-blue-500 hover:underline hover:text-blue-600" target="_blank"><i class="fa fa-caret-right mr-2"></i><span>とらコインについて</span></a></p>
                <p class="text-center w-full absolute" style="top:495px"><a class="border-1 main--border__color rounded py-5 text-sm px-15 bg-yellow-300 hover:bg-yellow-400 text-black" href="/coinsite"><span>とらコインSHOPでチャージ</span><i class="fa fa-caret-right ml-2"></i></a></p>
                <p class="text-center w-full absolute" style="top:858px"><a class="border-1 main--border__color rounded py-5 text-sm px-20 bg-yellow-300 hover:bg-yellow-400 text-black" href="/coinsite"><span>魔法集市でチャージ</span><i class="fa fa-caret-right ml-2"></i></a></p>
                <div class="absolute" style="bottom:115px">
                    <div class="flex w-full items-center">
                        <div class="w-3/4 px-3 bg-white">
                            <div class="input-serial js-input-group flex items-center leading-7">
                                <div class="mr-2 input-col border-1 rounded main--border__color overflow-hidden"><input class="p-1 outline--none__input" style="width: 165px;"  type="text" name="serial1" id="serial1" value="" maxlength="4" class="form-control"></div>
                                <div class="mr-2 input-divider">-</div> 
                                <div class="mr-2 input-col border-1 rounded main--border__color overflow-hidden"><input class="p-1 outline--none__input" style="width: 165px;"  type="text" name="serial2" id="serial2" value="" maxlength="4" class="form-control"></div>
                                <div class="mr-2 input-divider">-</div> 
                                <div class="mr-2 input-col border-1 rounded main--border__color overflow-hidden"><input class="p-1 outline--none__input" style="width: 165px;"  type="text" name="serial3" id="serial3" value="" maxlength="4" class="form-control"></div>
                                <div class="mr-2 input-divider">-</div> 
                                <div class="mr-2 input-col border-1 rounded main--border__color overflow-hidden"><input class="p-1 outline--none__input" style="width: 165px;"  type="text" name="serial4" id="serial4" value="" maxlength="4" class="form-control"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-center absolute" style="bottom:127px; right:13px"><a class="border-1 main--border__color rounded py-2 text-sm px-8 bg-yellow-200 text-black "  href="/coinsite"><span>コードを使う</span></a></p>
            </div>
        </div>
    </div>
</div>

@endsection