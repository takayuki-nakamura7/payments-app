<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">ホーム</a>
                    @else
                        <a href="{{ route('login') }}">ログイン</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">新規登録</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    領収書発行アプリ
                </div>
                @if (Route::has('login'))
                    @auth
                        <div class="flex-center">
                            <div class="links">
                                <a href="{{ url('/home') }}">ホーム</a>
                            </div>
                        </div>
                    @endauth
                @endif

            @guest
                    <div class="pt-5">
                        <form method='POST' action="{{ route('login') }}">
                            @csrf
                            <input id="email" type="hidden" class="form-control" name="email" value="test@gmail.com" required autofocus>
                            <input id="password" type="hidden" class="form-control" name="password" value="password" required>
                            <button class="btn btn-primary">テストユーザーでログイン</button>
                        </form>
                    </div>
                    <!--通常表示時　ボタン-->
                    <div class="col-md-10 mx-auto">
                        <div class="col">
                            <a href="{{ route('login') }}" role='button' class='links'> ログイン</a>
                        </div>
                        @if (Route::has('register'))
                            <a  href="{{ route('register') }}" role='button' class='links'> 新規ユーザー登録</a>
                        @endif
                    </div>
                @endguest
            </div>
        </div>
    </body>
</html>
