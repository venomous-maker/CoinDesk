<?php

if (!function_exists('get_imported_asset')) {
    function get_imported_asset($path = null, $baseDir = "assets/") : string
    {
        return asset($baseDir . $path);
    }
}
if (!function_exists('get_logo')) {
    function get_logo($footer = false) : string
    {
        if($footer){
            return asset(get_imported_asset(env('APP_FOOTER_LOGO', 'images/logo/coindesk-white.jpeg')));
        }
        return asset(get_imported_asset(env('APP_LOGO', 'images/logo/coindesk-white.jpeg')));
    }
}
