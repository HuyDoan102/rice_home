<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\FoodResource;
use App\Repositories\Contracts\FoodRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FoodController extends Controller
{
    protected $foodRepository;

    public function __construct(FoodRepository $foodRepository)
    {
        $this->foodRepository = $foodRepository;
    }

    public function index()
    {
        $foods = $this->foodRepository->paginate();
        $foods = FoodResource::collection($foods);

        return response()->json($foods, 200);
    }
}
