<?php

namespace App\Services;

use App\Repositories\ProductRepository;

class ProductService
{
	private ProductRepository $productRepository;

	public function __construct(ProductRepository $productRepository)
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
}