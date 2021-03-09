@extends('app')

@section('title', 'ユーザー登録画面')

@section('content')
<div class="container mt-5">
  <div class="card mx-auto" style="width: 1000px;">
    <div class="card-body mx-auto" style="width: 500px;">
        <h1 class="card-title"><i class="far fa-sticky-note mr-3"></i>Lara-Memo</h1>
        <p>新規登録画面</p>
        @include('error')
        <form method="post" route="{{ route('register')}}">
            @csrf
            <div class="form-group">
                <label for="name">ユーザーネーム</label>
                <input type="text" class="form-control" id="name" name="name"placeholder="taro" required value="{{ old('name') }}">
                <small>英数字3〜16文字(登録後の変更はできません)</small>
              </div>
            <div class="form-group">
              <label for="email">メールアドレス</label>
              <input type="text" class="form-control" id="email" name="email"  placeholder="exsample@hoge.com" required value="{{ old('email') }}">
            </div>
            <div class="form-group">
              <label for="password">パスワード</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">パスワード(確認)</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
            </div>

             <button type="submit" class="btn btn-primary ml-5">ユーザー登録</button>
          </form>
        <p><a href="{{ route('login') }}" class="ml-5">ログインはこちら</a></p>


        </div>
    </div>
</div>

@endsection
