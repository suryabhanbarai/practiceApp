<?php

namespace App\Interfaces;

interface CategoryRepositoryInterface
{
    public function all();
    public function find(int $id);
}
