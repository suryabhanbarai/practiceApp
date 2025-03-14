<?php
namespace App\Repositories;

use App\Models\Category;
use App\Interfaces\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface {
    public function all(): array {
        return Category::with(['children'])->get()->toArray();
    }
    public function find(int $id): ?array {
        return Category::all()->find($id)->toArray();
    }
}
