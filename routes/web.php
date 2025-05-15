<?php

use App\Jobs\SendContactFormEmails;
use Illuminate\Http\Request;
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

Route::get('/','HomeController@index')->name('index');


// View US
//cambiar el controlador a -> about/AboutController.php
// Route::get('/nosotros','HomeController@index')->name('section-us');
// View US && Contact
Route::get('/nosotros', function () {
    return view('client.sections.abouts.index');
});
Route::get('/services', function () {
    return view('client.sections.services.index');
})->name('services');
Route::get('/contacto', function () {
    return view('client.sections.contact.contactb');
})->name('contacto');

Route::post('/contactForm','ContactsController@contactForm')->name('contact.form');
Route::get('/contactForm/preview', 'ContactsController@preview');


// Route::post('/tasks/handle-job', function () {
//     if (! request()->hasHeader('X-CloudTasks-TaskName')) {
//         abort(403, 'Unauthorized');
//     }

//     return Queue::marshal();
// });



Route::post('/tasks/handle-email', function (Request $request) {
    SendContactFormEmails::dispatch($request->all());
    return response()->json(['ok' => true]);
});
