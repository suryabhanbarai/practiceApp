<?php

namespace App\Http\Controllers;

use App\Exceptions\customException;
use Illuminate\Http\Request;
use App\BusinessObjects\ProductBO;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Interfaces\ProductRepositoryInterface;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    private $productRepository;
    public function __construct(ProductRepositoryInterface $productRepository) {
        $this->productRepository = $productRepository;
    }

    public function index(): jsonResponse {
        $categoryId = request('category_id');
        $products = $this->productRepository->all($categoryId);
        return response()->json($products);
    }

    public function show(int $id): JsonResponse {
        $product = $this->productRepository->find($id);
        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }
        return response()->json(new ProductBO($product));
    }

    public function store(StoreProductRequest $request): JsonResponse
    {
        $product = $this->productRepository->create($request->validated());
        return response()->json(new ProductBO($product), 201);
    }
    public function update(UpdateProductRequest $request, int $id): JsonResponse
    {
        try {
            $product = $this->productRepository->update($id, $request->validated());
            return response()->json(new ProductBO($product));
        } catch (\Exception $exception) {
            return response()->json(['error' => 'Product not found'], 404);
        }
    }

    public function destroy(int $id): JsonResponse {
        if ($this->productRepository->delete($id)) {
            return response()->json(null, 204);
        }
        return response()->json(['error' => 'Product not found'], 404);
    }
}
