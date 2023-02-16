<?php

use Illuminate\Support\Facades\Auth;

define('LARAVEL_START', microtime(true));
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);
$response->send();
$kernel->terminate($request, $response);
$url = $_SERVER['REQUEST_URI'];
$layout  = file_get_contents('model.blade.php');
$path = 'resourses/views' . $url . '.php';
if (file_exists($path)) {
    $content = file_get_contents($path);
} else {
}
echo $layout;
if (Auth::check()) : ?>
    <a href="logout" class="vhod">Выйти</a>
<?php else : ?>
    <a href="login" class="vhod"> Вход </a>
<?php endif; ?>
</div>