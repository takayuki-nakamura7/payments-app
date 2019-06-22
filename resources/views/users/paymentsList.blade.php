@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ $name }}  が発行した領収書          ({{ $payments->count() }}件)</div>

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
                                <th>対象店舗</th>
                                <th>名前</th>
                                <th>金額</th>
                                <th>発行者</th>
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
                                    <td>{{ $shops[$payment->shop_id -1]->name }}</td>
                                    <td>
                                        {{ $payment->customer }}
                                    </td>
                                    <td>&yen;{{ $payment->price }}</td>
                                    <td>{{ $payment->user->name }}</td>
                                    <td>
                                        <form action="{{ route('edit', ['id' => $payment->id]) }}" method="get">
                                            <button class="btn btn-primary">編集</button>
                                        </form>
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
            </div>
        </div>
    </div>
@endsection
