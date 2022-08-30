<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function __invoke()
    {
        return view('settings', [
            'categories' => Category::all()
        ]);
    }
}
