<?php

namespace App\Services;

use App\Repositories\Interfaces\CategoryRepositoryInterface;

class CategoryService
{
	private CategoryRepositoryInterface $categoryRepository;

	public function __construct(CategoryRepositoryInterface $categoryRepository)
	{
		$this->categoryRepository = $categoryRepository;
	}

	public function getAll()
	{
		return $this->categoryRepository->all();
	}

	public function get(int $id)
	{
		if (!$this->categoryRepository->find($id)) return abort(404);
		return $this->categoryRepository->find($id);
	}

	public function create(array $data)
	{
		return $this->categoryRepository->create($data);
	}

	public function update(int $id, array $data)
	{
		if (!$this->categoryRepository->find($id)) return abort(404);
		return $this->categoryRepository->update($id, $data);
	}

	public function delete(int $id)
	{
		if (!$this->categoryRepository->find($id)) return abort(404);
		return $this->categoryRepository->delete($id);
	}
}