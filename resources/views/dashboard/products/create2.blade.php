@extends('dashboard.layouts.main')
@section('content')
<!-- Main content -->
 <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tambah Product</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/dashboard/products">Daftar Product</a></li>
                    <li class="breadcrumb-item active">Tambah Product</li>

                </ol>
            </div>

        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Product Maisyah Corporation</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="/dashboard/products" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_product">Nama Product</label>
                                <input type="text" class="form-control @error('nama_product') is-invalid @enderror " id="nama_product" name="nama_product" autocomplete="off" autofocus required placeholder="Masukkan Nama Product" value="{{ old('nama_product') }}">
                                @error('nama_product')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                               <label for="info_product">Info Product</label>
                               <select class="custom-select rounded-2" id="info_product" name="info_product">                       
                                   <option value="Sale" {{ old('info_product' )== "Sale" ? 'selected': '' }}>Sale</option>
                                   <option value="New" {{ old('info_product') == "New" ? 'selected': '' }}>New</option>
                                   <option value="Hot" {{ old('info_product') == "Hot" ? 'selected': '' }}>Hot</option>
                                   <option value="Promo" {{ old('info_product')== "Promo" ? 'selected': '' }}>Promo</option>
                               </select>
                           </div> 
                            <div class="form-group">
                               <label for="category_id">Kategori Product</label>
                               <select class="custom-select rounded-2" id="category_id" name="category_id">        
                                   @foreach ($categories as $category)               
                                   <option value="{{ $category->id }}" {{ old('category_id')== $category->nama_kategori ? 'selected': '' }}>{{ $category->nama_kategori}}</option>
                                   @endforeach
                                </select>
                           </div> 
                            <div class="form-group">
                                <label for="harga_product">Harga Product</label>
                                <input type="text" class="form-control @error('harga_product') is-invalid @enderror " id="harga_product" name="harga_product" autocomplete="off" autofocus required placeholder="Masukkan Harga Product" value="{{ old('harga_product') }}">
                                @error('harga_product')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="harga_coret_product">Harga Coret</label>
                                <input type="text" class="form-control @error('harga_coret_product') is-invalid @enderror " id="harga_coret_product" name="harga_coret_product" autocomplete="off" autofocus placeholder="Masukkan Harga Coret" value="{{ old('harga_coret_product') }}">
                                @error('harga_coret_product')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            {{-- <div class="form-group">
                                <label for="category">Category</label>
                                <select class="custom-select rounded-2" id="category" name="category_id">
                                    
                                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id? 'selected': '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div> --}}
                            <div class="form-group">
                                <label for="image1">Gambar Product Utama (300x300)</label>
                                <img class="img-preview img-fluid mb-3 col-sm-5 d-block" >
                                <div class="input-group">
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input @error('gambar_product') is-invalid @enderror" id="gambar_product" onchange="previewImage()" name="gambar_product">
                                    <label class="custom-file-label" for="gambar_product">Choose file</label>
                                  </div>
                                </div>
                                @error('gambar_product')                 
                                        <p class="text-danger">{{ $message }}</p> 
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="image1">Gambar Product Detail 1 (1920x600)</label>
                                <div class="input-group">
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input @error('gambar_detailProduct1') is-invalid @enderror" id="gambar_product" name="gambar_detailProduct1">
                                    <label class="custom-file-label" for="gambar_product">Choose file</label>
                                  </div>
                                </div>
                                @error('gambar_detailProduct1')                 
                                        <p class="text-danger">{{ $message }}</p> 
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="image1">Gambar Product Detail 2 (jika ada) (1920x600)</label>
                                <div class="input-group">
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input @error('gambar_detailProduct2') is-invalid @enderror" id="gambar_product" name="gambar_detailProduct2">
                                    <label class="custom-file-label" for="gambar_product">Choose file</label>
                                  </div>
                                </div>
                                @error('gambar_detailProduct2')                 
                                        <p class="text-danger">{{ $message }}</p> 
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="image1">Gambar Product Detail 3 (jika ada) (1920x600)</label>
                                <div class="input-group">
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input @error('gambar_detailProduct3') is-invalid @enderror" id="gambar_product" name="gambar_detailProduct3">
                                    <label class="custom-file-label" for="gambar_product">Choose file</label>
                                  </div>
                                </div>
                                @error('gambar_detailProduct3')                 
                                        <p class="text-danger">{{ $message }}</p> 
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="deskripsi_product" class="form-label">Deskripsi Product</label>
                                @error('deskripsi_product')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input required id="deskripsi_product" type="hidden" name="deskripsi_product" value="{{ old('deskripsi_product') }}">
                                <trix-editor input="deskripsi_product"></trix-editor>
                              </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary mr-3">Tambah Product</button>
                            <a href="/dashboard/products"><button type="button" class="btn btn-primary">Kembali</button></a>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
<!-- /.content -->

<script>
    const title = document.querySelector('#title');

    document.addEventListener('trix-file-accept', function(e){
      e.preventDefault();
    })

    function previewImage() {
      const image = document.querySelector('#gambar_product');
      const imgPreview = document.querySelector('.img-preview');
      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);
      
      oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
      }
     }
</script>


@endsection
