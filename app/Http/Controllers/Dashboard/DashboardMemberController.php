<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $members = Member::all();
        if ($request->ajax()) {
            return datatables()->of($members)->addColumn('action', function ($member) {
                $button ='<div class="btn-group btn-group-sm">
                            <button class="btn btn-info edit showModalEditMember" id="' . $member->id . '" ><i class="fas fa-pencil-alt"></i></button>
                            <button class="hapus btn btn-danger " id="' . $member->id . '" ><i class=" fas fa-trash "></i></button>                    
                         </div>';
                return $button;
            })->rawColumns(['action'])->setRowId('id')->make(true);
        }
        return view('dashboard.anggota.index');
    }

    public function getMembers($id)
    {
        $Member = Member::where('id', $id)->get();
        return response()->json(['Member' => $Member], 200);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
                'unique' => 'Email ini sudah digunakan!'
            ];
            $validatedData = $request->validate([
                'email' => 'required|email|unique:members,email',
                'nama_lengkap' => 'required',
                'nim' => 'required',
                'angkatan' => 'required',
                'divisi' => 'required',
            ], $messages);

            $validatedData["email"] = auth()->user()->email;
            Member::create($validatedData);
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
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        return view('dashboard.anggota.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $anggotum)
    {
        db::beginTransaction();
        try {
            $messages = [
                'required' => 'Field ini tidak boleh kosong!',
                'exists' => 'Email ini sudah digunakan!'
            ];
            $validatedData = $request->validate([
                'email' => 'required|email|exists:members,email',
                'nama_lengkap' => 'required',
                'nim' => 'required',
                'angkatan' => 'required',
                'divisi' => 'required',
            ],$messages);
            Member::where('id', $anggotum->id)->update($validatedData);
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
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $anggotum)
    {
        db::beginTransaction();
        try {
            Member::destroy($anggotum->id);
            db::commit();
            return response()->json(['success' => 'Data Berhasil dihapus!']);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['errors' => $th->getMessage()]);
        }

    }
}
