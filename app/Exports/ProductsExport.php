<?php

namespace App\Exports;

use App\Repositories\Interfaces\ProductRepositoryInterface;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ProductsExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return app(ProductRepositoryInterface::class)->all();
    }

    public function map($product): array
    {
        return [
            $product->id,
            $product->name,
            $product->barcode,
            $product->price,
            $product->category ? $product->category->name : '',
        ];
    }

    public function headings(): array
    {
        return ['ID', 'Название товара', 'Штрихкод', 'Цена', 'Название категории'];
    }
}
