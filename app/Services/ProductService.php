<?php

namespace App\Services;

use App\Jobs\ExportProducts;
use Maatwebsite\Excel\Facades\Excel;
use App\Repositories\Interfaces\ProductRepositoryInterface;

class ProductService
{
	private ProductRepositoryInterface $productRepository;

	public function __construct(ProductRepositoryInterface $productRepository)
	{
		$this->productRepository = $productRepository;
	}

	public function getAll()
	{
		return $this->productRepository->all();
	}

	public function get(int $id)
	{
		if (!$this->productRepository->find($id)) return abort(404);
		return $this->productRepository->find($id);
	}

	public function create(array $data)
	{
		return $this->productRepository->create($data);
	}

	public function update(int $id, array $data)
	{
		if (!$this->productRepository->find($id)) return abort(404);
		return $this->productRepository->update($id, $data);
	}

	public function delete(int $id)
	{
		if (!$this->productRepository->find($id)) return abort(404);
		return $this->productRepository->delete($id);
	}

	public function export()
	{
		ExportProducts::dispatch();
		return;
	}
}