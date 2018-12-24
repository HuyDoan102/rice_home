<?php

namespace App\Http\Controllers\Admin;

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
        $foods = $this->foodRepository->paginate(10);

        return view('admin.foods.index', compact("foods"));
    }
}
