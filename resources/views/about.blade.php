@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mb-4">
            <h1>使い方</h1>
        </div>

        <div class="row justify-content-center mb-4">
            <div class="col text-center">
                <h2>領収書発行</h2>
                <img src="https://payments-uploads.s3-ap-northeast-1.amazonaws.com/my-file/%E9%A0%98%E5%8F%8E%E6%9B%B8%E3%82%92%E7%99%BA%E8%A1%8C.png" height="300px" width="500px">
                <p class="lead">ホーム画面より必要事項を入力すると領収書が発行され、それぞれの領収書に自動で伝票番号が付与されます。</p>
            </div>

            <div class="col text-center">
                <h2>領収書を編集</h2>
                <img src="https://payments-uploads.s3-ap-northeast-1.amazonaws.com/my-file/%E9%A0%98%E5%8F%8E%E6%9B%B8%E3%82%92%E7%B7%A8%E9%9B%86.png" height="300px" width="500px">
                <p class="lead">それぞれの領収書にある編集ボタンを押すと編集画面に進み内容を変更できます。</p>
            </div>

            <div class="col text-center">
                <h2>フィルターで領収書検索</h2>
                <img src="https://payments-uploads.s3-ap-northeast-1.amazonaws.com/my-file/%E3%83%95%E3%82%A3%E3%83%AB%E3%82%BF%E3%83%BC.png" height="300px" width="500px">
                <p class="lead">領収書一覧の横にあるフィルター検索ボタンを押すとフィルター機能が使えるページに以降します。</p>
            </div>

            <div class="col text-center">
                <h2>ショップを追加</h2>
                <img src="https://payments-uploads.s3-ap-northeast-1.amazonaws.com/my-file/%E3%82%B7%E3%83%A7%E3%83%83%E3%83%95%E3%82%9A%E8%BF%BD%E5%8A%A0.png" height="300px" width="500px">
                <p class="lead">ヘッダーのショップボタンを押すとショップページに以降し、ショップの追加ができたり、一覧が表示されます。</p>
            </div>

            <div class="col text-center">
                <h2>ユーザー覧</h2>
                <img src="https://payments-uploads.s3-ap-northeast-1.amazonaws.com/my-file/%E3%83%A6%E3%83%BC%E3%82%B5%E3%82%99%E4%B8%80%E8%A6%A7.png" height="300px" width="500px">
                <p class="lead">ヘッダーのユーザ一覧ボタンを押すとユーザー覧画面が表示されます</p>
            </div>


            <div class="col text-center">
                <h2>ユーザ毎に発行された領収書を表示する</h2>
                <img src="https://payments-uploads.s3-ap-northeast-1.amazonaws.com/my-file/%E3%83%A6%E3%83%BC%E3%82%B5%E3%82%99%E7%99%BA%E8%A1%8C%E4%B8%80%E8%A6%A7.png" height="300px" width="500px">
                <p class="lead">ユーザ一覧画面から名前のリンクをクリックすると、そのユーザが発行した領収書一覧を表示します。</p>
            </div>
        </div>
    </div>
@endsection




