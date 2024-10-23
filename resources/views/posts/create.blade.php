
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投稿作成</title>
</head>
<body>
    <h1>投稿作成</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">タイトル</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" required>
            <!-- タイトルにバリデーションエラーがあるかどうか -->
        <!--titleフィールドが空の場合エラーメッセージの表示-->
            @if ($errors->has('title'))
                <p class="error">{{ $errors->first('title') }}</p>
            @endif
        </div>

        <div class="form-group">
        <!-- old（’title')やold('content')はバリデーショエラーが発生した際にエラーメッセージを表示する部分 -->
            <label for="content">本文</label>
            <textarea name="content" id="content" rows="5">{{ old('content') }}</textarea>
            @if ($errors->has('content'))
                <p class="error">{{ $errors->first('content') }}</p>
            @endif
        </div>

        <button type="submit">投稿する</button>
    </form>
</body>
</html>

