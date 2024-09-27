<?php

use Carbon\Carbon;

if (!function_exists('current_time')) {
    function current_time($format = 'H:i:s') {
        // Set the locale to Nepali
        Carbon::setLocale('ne');

        // Get the current date and time in Nepali time zone
        return Carbon::now('Asia/Kathmandu')->locale('ne')->translatedFormat($format);
    }
}
