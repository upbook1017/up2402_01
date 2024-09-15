<html>

<head>
    <title>@yeld('title')</title>
    <style>
        body {
            font-size: 16pt;
        }

        h1 {
            font-size: 50pt;
        }

        ul {
            font-size: 12pt;
        }

        hr {
            font-size: 25px;
        }

        .menutitle {
            font-size: 14pt;
        }

        .content {
            font-size: 10px;
        }

        .footer {
            font-size: 10pt;
        }
    </style>
</head>

<body>
    <h1>@yeld('title')</h1>
    @section('menubar')
        <h2 class="menutitle">※メニュー</h2>
        <ul>
        <li>@show
        </li>
    </ul>
    <hr size="1">
    <div class="content">
        @yeld('content')
    </div>
    <div class="footer">
        @yeld('footer')
    </div>
</body>

</html>
