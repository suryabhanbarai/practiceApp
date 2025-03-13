<?php

namespace App\BusinessObjects;

class CategoryBO
{
    public int $id;
    public string $name;
    public ?int $parentCategoryId;
    public array $children = [];
    public string $createdAt;
    public string $updatedAt;

    public function __construct(array $data)
    {
        $this->id = $data['id'] ?? 0;
        $this->name = $data['name'];
        $this->parentCategoryId = $data['parent_category_id'] ?? null;
        $this->createdAt = $data['created_at'];
        $this->updatedAt = $data['updated_at'];
    }
}
