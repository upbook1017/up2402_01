<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

Route::get('hello/{mmmmm}/{aaa?}', function ($msg, $aaa = 'no!!') {

    $html = <<<EOF
<html>
<head>
<title>Hello</title>
<style>
body {font-size:16; color:#999; }
h1 { font-size:100pt; text-align:right; color:#eee;
margin:-40px 0px -50px 0px; }
</style>
</head>
<body>
<h1>Hello</h1>
<p>{$msg}</p>
<p>{$aaa}</p>
<p>これはサンプルページです。</p>
</body>
</html>
EOF;
    return $html;
});

require __DIR__ . '/auth.php';
