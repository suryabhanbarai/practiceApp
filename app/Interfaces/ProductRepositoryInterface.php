<?php

namespace App\Interfaces;

interface ProductRepositoryInterface
{
    public function all(?int $categoryId = null, int $perPage = 10);
    public function find(int $id);
    public function create(array $data);
    public function update(int $id, array $data);
    public function delete(int $id);
}
