<?php

use Illuminate\Support\Facades\Route;

Route::get('/locale/{locale}', function ($locale) {
    request()->session()->put('locale', $locale);
    return redirect('/pages');
});
