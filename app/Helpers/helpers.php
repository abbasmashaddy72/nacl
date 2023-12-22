<?php

// Create or Update Static option value in DB

use App\Models\Settings;

if (!function_exists('set_static_option')) {
    function set_static_option($key, $value)
    {
        if (!Settings::where('key', $key)->first()) {
            Settings::create([
                'key' => $key,
                'value' => $value,
            ]);

            return true;
        }
        Settings::where('key', $key)->update([
            'key' => $key,
            'value' => $value,
        ]);
        cache()->forget($key);

        return true;

        return false;
    }
}

// Get Static Value from DB
if (!function_exists('get_static_option')) {
    function get_static_option($key)
    {
        global $key;
        $key = $key;
        $value = Settings::where('key', $key)->first();
        cache()->remember($key, 86400, function () {
            global $key;

            return Settings::where('key', $key)->first();
        });

        return !empty($value) ? $value->value : null;
    }
}
