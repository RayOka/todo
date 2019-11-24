@extends('layout')

@section('content')
    <div class="conteiner">
        <div class="row">
            <div class="col col-md-offset-3 col-md-6">
                <nav class="panel panel-default">
                    <div class="panel-heading">パスワード再発行</div>
                    <div class="panel-body">
                        <form action="{{ route('password.update') }}" method="post">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}" />
                            <div class="form-group">
                                <label for="email">メールアドレス</label>
                                <input type="text" class="form-control" name="email" id="email" value="{{ old('email', $email) }}"/>
                            </div>
                            <div class="form-group">
                                <label for="password">新しいパスワード</label>
                                <input type="password" class="form-control" name="password" id="password" />
                            </div>
                            <div class="form-group">
                                <label for="password-confirm">新しいパスワードの確認</label>
                                <input type="password" class="form-control" name="password_confirmation" id="password-confirm" />
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">送信</button>
                            </div>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </div>
@endsection