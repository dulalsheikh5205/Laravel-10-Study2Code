<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
    // function getWeather($city){ // route এ যে কয়টা parameter ধরবেন, funciton এ ঠিক সেই কয়টা argument pass করতে হবে
    //     return "weather in {$city} is good";
    // }
    
    function getWeather($city = null){
        return "weather in {$city} is good";
    }
}
