<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>memo create</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <a href="{{ route('memos.index') }}">戻る</a>
    <h1>新規登録</h1>
    {{-- バリデ処理 --}}
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

    <form action="{{ route('memos.store') }}" method="post">
        @csrf
        {{-- <input type="hidden" name="_token" value="sNbl4npxJaLS3zMRpjy2XLN4hRCc4Wv2kQrhIywD" autocomplete="off"> --}}
        <p>
            <label for="title">タイトル</label><br>
            <input type="text" name="title" id="title" value="{{ old('title') }}">
            {{-- value="{{ old('title',$memo->title) }}"バリデ処理 --}}
        </p>
        <p>
            <label for="body">本文</label><br>
            <textarea name="body" class="body" id="body">{{ old('body') }}</textarea>
            {{-- value="{{ old('body',$memo->body) }}" バリデ処理 --}}
        </p>

        <input type="submit" value="登録">
    </form>
</body>

</html>
