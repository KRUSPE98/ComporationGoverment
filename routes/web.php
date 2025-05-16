<?php

use Illuminate\Support\Facades\Route;
use Stackkit\LaravelGoogleCloudTasksQueue\Middleware\EnsureFrontendRequestIsFromCloudTasks;


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

// Route::post('/handle-task', function () {
//     $jobClass = request()->input('job');

//     if (!class_exists($jobClass)) {
//         abort(400, 'Invalid job class.');
//     }

//     $job = app($jobClass);

//     dispatch($job);
// })->middleware(EnsureFrontendRequestIsFromCloudTasks::class);

use Google\Cloud\Tasks\V2\CloudTasksClient;

Route::get('/test-gcloud-auth', function () {
    try {
        $keyFilePath = '/var/www/keys/laravel-tasks.json';

        if (!file_exists($keyFilePath)) {
            throw new Exception("Key file not found at $keyFilePath");
        }

        $credentialsJson = json_decode(file_get_contents($keyFilePath), true);

        $clientEmail = $credentialsJson['client_email'] ?? 'client_email not found in key file';

        return response()->json([
            'client_email' => $clientEmail,
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'error' => $e->getMessage(),
        ], 500);
    }
});

Route::get('/test-env', function() {
    return env('GOOGLE_APPLICATION_CREDENTIALS');
});

use Stackkit\LaravelGoogleCloudTasksQueue\CloudTasksController;

Route::post('/cloud-tasks/handler', [CloudTasksController::class, 'handle']);
