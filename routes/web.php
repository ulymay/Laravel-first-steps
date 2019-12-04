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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'MiControlador@index');
Route::get('/crear', 'MiControlador@create');
Route::get('/articulos', 'MiControlador@store');
Route::get('/mostrar', 'MiControlador@show');
Route::get('/contacto', 'MiControlador@contactar');
Route::get('/galeria', 'MiControlador@galeria');


// Route::get('/insertar', function(){

//     DB::insert("INSERT INTO articulos (NOMBRE_ARTICULO, PRECIO, PAIS_ORIGEN, SECCION, OBSERVACIONES) VALUES(?,?,?,?,?)",
//     ["JARRON", 15.2, "JAPON", "CERAMICA", "GANGA"]);

// });

// Route::get('/leer', function(){

//     $resultados = DB::select("SELECT * FROM articulos WHERE ID=?", [1]);

//     foreach ($resultados as $articulo) {
        
//         return $articulo-> Nombre_Articulo;

//     }

// });

// Route::get('/actualiza', function(){

//     DB::update("UPDATE articulos SET SECCION='DECORACION' WHERE ID=?", [1]);

// });

// Route::get('/borrar', function(){

//     DB::update("DELETE FROM articulos WHERE ID=?", [1]);

// });

Route::get("/leer", function(){

    // $articulos=App\Articulo::all();

    // foreach ($articulos as $articulo) {
        
    //     echo "Nombre: " . $articulo->Nombre_Articulo . " Precio: " .$articulo->Precio . "<br>";

    // }

    // $articulos = App\Articulo::where("id",4)->get();

    $articulos = App\Articulo::withTrashed()
    ->where('id', 4)
    ->restore();

    // return $articulos;

});

Route::get("/insertar", function(){

    $articulos = new App\Articulo;

    $articulos->Nombre_Articulo = "Pantalones";
    $articulos->Precio = 60;
    $articulos->pais_origen = "España";
    $articulos->observaciones = "Lavados a la piedra";
    $articulos->seccion = "Confeccion";
    $articulos->save();


});

Route::get("/actualizar", function(){

    // $articulos = App\Articulo::find(7);

    // $articulos->Nombre_Articulo = "Pantalones";
    // $articulos->Precio = 90;
    // $articulos->pais_origen = "España";
    // $articulos->observaciones = "Lavados a la piedra";
    // $articulos->seccion = "Confeccion";
    // $articulos->save();

    App\Articulo::where("seccion","Menaje")->where("pais_origen","España")->update(["precio"=>90]);


});

Route::get("/borrar", function(){

    App\Articulo::where("seccion","Ferreteria")->delete();

});

Route::get("/insercionvarios", function(){

    App\Articulo::create(["Nombre_Articulo"=>"Impresora","Precio"=>50,"pais_origen"=>"Colombia","observaciones"=>"Nada que decir","seccion"=>"Informatica"]);

});

Route::get("/softdelete", function(){

    App\Articulo::find(4)->delete();

});

Route::get("/harddelete", function(){

    $articulos = App\Articulo::withTrashed()
    ->where('id', 4)
    ->forceDelete();

});