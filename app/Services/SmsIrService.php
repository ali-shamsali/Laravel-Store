<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SmsIrService
{
    public function sendVerifyCode($mobile, $code)
    {
        $apiKey = env('SMSIR_API_KEY_SANDBOX');
        $templateId = env('SMSIR_TEMPLATE_ID_SANDBOX', 123456);

        $url = 'https://api.sms.ir/v1/send/verify';

        $data = [
            'mobile' => $mobile,
            'templateId' => (int)$templateId,
            'parameters' => [
                ['name' => 'Code', 'value' => $code]
            ]
        ];

        return Http::withHeaders([
            'Content-Type' => 'application/json',
            'X-API-KEY' => $apiKey,
        ])->post($url, $data)->json();
    }
}
