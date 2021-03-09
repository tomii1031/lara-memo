<div class="card" style="width: 250px;">
    <div class="card-body" style="width: 200px;">
        <h5 class="card-title">{{$memo->title}}</h5>
        <p class="card-text">{{$memo->body}}</p>
        <a href="{{ route('memos.edit',['memo'=> $memo])}}" class="card-link">編集する</a>
        <a href="{{ route('memos.show',['memo'=> $memo])}}" class="card-link">詳細へ</a>
    </div>
</div>
