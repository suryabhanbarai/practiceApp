<?php

namespace Tests\Unit;

use App\Repositories\ProductRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;

class ApiTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void {
        parent::setUp();
    }
    public function test_that_true_is_true(): void
    {
        $mock = $this->getMockBuilder(ProductRepository::class);
    }
}
