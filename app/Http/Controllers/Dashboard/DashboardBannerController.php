<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Banners;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DashboardBannerController extends Controller
{
    public function index(Request $request){ 
        $banners = Banners::all();
        if ($request->ajax()) {
            return datatables()->of($banners)->addColumn('action', function ($banner) {
                $button =
                '<div class="btn-group btn-group-sm"> 
                    <button id="' . $banner->id . '" class="hapus btn btn-danger rounded-0"  style="padding: 0.25rem 0.5rem; font-size:.875rem; margin-left: -1px"><i class=" fas fa-trash "></i></button>
                </div>';
                return $button;
            })->addColumn('banner_utama', function ($banner) {
                $url = asset('storage/' . $banner->banner_utama);
                $banner_utama = '<img src="' . $url . '" alt="" class="banner-img" >';
                return $banner_utama; })
              ->rawColumns(['action','banner_utama'])->setRowId('id')->make(true);
        }
        return view('dashboard.banner.index',[
            'banners' => Banners::latest(),
            'count_banners' => Banners::count()
        ]);
    }

    public function store(Request $request){
        DB::beginTransaction();
        try {
            $messages = [
                'required' => 'Field ini tidak boleh kosong!',
                'max' => 'Ukuran file tidak boleh melebihi 5MB!',
                'mimes' => 'Format file harus jpg/jpeg/png'
            ];
            $validatedData = $request->validate([
                'banner_utama'   => 'required|max:5120|mimes:jpg,png,jpeg'
            ], $messages);
            $validatedData["email"] = auth()->user()->email;

            if($request->banner_utama){
                $custom_file_name = $request->file('banner_utama')->getClientOriginalName();
                $path = $request->file('banner_utama')->storeAs('Banners/Banner Utama', $custom_file_name);
                $validatedData["banner_utama"] = $path;
            }  
            Banners::create($validatedData);
            DB::commit();
            return response()->json(['message' => 'succes'], 200);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['errors' => $th->validator->messages(), 'data' => $request->all()], 400);
        }
    }

    public function destroy(Banners $banner)
    {
        db::beginTransaction();
        try {
            if($banner->banner_utama){
                Storage::delete($banner->banner_utama);
            }
            Banners::destroy($banner->id);
            db::commit();
            return response()->json(['success' => 'Berhasil dihapus!']);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['errors' => $th->getMessage()]);
        }
    }
}
