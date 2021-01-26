<?php

use Celaraze\DcatPlus\Http\Controllers\DcatPlusSiteController;
use Celaraze\DcatPlus\Http\Controllers\DcatPlusUIController;
use Illuminate\Support\Facades\Route;

Route::get('/dcat-plus/site', [DcatPlusSiteController::class, 'index'])
    ->name('dcat-plus.site.index');

Route::get('/dcat-plus/ui', [DcatPlusUIController::class, 'index'])
    ->name('dcat-plus.ui.index');
