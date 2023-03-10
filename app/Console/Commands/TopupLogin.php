<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\TopupToken;

class TopupLogin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'topup:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        \Log::info("Cron is working fine!");

        //For Login API of Topup
        $data['grantType'] = "password";
        $data['username'] = "amintopup";
        $data['password'] = "J7FAiSSSCWeLUM4";
        $loginData['data'] = (object) $data;

        $username = 'DISTRIBUTOR_API';
        $password = ';<G/2hnC}"HE:Z?A';

        $loginResponse = Http::withoutVerifying()->withBasicAuth($username, $password)->post('https://adp.280.af/login', $loginData);
        $loginResponseBody = $loginResponse->body();
        $loginResponseData = json_decode($loginResponseBody, true);
        $accessToken = $loginResponseData['data']['access_token'];
        $checkRecord = TopupToken::find(1);
        if (empty($checkRecord)) {
            $topupToken = new TopupToken;
            $topupToken->access_token = $accessToken;
            $topupToken->save();
        } else {
            $checkRecord->access_token = $accessToken;
            $checkRecord->save();
        }
        // })->everyThirtyMinutes();
    }
}
