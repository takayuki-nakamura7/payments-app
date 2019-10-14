@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mb-5">
        @auth
        <div class="col-md-10 mb-5">
            <div class="card">
                <div class="card-header">新しい領収書を発行</div>
                <div class="card-body">
                    <form action="{{ route('create') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group mb-3">
                            <label for="shop_name">支払い先 <a class="btn" href="{{ route('shops') }}" role="button">ショップを追加</a></label>
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
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">領収書一覧（{{ $payments->count() }}件）<a class="btn" href="{{ route('filter') }}" role="button">フィルター検索</a></div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th>伝票番号</th>
                                <th class="dNone">対象店舗</th>
                                <th class="issuesListCaption">*伝票番号をクリックすると詳細が確認できます。</th>
                                <th class="dNone">名前</th>
                                <th class="dNone">金額</th>
                                <th class="dNone">発行日</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($payments as $payment)
                            <tr>
                                <td>
                                    <a href="{{ route('detail', ['id' => $payment->id]) }}">
                                        {{ $payment->order_no }}
                                    </a>
                                </td>
                                <td class="dNone">{{ $payment->shop->name }}</td>
                                <td class="dNone">
                                    {{ $payment->customer }}
                                </td>
                                <td class="dNone">&yen;{{ $payment->price }}</td>
                                <td class="dNone">{{ $payment->issue_date }}</td>
                                <td>
                                    <form class="ta-right pr-10" action="{{ route('edit', ['id' => $payment->id]) }}" method="get">
                                        <button class="btn btn-primary">編集</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('delete', ['id' => $payment->id]) }}" method="post" onclick="return confirm('本当に削除しますか？')">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="delete">
                                        <button class="btn btn-danger btn-dell">削除</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{ $payments->links() }}
        </div>
        @else
        <div class="jumbotron-fluid mb-5" style="text-align: center;">
            <h1 class="lead">領収書を発行しよう！</h1>
            <p style="margin-bottom: 2rem;">ログインしていただくと領収書の作成が出来ます。</p>
            <form method='POST' action="{{ route('login') }}">
                @csrf
                <input id="email" type="hidden" class="form-control" name="email" value="payments.app.laravel@gmail.com" required autofocus>
                <input id="password" type="hidden" class="form-control" name="password" value="password" required>
                <button class="btn btn-primary btn-sm" style="padding: 10px;">テストユーザーとしてログイン</button>
            </form>
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">領収書一覧（{{ $payments->count() }}件）</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th>伝票番号</th>
                                <th class="dNone">対象店舗</th>
                                <th>名前</th>
                                <th>金額</th>
                                <th class="dNone">発行日</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($payments as $payment)
                            <tr>
                                <td>
                                    {{ $payment->order_no }}
                                </td>
                                <td class="dNone">{{ $payment->shop->name }}</td>
                                <td>
                                    {{ $payment->customer }}
                                </td>
                                <td>&yen;{{ $payment->price }}</td>
                                <td class="dNone">{{ $payment->issue_date }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{ $payments->links() }}
        </div>
    </div>
    @endauth
</div>


@endsection