{{--@extends('layouts.app')--}}
{{--@section('content')--}}
{{--    <body>--}}
{{--    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">--}}
{{--        <div class="col-md-12 p-lg-5 mx-auto my-5">--}}
{{--            <h1 class="display-4 font-weight-normal">使い方</h1>--}}
{{--            <p class="lead font-weight-normal">領収書発行アプリはシンプルで簡単に領収書を発行、管理できるアプリです。</p>--}}
{{--        </div>--}}
{{--        <div class="product-device shadow-sm d-none d-md-block"></div>--}}
{{--        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>--}}
{{--    </div>--}}

{{--    <div class="d-md-flex w-100 my-md-3 pl-md-3">--}}
{{--        <div class=" flex-md-fill bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">--}}
{{--            <div class="my-3 py-3">--}}
{{--                <h2 class="display-5">領収書を発行</h2>--}}
{{--                <p class="lead">そして、さらに軽めの小見出し。</p>--}}
{{--            </div>--}}
{{--            <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">--}}
{{--                <img src="https://grapee.jp/wp-content/uploads/33342_main1.jpg" width="400px" height="300px">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="flex-md-fill bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">--}}
{{--            <div class="my-3 p-3">--}}
{{--                <h2 class="display-5">別の見出し</h2>--}}
{{--                <p class="lead">そして、さらに軽めの小見出し。</p>--}}
{{--            </div>--}}
{{--            <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="d-md-flex w-100 my-md-3 pl-md-3">--}}
{{--        <div class="flex-md-fill bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">--}}
{{--            <div class="my-3 p-3">--}}
{{--                <h2 class="display-5">別の見出し</h2>--}}
{{--                <p class="lead">そして、さらに軽めの小見出し。</p>--}}
{{--            </div>--}}
{{--            <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>--}}
{{--        </div>--}}
{{--        <div class="flex-md-fill bg-primary mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">--}}
{{--            <div class="my-3 py-3">--}}
{{--                <h2 class="display-5">別の見出し</h2>--}}
{{--                <p class="lead">そして、さらに軽めの小見出し。</p>--}}
{{--            </div>--}}
{{--            <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="d-md-flex w-100 my-md-3 pl-md-3">--}}
{{--        <div class="flex-md-fill bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">--}}
{{--            <div class="my-3 p-3">--}}
{{--                <h2 class="display-5">別の見出し</h2>--}}
{{--                <p class="lead">そして、さらに軽めの小見出し。</p>--}}
{{--            </div>--}}
{{--            <div class="bg-white shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>--}}
{{--        </div>--}}
{{--        <div class="flex-md-fill bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">--}}
{{--            <div class="my-3 py-3">--}}
{{--                <h2 class="display-5">別の見出し</h2>--}}
{{--                <p class="lead">そして、さらに軽めの小見出し。</p>--}}
{{--            </div>--}}
{{--            <div class="bg-white shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="d-md-flex w-100 my-md-3 pl-md-3">--}}
{{--        <div class="flex-md-fill bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">--}}
{{--            <div class="my-3 p-3">--}}
{{--                <h2 class="display-5">別の見出し</h2>--}}
{{--                <p class="lead">そして、さらに軽めの小見出し。</p>--}}
{{--            </div>--}}
{{--            <div class="bg-white shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>--}}
{{--        </div>--}}
{{--        <div class="flex-md-fill bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">--}}
{{--            <div class="my-3 py-3">--}}
{{--                <h2 class="display-5">別の見出し</h2>--}}
{{--                <p class="lead">そして、さらに軽めの小見出し。</p>--}}
{{--            </div>--}}
{{--            <div class="bg-white shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <footer class="container py-5">--}}
{{--        <div class="row">--}}
{{--            <div class="col-12 col-md">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>--}}
{{--                <small class="d-block mb-3 text-muted">&copy; 2017-2019</small>--}}
{{--            </div>--}}
{{--            <div class="col-6 col-md">--}}
{{--                <h5>特徴</h5>--}}
{{--                <ul class="list-unstyled text-small">--}}
{{--                    <li><a class="text-muted" href="#">クールなスタッフ</a></li>--}}
{{--                    <li><a class="text-muted" href="#">ランダム機能</a></li>--}}
{{--                    <li><a class="text-muted" href="#">チームの特徴</a></li>--}}
{{--                    <li><a class="text-muted" href="#">開発者向け</a></li>--}}
{{--                    <li><a class="text-muted" href="#">もう一つ</a></li>--}}
{{--                    <li><a class="text-muted" href="#">最終回</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <div class="col-6 col-md">--}}
{{--                <h5>リソース</h5>--}}
{{--                <ul class="list-unstyled text-small">--}}
{{--                    <li><a class="text-muted" href="#">リソース</a></li>--}}
{{--                    <li><a class="text-muted" href="#">リソース名</a></li>--}}
{{--                    <li><a class="text-muted" href="#">別のリソース</a></li>--}}
{{--                    <li><a class="text-muted" href="#">最終的リソース</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <div class="col-6 col-md">--}}
{{--                <h5>リソース</h5>--}}
{{--                <ul class="list-unstyled text-small">--}}
{{--                    <li><a class="text-muted" href="#">ビジネス</a></li>--}}
{{--                    <li><a class="text-muted" href="#">教育</a></li>--}}
{{--                    <li><a class="text-muted" href="#">政府</a></li>--}}
{{--                    <li><a class="text-muted" href="#">ゲーム</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <div class="col-6 col-md">--}}
{{--                <h5>概要</h5>--}}
{{--                <ul class="list-unstyled text-small">--}}
{{--                    <li><a class="text-muted" href="#">チーム</a></li>--}}
{{--                    <li><a class="text-muted" href="#">場所</a></li>--}}
{{--                    <li><a class="text-muted" href="#">プライバシー</a></li>--}}
{{--                    <li><a class="text-muted" href="#">条項</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </footer>--}}

{{--@endsection--}}