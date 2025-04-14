<?php

// use App\Http\Controllers\TestformController;

// use Illuminate\Routing\Controllers\Middleware;

use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Nfgarching\Componets\Controllers\TestformController;

Route::get('admin', function () {
  return view('bootstrap::admin');
})->name('admin');

Route::get('dashboard', function () {
  return view('bootstrap::dashboard');
})->name('dashboard');

Route::middleware('web')
  ->get('startpage', function () {
    return view('bootstrap::startpage');
  })->name('startpage');

Route::middleware('web')
  ->get('testform', TestformController::class)
  ->name('testform');

Route::get('testpage', function () {
  return view('bootstrap::testpage');
})->name('testpage');

Route::get('testtable', function () {
  return view('bootstrap::testtable');
})->name('testtable');

Route::get('testing', function () {
  return view('bootstrap::testing');
})->name('testing');
