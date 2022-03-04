<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\User; // User model
use Mail; // Mail Facade

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();

        $schedule->call(function() {
            $arr_users = User::all();
 
            if(count($arr_users) > 0) {
                foreach ($arr_users as $user) {
                    $name = $user->name;
                    $email = $user->email;
                    $data = array("name" => $name, "body" => "Este es un mensaje de recordacion de proceso pendiente");
                    Mail::send('emails.mail', $data, function($message) use ($name, $email) {
                        $message->to($email, $name)
                                ->subject('Recordar proceso pendiente');
                        $message->from('atalertastempranas@gmail.com', 'Alertas Tempranas');
                    });
                }
            }
        })->dailyAt('09:00');;
 
        // tou can add more schedules here
 

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
