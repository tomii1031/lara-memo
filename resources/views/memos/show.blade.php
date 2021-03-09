@extends('app')

@section('title', '記事詳細')

@section('content')
  @include('nav')
  <div class="container">
    <div class="card mt-3">
        <div class="card-body d-flex flex-row">
          <i class="fas fa-user-circle fa-3x mr-1"></i>
          <div>
            <div class="font-weight-bold">{{ $memo->user->name }}</div>
            <div class="font-weight-lighter">{{ $memo->created_at->format('Y/m/d H:i') }}</div>
          </div>

        @if( Auth::id() === $memo->user_id )
          <!-- dropdown -->
            <div class="ml-auto card-text">
              <div class="dropdown">
                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-ellipsis-v"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="{{ route("memos.edit", ['memo' => $memo]) }}">
                    <i class="fas fa-pen mr-1"></i>記事を更新する
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-delete-{{ $memo->id }}">
                    <i class="fas fa-trash-alt mr-1"></i>記事を削除する
                  </a>
                </div>
              </div>
            </div>
            <!-- dropdown -->

            <!-- modal -->
            <div id="modal-delete-{{ $memo->id }}" class="modal fade" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form method="POST" action="{{ route('memos.destroy', ['memo' => $memo]) }}">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                      {{ $memo->title }}を削除します。よろしいですか？
                    </div>
                    <div class="modal-footer justify-content-between">
                      <a class="btn btn-outline-grey" data-dismiss="modal">キャンセル</a>
                      <button type="submit" class="btn btn-danger">削除する</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- modal -->
          @endif

        </div>
        <div class="card-body pt-0">
          <h3 class="h4 card-title">
            <a class="text-dark" href="{{ route('memos.show', ['memo' => $memo]) }}">
              {{ $memo->title }}
            </a>
          </h3>
          <div class="card-text">
            {{ $memo->body }}
          </div>
        </div>
        <div class="card-body pt-0 pb-2 pl-3">
            <div class="card-text">
              <memo-like>
              </memo-like>
            </div>
          </div>
      </div>
  </div>
@endsection



