@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@section('content')
<div class="inner">
    <div class="title">
        <h2>使い方</h2>
        <span>how to use</span>
    </div>

    <div class="content-wrap">
        <div class="how-to-contents">
            <div class="how-to-box">
                <h3 class="how-to-title">領収書発行<span class="active"><i class="fas fa-plus plus"></i></span></h3>
                <div class="how-to-img">
                    <img src="https://payments-uploads.s3-ap-northeast-1.amazonaws.com/my-file/%E9%A0%98%E5%8F%8E%E6%9B%B8%E3%82%92%E7%99%BA%E8%A1%8C.png" height="300px" width="500px" alt="no image">
                    <p>ホーム画面より必要事項を入力すると領収書が発行され、それぞれの領収書に自動で伝票番号が付与されます。</p>
                </div>
            </div>
            <div class="how-to-box">
                <h3 class="how-to-title">領収書を編集<span class="active"><i class="fas fa-plus plus"></i></span></h3>
                <div class="how-to-img">
                    <img src="https://payments-uploads.s3-ap-northeast-1.amazonaws.com/my-file/%E9%A0%98%E5%8F%8E%E6%9B%B8%E3%82%92%E7%B7%A8%E9%9B%86.png" height="300px" width="500px" alt="no image">
                    <p>それぞれの領収書にある編集ボタンを押すと編集画面に進み内容を変更できます。</p>
                </div>
            </div>
            <div class="how-to-box">
                <h3 class="how-to-title">フィルターで領収書検索<span class="active"><i class="fas fa-plus plus"></i></span></h3>
                <div class="how-to-img">
                    <img src="https://payments-uploads.s3-ap-northeast-1.amazonaws.com/my-file/%E3%83%95%E3%82%A3%E3%83%AB%E3%82%BF%E3%83%BC.png" height="300px" width="500px" alt="no image">
                    <p>領収書一覧の横にあるフィルター検索ボタンを押すとフィルター機能が使えるページに以降します。</p>
                </div>
            </div>
            <div class="how-to-box">
                <h3 class="how-to-title">ショップを追加<span class="active"><i class="fas fa-plus plus"></i></span></h3>
                <div class="how-to-img">
                    <img src="https://payments-uploads.s3-ap-northeast-1.amazonaws.com/my-file/Screen+Shot+2019-10-13+at+16.21.24.png" height="300px" width="500px" alt="no image">
                    <p>ヘッダーのショップボタンを押すと、新しいショップを登録からお店の写真、名前、住所を入力してショップを登録することができます。</p>
                </div>
            </div>
            <div class="how-to-box">
                <h3 class="how-to-title">ユーザー覧<span class="active"><i class="fas fa-plus plus"></i></span></h3>
                <div class="how-to-img">
                    <img src="https://payments-uploads.s3-ap-northeast-1.amazonaws.com/my-file/%E3%83%A6%E3%83%BC%E3%82%B5%E3%82%99%E4%B8%80%E8%A6%A7.png" height="300px" width="500px" alt="no image">
                    <p>ヘッダーのユーザ一覧ボタンを押すとユーザー覧画面が表示されます</p>
                </div>
            </div>
            <div class="how-to-box">
                <h3 class="how-to-title">ユーザ毎に発行された領収書を表示する<span class="active"><i class="fas fa-plus plus"></i></span></h3>
                <div class="how-to-img">
                    <img src="https://payments-uploads.s3-ap-northeast-1.amazonaws.com/my-file/%E3%83%A6%E3%83%BC%E3%82%B5%E3%82%99%E7%99%BA%E8%A1%8C%E4%B8%80%E8%A6%A7.png" height="300px" width="500px" alt="no image">
                    <p>ユーザ一覧画面から名前のリンクをクリックすると、そのユーザが発行した領収書一覧を表示します。</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection