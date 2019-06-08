@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center mb-4">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">領収書情報を変更</div>
                <div class="card-body">
                    <form action="{{ route('update', ['id' => $payment->id]) }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group mb-3">
                            <label for="shop_name">支払い先</label>
                            <select class="custom-select" id="shop_name" name="shop_id">
                            @foreach($shops as $shop)
                                    <option value={{ $shop['id'] }} @if($shop['id'] === $payment->shop_id) selected @endif> {{ $shop['name'] }} </option>
                                @endforeach
                            </select>

                            @if ($errors->has('shop_id'))
                                <small class="form-text invalid-feedback">{{ $errors->first('shop_id') }}</small>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <label for="customerInput">購入者名</label>
                            <input type="text" class="form-control" id="customerInput" name="customer" value="{{ $payment->customer }}">
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
                                <input type="number" class="form-control is-invalid" id="priceInput" name="price" placeholder="0" value="{{ $payment->price }}">
                                @if ($errors->has('customer'))
                                    <small class="form-text invalid-feedback">{{ $errors->first('price') }}</small>
                                @endif
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="orderNoInput">支払い方法</label>
                            <select class="custom-select" id="priceOperatorSelect" name="method">
                                <option value="クレジットカード" @if("クレジットカード" === $payment->method) selected @endif>クレジットカード</option>
                                <option value="代金引換" @if("代金引換" === $payment->method) selected @endif>代金引換</option>
                                <option value="銀行振込" @if("銀行振込" === $payment->method) selected @endif>銀行振込</option>
                            </select>
                            @if ($errors->has('method'))
                                <small class="form-text invalid-feedback">{{ $errors->first('method') }}</small>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <label for="orderNoInput">備考</label>
                            <input type="text" class="form-control" id="orderNoInput" name="note" value="{{ $payment->note }}">
                        </div>
                        <button class="btn btn-primary">変更</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
