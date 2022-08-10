<?php

namespace App\Console\Commands;

use App\Models\Pembelian;
use App\Models\Penjualan;
use Illuminate\Console\Command;

class ClearUnfinishedTransaction extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'unfinished-transaction:clear';

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
        Penjualan::where('total_harga', '<>', 0)->delete();
        Pembelian::where('total_harga', '<>', 0)->delete();
    }
}
