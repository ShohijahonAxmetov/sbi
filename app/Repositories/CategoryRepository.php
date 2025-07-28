<?php

namespace App\Repositories;

use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Models\Category;

class CategoryRepository implements CategoryRepositoryInterface
{
	public function all()
	{
		return Category::all();
	}

	public function create(array $data): Category
	{
		return Category::create($data);
	}

	public function find(int $id): ?Category
	{
		return Category::with('products')->find($id);
	}

	public function update(int $id, array $data): Category
	{
		$this->find($id)->update($data);

		return $this->find($id);
	}

	public function delete(int $id): bool
	{
		return $this->find($id)->delete();
	}
}