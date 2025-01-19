<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>memo show</title>
</head>
<body>
    <h1>タイトル一覧</h1>
    {{-- <a href="/memos/">戻る</a> --}}
    <a href="{{  route("memos.index") }}">戻る</a>
    <h1>{{ $memo->title }}</h1>
    <P>本文</P>
    <p><p>{{$memo->body}}</p></p>
    <p>{!! nl2br(e($memo->body)) !!}</p>
</body>
</html>
