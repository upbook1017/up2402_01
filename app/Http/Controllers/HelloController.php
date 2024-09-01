<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(Request $request, Response $response)
    {
        $html = <<<EOF
<html>
<title>Hello</title>
<style>
body {font-size:16pt;}
h1 {font-size:30pt;}
</style>
<bpdy>
<h1>リクエストとレスポンス</h1>
<h3>Request</h3>
<pre>{$request}</pre>
<h3>Response</h3>
<pre>Response</pre>
</body>

</html>
EOF;
        $response->setContent($html);
        return $response;
    }

    /*public function other()
    {
        global $head, $style, $body, $end;

        $html = $head . tag('title', 'Hello/Other') . $style . $body
            . tag('h1', 'Other') . tag('p', 'aaaaaaa')
            . $end;
        return $html;
    }*/
}
