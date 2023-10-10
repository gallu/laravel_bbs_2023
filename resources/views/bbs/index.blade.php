{{-- index.blade.php --}}
<!doctype html>

<h1>Laravel BBS</h1>
<form action="/bbs/" method="POST">
お名前:<input name="name"><br>
タイトル:<input name="title"><br>
本文:<textarea name="body"></textarea><br>
<button>投稿する</button>
</form>

<hr>
