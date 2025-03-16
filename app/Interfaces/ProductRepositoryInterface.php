<?php

namespace App\Interfaces;

interface ProductRepositoryInterface
{
    public function all(?int $categoryId = null, int $perPage = 10): array;
    public function find(int $id): ?array;
    public function create(array $data): array;
    public function update(int $id, array $data): array;
    public function delete(int $id): bool;
}
