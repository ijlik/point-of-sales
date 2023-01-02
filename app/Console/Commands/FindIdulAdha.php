<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class FindIdulAdha extends Command
{
    protected $signature = 'find:iduladha';


    public function handle()
    {
        $year = now()->addYear()->format('Y');

        $response = Http::get("https://www.googleapis.com/calendar/v3/calendars/en.indonesian%23holiday%40group.v.calendar.google.com/events?key=AIzaSyCW-GgbApaXiAl08ret7hGlBHhqFIpF-6Q")->json();
        $path = "Idul Adha";

        foreach ($response['items'] as $item) {
            if (strpos($item['summary'], $path) !== false) {
                $date = Carbon::createFromFormat('Y-m-d', $item['start']['date']);
                if($date->format('Y') == $year) {
                    dd($date);
                    echo $path . " pada tahun " . $year . " jatuh pada tanggal " . $item['start']['date'] . PHP_EOL;
                    break;
                }
            }
        }
    }
}
