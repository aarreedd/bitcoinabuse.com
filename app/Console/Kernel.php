<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

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
        $schedule->command('bitcoinabuse:export-reports --since=forever --full-dump')->monthlyOn(15, '2:42');
        $schedule->command('bitcoinabuse:export-reports --since=30d --full-dump')->weeklyOn(0,'2:31');
        $schedule->command('bitcoinabuse:export-reports --since=1d --full-dump')->dailyAt('2:13');

        $schedule->command('bitcoinabuse:export-reports --since=forever')->monthlyOn(15, '3:42');
        $schedule->command('bitcoinabuse:export-reports --since=30d')->weeklyOn(0,'3:31');
        $schedule->command('bitcoinabuse:export-reports --since=1d')->dailyAt('3:13');

        $schedule->command('spark:kpi')->dailyAt('23:55');
        $schedule->command('telescope:prune --hours=48')->dailyAt('22:55');

        $schedule->command('geoip:update')->monthlyOn(7, '4:07');
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
