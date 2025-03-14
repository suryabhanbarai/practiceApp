<?php

namespace App\Interfaces;

interface CategoryRepositoryInterface
{
    public function all(): array;
    public function find(int $id): ?array;
}
