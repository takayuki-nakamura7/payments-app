@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">ショップ情報を変更</div>
                    <div class="card-body">
                        <form action="{{ route('shops_update', ['id' => $shop->id]) }}" method="post"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group mb-3">
                                <label for="nameInput">社印</label>
                                <input type="file" name="file" class="form-control col-4　border border-0">
                                <img width="50px" src="{{ $shop->company_seal }}" alt="{{ $shop->name }}" class="col-4">
                                @if ($errors->has('file'))
                                    <small class="form-text invalid-feedback">{{ $errors->first('file') }}</small>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <label for="nameInput">名前</label>
                                <input type="text" class="form-control" id="nameInput" name="name"
                                       value="{{ $shop->name }}">
                                @if ($errors->has('name'))
                                    <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <label for="zipCodeInput">郵便番号</label>
                                <input type="text" class="form-control" id="zipCodeInput" name="zip_code"
                                       value="{{ $shop->zip_code }}">
                                @if ($errors->has('zip_code'))
                                    <small class="form-text invalid-feedback">{{ $errors->first('zip_code') }}</small>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <label for="address1Input">住所１</label>
                                <input type="text" class="form-control" id="address1Input" name="address1"
                                       value="{{ $shop->address1 }}">
                                @if ($errors->has('address1'))
                                    <small class="form-text invalid-feedback">{{ $errors->first('address1') }}</small>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <label for="address2Input">住所２</label>
                                <input type="text" class="form-control" id="address2Input" name="address2"
                                       value="{{ $shop->address2 }}">
                            </div>
                            <button class="btn btn-primary">登録</button>
                        </form>
                        <form action="{{ route('shops') }}" method="get">
                            <button class="btn btn-success">戻る</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
