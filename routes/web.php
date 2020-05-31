
<?php

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

$route_partials = [
	'authRoute',
	'adminRoute',
    'frontendRoute',
    'hotelRoute',
];

foreach ($route_partials as $partial) {

    $file = __DIR__.'/'.$partial.'.php';

    if ( ! file_exists($file))
    {
        $msg = "Route partial [{$partial}] not found.";
        throw new \Illuminate\Filesystem\FileNotFoundException($msg);
    }

    require_once $file;
}
