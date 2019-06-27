@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">フィルター</div>
                    <div class="card-body">
                        <form action="{{ route('shops_filter') }}" method="get">
                            <div class="form-group mb-3">
                                <label for="nameInput">名前</label>
                                <input type="text" class="form-control" id="nameInput" name="name" value="{{ $name }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="zipCodeInput">郵便番号</label>
                                <input type="text" class="form-control" id="zipCodeInput" name="zip_code"
                                       value="{{ $zip_code }}">
                            </div>
                            <button class="btn btn-primary">検索</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">ショップ一覧（{{ $shops->count() }}件）<a class="btn" href="{{ route('shops') }}"
                                                                              role="button">フィルター解除</a></div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <table class="table table-borderless">
                        <thead>
                        <tr>
                            <th>ショップ名</th>
                            <th>郵便番号</th>
                            <th>住所</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($shops as $shop)
                            <tr>
                                <td>{{ $shop->name }}</td>
                                <td>{{ $shop->zip_code }}</td>
                                <td>{{ $shop->address1 }} {{ $shop->address2 }}</td>
                                <td>
                                    <form action="{{ route('shops_edit', ['id' => $shop->id]) }}" method="get">
                                        <button class="btn btn-primary">編集</button>
                                    </form>
                                    <form action="{{ route('shops_destroy', ['id' => $shop->id]) }}" method="post"
                                          onclick='return confirm("本当に削除しますか？");'>
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="delete">
                                        <button class="btn btn-danger ">削除</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection