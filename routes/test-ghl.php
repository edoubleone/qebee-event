<?php

use App\Services\GhlService;
use Illuminate\Support\Facades\Log;

Route::get('/test-ghl-api', function () {
    try {
        $ghlService = new GhlService();
        
        // Test basic API connectivity by trying to fetch products
        $result = $ghlService->getProducts();
        
        if ($result) {
            return response()->json([
                'status' => 'success',
                'message' => 'GHL API integration is working!',
                'data' => $result
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'GHL API returned no data. Check logs for details.',
            ], 400);
        }
    } catch (\Exception $e) {
        Log::error('GHL API Test Error: ' . $e->getMessage());
        return response()->json([
            'status' => 'error',
            'message' => 'GHL API test failed: ' . $e->getMessage(),
        ], 500);
    }
});
