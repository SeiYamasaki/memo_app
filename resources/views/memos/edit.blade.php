<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>memo edit</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <a href="{{ route('memos.show', $memo) }}">戻る</a>
    <h1>更新</h1>
    {{-- バイデ処理 --}}
    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- 更新先はmemosのidにしないと増える sail artisan rote:listで確認① -->
    <form action="{{ route('memos.update', $memo) }}" method="post">
        @csrf
        @method('PATCH')
        <p>
            <label for="title">タイトル</label><br>
            <input type="text" name="title" id="title" value="{{ $memo->title }}">
        </p>
        {{-- value="{{ $memo->title } でもともと入れた内容を反映させる --}}
        <p>
            <label for="body">本文</label><br>
            <textarea name="body" class="body" id="body">{{ $memo->body }}</textarea>
        </p>
        {{-- value="{{ $memo->body } でもともと入れた内容を反映させる --}}
        <input type="submit" value="更新">
    </form>
</body>

</html>
