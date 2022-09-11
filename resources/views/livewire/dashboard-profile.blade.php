<div>
    @if(session()->has('message'))
    <div class="alert alert-success mt-2">
        {{ session('message') }}
    </div>
    @endif
    <form wire:submit.prevent="update" action="profile" method="POST" enctype="multipart/form-data"> 
        @csrf
        <div class="row mx-1">
            <div class="col-12 mb-4 ">
                <div class="upload">
                    @can('admin')
                        @if($photo)
                        <img src="{{ $photo->temporaryUrl() }}" name="foto" width="140" class="mt-3 profile-user-img img-circle preview-profile" alt="">
                        @elseif(auth()->user()->foto)
                        <img src="{{  asset('storage/' .$foto) }}" name="foto" width="140" class="mt-3 profile-user-img img-circle preview-profile" alt="">
                        @else
                        <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" width="140" class="mt-3 profile-user-img img-circle preview-profile" alt="">
                        @endif
                    @else
                        @if($photo)
                        <img src="{{ $photo->temporaryUrl() }}" name="foto" width="140" class="mt-3 profile-user-img img-circle preview-profile" alt="">
                        @elseif(auth()->user()->foto)
                        <img src="{{  asset($foto) }}" name="foto" width="140" class="mt-3 profile-user-img img-circle preview-profile" alt="">
                        @else
                        <img src="{{ asset('img/user3.png') }}" width="140" class="mt-3 profile-user-img img-circle preview-profile" alt="">
                        @endif
                    @endcan
                    <div class="bulat">
                        <input wire:model="photo" type="file"  name="" id="img_profile">
                        <i class="fas fa-camera" style="color:#fff;"></i>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="nama_lengkap" class="label-profile" >Nama Lengkap</label>
                    <input wire:model="name" type="text" name="name" class="form-control" value="{{ auth()->user()->name }}" id="nama_lengkap" >
                    @error('name')
                    <span class="error-validation mt-2">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            
            <div class="col-6">
                <div class="form-group">
                    <label for="email" class="label-profile">Email</label>
                    <input type="text" name="email" value="{{ auth()->user()->email }}" class="form-control" id="email" >
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="jenis_kelamin" class="label-profile">Jenis Kelamin</label>
                    <select wire:model="jenis_kelamin" wire:model.defer="state.option" class=" rounded-2 form-control" id="jenis_kelamin" name="jenis_kelamin">                       
                        <option value="null" disabled >--Pilih Jenis Kelamin--</option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>
                </div> 
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="tanggal_lahir" class="label-profile">Tanggal Lahir</label>
                    <input wire:model="tanggal_lahir" type="date" name="tanggal_lahir" class="form-control dark-date" id="tanggal_lahir" >
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="no_hp" class="label-profile">No Handphone</label>
                    <div class="d-flex input-kotak">
                        <span class="kotak text-center">+62</span>
                        <input wire:model="no_hp" type="number" name="no_hp" class="form-control" id="no_hp">
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="no_telp" class="label-profile">No Telp</label>
                    <div class="d-flex input-kotak">
                        <span class="kotak text-center">+62</span>
                        <input wire:model="no_telp" type="number" name="no_telp" class="form-control" id="no_telp" >
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="provinsi" class="label-profile">Provinsi</label>
                    <select wire:model="selectedProvinsi" wire:model.defer="state.option" class=" rounded-2 form-control" id="provinsi" name="provinsi">    
                        <option value="null" disabled >--Pilih Provinsi--</option>
                        @foreach($provinsi as $prov)                   
                        <option value="{{ $prov->id }}">{{ $prov->prov_name }}</option>
                        @endforeach
                    </select>
                </div> 
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="kabkota" class="label-profile">Kabupaten/Kota</label>
                    <select wire:model="selectedKota" wire:model.defer="state.option" class=" rounded-2 form-control" id="kabkota" name="kabkota">                       
                        <option value="null" disabled >--Pilih Kabupaten/Kota--</option>
                        @foreach($kota as $city)
                        <option value="{{ $city->id }}">{{ $city->city_name }}</option>
                        @endforeach
                    </select>
                </div> 
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="kecamatan" class="label-profile">Kecamatan</label>
                    <select wire:model="selectedKecamatan" wire:model.defer="state.option" class=" rounded-2 form-control" id="kecamatan" name="kecamatan">                       
                        <option value="null" disabled   >--Pilih Kecamatan--</option>
                        @foreach($kecamatan as $district)
                        <option value="{{ $district->id }}">{{ $district->dis_name }}</option>
                        @endforeach
                    </select>
                </div> 
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="kelurahan" class="label-profile">Kelurahan</label>
                    <select wire:model="selectedKelurahan" wire:model.defer="state.option" class=" rounded-2 form-control" id="kelurahan" name="kelurahan">                       
                        <option value="null" disabled   >--Pilih Kelurahan--</option>
                        @foreach($kelurahan as $subdistrict) 
                        <option value="{{ $subdistrict->id }}">{{ $subdistrict->subdis_name }}</option>
                        @endforeach
                    </select>
                </div> 
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="kode_pos" class="label-profile">Kode Pos</label>
                    <select wire:model="selectedKodePos" wire:model.defer="state.option" class=" rounded-2 form-control" id="kode_pos" name="kode_pos">                       
                        <option value="null" disabled   >--Pilih Kode Pos--</option>
                        @foreach($kode_pos as $postal_code)
                        <option value="{{ $postal_code->id }}">{{ $postal_code->postal_code }}</option>
                        @endforeach
                    </select>
                </div> 
            </div>
            <div class="col-12 mb-2">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1" class="label-profile">Alamat Lengkap</label>
                    <textarea wire:model="alamat" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                  </div>
            </div>
            <div class="col-12 mb-5">
                <button wire:click="submit" type="submit" class="btn btn-primary px-4 py-2 btn-profile d-flex align-items-center justify-content-center">
                    <span wire:loading.remove wire:target="submit">Save</span>
                    <div wire:loading.flex wire:loading.delay.longest wire:target="submit" class="justify-content-center align-items-center" >
                        <div class="la-ball-clip-rotate la-sm d-inline  mr-2 ">
                            <div></div>
                        </div>
                        <span>Saving...</span>
                    </div>
                        
                </button>
                
            </div>
        </div>
    </form>

</div>
