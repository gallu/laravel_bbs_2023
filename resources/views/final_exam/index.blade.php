{{-- index.blade.php --}}
<!doctype html>

<h1>Laravel final_exam</h1>
@if ($errors->any())
    <div>なんかエラーがあります！！</div>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form action="/final_exam/" method="POST">
@csrf
  <input type="text" name="input_1"><br>
  <br>
  <button>送信</button>
</form>

