<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\UserInterface;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard',[Dashboard::class,'ShowDashboardPage'])->name('dashboard');

Route::get('/citiestransport',[Dashboard::class,'CityTrans'])->name('CityTrans');
Route::get('/city-trans', [Dashboard::class, 'store'])->name('city_trans');
Route::get('/city-trans/edit/{id}', [Dashboard::class, 'edit'])->name('edit_city_trans');
Route::get('/city-trans/delete/{id}', [Dashboard::class, 'destroy'])->name('delete_city_trans');
Route::put('/city-trans/edit/{id}', [Dashboard::class, 'update'])->name('update_city_trans');





Route::get('/unitransport',[Dashboard::class,'UniTrans'])->name('UniTrans');
Route::get('/schooltransport',[Dashboard::class,'SchoolTrans'])->name('SchoolTrans');
Route::get('/teacherstransport',[Dashboard::class,'TeachersTrans'])->name('TeachersTrans');





Route::get('/Transport', [UserInterface::class, 'ShowUIPage'])->name('transport');

//main pages
Route::get('/Unitransport', [UserInterface::class, 'UniversityTransportation'])->name('unitransport');
Route::get('/UniSubs', [UserInterface::class, 'UniversitySubscribtion'])->name('');

Route::get('/Schooltransport', [UserInterface::class, 'SchoolTransportation'])->name('Schooltransport');
Route::get('/SchoolSubs', [UserInterface::class, 'SchoolSubscribtion']);

Route::get('/Teacherstransport', [UserInterface::class, 'TeachersTransportation'])->name('Teacherstransport');
Route::get('/TeachersSubs', [UserInterface::class, 'TeachersSubscribtion']);

Route::get('/Citytransport', [UserInterface::class, 'Citiestransport'])->name('Citiestransport');
Route::get('/reserve-bus', [UserInterface::class, 'reserveBus'])->name('reserve_bus');
Route::get('/search-bus', [UserInterface::class, 'search'])->name('search_bus');










// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
