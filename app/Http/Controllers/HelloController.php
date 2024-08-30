<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        return <<<EOF
<html>
<title>hello</title>
<style>
body {font-size:16pt}
</style>
<body>
<h1>Index</h1>
<p>これは、Helloコントローラーのindexアクションです。</p>
</body>
</html>
EOF;
    }
}
