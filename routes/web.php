<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubastaController;

Route::get('/', function () {
   // return view('welcome');
$nodo = gethostname();
    try{
        //envimos una consulta al noodo db, por la red
        $version = DB::scalar('select version()');
        $estadoDB = 'Funcionando: '.$version;
    }catch(Throwable $e){
        //db no respondio: no rompemos la pagina, solo informamos
        $estadoDB = 'Caido: '.$e->getMessage();
    }
    return "Servidor web (app): Funcionando en nodo: $nodo <br><br>"
        ."Base de datos (db) : $estadoDB";
});

Route:: get('/subastas', [SubastaController::class,'index'] );
Route::post('/subastas/{subasta}/pujar', [SubastaController::class, 'pujar']);

Route::get('/sala', function () {
    return view('sala');
});
