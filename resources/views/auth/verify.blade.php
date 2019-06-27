@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('メールアドレスを認証') }}</div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('メールアドレスに認証コードを送りました。') }}
                            </div>
                        @endif

                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('メールが届かない場合は') }}, <a
                                href="{{ route('verification.resend') }}">{{ __('こちらをクリックしてください') }}</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
