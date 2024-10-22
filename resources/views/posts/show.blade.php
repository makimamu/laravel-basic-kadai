<!DOCTYPE html>
<html>
<body>
    
    <ul>
        <li>ID: {{ $post->id }}</li>
        <li>タイトル: {{ $post->title }}</li>
        <li>本文: {{ $post->content }}</li>
        <li>作成日時: {{ $post->created_at }}</li>
        <li>更新日時: {{ $post->updated_at }}</li>
    </ul>
</body>
</html>