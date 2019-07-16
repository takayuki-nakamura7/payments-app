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
            <h3>領収書全件を取得<h3>
                    <form action="{{ route('paymentGet') }}" method="get" style="text-align: center;">
                        <button class="btn btn-primary">取得</button>
                    </form>

                    <h3>領収書を作成</h3>
                    <form action="{{ route('paymentPost') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group mb-3">
                            <label for="shop_name">支払い先</label>
                            <select class="custom-select" id="shop_name" name="shop_id">
                                @foreach($shops as $shop)
                                <option value={{ $shop['id'] }}> {{ $shop['name'] }} </option>
                                @endforeach
                            </select>

                            @if ($errors->has('shop_id'))
                            <small class="form-text invalid-feedback">{{ $errors->first('shop_id') }}</small>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <label for="customerInput">購入者名</label>
                            <input type="text" class="form-control" id="customerInput" name="customer" value="{{ old('customer') }}">
                            @if ($errors->has('customer'))
                            <small class="form-text invalid-feedback">{{ $errors->first('customer') }}</small>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <label for="priceInput">金額</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">&yen;</span>
                                </div>
                                <input type="text" class="form-control is-invalid" id="priceInput" name="price" placeholder="0" value="{{ old('price') }}">
                                @if ($errors->has('price'))
                                <small class="form-text invalid-feedback">{{ $errors->first('price') }}</small>
                                @endif
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="method">支払い方法</label>
                            <select class="custom-select" id="method" name="method">
                                <option value="クレジットカード">クレジットカード</option>
                                <option value="代金引換">代金引換</option>
                                <option value="銀行振込">銀行振込</option>
                                <option value="現金">現金</option>
                            </select>
                            @if ($errors->has('method'))
                            <small class="form-text invalid-feedback">{{ $errors->first('method') }}</small>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <label for="issueDate">発行日</label>
                            <input type="date" class="form-control" id="issueDate" name="issue_date" value="{{ old('issue_date') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="note">備考</label>
                            <input type="text" class="form-control" id="note" name="note" value="{{ old('note') }}">
                        </div>
                        <button class="btn btn-primary">発行</button>
                    </form>

                    <h3>領収書を作成</h3>
                    <form action="{{ route('paymentPost') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group mb-3">
                            <label for="shop_name">支払い先</label>
                            <select class="custom-select" id="shop_name" name="shop_id">
                                @foreach($shops as $shop)
                                <option value={{ $shop['id'] }}> {{ $shop['name'] }} </option>
                                @endforeach
                            </select>

                            @if ($errors->has('shop_id'))
                            <small class="form-text invalid-feedback">{{ $errors->first('shop_id') }}</small>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <label for="customerInput">購入者名</label>
                            <input type="text" class="form-control" id="customerInput" name="customer" value="{{ old('customer') }}">
                            @if ($errors->has('customer'))
                            <small class="form-text invalid-feedback">{{ $errors->first('customer') }}</small>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <label for="priceInput">金額</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">&yen;</span>
                                </div>
                                <input type="text" class="form-control is-invalid" id="priceInput" name="price" placeholder="0" value="{{ old('price') }}">
                                @if ($errors->has('price'))
                                <small class="form-text invalid-feedback">{{ $errors->first('price') }}</small>
                                @endif
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="method">支払い方法</label>
                            <select class="custom-select" id="method" name="method">
                                <option value="クレジットカード">クレジットカード</option>
                                <option value="代金引換">代金引換</option>
                                <option value="銀行振込">銀行振込</option>
                                <option value="現金">現金</option>
                            </select>
                            @if ($errors->has('method'))
                            <small class="form-text invalid-feedback">{{ $errors->first('method') }}</small>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <label for="issueDate">発行日</label>
                            <input type="date" class="form-control" id="issueDate" name="issue_date" value="{{ old('issue_date') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="note">備考</label>
                            <input type="text" class="form-control" id="note" name="note" value="{{ old('note') }}">
                        </div>
                        <button class="btn btn-primary">発行</button>
                    </form>

        </div>
    </div>
</div>
@endsection