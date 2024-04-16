<?php

namespace App\Http\Controllers;

use Sajadsdi\LaravelSettingPro\Support\Setting;

class SettingsController extends Controller
{
    public function mutate() 
    {
        $key = 'kira_yamato';
        $value = Setting::select(config('app.name'))->get($key, __('Rising Freedom Gundam'));
        echo __('The value of the key is ') . $value . PHP_EOL;;
        echo __('Sets the key') . PHP_EOL;
        Setting::select(config('app.name'))->set($key, __('Mighty Strike Freedom Gundam'));
        echo __('The value of the key is ') . Setting::select(config('app.name'))->get($key) . PHP_EOL;
        echo __('Deletes the key') . PHP_EOL;
        Setting::select(config('app.name'))->delete($key);
        echo ((Setting::select(config('app.name'))->has($key)) ? __('key exists!') : __('key not exists!')) . PHP_EOL;
    }
}
