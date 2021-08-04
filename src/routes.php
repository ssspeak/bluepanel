<?php

Route::group(['middleware' => 'auth'], function()
{
Route::get('/home', function(){ return view('bluepanel::bluepanel-home');})->name('home');
Route::get('adminpanel', function(){ return view('bluepanel::bluepanel-home');});
});
