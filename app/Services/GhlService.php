<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class GhlService
{
    protected $baseUrl;
    protected $accessToken;
    protected $locationId;

    public function __construct()
    {
        $this->baseUrl = config('services.ghl.base_url', 'https://services.leadconnectorhq.com');
        $this->accessToken = config('services.ghl.access_token');
        $this->locationId = config('services.ghl.location_id');
    }

    /**
     * Fetch products from GHL with caching.
     */
    public function getProducts()
    {
        return \Illuminate\Support\Facades\Cache::remember('ghl_products', 3600, function () {
            try {
                $response = Http::withHeaders([
                    'Authorization' => 'Bearer ' . $this->accessToken,
                    'Version' => '2021-07-28',
                    'Accept' => 'application/json',
                ])->get($this->baseUrl . '/products/', [
                    'locationId' => $this->locationId,
                    'limit' => 20
                ]);

                if ($response->successful()) {
                    return $response->json();
                }

                Log::error('GHL Fetch Products Error:', [
                    'status' => $response->status(),
                    'body' => $response->body()
                ]);

                return null;
            } catch (\Exception $e) {
                Log::error('GHL Fetch Products Exception: ' . $e->getMessage());
                return null;
            }
        });
    }

    /**
     * Create or update a contact in GHL.
     */
    public function createContact(array $data)
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->accessToken,
                'Version' => '2021-07-28',
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ])->post($this->baseUrl . '/contacts/', array_merge($data, [
                'locationId' => $this->locationId
            ]));

            if ($response->successful()) {
                return $response->json();
            }

            Log::error('GHL Create Contact Error:', [
                'status' => $response->status(),
                'body' => $response->body()
            ]);

            return null;
        } catch (\Exception $e) {
            Log::error('GHL Create Contact Exception: ' . $e->getMessage());
            return null;
        }
    }
}
