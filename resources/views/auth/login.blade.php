@extends('app')

@section('title', 'ログイン画面')

@section('content')
<div class="container mt-5">
  <div class="card mx-auto" style="width: 1000px;">
    <div class="card-body mx-auto" style="width: 500px;">
        <h1 class="card-title"><i class="far fa-sticky-note mr-3"></i>Lara-memo</h1>
        <p>ログイン画面</p>
        @include('error')
        <form method="post" route="{{ route('login')}}">
            @csrf
            <div class="form-group">
                <label for="name">ユーザーネーム</label>
                <input type="text" class="form-control" id="name" name="name"placeholder="taro" required value="{{ old('name') }}">
                <small>英数字3〜16文字</small>
            </div>

            <div class="form-group">
              <label for="password">パスワード</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>

             <input type="hidden" name="remember" value="on">
             <button type="submit" class="btn btn-primary ml-5">ログイン</button>
        </form>
        <p><a href="{{route('register')}}" class="ml-5">新規登録こちら</a></p>
    </div>
  </div>
</div>

@endsection
