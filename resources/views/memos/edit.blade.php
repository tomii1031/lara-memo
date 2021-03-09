@extends('app')

@section('title', '編集画面')

@include('nav')

@section('content')
 <div class="container">
            <div class="card mt-3">
                <div class="card-body pt-0">
                  @include('error')
                  <div class="card-text">
                    <form method="POST" action="{{ route('memos.update', ['memo' => $memo]) }}">
                      @method('PATCH')
                      @include('memos.form')
                      <button type="submit" class="btn btn-primary btn-block"  style ="width: 200px; margin: auto;">更新する</button>
                    </form>
                  </div>
               </div>
     </div>
 </div>






@endsection
