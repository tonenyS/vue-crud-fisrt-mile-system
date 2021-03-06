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
        'App\Console\Commands\DatabaseBackUp',
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('database:backup')
            ->hourly()
            ->onSuccess(function () use ($schedule) {
                DB::table('backup')->insert([
                    ['chanel' => 'backup_log',
                    'message' => 'auto run schedule command database:backup',
                    'status'  => 'success']
                ]);
            })
            ->onFailure(function () {
                DB::table('backup')->insert([
                    ['chanel' => 'backup_log',
                    'message' => 'error auto run schedule command database:backup',
                    'status'  => 'failed']
                ]);
            });
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}