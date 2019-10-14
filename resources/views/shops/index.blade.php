@extends('layouts.app')

@section('content')
{{-- {{ dd('are you here?') }}--}}
<div class="container">
    <div class="row justify-content-center mb-4">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">フィルター</div>
                <div class="card-body">
                    <form action="{{ route('shops_filter') }}" method="get">
                        <div class="form-group mb-3">
                            <label for="nameInput">名前</label>
                            <input type="text" class="form-control" id="nameInput" name="name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="zipCodeInput">郵便番号</label>
                            <input type="text" class="form-control" id="zipCodeInput" name="zip_code">
                        </div>
                        <button class="btn btn-primary">検索</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">新しいショップを登録</div>
                <div class="card-body">
                    <form action="{{ route('shops_create') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <input type="file" name="file" class="form-control　border border-0">
                        </div>
                        <div class="form-group mb-3">
                            <label for="nameInput">名前</label>
                            <input type="text" class="form-control" id="nameInput" name="name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                            <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <label for="zipCodeInput">郵便番号</label>
                            <input type="text" class="form-control" id="zipCodeInput" name="zip_code" value="{{ old('zip_code') }}">
                            @if ($errors->has('zip_code'))
                            <small class="form-text invalid-feedback">{{ $errors->first('zip_code') }}</small>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <label for="address1Input">住所１</label>
                            <input type="text" class="form-control" id="address1Input" name="address1" value="{{ old('address1') }}">
                            @if ($errors->has('address1'))
                            <small class="form-text invalid-feedback">{{ $errors->first('address1') }}</small>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <label for="address2Input">住所２</label>
                            <input type="text" class="form-control" id="address2Input" name="address2" value="{{ old('address2') }}">
                        </div>
                        <button class="btn btn-primary">登録</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">ショップ一覧（{{ $shops->count() }}件）</div>

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
                                <th>社印</th>
                                <th>ショップ名</th>
                                <th class="dNone">郵便番号</th>
                                <th class="dNone">住所</th>
                                <th class="dNone"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($shops as $shop)
                            <tr>
                                <td>
                                    <img width="50px" height="50px" src="{{ $shop->company_seal }}" alt="{{ $shop->name }}">
                                </td>
                                <td>{{ $shop->name }}</td>
                                <td class="dNone">{{ $shop->zip_code }}</td>
                                <td class="dNone">{{ $shop->address1 }} {{ $shop->address2 }}</td>
                                <td>
                                    <form action="{{ route('shops_edit', ['id' => $shop->id]) }}" method="get">
                                        <button class="btn btn-primary">編集</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{ $shops->links() }}
        </div>
    </div>
</div>
@endsection