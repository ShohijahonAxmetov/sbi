<?php

namespace App\Repositories;

use App\Repositories\Interfaces\ProductRepositoryInterface;
use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface
{
	public function all()
	{
		return Product::all();
	}

	public function create(array $data): Product
	{
		return Product::create($data);
	}

	public function find(int $id): ?Product
	{
		return Product::with('category')->find($id);
	}

	public function update(int $id, array $data): Product
	{
		$this->find($id)->update($data);

		return $this->find($id);
	}

	public function delete(int $id): bool
	{
		return $this->find($id)->delete();
	}
}