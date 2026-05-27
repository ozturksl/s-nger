<?php

use Illuminate\Support\Facades\DB;

if (!function_exists('getSiteContent')) {
    function getSiteContent()
    {
        return DB::table('content')
            ->select('ct_instagram', 'ct_linkedin', 'ct_number1', 'ct_number2', 'ct_address', 'ct_mail', 'ct_harita')
            ->first();
    }
}