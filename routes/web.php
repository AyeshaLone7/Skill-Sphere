
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;




Route::get('/', function () {
    return view('course');
});


Route::post('/register', [CourseController::class, 'store'])
    ->name('register.store');
