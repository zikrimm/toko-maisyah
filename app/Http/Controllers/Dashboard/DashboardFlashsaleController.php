<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Banners;
use App\Models\product;
use App\Models\Category;
use App\Models\Flashsale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateproductRequest;

class DashboardFlashsaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function openFlashSale(Request $request, $id){
        DB::beginTransaction();
        try {
            // dd($request->file('banner_flashsale')->getClientOriginalName());
            $messages = [
                'required' => 'Field ini tidak boleh kosong!',
            ];
            $validatedData = $request->validate([
                'status' => 'required',
                'time' => 'required'
            ], $messages);
            if($request->banner_flashsale){
                $image = 'banner_flashsale';
                $custom_file_name = $request->file($image)->getClientOriginalName();
                $path = $request->file($image)->storeAs($image, $custom_file_name);
                $validatedData["banner_flashsale"] = $path;
            }
            Flashsale::where('id',$id)->update($validatedData);
            DB::commit();
            return response()->json(['message' => 'succes'], 200);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['errors' => $th->validator->messages(), 'data' => $request->all()], 400);
        }
    }
    

    public function closeFlashSale(Request $request, Flashsale $id){
        DB::beginTransaction();
        try {
            $messages = [
                'required' => 'Field ini tidak boleh kosong!',
            ];
            $validatedData = $request->validate([
                'status' => 'required'
            ], $messages);

            $validatedData["time"] = NULL;
            $check_banner = Flashsale::where('email',auth()->user()->email)->value('banner_flashsale');
            if ($check_banner){
                Storage::delete($id->banner_flashsale);
            }

            $validatedData["banner_flashsale"] = NULL;

            Flashsale::where('email',auth()->user()->email)->update($validatedData);
            DB::commit();
            return response()->json(['message' => 'succes'], 200);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['errors' => $th->validator->messages(), 'data' => $request->all()], 400);
        }
    }

    public function index(Request $request)
    {
        $products = product::where('status','active')->latest()->orderByDesc('flashsale')->get();
        if ($request->ajax()) {
            return datatables()->of($products)->addColumn('action', function ($product) {
                if($product->flashsale){
                    $button ='<div class="btn-group btn-group-sm"> 
                                <button class="btn btn-info edit showModalEditFlashSale" id="' . $product->id . '" ><i class="fas fa-pencil-alt"></i></button>
                                <button class="hapus btn btn-danger " id="' . $product->id . '" ><i class=" fas fa-trash "></i></button>            
                            </div>';
                } else {
                    $button ='<div class="btn-group btn-group-sm">
                                <button class="btn btn-primary create showModalCreateFlashSale" id="' . $product->id . '" ><i class="fas fa-plus"></i></button>            
                             </div>';
                }
                return $button;
            })->addColumn('flashsale',function($product){
                if($product->flashsale){
                    return '<h3 class="badge bg-success">Active</h3>';
                } else {
                    return '<h3 class="badge bg-danger">Non Active</h3>';
                }               
            })->addColumn('harga_product', function($product){
                return 'Rp' . number_format($product->harga_product,0,'','.');
            })->rawColumns(['action','flashsale','harga_product'])->setRowId('id')->make(true);
        }
        return view('dashboard.flashsale.index',[
            'products' => product::latest(),
            'flashsales' => Flashsale::all()
        ]);
    }

    public function getFlashSale($id)
    {
        $Flashsale = FlashSale::where('id', $id)->get();
        return response()->json(['flashsale' => $Flashsale], 200);
    }

    public function getProduct($id)
    {
        $Product = Product::where('id', $id)->get();
        return response()->json(['Product' => $Product], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $flashsale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $flashsale)
    {
        DB::beginTransaction();
        try {
            $messages = [
                'required' => 'Field ini tidak boleh kosong!',
            ];
            $validatedData = $request->validate([
                'flashsale' => 'required',
                'sold_out' => 'required',
                'harga_product' => 'required',
                'harga_coret_product' => 'required',
            ], $messages);
            $flashsale_product = str_replace("-", "/", $request->flashsale);
            $validatedData['flashsale'] = $flashsale_product;
            product::where('id', $flashsale->id)->update($validatedData);
            DB::commit();
            return response()->json(['message' => 'succes'], 200);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['errors' => $th->validator->messages(), 'data' => $request->all()], 400);
        }
    }

    public function removeFlashsale(Request $request, product $remove_flashsale)
    {
        DB::beginTransaction();
        try {
            if ($request->flashsale == 0000 - 00 - 00) {
                $validatedData['flashsale'] = NULL;
            } else {
                $remove_flashsale_product = str_replace("-", "/", $request->flashsale);
                $validatedData['flashsale'] = $remove_flashsale_product;
            }
            $validatedData['sold_out'] = NULL;
            $validatedData['harga_coret_product'] = NULL;
            $validatedData['sold_out'] = NULL;
            product::where('id', $remove_flashsale->id)->update($validatedData);
            DB::commit();
            return response()->json(['message' => 'succes'], 200);
        } catch (\Throwable $th) {
            DB::rollBack();
            $th->getMessage();
        }
    }

    public function addFlashsale(Request $request, product $add_flashsale)
    {
        DB::beginTransaction();
        try {
            $messages = [
                'required' => 'Field ini tidak boleh kosong!',
            ];
            $validatedData = $request->validate([
                'flashsale' => 'required',
                'sold_out' => 'required',
                'harga_product' => 'required',
                'harga_coret_product' => 'required',
            ], $messages);
            $flashsale_product = str_replace("-", "/", $request->flashsale);
            $validatedData['flashsale'] = $flashsale_product;
            product::where('id', $add_flashsale->id)->update($validatedData);
            DB::commit();
            return response()->json(['message' => 'succes'], 200);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['errors' => $th->validator->messages(), 'data' => $request->all()], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $flashsale
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $flashsale)
    {
        //
    }
}
