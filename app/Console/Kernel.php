<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\TopupToken;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            //For Login API of Topup
            $data['grantType'] = "password";
            $data['username'] = "ATITest01";
            $data['password'] = "eD2#Rv3P";
            $loginData['data'] = (object) $data;

            $username = 'DISTRIBUTOR_API';
            $password = ';<G/2hnC}"HE:Z?A';

            $loginResponse = Http::withoutVerifying()->withBasicAuth($username, $password)->post('https://adp.280.af/login', $loginData);
            $loginResponseBody = $loginResponse->body();
            $loginResponseData = json_decode($loginResponseBody, true);
            $accessToken = $loginResponseData['data']['access_token'];
            $checkRecord = TopupToken::where('id', 1)->first();
            if(empty($checkRecord)) {
                $topupToken = new TopupToken;
                $topupToken->access_token = $accessToken;
                $topupToken->save();
            }else{
                TopupToken::where('id', 1)->update(['access_token' => $accessToken]);
            }
        })->everyThirtyMinutes();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
