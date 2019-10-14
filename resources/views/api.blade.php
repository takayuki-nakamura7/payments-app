@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h3>ユーザ全件を取得</h3>
            <form action="{{ route('userGet') }}" method="get" style="text-align: center;">
                <button class="btn btn-primary">取得</button>
            </form>

            <h3>ユーザを作成<h3>
                    <form action="{{ route('userPost') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group mb-3">
                            <label for="name"><a class="btn" role="button">ユーザー</a></label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email"><a class="btn" role="button">Eメール</a></label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group mb-3">
                            <label for="password"><a class="btn" role="button">パスワード</a></label>
                            <input type="text" class="form-control" id="password" name="password">
                        </div>
                        <button class="btn btn-primary">作成</button>
                    </form>
        </div>
        <div class="col-md-10">

            <h3>ユーザを編集</h3>
            <select class="custom-select" id="user_name" name="user_id">
                @foreach($users as $user)
                <option value={{ $user['id'] }}> {{ $user['name'] }} </option>
                @endforeach
            </select>

            <script>
                $('[name=user_id]').change(function() {
                    // 選択されているvalue属性値を取り出す

                    var userId = $('[name=user_id]').val();
                    console.log(userId); // 出力：１
                    // 選択されている表示文字列を取り出す
                    $.ajax({
                        type: 'POST',
                        url: 'api.blade.php',
                        contentType: 'application/json',
                        data: {
                            'user_id': userId
                        }
                    });
                });
            </script>
            <!-- <?php $userId = $_POST['user_id']; ?> -->
            <form action="{{ route('userEdit', ['id' => $userId]) }}" method="post">
                {{ csrf_field() }}
                <div class="form-group mb-3">
                    <label for="name"><a class="btn" role="button">ユーザー</a></label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                </div>
                <div class="form-group mb-3">
                    <label for="email"><a class="btn" role="button">Eメール</a></label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}">
                </div>
                <div class="form-group mb-3">
                    <label for="password"><a class="btn" role="button">パスワード</a></label>
                    <input type="text" class="form-control" id="password" name="password" value="{{ $user->password }}">
                </div>
                <button class="btn btn-primary">編集</button>
            </form>

        </div>
    </div>
</div>
@endsection