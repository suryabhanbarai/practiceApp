<?php
namespace App\Repositories;

use App\Models\Product;
use App\Interfaces\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface {
    public function all(?int $categoryId = null, int $perPage = 10): array {
        $query = Product::query();
        if ($categoryId) {
            $query->where('category_id', $categoryId);
        }
        return $query->paginate($perPage)->toArray();
    }
    public function find(int $id): ?array {
        return Product::find($id)->toArray();
    }
    public function create(array $data): array {
        return Product::create($data)->toArray();
    }
    public function update(int $id, array $data): array {
        $product = Product::findOrFail($id);
        $product->update($data);
        return $product->toArray();
    }
    public function delete(int $id): bool {
        return Product::destroy($id) > 0;
    }
}
