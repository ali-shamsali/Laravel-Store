<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\SmsIrService;

class TestSmsIr extends Command
{
    protected $signature = 'sms:test {mobile} {code?}';
    protected $description = 'Test sending OTP via SMS.ir Sandbox';

    public function handle()
    {
        $mobile = $this->argument('mobile');
        $code = $this->argument('code') ?? rand(1000, 9999);

        $sms = new SmsIrService();
        $response = $sms->sendVerifyCode($mobile, $code);

        $this->info('SMS.ir Response:');
        $this->line(json_encode($response, JSON_PRETTY_PRINT));
        $this->info("Code used: $code");
    }
}
