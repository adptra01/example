<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ParticipantController;
use App\Models\Participant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'login'    => true,
    'logout'   => true,
    'register' => false,
    'reset'    => false,  // for resetting passwords
    'confirm'  => false,  // for additional password confirmations
    'verify'   => false,  // for email verification
]);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::post('/', [ParticipantController::class, 'store'])->name('participant.post');


Route::get('/document/{participant}', function (Participant $participant) {
    $file = storage_path("app/public/{$participant->work_file}");
    return response()->download($file);
})->name('download.work_file');

