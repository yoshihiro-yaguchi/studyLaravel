<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function() {
    return '<html><body><h1>hello</h1><p>This is sample page.</p></body></html>';
});

$html = <<<EOF
<html>
    <body>
        <h1>Hello</h1>
        <p>This is sample page.</p>
        <p>これはサンプルで作ったページです。</p>
    </body>
</html>
EOF;

Route::get('/hello/hereDoc', function () use ($html) {
    return $html;
});