<?php

use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;

Route::get('settings/mutate/', [SettingsController::class, 'mutate']);
