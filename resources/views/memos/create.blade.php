@extends('app')

@section('title', '記事投稿画面')

@include('nav')

@section('content')
<div class="container">

    <div class="row">

      <div class="col-12">

        <div class="card mt-3">

          <div class="card-body pt-0">

            @include('error')
            <div class="card-text">
              <form method="POST" action="{{ route('memos.store') }}">

                @include('memos.form')

                <button type="submit" class="btn btn-primary btn-block" style ="width: 200px; margin: auto;">投稿する</button>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>






@endsection
