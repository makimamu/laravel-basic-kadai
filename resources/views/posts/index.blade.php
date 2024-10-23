<!DOCTYPE html>
<html>
<head>
    <title>投稿一覧</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        th {
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>投稿一覧</h1>

    <table>
        <head>
            <tr>
                <th>タイトル</th>
                <th>本文</th>
            </tr>
        </head>
        <body>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                </tr>
            @endforeach
        </body>
    </table>
</body>
</html>