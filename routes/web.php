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

//HOMEPAGE route get metodo per(chiamata http)
Route::get('/', function () {
    return view('home');
//con name home possiamo targettizzare nei blade una rotta al posto dell'usare l'url
//se cambia la struttura o le nomenclatura questa struttura è più solida
})->name('home');

//FUMETTI ARCHIVE
Route::get('/comics', function () {
    //COMICS (emula-db e prende array da config)
    $comics = config('comics-data');
    return view('comics',[
    //Passo i dati a blade con array associativo, associo a cards la mia lista di prima
        'cards'=>$comics,
    ]);
})->name('comics');

//COMICS DETAIL (rotta con parametro)
//la rotta qua è comic con parametro nelle graffe
Route::get('/comic/{id}',function($id){
    //COMICS (emula-db e prende array da config)
    $comics = config('comics-data');;
    
    //Come con il get, prenderà l'id dalla query e la assegnerà alla funzione es. se inseriamo 1 nella barra di ricerca assegna 1
    //ci servirà un check per prendere il dato dall'array

    //CHECK ID 
    if(is_numeric($id) && $id >= 0 && $id < count($comics)){
    //per accedere al comic singolo, prendo la chiave di comics
    $comic = $comics[$id];
    // dump($comic);
    } else {
        //uccide esecuzione e porta a 404
        abort(404); //redirect 404
    }

    return view('comic-detail',[
    //Voglio chiamare la chiave comic(il detail del comic) in blade e associo il comic = comic[id]
    'comic' =>  $comic
    ]);
})->name('comic-detail');


//NEWS ARCHIVE
Route::get('/news', function () {
    return view('news');
})->name('news');
