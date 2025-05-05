<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\AcademyController;
use Illuminate\Support\Facades\Route;


            //------Wellcome_Page--------//
Route::get('/', function () {
    return view('welcome');
});
            //------dashboard--------//
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/main-content', function () {
    return view('main-content');
})->name('main-content');


            //------profile--------//

            Route::get('/profile0/index', function () {
                return view('profile0.index');
            })->name('profile0.index');
            Route::get('/profile0/edit', function () {
                return view('profile0.edit'); // Ensure this view exists in resources/views/profile0/edit.blade.php
            })->name('profile0.edit');

            Route::get('/profile0/delete', function () {
                return view('profile0.delete'); // Ensure this view exists in resources/views/profile0/delete.blade.php
            })->name('profile0.delete');

           //------Delete_profile--------//
Route::get('/earn/index', function () {
    return view('earn.index');
});

            //------Academy--------//
Route::resource('academies', AcademyController::class);
// Profile Page
// Route::get('/edit-profile', [ProfileController::class, 'showEditProfile'])->name('edit-profile');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });





// Additional Routes
Route::get('/dashboard2', function () {
    return view('dashboard2');
});

Route::get('/dashboard3', function () {
    return view('dashboard3');
});




Route::get('/changepassword', function () {
    return view('changepassword');
})->name('changepassword');

require __DIR__.'/auth.php';
