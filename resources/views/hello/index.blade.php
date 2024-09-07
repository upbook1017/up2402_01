<html>

<head>
    <title>Hello/Index</title>
    <style>
        body {
            font-size: 16pt;
        }

        h1 {
            font-size: 100pt;
        }
    </style>
</head>

<body>
    <h1>Blade/Index</h1>
    <p>{{ $msg }}</p>
    <form method="POST" action="/hello">
        @csrf
        <input type="next" name="msg">
        <input type="submit">
    </form>
</body>

</html>
