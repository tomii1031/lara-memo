@extends('app')

@section('title', 'トップページ')

@section('content')
    @include('nav')
    <div style="background-image: url('images/wood.jpeg'); backgroud-size: cover; height: 700px;">
        <div class="container" style="height: 700px;">

            <div class="card-columns pt-5" style="columns: 3;">
                @foreach($memos as $memo)
                  @if( Auth::id() === $memo->user_id)
                    @include('memos.card')
                  @endif
                @endforeach
                </div>
            </div>
        </div>
    </div>
    @include('footer')
@endsection
