@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">請求書一覧 - {{ $payment->customer }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table>
                            <tr>
                                <td clsss="col-4">伝票番号</td>
                                <td class="col-8 text-right">{{ $payment->order_no }}</td>
                            </tr>
                            <tr>
                                <td clsss="col-4">購入者名</td>
                                <td class="col-8 text-right">{{ $payment->customer }}</td>

                            </tr>
                            <tr>
                                <td clsss="col-4">値段</td>
                                <td class="col-4 text-right">&yen;{{ $payment->price }}</td>
                            </tr>
                            <tr>
                                <td clsss="col-4">発行日</td>
                                <td class="col-8 text-right">{{ $payment->issue_date }}</td>
                            </tr>
                            <tr>
                                <td clsss="col-4">支払い方法</td>
                                <td class="col-8 text-right">{{ $payment->method }}</td>
                            </tr>
                            <tr>
                                <th clsss="col-4">発行者</th>
                                <td class="col-8 text-right">{{ $payment->user->name }}</td>
                            </tr>
                            <tr>
                                <th clsss="col-4">対象店舗</th>
                                <td class="col-8 text-right">{{ $payment->shop->name }}</td>
                            </tr>
                            <tr>
                                <td clsss="col-4">備考</td>
                                <td class="col-8 text-right">{{ $payment->note }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
