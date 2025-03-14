<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\BusinessObjects\CategoryBO;
use App\Interfaces\CategoryRepositoryInterface;

class CategoryController extends Controller
{
    protected $categoryRepository;
    public function __construct(CategoryRepositoryInterface $categoryRepository) {
        $this->categoryRepository = $categoryRepository;
    }

    public function index(): jsonResponse {
        $category = $this->categoryRepository->all();

        return response()->json(array_map(fn($cat) => new CategoryBO($cat), $category), 200);
    }
}
