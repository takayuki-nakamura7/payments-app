@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">フィルター</div>
                    <div class="card-body">
                        <form action="{{ route('test') }}" method="get">
                            <div class="form-group">
                                <label>名前</label>
                                <input type="text" name="customer">
                            </div>
                            <div class="form-group">
                                <label>伝票番号</label>
                                <input type="text" name="order_no">
                            </div>
                            <div class="form-group">
                                <label>金額</label>
                                <input type="number" name="price" placeholder="0">
                                <select name="price_operator">
                                    <option value="=">と等しい</option>
                                    <option value=">">より上</option>
                                    <option value="<">より下</option>
                                    <option value=">=">以上</option>
                                    <option value="<=">以下</option>
                                </select>
                            </div>

                            <div class="form-check mb-3">
                                <input
                                        class="form-check-input"
                                        name="self_issued_payments"
                                        type="checkbox"
                                        value="1"
                                        id="selfIssuedPaymentsCheckbox"
                                        @if(intval(old('self_issued_payments', 0)) === 1) checked @endif
                                >
                                <label class="form-check-label" for="selfIssuedPaymentsCheckbox">
                                    自分が発行した伝票のみ表示する
                                </label>
                            </div>

                            <button class="btn btn-primary">検索</button>
                        </form>
                    </div>
                    <br>
                    <div class="card-header">領収書を発行</div>
                    <div class="card-body">
                        <form action="{{ route('createIssue') }}" method="post">
                            {{ csrf_token() }}
                            <label>名前</label>
                            <input type="text" name="customer">
                            <button class="btn btn-primary">作成</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection