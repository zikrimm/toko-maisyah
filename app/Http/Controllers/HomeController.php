<?php

namespace App\Http\Controllers;

use App\Models\Banners;
use App\Models\product;
use App\Models\Category;
use App\Models\Flashsale;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __invoke()
    {
        return view('index', [
            'products' => product::where('status','active')->latest()->limit(8)->get(),
            'categories' => Category::all(),
            'banners' => Banners::all(),
            'flashsale' => Flashsale::all()
        ]);
    }
}
