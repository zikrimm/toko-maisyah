<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;
use \Cviebrock\EloquentSluggable\Services\SlugService;


class DashboardProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = product::orderBy('status')->latest()->get();
        if ($request->ajax()) {
            return datatables()->of($products)->addColumn('action', function ($product) {
                $button =
                    '<div class="btn-group btn-group-sm">
                        <button class="btn btn-primary detail" id="' . $product->id . '" > <i class="far fa-eye"></i></button>
                        <button class="btn btn-info edit" id="' . $product->id . '" ><i class="fas fa-pencil-alt"></i></button>
                        <button id="' . $product->id . '" class="hapus btn btn-danger rounded-0"  style="padding: 0.25rem 0.5rem; font-size:.875rem; margin-left: -1px"><i class=" fas fa-trash "></i></button>
                    </div>';
                return $button;
            })->addColumn('gambar_product', function ($product) {
                $url = asset('storage/' . $product->gambar_product);
                $gambar_product = '<img src="' . $url . '" alt="" class="product-img" >';
                return $gambar_product;
            })->addColumn('status',function($product){
                if($product->status == "active"){
                    return '<h3 class="badge bg-success">Active</h3>';
                } else {
                    return '<h3 class="badge bg-danger">Non Active</h3>';
                }
            })->addColumn('harga_product', function($product){
                return 'Rp' . number_format($product->harga_product,0,'','.');
            })->rawColumns(['status','harga_product','gambar_product', 'action'])->setRowId('id')->make(true);
        }
        return view('dashboard.products.tes', [
            'categories' => Category::all(),
            'products' => Product::all()
        ]);
    }

    public function getProduct($id)
    {
        $product = product::where('id', $id)->get();
        return response()->json(['product' => $product, 'category' => $product[0]->category->nama_kategori], 200);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('dashboard.products.create', [
    //         'categories' => Category::all()
    //     ]);
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreproductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $messages = [
                'required' => 'Field ini tidak boleh kosong!',
                'image' => 'File harus berupa image!',
                'max' => 'File yang diupload tidak boleh melebihi 1MB!',
                'unique' => 'Nama Product sudah digunakan!'
            ];
            $validatedData = $request->validate([
                'nama_product' => 'required|unique:products,nama_product',
                'slug' => 'required',
                'jumlah_product' => 'required',
                'category_id' => 'required',
                'harga_product' => 'required',
                'harga_coret_product' => 'nullable',
                'gambar_product' => 'required|image|max:1024',
                'gambar_detailProduct1' => 'required|image|max:1024',
                'gambar_detailProduct2' => $request->gambar_detailProduct2 ? 'image|max:1024' : 'present',
                'gambar_detailProduct3' => $request->gambar_detailProduct3 ? 'image|max:1024' : 'present',
                'info_product' => 'required',
                'deskripsi_product' => 'required'
            ], $messages);


            $validatedData["status"] = "active";
            $validatedData["email"] = auth()->user()->email;

            $images = ['gambar_product', 'gambar_detailProduct1', 'gambar_detailProduct2', 'gambar_detailProduct3'];
            foreach($images as $image) {
                if ($request->file($image)) {
                    $custom_file_name = $request->file($image)->getClientOriginalName();
                    $path = $request->file($image)->storeAs($image . '/' . $request->slug , $custom_file_name);
                    $validatedData[$image] = $path;
                }
            }
            
            product::create($validatedData);
            DB::commit();
            return response()->json(['message' => 'succes'], 200);
        } catch (\Throwable $th) {
            DB::rollBack();

            return response()->json(['errors' => $th->validator->messages(), 'data' => $request->all()], 400);
        }
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(product::class, 'slug', $request->nama_product);
        return response()->json(['slug' => $slug]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        return view('dashboard.products.show', [
            'product' =>  $product
        ]);
    }

    /** 
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        return view('dashboard.products.edit', [
            'product' => $product,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateproductRequest  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        db::beginTransaction();
        try {
            $validatedData = $request->validate([
                'status' => 'required',
                'nama_product' => 'required',
                'info_product' => 'required',
                'jumlah_product' => 'present',
                'category_id' => 'required',
                'harga_product' => 'required',
                'harga_coret_product' => 'nullable',
                'gambar_product' => $request->gambar_product ? 'image|file|max:1024' : 'present',
                'gambar_detailProduct1' => $request->gambar_detailProduct1 ? 'image|file|max:1024' : 'present',
                'gambar_detailProduct2' => $request->gambar_detailProduct2 ? 'image|max:1024' : 'present',
                'gambar_detailProduct3' => $request->gambar_detailProduct3 ? 'image|max:1024' : 'present',
                'deskripsi_product' => 'required'
            ]);
   
                $images = ['gambar_product', 'gambar_detailProduct1', 'gambar_detailProduct2', 'gambar_detailProduct3'];
                foreach ($images as $image) {         
                    if ($request->hasFile($image)) {
                        $custom_file_name = $request->file($image)->getClientOriginalName();
                        $path = $request->file($image)->storeAs($image . '/' . $product->slug , $custom_file_name);
                        $validatedData[$image] = $path;
                        if ($product->$image) {
                            Storage::delete($product->$image);
                        }
                    } else {
                        $validatedData[$image] = $product->$image;
                    }
                }

            product::where('id', $product->id)->update($validatedData);
            DB::commit();
            return response()->json(['message' => 'succes'], 200);
        } catch (\Throwable $th) {
            DB::rollBack();

            return response()->json(['errors' => $th->validator->messages(), 'data' => $request->all()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        db::beginTransaction();
        try {
            $images = ['gambar_product', 'gambar_detailProduct1', 'gambar_detailProduct2', 'gambar_detailProduct3'];
            foreach ($images as $image) {
                if ($product->$image) {
                    $file = $product->$image;
                    $explodePath = explode("/", $file);
                    $folder_product = $explodePath[0] . '/'. $explodePath[1];
                    Storage::deleteDirectory($folder_product);
                }
            }
            product::destroy($product->id);
            db::commit();
            return response()->json(['success' => 'Berhasil dihapus!']);
        } catch (\Throwable $th) {
            DB::rollBack();
            $th->getMessage();
        }
    }
}
