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

Route::get('/', function () {
    return view('index');
});

Route::get('/publicidade', function () {
    return view('publicidade');
});

Route::post('/send/mail', 'MailController@send');

//CRUD PublicidadeS

Route::post('search/publicidade','controllPublicidade@searchAll');

Route::post('searchById/publicidade','controllPublicidade@searchById');

Route::post('searchByTittle/titulo','controllPublicidade@searchByTittle');

Route::post('searchByData/data','controllPublicidade@searchByData');

Route::post('insert/cliente','controllCliente@insert');
//===================  SEARCH PublicidadeS PATH ===================


//TESTING
Route::post('isClienteOnVaga/clientePublicidade','ClientecontrollPublicidade@searchCadidatosOnVaga');

//END_TESTING

Auth::routes();

Route::group(['middleware'=>['auth']], function(){

    Route::get('/admin', function () {
        return view('admin');
    });

    Route::post('searchAllCliente/clientePublicidade','controllCliente@searchAll');

    //CRUD PublicidadeS
    Route::post('insert/publicidade','controllPublicidade@insert');

    Route::post('update/publicidade','controllPublicidade@upDate');

    Route::post('delete/publicidade','controllPublicidade@delete');

    //CRUD ClienteS

    Route::post('search/cliente','ClienteController@searchAll');

    Route::post('searchByNome/cliente','ClienteController@searchByNome');

    Route::post('update/cliente','ClienteController@upDate');

    Route::post('delete/cliente','ClienteController@delete');

    //CRUD ClientePublicidadeS


    Route::post('searchCadidatosInPublicidade/clientePublicidade','ClientecontrollPublicidade@searchCadidatosInPublicidade');

    Route::post('searchPublicidadeOfCadidatos/clientePublicidade','ClientecontrollPublicidade@searchPublicidadeOfCadidatos');

});
