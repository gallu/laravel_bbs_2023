{{-- index.blade.php --}}
<!doctype html>

<h1>Laravel BBS</h1>
@if ($errors->any())
    <div>なんかエラーがあります！！</div>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form action="/bbs/" method="POST">
@csrf
お名前:<input name="name" value="{{ old('name') }}"><br>
タイトル:<input name="title" value="{{ old('title') }}"><br>
本文:<textarea name="body">{{ old('body') }}</textarea><br>
<button>投稿する</button>
</form>

<hr>
@foreach ($data as $datum)
<p>名前:{{ $datum["name"] }}, タイトル:{{ $datum["title"] }} ({{ $datum["created_at"] }})
<pre>{{ $datum["body"] }}</pre>
<hr>    
@endforeach
