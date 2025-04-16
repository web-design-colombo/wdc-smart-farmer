<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    /**
     * Get weather data from OpenWeatherMap.
     *
     * @param string $location
     * @return \Illuminate\Http\JsonResponse
     */
    public function getWeatherData($location)
    {
        $apiKey = env('OPENWEATHERMAP_API_KEY'); // Get API key from .env file
        $url = "http://api.openweathermap.org/data/2.5/weather?q={$location}&appid={$apiKey}&units=metric"; // Get data in Celsius

        // Fetch weather data from OpenWeatherMap API
        $response = Http::get($url);

        if ($response->successful()) {
            // Return the weather data as JSON response
            return response()->json([
                'temperature' => $response->json()['main']['temp'],
                'weather_condition' => $response->json()['weather'][0]['description'],
                'humidity' => $response->json()['main']['humidity'],
                'wind_speed' => $response->json()['wind']['speed'],
            ]);
        } else {
            return response()->json(['message' => 'Failed to fetch weather data.'], 500);
        }
    }
}
