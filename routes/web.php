<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/services', 'pages.services')->name('services');
Route::view('/government', 'pages.government')->name('government');
Route::view('/transparency', 'pages.transparency')->name('transparency');
Route::view('/barangays', 'pages.barangays')->name('barangays');
Route::view('/city-data', 'pages.city-data')->name('city-data');
Route::view('/about', 'pages.about')->name('about');
Route::view('/history', 'pages.history')->name('history');
Route::view('/tabak-festival', 'pages.tabak-festival')->name('tabak-festival');
Route::view('/contact', 'pages.contact')->name('contact');
