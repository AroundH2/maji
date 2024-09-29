<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート集計結果</title>
</head>
<body>
    <h1>アンケート集計結果</h1>
    <p>ご回答ありがとうございました!</p>
    @foreach ($questions as $question)
        <h2>{{ $question->question }}</h2>
        <ul>
            @foreach ($question->responses as $response)
                
                <li>{{ $response->response }} - 回答数: {{ $response->count }}</li>
            @endforeach
        </ul>
    @endforeach
</body>
</html>