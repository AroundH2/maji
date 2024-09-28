<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケートフォーム</title>
</head>
<body>
    <h1>アンケートに答えてください</h1>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="/" method="POST">
        @csrf
        @foreach ($questions as $question)
            <p>{{ $question->question }}</p>
            <input type="text" name="responses[{{ $question->id }}]" required>
        @endforeach
        <button type="submit">送信</button>
    </form>
</body>
</html>