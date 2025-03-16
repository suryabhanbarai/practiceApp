<?php

namespace Tests\Unit;

use App\Repositories\ProductRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;

class ApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_that_true_is_true(): void
    {
        $repository = app(ProductRepository::class);
        $product = $repository->all();
        $this->assertTrue($product);
    }
}
