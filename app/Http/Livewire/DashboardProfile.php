<?php

namespace App\Http\Livewire;

use App\Models\Kota;
use App\Models\User;
use App\Models\KodePos;
use Livewire\Component;
use App\Models\Provinsi;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class DashboardProfile extends Component
{
    use WithFileUploads;
    
    public $state= [
        'option' => null,
    ];

    public $name;
    public $photo;
    public $foto;
    public $jenis_kelamin;
    public $tanggal_lahir;
    public $no_hp;
    public $no_telp;
    public $alamat;
    public $provinsi;
    public $kota;
    public $kecamatan;
    public $kelurahan;
    public $kode_pos;
    public $submit;

    public $selectedProvinsi = null;
    public $selectedKota = null;
    public $selectedKecamatan = null;
    public $selectedKelurahan = null;
    public $selectedKodePos = null;


    public function mount(){
        $provkota_id = Kota::where('city_name',auth()->user()->kota)->value('prov_id');
        $kotakec_id = Kecamatan::where('dis_name',auth()->user()->kecamatan)->value('city_id');
        $kecdis_id = Kelurahan::where('subdis_name',auth()->user()->kelurahan)->value('dis_id');
        $dissubdis_id = KodePos::where('postal_code',auth()->user()->kode_pos)->value('subdis_id');
        $this->name = auth()->user()->name;
        $this->foto = auth()->user()->foto;
        $this->jenis_kelamin = auth()->user()->jenis_kelamin;
        $this->tanggal_lahir = auth()->user()->tanggal_lahir;
        $this->no_hp = auth()->user()->no_hp;
        $this->no_telp = auth()->user()->no_telp;
        $this->alamat = auth()->user()->alamat;
        $this->provinsi = Provinsi::orderBy('prov_name','asc')->get();
        $this->selectedProvinsi = Provinsi::where('prov_name',auth()->user()->provinsi)->value('id');
        $this->selectedKota = Kota::where('city_name',auth()->user()->kota)->value('id');
        $this->selectedKecamatan = Kecamatan::where('dis_name',auth()->user()->kecamatan)->value('id');
        $this->selectedKelurahan = Kelurahan::where('subdis_name',auth()->user()->kelurahan)->value('id');
        $this->selectedKodePos = KodePos::where('postal_code',auth()->user()->kode_pos)->value('id');
        if(auth()->user()->kota){
            $this->kota = Kota::where('prov_id',$provkota_id)->orderBy('city_name','asc')->get();
        } else{
            $this->kota = collect();
        }
        if(auth()->user()->kecamatan){
            $this->kecamatan = Kecamatan::where('city_id',$kotakec_id)->orderBy('dis_name','asc')->get();
        }else{
            $this->kecamatan = collect();
        }
        if(auth()->user()->kelurahan){
            $this->kelurahan = Kelurahan::where('dis_id',$kecdis_id)->orderBy('subdis_name','asc')->get();
        }else{
            $this->kelurahan = collect();
        } 
        if(auth()->user()->kode_pos){
            $this->kode_pos = KodePos::where('subdis_id',$dissubdis_id)->orderBy('postal_code','asc')->get();
        }else{
            $this->kode_pos = collect();
        }

    }

    public function render()
    {
        return view('livewire.dashboard-profile');
    }

    public function updatedSelectedProvinsi($prov_id){
        if(!is_null($prov_id)){
            $this->kota = Kota::where('prov_id',$prov_id)->orderBy('city_name','asc')->get();
        } 
        $this->selectedKota = null;
        $this->selectedKecamatan =null;
        $this->selectedKelurahan = null;
        $this->selectedKodePos = null;
        $this->kecamatan = collect();
        $this->kelurahan = collect();
        $this->kode_pos = collect();
    }

    public function updatedSelectedKota($city_id){
        if(!is_null($city_id)){
            $this->kecamatan = Kecamatan::where('city_id',$city_id)->orderBy('dis_name','asc')->get();
        }
        $this->kelurahan = collect();
        $this->kode_pos = collect();
    }

    public function updatedSelectedKecamatan($dis_id){
        $this->kelurahan = Kelurahan::where('dis_id',$dis_id)->orderBy('subdis_name','asc')->get();
        $this->kode_pos = collect();
    }

    public function updatedSelectedKelurahan($subdis_id){
        $this->kode_pos = KodePos::where('subdis_id',$subdis_id)->orderBy('postal_code','asc')->get();
    }

    public function update(){
        $messages = [
            'min' => 'Harap memasukkan minimal 3 karakter!'
        ];
        $validator = $this->validate([
            'name' => 'min:3',
            'jenis_kelamin' => 'present',
            'tanggal_lahir' => 'present',
            'no_telp' => 'present',
            'no_hp' => 'present',
            'alamat' => 'present',
        ],$messages);
        if($this->photo) {
            if($this->foto){
                Storage::delete($this->foto);
            }
            $custom_file_name = $this->photo->getClientOriginalName();
            $path = $this->photo->storeAs('storage/' . auth()->user()->username .'/foto/' , $custom_file_name);
            $validator['foto'] = $path;
        } else {
            $validator['foto'] = auth()->user()->foto;
        }

        $validator["provinsi"] = Provinsi::where('id', $this->selectedProvinsi)->value('prov_name');
        $validator["kota"] = Kota::where('id', $this->selectedKota)->value('city_name');
        $validator["kecamatan"] = Kecamatan::where('id', $this->selectedKecamatan)->value('dis_name');
        $validator["kelurahan"] = Kelurahan::where('id', $this->selectedKelurahan)->value('subdis_name');
        $validator["kode_pos"] = KodePos::where('id', $this->selectedKodePos)->value('postal_code');
        
        User::where('id', auth()->user()->id)->update($validator);
        
        $this->dispatchBrowserEvent(event: 'toastr:info');
        
    }

    public function submit(){
        
    }
    




}
