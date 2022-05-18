<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Carbon\Carbon;
use App\Models\Stage;
use Illuminate\Support\Facades\Log;

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
            $todaysDate = Carbon::now()->format('Y-m-d');
            $stage = Stage::where('status', 'active')->first();
            if($stage){
                $expireDate = Carbon::parse($stage->end_date)->format('Y-m-d');
                if ($todaysDate == $expireDate) {
                    Stage::where('status', 'active')->update([
                        'status'=> 'expired',
                    ]);
                }else {
                   // Log::debug($expireDate);
                }
            }
        })->hourly();
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
