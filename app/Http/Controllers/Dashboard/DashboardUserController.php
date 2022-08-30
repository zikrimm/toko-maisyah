<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::all();
        if ($request->ajax()) {
            return datatables()->of($users)->addColumn('action', function ($user) {
                $button ='<div>
                <button class="btn btn-info edit showModalEditUser" id="' . $user->id . '" ><i class="fas fa-pencil-alt"></i></button>
                <button class="hapus btn btn-danger " id="' . $user->id . '" ><i class=" fas fa-trash "></i></button>                    
                </div>';
                return $button;
            })->addColumn('status',function($user){
                if($user->status == "Active"){
                    return '<h3 class="badge bg-success">Active</h3>';
                } else {
                    return '<h3 class="badge bg-danger">Non Active</h3>';
                }               
            })->rawColumns(['action','status'])->setRowId('id')->make(true);
        }
        return view('dashboard.user.index',[
            'users' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getUser($id)
    {
        $User = User::where('id', $id)->get();
        return response()->json(['User' => $User], 200);
    }

    public function create(Request $request)
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
                'unique' => 'Email ini sudah digunakan!',
                'confirm' => 'Password yang dimasukkan tidak cocok!',
                'min' => 'Password harus diisi minimal 6 karakter!',
                'confirmed' => 'Konfirmasi Password tidak cocok!'
            ];
            $validatedData = $request->validate([
                'email' => 'required|email|unique:users,email',
                'name' => 'required',
                'role' => 'required',
                'password' => 'required|min:6|confirmed'
            ], $messages);
    
            $validatedData['password'] = bcrypt($validatedData["password"]);
            $validatedData["status"] = "active";
    
            User::create($validatedData);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $messages = [
                'required' => 'Field ini tidak boleh kosong!',
            ];
            $validatedData = $request->validate([
                'role' => 'required',
                'status' => 'required'
            ], $messages);
    
            User::where('id',$id)->update($validatedData);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        db::beginTransaction();
        try {
            User::destroy($user->id);
            db::commit();
            return response()->json(['success' => 'Berhasil dihapus!']);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['errors' => $th->getMessage()]);
        }
    }
}
