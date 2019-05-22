@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">フィルター</div>
                    <div class="card-body">
                        <form action="{{ route('test') }}" method="get">
                            <div class="form-group mb-3">
                                <label for="customerInput">名前</label>
                                <input type="text" class="form-control" id="customerInput" name="customer" value="{{ old('customer') }}">
                            </div>
                            <button class="btn btn-primary">検索</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection