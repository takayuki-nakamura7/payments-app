@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">請求書詳細 - {{ $payment->customer }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table table-borderless">
                            <tr>
                                <td>伝票番号</td>
                                <td class="text-right">{{ $payment->order_no }}</td>
                            </tr>
                            <tr>
                                <td>購入者名</td>
                                <td class="text-right">{{ $payment->customer }}</td>

                            </tr>
                            <tr>
                                <td>値段</td>
                                <td class="text-right">&yen;{{ $payment->price }}</td>
                            </tr>
                            <tr>
                                <td>発行日</td>
                                <td class="text-right">{{ $payment->issue_date }}</td>
                            <tr>
                                <td>支払い方法</td>
                                <td class="text-right">{{ $payment->method }}</td>
                            </tr>
                            <tr>
                                <td>発行者</td>
                                <td class="text-right">{{ $payment->user->name }}</td>
                            </tr>
                            <tr>
                                <td>対象店舗</td>
                                <td class="text-right">{{ $payment->shop->name }}</td>
                            </tr>
                            <tr>
                                <td>備考</td>
                                <td class="text-right">{{ $payment->note }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
