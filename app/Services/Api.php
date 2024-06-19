<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use \Illuminate\Http\Client\PendingRequest;

class Api
{
    /** @var PendingRequest */
    private static PendingRequest $http;

    public static function http(): PendingRequest
    {
        return self::httpClient();
    }

    private static function httpClient(): PendingRequest
    {
        return Http::withHeaders([
                'Accept'        => 'application/json',
                'Content-Type'        => 'application/json',
                'Authorization' => 'Bearer ' . config('amo.amo_token')
            ])->baseUrl(config('amo.api_url'));
    }
}
