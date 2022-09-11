<div>
    @if(session()->has('message'))
    <div class="alert alert-success mt-2">
        {{ session('message') }}
    </div>
    @endif
    <form wire:submit.prevent="update" action="password" method="POST" enctype="multipart/form-data"> 
        @csrf
        <div class="row mx-1 mt-3">
            <div class="col-12">
                <div class="form-group">
                    <label for="no_hp" class="label-profile">Password Saat ini</label>
                    <div class="d-flex input-kotak">
                        <span class="kotak text-center"><i class="fas fa-key"></i></span>
                        <input wire:model="current_password" type="password" name="no_hp" class="form-control" id="no_hp">
                    </div>
                    @error('current_password')
                        <span class="error-validation">{{ $message }}</span>
                    @enderror
                    @if(session()->has('current-password-error'))
                    <span class="error-validation">{{ session('current-password-error') }}</span>
                    @endif
                </div>
            </div>
            
            <div class="col-12">
                <div class="form-group">
                    <label for="no_hp" class="label-profile">Kata Sandi</label>
                    <div class="d-flex input-kotak">
                        <span class="kotak text-center"><i class="fas fa-key"></i></span>
                        <input wire:model="password" type="password" name="no_hp" class="form-control" id="no_hp">
                    </div>
                    @error('password')
                        <span class="error-validation">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="no_hp" class="label-profile">Konfirmasi Password</label>
                    <div class="d-flex input-kotak">
                        <span class="kotak text-center"><i class="fas fa-key"></i></span>
                        <input wire:model="password_confirmation" type="password" name="no_hp" class="form-control" id="no_hp">
                    </div>
                </div>
            </div>
            {{-- <div class="col-12">
                <div class="progress progress-xs">
                    <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                        <span class="sr-only">60% Complete (warning)</span>
                    </div>
                </div>
                <p>Password Lemah</p>
            </div> --}}
            

            <div class="col-12 mb-5 ">
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
