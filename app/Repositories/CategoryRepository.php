<?php
namespace App\Repositories;

use App\Models\Category;
use App\Interfaces\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface {
    public function all(?int $categoryId = null, int $perPage = 10) {
        return 'Hello';
    }
    public function find(int $id) {
        return 'Hello';
    }
}