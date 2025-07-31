<?php

namespace App\Jobs;

use App\Exports\ProductsExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class ExportProducts implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $fileName = 'products_'.time().'.xlsx';
        $link = url('/storage/'.$fileName);

        Excel::store(new ProductsExport(), $fileName, 'public');

        echo "Экспорт завершён. Ссылка на файл: ".$link."\n";
    }
}
