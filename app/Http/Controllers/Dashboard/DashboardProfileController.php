<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Kota;
use App\Models\KodePos;
use App\Models\Provinsi;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardProfileController extends Controller
{
    public function index(){
        return view('dashboard.profile.index');
    }
}
