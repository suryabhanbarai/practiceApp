<?php

namespace App\BusinessObjects;

class ProductBO
{
    public int $id;
    public string $name;
    public ?string $description;
    public string $sku;
    public float $price;
    public int $categoryId;
    public string $createdAt;
    public string $updatedAt;

    public function __construct(array $data)
    {
        $this->id = $data['id'] ?? 0;
        $this->name = $data['name'];
        $this->description = $data['description'] ?? null;
        $this->sku = $data['sku'];
        $this->price = (float) $data['price'];
        $this->categoryId = $data['category_id'];
        $this->createdAt = $data['created_at'];
        $this->updatedAt = $data['updated_at'];
    }
}
