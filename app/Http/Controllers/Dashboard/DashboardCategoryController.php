<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = Category::all();
        if ($request->ajax()) {
            return datatables()->of($categories)->addColumn('action', function ($category) {
                $button ='<div class="btn-group btn-group-sm">
                            <button class="btn btn-info edit showModalEditCategory" id="' . $category->id . '" ><i class="fas fa-pencil-alt"></i></button>
                            <button class="hapus btn btn-danger " id="' . $category->id . '" ><i class=" fas fa-trash "></i></button>                    
                          </div>';
                return $button;
            })->rawColumns(['action'])->setRowId('id')->make(true);
        }
        return view('dashboard.categories.index',[
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getCategories($id)
    {
        $Category = Category::where('id', $id)->get();
        return response()->json(['Category' => $Category], 200);
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Category::class, 'slug', $request->nama_kategori);
        return response()->json(['slug' => $slug]);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $messages = [
                'required' => 'Field ini tidak boleh kosong!',
                'unique' => 'Kategori ini sudah digunakan!'
            ];
            $validatedData = $request->validate([
                'nama_kategori' => 'required|unique:categories,nama_kategori',
                'slug' => 'required',
            ], $messages);
            $validatedData["email"] = auth()->user()->email;

            if($request->banner){
                $image = 'banner';
                $custom_file_name = $request->file($image)->getClientOriginalName();
                $path = $request->file($image)->storeAs('Category/Banner/' .$request->nama_kategori, $custom_file_name);
                $validatedData["banner"] = $path;
            }

            Category::create($validatedData);
            DB::commit();
            return response()->json(['message' => 'succes'], 200);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['errors' => $th->validator->messages(), 'data' => $request->all()], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        db::beginTransaction();
        try {
            $validatedData = $request->validate([
                'nama_kategori' => 'required'
            ]);

            if($request->banner){
                $image = 'banner';
                $custom_file_name = $request->file($image)->getClientOriginalName();
                $path = $request->file($image)->storeAs('Category/Banner/' .$request->nama_kategori, $custom_file_name);
                $validatedData["banner"] = $path;
                if($category->banner){
                    Storage::delete($category->banner);
                }
            }

            Category::where('id', $category->id)->update($validatedData);
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
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        db::beginTransaction();
        try {
            if($category->banner){
                Storage::delete($category->banner);
            }
            Category::destroy($category->id);
            db::commit();
            return response()->json(['success' => 'Berhasil dihapus!']);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['errors' => $th->getMessage()]);
        }
    }
}
