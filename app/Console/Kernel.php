<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Mail;
use App\Mail\StudentFailClass;
use App\Mail\WeeklyReport;
use App\Models\Student;

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
        $schedule->command("inspire")->hourly();

        $schedule
            ->command("inspire")
            ->everyMinute()
            ->sendOutputTo("scheduler-output.log");

        $schedule
            ->exec("bash scripts/backup.bash")
            ->everyMinute()
            ->after(function () {
                file_get_contents(
                    "https://betteruptime.com/api/v1/heartbeat/<api_key>"
                );
            });

        $schedule
            ->call(function () {
                Mail::to("huericnan@gmail.com")->send(new StudentFailClass());
            })
            ->everyMinute()
            ->when(function () {
                $students = Student::all();
                foreach ($students as $student) {
                    if ($student->average < 50) {
                        return true;
                    } else {
                        return false;
                    }
                }
            });

        $schedule
            ->call(function () {
                Mail::to("huericnan@gmail.com")->send(
                    new WeeklyReport(Student::all())
                );
            })
            ->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . "/Commands");

        require base_path("routes/console.php");
    }
}
