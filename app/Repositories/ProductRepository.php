<?php
namespace App\Repositories;

use App\Models\Product;
use App\Interfaces\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface {
    public function all(?int $categoryId = null, int $perPage = 10) {
        return 'Hello';
    }
    public function find(int $id) {

    }
    public function create(array $data){
        return 'Hello';
    }
    public function update(int $id, array $data) {
        return 'Hello';

    }
    public function delete(int $id) {
        return 'Hello';

    }
}