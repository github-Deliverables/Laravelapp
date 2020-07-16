@extends('layouts.helloapp')

@section('title', 'Index')

@section('menuber')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです。</p>
    <p>必要なだけ記述できます</p>
@endsection

@section('footer')
copyright 2020 nii.
@endsection




<!-- <body>
    <h1>Blade/Index</h1>
    @isset ($msg)
    <p>こんにちは、{{$msg}}さん。</p>
    @else
    <p>何か書いてください。</p>
    @endisset
    <form method="POST" action="/hello">
        @csrf
        <input type="text" name="msg">
        <input type="submit">
    </form>
</body> -->


<!-- <body>
    <h1>Blade/Index</h1>
    <p>&#064;foreachディレクティブの例</p>
    <ol>
    @foreach($data as $item)
    <li>{{$item}}
    @endforeach
    </ol>
</body> -->

<!-- <body>
    <h1>Blade/Index</h1>
    <p>&#064;forディレクティブの例</p>
    <ol>
    @for ($i = 1;$i < 100;$i++)
    @if ($i % 2 == 1)
        @continue
    @elseif ($i <= 10)
    <li>No, {{$i}}
    @else
        @break
    @endif
    @endfor
    </ol>
</body> -->


<!-- <html>

<head>
    <title>Hello/Index</title>
    <style>
    body {font-size:16pt; color:#999; }
    h1 { font-size:50pt; text-align:right; color:#f6f6f6;
        margin:-20px 0px -30px 0px; letter-spacing:4pt; }
    </style>

</head>
<body>
    <h1>Blade/Index</h1>
    <p>&#064;for変数の例</p>
    @foreach ($data as $item)
    @if ($loop->first)
    <p>※データ一覧</p><ul>
    @endif
    <li>No,{{$loop->iteration}}. {{$item}}</li>
    @if ($loop->last)
    </ul><p>ーーここまで</p>
    @endif
    @endforeach
</body>
</html> -->
