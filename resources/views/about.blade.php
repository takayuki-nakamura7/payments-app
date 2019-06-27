@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mb-4">
            <h1>使い方</h1>
        </div>

        <div class="row justify-content-center mb-4">
            <div class="col text-center">
                <h2>領収書発行</h2>
                <img src="https://payments-uploads.s3-ap-northeast-1.amazonaws.com/my-file/%E9%A0%98%E5%8F%8E%E6%9B%B8%E3%82%92%E7%99%BA%E8%A1%8C.png"
                     height="300px" width="500px" alt="no image">
                <p class="lead">ホーム画面より必要事項を入力すると領収書が発行され、それぞれの領収書に自動で伝票番号が付与されます。</p>
            </div>

            <div class="col text-center">
                <h2>領収書を編集</h2>
                <img src="https://payments-uploads.s3-ap-northeast-1.amazonaws.com/my-file/%E9%A0%98%E5%8F%8E%E6%9B%B8%E3%82%92%E7%B7%A8%E9%9B%86.png"
                     height="300px" width="500px" alt="no image">
                <p class="lead">それぞれの領収書にある編集ボタンを押すと編集画面に進み内容を変更できます。</p>
            </div>

            <div class="col text-center">
                <h2>フィルターで領収書検索</h2>
                <img src="https://payments-uploads.s3-ap-northeast-1.amazonaws.com/my-file/%E3%83%95%E3%82%A3%E3%83%AB%E3%82%BF%E3%83%BC.png"
                     height="300px" width="500px" alt="no image">
                <p class="lead">領収書一覧の横にあるフィルター検索ボタンを押すとフィルター機能が使えるページに以降します。</p>
            </div>

            <div class="col text-center">
                <h2>ショップを追加</h2>
                <img src="https://payments-uploads.s3-ap-northeast-1.amazonaws.com/my-file/%E3%82%B7%E3%83%A7%E3%83%83%E3%83%95%E3%82%9A%E8%BF%BD%E5%8A%A0.png"
                     height="300px" width="500px" alt="no image">
                <p class="lead">ヘッダーのショップボタンを押すとショップページに以降し、ショップの追加ができたり、一覧が表示されます。</p>
            </div>

            <div class="col text-center">
                <h2>ユーザー覧</h2>
                <img src="https://payments-uploads.s3-ap-northeast-1.amazonaws.com/my-file/%E3%83%A6%E3%83%BC%E3%82%B5%E3%82%99%E4%B8%80%E8%A6%A7.png"
                     height="300px" width="500px" alt="no image">
                <p class="lead">ヘッダーのユーザ一覧ボタンを押すとユーザー覧画面が表示されます</p>
            </div>


            <div class="col text-center">
                <h2>ユーザ毎に発行された領収書を表示する</h2>
                <img src="https://payments-uploads.s3-ap-northeast-1.amazonaws.com/my-file/%E3%83%A6%E3%83%BC%E3%82%B5%E3%82%99%E7%99%BA%E8%A1%8C%E4%B8%80%E8%A6%A7.png"
                     height="300px" width="500px" alt="no image">
                <p class="lead">ユーザ一覧画面から名前のリンクをクリックすると、そのユーザが発行した領収書一覧を表示します。</p>
            </div>
        </div>
    </div>
@endsection