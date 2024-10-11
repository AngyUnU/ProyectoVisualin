<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { // " /  = slash " welcome.blade.php sitema de plantillas que ofrece laraavael para ahorrar timpo   
    return view('welcome');
});

Route::get('/testView', function () {
    return view('testView');
});

Route::get('/texto', function () {
    echo "hi word!";
    echo '<h1>Hola mundo</h1>';
});

Route::get('/echo', function (){
    echo view('test2');
});

Route::get('/Masrutas', function ($id) {
    return "podemos tener rutas tipo GET, POST, Delete, Patch";
});



Route::get('/custom', function () {
$msj = "Mensaje del servidor ";
$id = "500";
return view ('custom', ['msj'=> $msj, "identi" => $id, "A" => 29]);
});

Route::get('/contact', function (){
    return view ('contacto');
})-> name('contact');

Route::get('/testdb',[TestController::class, 'test']); // rutra para obtener el control