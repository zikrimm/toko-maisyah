<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\Category;
use App\Models\Flashsale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Dekiakbar\IndonesiaRegionsPhpClient\Region;

class ProductController extends Controller
{
    public function index()
    {
        $products = product::where('status','active')->latest()->get();
        return view('product', [
            'products' => $products,
            'categories' => Category::all()
        ]);
    }

    public function category(Category $category)
    {
        return view('category', [
            'category' => $category,
            'category_banner' => $category->banner,
            'category_name' => $category->nama_kategori,
            'products' => $category->products,
            'categories' => Category::all()
        ]);
    }

    public function flashSale()
    {
        return view('flash-sale', [
            'categories' => Category::all(),
            'flashsale' => Flashsale::first(),
            'flashsale_time' => Flashsale::first()->value('time')
        ]);
    }

    public function productList()
    {
        return view('product-list', [
            'products' => product::where('status','active')->latest()->get(),
            'categories' => Category::all()
        ]);
    }

    public function detailProduct(product $product)
    {
        return view('detail-product', [
            'product' => $product,
            'categories' => Category::all()
        ]);
    }
    

    public function sendProduct(Request $request)
    {
        $product = json_decode($request->product);
        $jumlah = $request->quantity;
        $nama_product = $product->nama_product;
        return Redirect::to('https://api.whatsapp.com/send?phone=62895330038078&text=*Assalamualaikum%20Warahmatullahi%20Wabarakatuh*%20%0A%0ASaya%20ingin%20membeli%20' . $nama_product . '%20sebanyak%20' . $jumlah . '%20kak');
    }

    public function tanyaProduct(Request $request)
    {
        $pertanyaan = $request->pertanyaan;
        $pesan = str_replace(array("\r", "\n"), '%0A', $request->pertanyaan);
        return Redirect::to('https://api.whatsapp.com/send?phone=62895330038078&text=' . $pesan);
    }
}
