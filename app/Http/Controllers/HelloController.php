<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

global $head, $style, $body, $end;
$head = '<html><head>';
$style = <<<EOF
<style>
body {font-size:16pt;}
h1 { font-size:100pt;}
</style>
EOF;
$body = '</head><body>';
$end = '</body></html>';

function tag($tag, $txt)
{
    return "<{$tag}>" . $txt . "</{$tag}>";
}

class HelloController extends Controller
{
    public function index()
    {
        global $head, $style, $body, $end;

        $html = $head . tag('title', 'Hello/Index') . $style . $body
            . tag('h1', 'Index') . tag('p', 'this is Index page')
            . '<a href="/hello/other">go to </a>'
            . $end;
        return $html;
    }

    public function other()
    {
        global $head, $style, $body, $end;

        $html = $head . tag('title', 'Hello/Other') . $style . $body
            . tag('h1', 'Other') . tag('p', 'aaaaaaa')
            . $end;
        return $html;
    }
}
