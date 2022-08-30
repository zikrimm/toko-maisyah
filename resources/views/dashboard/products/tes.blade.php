@extends('dashboard.layouts.main')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card  mt-4">
                    <div class="card-body">
                        <h2>Daftar Product </h2>
                        
                        <div class=" row ">       
                            <!-- Modal Create Product -->
                            <div class="modal fade" id="ModalCreate" tabindex="-1" role="dialog" aria-labelledby="ModalCreateLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="ModalCreateLabel">Tambah Product</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                            {{-- CATATAN --}}
                                            <div class="alert alert-danger" style="color:#842029;background-color:#f8d7da;border-color:#f5c2c7" role="alert">
                                                <div class="font-weight-bold">Catatan</div>
                                                <ul>
                                                    <li>File yang diupload harus berupa Gambar</li>
                                                    <li>File harus memiliki ukuran maksimal 1MB</li>
                                                    <li>Slug akan otomatis terbuat menyesuaikan Nama Product</li>
                                                    <li><span style="color:red;font-size:20px">*</span> tidak boleh kosong, harus diisi</li>
                                                </ul>
                                            </div>
                                            {{-- Akhir Catatan --}}
                                            <form method="post" id="form-create-product" action="#" enctype="multipart/form-data">
                                                @csrf
                                                          <div class="card-body" style="padding: 1rem !important;">
                                                                <div class="form-group">
                                                                    <label for="nama_product">Nama Product <span style="color: red;">*</span></label>
                                                                    <input type="text" class="form-control" id="nama_product" name="nama_product" autocomplete="off" required placeholder="Masukkan Nama Product" >
                                                                </div>
                                                                <div class="error_nama_product">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="slug">Slug<span style="color: red;">*</span></label>
                                                                    <input readonly type="text"  class="form-control" id="slug" name="slug" autocomplete="off" required  >
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                   <label for="info_product">Info Product <span style="color: red;">*</span></label>
                                                                   <select class=" form-control rounded-2" id="info_product" name="info_product">                       
                                                                       <option value selected disabled >Pilih Info Product...</option>
                                                                       <option value="Sale">Sale</option>
                                                                       <option value="New">New</option>
                                                                       <option value="Hot" >Hot</option>
                                                                       <option value="Promo">Promo</option>
                                                                   </select>
                                                               </div> 
                                                               <div class="error_info_product">
                                                                  
                                                               </div>
                                                                <div class="form-group">
                                                                   <label for="jumlah_product">Jumlah Product <span style="color: red;">*</span></label>
                                                                   <input type="number" class="form-control " id="jumlah_product" name="jumlah_product" autocomplete="off"  required placeholder="Masukkan Jumlah Product" >
                                                               </div> 
                                                               <div class="error_jumlah_product">
                                                                  
                                                               </div>
                                                                <div class="form-group">
                                                                   <label for="category_id">Kategori Product <span style="color: red;">*</span></label>
                                                                   <select class=" form-control rounded-2" id="category_id" name="category_id"> 
                                                                       <option value selected disabled>Pilih Kategori Product..</option>       
                                                                       @foreach ($categories as $category)               
                                                                       <option value="{{ $category->id }}">{{ $category->nama_kategori}}</option>
                                                                       @endforeach
                                                                    </select>
                                                               </div> 
                                                               <div class="error_kategori_product ">
                                                               </div>
                                                                <div class="form-group">
                                                                    <label for="harga_product">Harga Product <span style="color: red;">*</span></label>
                                                                    <input type="number" class="form-control " id="harga_product" name="harga_product" autocomplete="off"  required placeholder="Masukkan Harga Product" >
                                                                </div>
                                                                <div class="error_harga_product ">
                                                                  
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="image1">Gambar Product Utama (300x300) <span style="color: red;">*</span></label>
                                                                    <img class="previewProductUtama  img-fluid  col-sm-5 d-block" >
                                                                    <div class="input-group">
                                                                      <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" id="gambar_product" onchange="previewProductUtama()" name="gambar_product">
                                                                        <label class="custom-file-label" for="gambar_product">Choose file</label>
                                                                      </div>
                                                                    </div>
                                                                </div>
                                                                <div class="error_gambar_product ">
                                                                  
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="image2">Gambar Product Detail 1 (1920x600) <span style="color: red;">*</span></label>
                                                                    <img class="previewProductDetail1 img-fluid  col-sm-5 d-block" >
                                                                    <div class="input-group">
                                                                      <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" id="gambar_product_detail" onchange="previewProductDetail1()" name="gambar_detailProduct1">
                                                                        <label class="custom-file-label" for="gambar_product_detail">Choose file</label>
                                                                      </div>
                                                                    </div>
                                                                </div>
                                                                <div class="error_gambar_product_detail ">
                                                                  
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="image1">Gambar Product Detail 2 (jika ada) (1920x600)</label>
                                                                    <img class="previewProductDetail2 img-fluid  col-sm-5 d-block" >
                                                                    <div class="input-group">
                                                                      <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" id="gambar_product_detail2" onchange="previewProductDetail2()" name="gambar_detailProduct2">
                                                                        <label class="custom-file-label" for="gambar_product">Choose file</label>
                                                                      </div>
                                                                    </div>
                                                                </div>
                                                                <div class="error_gambar_product_detail2 ">
                                                                  
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="image1">Gambar Product Detail 3 (jika ada) (1920x600)</label>
                                                                    <img class="previewProductDetail3 img-fluid  col-sm-5 d-block" >
                                                                    <div class="input-group">
                                                                      <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" id="gambar_product_detail3" onchange="previewProductDetail3()" name="gambar_detailProduct3">
                                                                        <label class="custom-file-label" for="gambar_product">Choose file</label>
                                                                      </div>
                                                                    </div>
                                                                </div>
                                                                <div class="error_gambar_product_detail3 ">
                                                                  
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="deskripsi_product" class="form-label">Deskripsi Product <span style="color: red;">*</span></label>
                                                                    <input required id="deskripsi_product" type="hidden" name="deskripsi_product">
                                                                    <trix-editor input="deskripsi_product"></trix-editor>
                                                                </div>
                                                                <div class="error_deskripsi_product ">
                                                                </div>
                                                            </div>
                                    </form>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary create_product" onclick="CreateData()" >Tambah Product</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>


                        <!-- Modal Detail Product -->
                        <div class="modal fade" id="ModalDetail" tabindex="-1" role="dialog" aria-labelledby="ModalDetailLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="ModalDetailLabel">Detail Product</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                        <form method="post" id="form-detail-product" action="#" enctype="multipart/form-data">
                                            @csrf
                                                      <div class="card-body" style="padding: 1rem !important;">
                                                            <div class="form-group">
                                                                <label for="nama_product">Nama Product</label>
                                                                <input readonly type="text" class="form-control" id="nama_detail_product" name="nama_product" autocomplete="off" required placeholder="Masukkan Nama Product" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="detail_slug">Slug</label>
                                                                <input readonly type="text"  class="form-control" id="detail_slug" name="detail_slug" autocomplete="off" required  >
                                                            </div>
                                                            <div class="form-group">
                                                               <label for="info_product">Info Product</label>
                                                               <select class="form-control rounded-2" id="info_detail_product" name="info_product">                       
                                                                   <option class="info_detail_product" selected readonly ></option>
                                                               </select>
                                                           </div> 
                                                           <div class="form-group">
                                                            <label for="jumlah_detail_product">Jumlah Product</label>
                                                            <input readonly type="number" class="form-control " id="jumlah_detail_product" name="jumlah_product" autocomplete="off">
                                                        </div> 
                                                            <div class="form-group">
                                                               <label for="category_id">Kategori Product</label>
                                                               <select class="form-control rounded-2" id="category_detail_product" name="category_id"> 
                                                                   <option class="category_detail_product" selected readonly></option>              
                                                                </select>
                                                           </div> 
                                                            <div class="form-group">
                                                                <label for="harga_product">Harga Product</label>
                                                                <input readonly type="text" class="form-control " id="harga_detail_product" name="harga_product" autocomplete="off"  required placeholder="Masukkan Harga Product" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="image1">Gambar Product Utama (300x300)</label>
                                                                <img id="gambar_detail_product_utama" class="img-preview img-fluid mb-3 col-sm-5 d-block" src="">  
                                                                <input type="text" class="gambar_detail_product_utama form-control" disabled name="gambar_detail_product_utama">
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                                <label for="image2">Gambar Product Detail 1 (1920x600)</label>
                                                                <img id="gambar_detail_product1" class="img-preview img-fluid mb-3 col-sm-5 d-block" src="">  
                                                                <input type="text" class="gambar_detail_product1 form-control" disabled name="gambar_detail_product1">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="image1">Gambar Product Detail 2 (jika ada) (1920x600)</label>
                                                                <img id="gambar_detail_product2" class="img-preview img-fluid mb-3 col-sm-5 d-block" src="">  
                                                                <input type="text" class="gambar_detail_product2 form-control" disabled name="gambar_detail_product2">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="image1">Gambar Product Detail 3 (jika ada) (1920x600)</label>
                                                                <img id="gambar_detail_product3" class="img-preview img-fluid mb-3 col-sm-5 d-block" src=""> 
                                                                <input type="text" class="gambar_detail_product3 form-control" disabled name="gambar_detail_product3"> 
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="deskripsi_product">Deskripsi Product</label>
                                                                <textarea readonly rows="6" type="text" class="form-control deskripsi_detail_product" id="deskripsi_detail_product" name="deskripsi_product" autocomplete="off"  ></textarea>
                                                            </div>
                                                        </div>
                                </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
            

                        <div class="row">
                            <!-- Modal Edit Product -->
                            <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="ModalCreateLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="ModalCreateLabel">Edit Product</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        {{-- CATATAN --}}
                                        <div class="alert alert-danger" style="color:#842029;background-color:#f8d7da;border-color:#f5c2c7" role="alert">
                                            <div class="font-weight-bold">Catatan</div>
                                            <ul>    
                                                <li>File yang diupload harus berupa Gambar</li>
                                                <li>File harus memiliki ukuran maksimal 1MB</li>
                                                <li>Slug tidak dapat diubah</li>
                                                <li><span style="color:red;font-size:20px">*</span> tidak boleh kosong, harus diisi</li>
                                            </ul>
                                        </div>
                                        {{-- Akhir Catatan --}}
                                            <form method="post" id="form-create-product-edit" action="#" enctype="multipart/form-data">
                                                @csrf
                                                          <div class="card-body" style="padding: 1rem !important;">
                                                                <input type="hidden" name="product_id" id="product_id" value="">
                                                                <div class="form-group">
                                                                    <label for="status_product">Status Product</label>
                                                                    <select class="form-control rounded-2" id="status_product" name="status">                       
                                                                        <option disabled >Pilih Status Product...</option>
                                                                        <option value="active">Active</option>
                                                                        <option value="non active">Non Active</option>
                                                                    </select>
                                                                 </div> 
                                                                <div class="form-group">
                                                                    <label for="nama_product">Nama Product <span style="color: red;">*</span></label>
                                                                    <input type="text" class="form-control" id="nama_product_edit"  name="nama_product" autocomplete="off" required placeholder="Masukkan Nama Product" >
                                                                </div>
                                                                <div class="error_nama_product_edit">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="slug">Slug<span style="color: red;">*</span></label>
                                                                    <input readonly disabled type="text"  class="form-control" id="slug_edit" name="slug" autocomplete="off" required  >
                                                                </div>
                                                                <div class="form-group">
                                                                   <label for="info_product">Info Product<span style="color: red;">*</span></label>
                                                                   <select class="form-control rounded-2" id="info_product_edit" name="info_product">                       
                                                                       <option disabled >Pilih Info Product...</option>
                                                                       <option value="Sale">Sale</option>
                                                                       <option value="New">New</option>
                                                                       <option value="Hot" >Hot</option>
                                                                       <option value="Promo">Promo</option>
                                                                   </select>
                                                                </div> 
                                                               <div class="error_info_product_edit">                                                               
                                                               </div>
                                                               <div class="form-group">
                                                                <label for="jumlah_product_edit">Jumlah Product <span style="color: red;">*</span></label>
                                                                <input type="number" class="form-control " id="jumlah_product_edit" name="jumlah_product" autocomplete="off"  required placeholder="Masukkan Jumlah Product" >
                                                                </div> 
                                                                <div class="error_jumlah_product_edit">
                                                                
                                                                </div>
                                                                <div class="form-group">
                                                                   <label for="category_id">Kategori Product <span style="color: red;">*</span></label>
                                                                   <select class="form-control rounded-2" id="category_id_edit" name="category_id"> 
                                                                       <option disabled>Pilih Kategori Product..</option>       
                                                                       @foreach ($categories as $category)                         
                                                                       <option value="{{ $category->id }}">{{ $category->nama_kategori}}</option>
                                                                       @endforeach
                                                                    </select>
                                                               </div> 
                                                               <div class="error_kategori_product_edit ">
                                                                  
                                                               </div>
                                                                <div class="form-group">
                                                                    <label for="harga_product">Harga Product <span style="color: red;">*</span></label>
                                                                    <input type="number" class="form-control " id="harga_product_edit" name="harga_product" autocomplete="off"  required placeholder="Masukkan Harga Product" >
                                                                </div>
                                                                <div class="error_harga_product_edit ">
                                                                  
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="image1">Gambar Product Utama (300x300) <span style="color: red;">*</span></label>
                                                                    <img id="previewProductUtamaEdit" class="img-fluid col-sm-5 d-block" >
                                                                    <div class="input-group">
                                                                      <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" id="gambar_product_edit" name="gambar_product">
                                                                        
                                                                        <label class="custom-file-label label_product_edit"  for="gambar_product">Choose File</label>
                                                                      </div>
                                                                    </div>
                                                                </div>
                                                                <div class="error_gambar_product_edit ">
                                                                  
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="previewProductDetail1Edit">Gambar Product Detail 1 (1920x600) <span style="color: red;">*</span></label>
                                                                    <img id="previewProductDetail1Edit" class="img-fluid col-sm-5 d-block" >
                                                                    <div class="input-group">
                                                                      <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" id="gambar_detailProduct1_edit" name="gambar_detailProduct1">
                                                                        <label class="custom-file-label label_product1_edit"  for="gambar_product_detail">Choose File</label>
                                                                      </div>
                                                                    </div>
                                                                </div>
                                                                <div class="error_gambar_product_detail_edit ">
                                                                  
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="previewProductDetail2Edit">Gambar Product Detail 2 (jika ada) (1920x600)</label>
                                                                    <img id="previewProductDetail2Edit" class="img-fluid col-sm-5 d-block" >
                                                                    <div class="input-group">
                                                                      <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" id="gambar_detailProduct2_edit" name="gambar_detailProduct2">
                                                                        <label class="custom-file-label label_product2_edit"  for="gambar_product">Choose File</label>
                                                                      </div>
                                                                    </div>
                                                                </div>
                                                                <div class="error_gambar_product_detail2_edit ">
                                                                  
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="previewProductDetail3Edit">Gambar Product Detail 3 (jika ada) (1920x600)</label>
                                                                    <img id="previewProductDetail3Edit" class="img-fluid col-sm-5 d-block" >
                                                                    <div class="input-group">
                                                                      <div class="custom-file">
                                                                        <input type="file" id="gambar_detailProduct3_edit" class="custom-file-input" name="gambar_detailProduct3">
                                                                        <label class="custom-file-label label_product3_edit"  for="gambar_product">Choose File</label>
                                                                      </div>
                                                                    </div>
                                                                </div>
                                                                <div class="error_gambar_product_detail3_edit ">
                                                                  
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="deskripsi_product_edit" class="form-label">Deskripsi Product <span style="color: red;">*</span></label>
                                                                    <input required  id="deskripsi_product_edit"   type="hidden"  name="deskripsi_product">
                                                                    <trix-editor class="deskripsi_product_edit" input="deskripsi_product_edit" ></trix-editor>
                                                                </div>
                                                                <div class="error_deskripsi_product_edit ">
                                                                </div>
                                                            </div>
                                    </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary edit_product" onclick="EditData()" >Edit Product</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div id="container" class=" table-responsive">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary mb-3" onClick="showCreate()">
                                Tambah Product
                            </button>
                            <table id="table_product" class="mt-3 table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Product</th>
                                        <th>Harga Product</th>
                                        <th>Gambar Product</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- /.content -->
@endsection
@push('scripts')
<script>
    const nama_product = $('#nama_product');
    const slug = $('#slug');

    $('#nama_product').on('change',function(){
        $.ajax({
            url: '/dashboard/products/checkSlug?nama_product=' + nama_product.val(),
            type: "GET",
            dataType: "json",
            success: function(data){
                 slug.val(data.slug) 
            }
        })    
    });
</script>
<script>
    const title = document.querySelector('#title');
    document.addEventListener('trix-file-accept', function(e){
      e.preventDefault();
    })

    function previewProductUtama() {
      const image = document.querySelector('#gambar_product');
      const imgPreview = document.querySelector('.previewProductUtama');
      const oFReader = new FileReader();
      imgPreview.classList.add('mb-3');
      oFReader.readAsDataURL(image.files[0]);
      
      oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
          
      }
     }

    function previewProductDetail1() {
      const image = document.querySelector('#gambar_product_detail');
      const imgPreview = document.querySelector('.previewProductDetail1');
      const oFReader = new FileReader();
      imgPreview.classList.add('mb-3');
      oFReader.readAsDataURL(image.files[0]);
      
      oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
      }
     }

    function previewProductDetail2() {
      const image = document.querySelector('#gambar_product_detail2');
      const imgPreview = document.querySelector('.previewProductDetail2');
      const oFReader = new FileReader();
      imgPreview.classList.add('mb-3');
      oFReader.readAsDataURL(image.files[0]);
      
      oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
      }
     }

    function previewProductDetail3() {
      const image = document.querySelector('#gambar_product_detail3');
      const imgPreview = document.querySelector('.previewProductDetail3');
      const oFReader = new FileReader();
      imgPreview.classList.add('mb-3');
      oFReader.readAsDataURL(image.files[0]);
      
      oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
      }
     }

    $(document).on('change','#gambar_product_edit',function(){
      const image = document.querySelector('#gambar_product_edit');
      const imgPreview = document.querySelector('#previewProductUtamaEdit');
      imgPreview.classList.add('mb-3');
      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);
      
      oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
      }
    })

    $(document).on('change','#gambar_detailProduct1_edit',function(){
      const image = document.querySelector('#gambar_detailProduct1_edit');
      const imgPreview = document.querySelector('#previewProductDetail1Edit');
      imgPreview.classList.add('mb-3');
      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);
      
      oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
      }
    })

    $(document).on('change','#gambar_detailProduct2_edit',function(){
      const image = document.querySelector('#gambar_detailProduct2_edit');
      const imgPreview = document.querySelector('#previewProductDetail2Edit');
      imgPreview.classList.add('mb-3');
      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);
      
      oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
      }
    })

    $(document).on('change','#gambar_detailProduct3_edit',function(){
      const image = document.querySelector('#gambar_detailProduct3_edit');
      const imgPreview = document.querySelector('#previewProductDetail3Edit');
      imgPreview.classList.add('mb-3');
      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);
      
      oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
      }
    })
    
    
</script>
<script>
//FUNCTION
//Show Create Product
function showCreate(){
    $('#ModalCreate').modal('show');
};  


// Create Ajax Product
function CreateData(){
    $('#form-create-product').ajaxForm({
            url: "/dashboard/products",
            type: "POST",
            dataType: "json",
            success: function(data){
                Swal.fire({
                  position: 'center',
                  icon: 'success',
                  title: 'Product berhasil ditambahkan',
                  showConfirmButton: false,
                  timer: 1500
                });

                // Remove image preview
                const images = [".previewProductUtama",".previewProductDetail1",".previewProductDetail2",".previewProductDetail3"];
                images.forEach((image) => {
                    const imgPreview = document.querySelector(image);
                    imgPreview.removeAttribute('src');
                    imgPreview.classList.remove('mb-3');        
                });
                

                // Remove if have error in Form
                        $('#slug').removeClass('is-valid');
                        
                        $('.error_nama_product').removeClass('error-feedback');
                        $('.error_nama_product').empty();
                        $('#nama_product').removeClass('is-invalid')
                        $('#nama_product').removeClass('is-valid')

                        $('.error_info_product').removeClass('error-feedback');
                        $('.error_info_product').empty();
                        $('#info_product').removeClass('is-invalid');
                        $('#info_product').removeClass('is-valid');

                        $('.error_jumlah_product').removeClass('error-feedback');
                        $('.error_jumlah_product').empty();
                        $('#jumlah_product').removeClass('is-invalid');
                        $('#jumlah_product').removeClass('is-valid');

                        $('.error_kategori_product').removeClass('error-feedback');
                        $('.error_kategori_product').empty();
                        $('#category_id').removeClass('is-invalid');
                        $('#category_id').removeClass('is-valid');

                        $('.error_harga_product').removeClass('error-feedback');
                        $('.error_harga_product').empty();
                        $('#harga_product').removeClass('is-invalid');
                        $('#harga_product').removeClass('is-valid');
      
                        $('.error_gambar_product').removeClass('error-feedback');
                        $('.error_gambar_product').empty();
                        $('#gambar_product').removeClass('is-invalid');
                        $('#gambar_product').removeClass('is-valid');

                        $('.error_gambar_product_detail').removeClass('error-feedback');
                        $('.error_gambar_product_detail').empty();
                        $('#gambar_product_detail').removeClass('is-invalid');
                        $('#gambar_product_detail').removeClass('is-valid');

                        $('.error_gambar_product_detail2').removeClass('error-feedback');
                        $('.error_gambar_product_detail2').empty();
                        $('#gambar_product_detail2').removeClass('is-invalid');
                        $('#gambar_product_detail2').removeClass('is-valid');

                        $('.error_gambar_product_detail3').removeClass('error-feedback');
                        $('.error_gambar_product_detail3').empty();
                        $('#gambar_product_detail3').removeClass('is-invalid');
                        $('#gambar_product_detail3').removeClass('is-valid');
                        
                        $('.error_deskripsi_product').removeClass('error-feedback');
                        $('#deskripsi_product').removeClass('is-invalid');
                        $('#deskripsi_product').removeClass('is-valid');
                        $('.error_deskripsi_product').empty();
                // Hide Modal Create
                $('#ModalCreate').modal('hide');
                // Reset Form
                $('#form-create-product')[0].reset();
                //Update DataTable
                $('#table_product').DataTable().draw();
            },
            error: function(data){
                console.log(data);
                if(data.status == 400) {
                    if(!data.responseJSON.errors.slug){
                        $('#slug').addClass('is-valid');
                    }
                    if(data.responseJSON.errors.nama_product){
                        $('.error_nama_product').html(data.responseJSON.errors.nama_product);
                        $('.error_nama_product').addClass('error-feedback');
                        $('#nama_product').addClass('is-invalid');
                        $('#nama_product').removeClass('is-valid');
                    } else{
                        $('.error_nama_product').removeClass('error-feedback');
                        $('.error_nama_product').empty();
                        $('#nama_product').removeClass('is-invalid');
                        $('#nama_product').addClass('is-valid');
                    } 
                    if(data.responseJSON.errors.info_product){
                        $('.error_info_product').html(data.responseJSON.errors.info_product);
                        $('.error_info_product').addClass('error-feedback');
                        $('#info_product').addClass('is-invalid');
                        $('#info_product').removeClass('is-valid');
                    } else{
                        $('.error_info_product').removeClass('error-feedback');
                        $('.error_info_product').empty();
                        $('#info_product').removeClass('is-invalid');
                        $('#info_product').addClass('is-valid');
                    } 
                    if(data.responseJSON.errors.jumlah_product){
                        $('.error_jumlah_product').html(data.responseJSON.errors.jumlah_product);
                        $('.error_jumlah_product').addClass('error-feedback');
                        $('#jumlah_product').addClass('is-invalid');
                        $('#jumlah_product').removeClass('is-valid');
                    } else{
                        $('.error_jumlah_product').removeClass('error-feedback');
                        $('.error_jumlah_product').empty();
                        $('#jumlah_product').removeClass('is-invalid');
                        $('#jumlah_product').addClass('is-valid');
                    } 
                    if(data.responseJSON.errors.category_id){
                        $('.error_kategori_product').html(data.responseJSON.errors.category_id);
                        $('.error_kategori_product').addClass('error-feedback');
                        $('#category_id').addClass('is-invalid');
                        $('#category_id').removeClass('is-valid');
                    } else{
                        $('.error_kategori_product').removeClass('error-feedback');
                        $('.error_kategori_product').empty();
                        $('#category_id').removeClass('is-invalid');
                        $('#category_id').addClass('is-valid');
                    } 
                    if(data.responseJSON.errors.harga_product){
                        $('.error_harga_product').html(data.responseJSON.errors.harga_product);
                        $('.error_harga_product').addClass('error-feedback');
                        $('#harga_product').addClass('is-invalid');
                        $('#harga_product').removeClass('is-valid');
                    } else{
                        $('.error_harga_product').removeClass('error-feedback');
                        $('.error_harga_product').empty();
                        $('#harga_product').removeClass('is-invalid');
                        $('#harga_product').addClass('is-valid');
                    }  
                    if(data.responseJSON.errors.gambar_product){
                        $('.error_gambar_product').html(data.responseJSON.errors.gambar_product);
                        $('.error_gambar_product').addClass('error-feedback');
                        $('#gambar_product').addClass('is-invalid');
                        $('#gambar_product').removeClass('is-valid');
                    } else{
                        $('.error_gambar_product').removeClass('error-feedback');
                        $('.error_gambar_product').empty();
                        $('#gambar_product').removeClass('is-invalid');
                        $('#gambar_product').addClass('is-valid');
                    }  
                    if(data.responseJSON.errors.gambar_detailProduct1){
                        $('.error_gambar_product_detail').html(data.responseJSON.errors.gambar_detailProduct1);
                        $('.error_gambar_product_detail').addClass('error-feedback');
                        $('#gambar_product_detail').addClass('is-invalid');
                        $('#gambar_product_detail').removeClass('is-valid');
                    } else{
                        $('.error_gambar_product_detail').removeClass('error-feedback');
                        $('.error_gambar_product_detail').empty();
                        $('#gambar_product_detail').removeClass('is-invalid');
                        $('#gambar_product_detail').addClass('is-valid');
                    }  
                    if(data.responseJSON.errors.gambar_detailProduct2){
                        $('.error_gambar_product_detail2').html(data.responseJSON.errors.gambar_detailProduct2);
                        $('.error_gambar_product_detail2').addClass('error-feedback');
                        $('#gambar_product_detail2').addClass('is-invalid');
                        $('#gambar_product_detail2').removeClass('is-valid');
                    } else if ($('#gambar_product_detail2').val()) {
                        $('.error_gambar_product_detail2').removeClass('error-feedback');
                        $('.error_gambar_product_detail2').empty();
                        $('#gambar_product_detail2').removeClass('is-invalid');
                        $('#gambar_product_detail2').addClass('is-valid');
                    } else{
                        $('.error_gambar_product_detail2').removeClass('error-feedback');
                        $('.error_gambar_product_detail2').empty();
                        $('#gambar_product_detail2').removeClass('is-invalid');
                    }  
                    if(data.responseJSON.errors.gambar_detailProduct3){
                        $('.error_gambar_product_detail3').html(data.responseJSON.errors.gambar_detailProduct3);
                        $('.error_gambar_product_detail3').addClass('error-feedback');
                        $('#gambar_product_detail3').addClass('is-invalid');
                        $('#gambar_product_detail3').removeClass('is-valid');
                    } else if($('#gambar_product_detail3').val()) {
                        $('.error_gambar_product_detail3').removeClass('error-feedback');
                        $('.error_gambar_product_detail3').empty();
                        $('#gambar_product_detail3').removeClass('is-invalid');
                        $('#gambar_product_detail3').addClass('is-valid');
                    } else{
                        $('.error_gambar_product_detail3').removeClass('error-feedback');
                        $('.error_gambar_product_detail3').empty();
                        $('#gambar_product_detail3').removeClass('is-invalid');
                    }  
                    if(data.responseJSON.errors.deskripsi_product){
                        $('.error_deskripsi_product').html(data.responseJSON.errors.deskripsi_product);
                        $('.error_deskripsi_product').addClass('error-feedback');
                        $('#deskripsi_product').addClass('is-invalid');
                        $('#deskripsi_product').removeClass('is-valid');
                    } else{
                        $('.error_deskripsi_product').removeClass('error-feedback');
                        $('#deskripsi_product').removeClass('is-invalid');
                        $('#deskripsi_product').addClass('is-valid');
                        $('.error_deskripsi_product').empty();
                    } 
                }
            }
            
    }).submit();
}

//Edit Data
function EditData(){
    var productID = $('#product_id').val();
    $('#form-create-product-edit').ajaxForm({
            url: "/dashboard/products/" + productID,
            method: "POST",
            data: {_method:'PUT'},
            dataType: "json",
            success: function(data){
                Swal.fire({
                  position: 'center',
                  icon: 'success',
                  title: 'Product berhasil diupdate',
                  showConfirmButton: false,
                  timer: 1500
                });
                // Remove image preview
                const images = ["#previewProductUtamaEdit","#previewProductDetail1Edit","#previewProductDetail2Edit","#previewProductDetail3Edit"];
                images.forEach((image) => {
                    const imgPreview = document.querySelector(image);
                    imgPreview.removeAttribute('src');
                    imgPreview.classList.remove('mb-3');        
                });
                // Hide Modal Create
                $('#ModalEdit').modal('hide');
                // Reset Form
                $('#form-create-product')[0].reset();
                //Update DataTable
                $('#table_product').DataTable().draw(false);
            },
            error: function(data){
                Swal.fire({
                  position: 'center',
                  icon: 'error',
                  title: 'Product Gagal diupdate',
                  showConfirmButton: false,
                  timer: 1500
                });
            }
        }).submit();
}
</script>
<script>
$(document).ready(function () {
    //CSRF Token
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
    });
    //Show Product
    $('#table_product').DataTable({
        processing: true,
        serverSide: true,
        ajax: { 
            url: "{{ route('products.index') }}",
            type: 'GET'
        },
        order: [0,'desc'],
        columns: [
            {
                "data" : null, "sortable" : false, 
                render: function(data,type,row,meta) {
                    return meta.row+ meta.settings._iDisplayStart + 1
                }
            },
            {data:'nama_product', name: 'nama_product'},
            {data:'harga_product', name: 'harga_product'},
            {data:'gambar_product', name: 'gambar_product',searchable:false,orderable: false},
            {data:'status', name: 'status',searchable:false,orderable: true},
            {data:'action', name: 'action',searchable:false,orderable: false},
        ]
    });

    // Show Modal Edit Product
    $(document).on('click','.edit',function(){
        $('#ModalEdit').modal('show');
        var productID = $(this).attr('id');
        $.ajax({
            url: "/dashboard/products/get/" + productID,
            type: "GET",
            dataType: "json",
            success: function(data){
                 $('#product_id').val(data.product[0].id);
                 $('#slug_edit').val(data.product[0].slug);
                 $('#status_product').val(data.product[0].status);
                 $('#nama_product_edit').val(data.product[0].nama_product);
                 $('#info_product_edit').val(data.product[0].info_product);
                 $('#jumlah_product_edit').val(data.product[0].jumlah_product);
                 $('#category_id_edit').val(data.product[0].category_id);
                 $('#harga_product_edit').val(data.product[0].harga_product);
                 const gambar_products = ['gambar_product','gambar_detailProduct1','gambar_detailProduct2','gambar_detailProduct3'];
                 gambar_products.forEach((gambarProduct) =>{     
                     if(data.product[0][gambarProduct] != null){   
                        const file = data.product[0][gambarProduct];
                        const explodePath = file.split("/");
                        const nama_product = explodePath[2];                    
                        if (gambarProduct == 'gambar_product'){
                            $('.label_product_edit').text(nama_product);
                            $('#previewProductUtamaEdit').attr('src','/storage/' +data.product[0].gambar_product);
                            $('#previewProductUtamaEdit').addClass('mb-3');
                        }
                        if (gambarProduct == 'gambar_detailProduct1'){
                            $('.label_product1_edit').text(nama_product);
                            $('#previewProductDetail1Edit').attr('src','/storage/' +data.product[0].gambar_detailProduct1);
                            $('#previewProductDetail1Edit').addClass('mb-3');
                        }
                        if (gambarProduct == 'gambar_detailProduct2') {
                                $('.label_product2_edit').text(nama_product);
                                $('#previewProductDetail2Edit').attr('src','/storage/' +data.product[0].gambar_detailProduct2);
                                $('#previewProductDetail2Edit').addClass('mb-3');                       
                        }
                        if (gambarProduct == 'gambar_detailProduct3') {
                                $('.label_product3_edit').text(nama_product);
                                $('#previewProductDetail3Edit').attr('src','/storage/' +data.product[0].gambar_detailProduct3);
                                $('#previewProductDetail3Edit').addClass('mb-3');
                        }
                    }  else{
                        if (gambarProduct == 'gambar_product'){
                            $('.label_product_edit').text('Choose File');
                            $('#previewProductUtamaEdit').removeAttr('src');
                            $('#previewProductUtamaEdit').removeClass('mb-3');
                        }
                        if (gambarProduct == 'gambar_detailProduct1'){
                            $('.label_product1_edit').text('Choose File');
                            $('#previewProductDetail1Edit').removeAttr('src');
                            $('#previewProductDetail1Edit').removeClass('mb-3');
                        }
                        if (gambarProduct == 'gambar_detailProduct2') {
                                $('.label_product2_edit').text('Choose File');
                                $('#previewProductDetail2Edit').removeAttr('src');
                                $('#previewProductDetail2Edit').removeClass('mb-3');                       
                        }
                        if (gambarProduct == 'gambar_detailProduct3') {
                                $('.label_product3_edit').text('Choose File');
                                $('#previewProductDetail3Edit').removeAttr('src');
                                $('#previewProductDetail3Edit').removeClass('mb-3');
                        }

                    }
                 })
                 $('.deskripsi_product_edit').html(data.product[0].deskripsi_product);
            }
        })    
    })
    

    // Show Modal Detail Product
    $(document).on('click','.detail',function(){
        $('#ModalDetail').modal('show');
        var productID = $(this).attr('id');
        $.ajax({
            url: "/dashboard/products/get/" + productID,
            type: "GET",
            dataType: "json",
            success: function(data){
                // Mengubah menjadi format rupiah
                 var harga_product = data.product[0].harga_product;
                 var	reverse = harga_product.toString().split('').reverse().join(''),
	                    ribuan 	= reverse.match(/\d{1,3}/g);
	                    ribuan	= ribuan.join('.').split('').reverse().join('');                
                 $('#detail_slug').val(data.product[0].slug);
                 $('#nama_detail_product').val(data.product[0].nama_product);
                 $('.info_detail_product').text(data.product[0].info_product);
                 $('#jumlah_detail_product').val(data.product[0].jumlah_product);
                 $('.category_detail_product').text(data.category);
                 $('#harga_detail_product').val(`Rp${ribuan}`);
 
                const gambar_products = ['gambar_product','gambar_detailProduct1','gambar_detailProduct2','gambar_detailProduct3'];
                gambar_products.forEach((gambarProduct) =>{
                    if(data.product[0][gambarProduct] != null) {
                        const file = data.product[0][gambarProduct];
                        const explodePath = file.split("/");
                        const nama_product = explodePath[2];    
                        
                        if (gambarProduct == 'gambar_product'){
                            $('.gambar_detail_product_utama').val(nama_product);
                            $('#gambar_detail_product_utama').attr('src','/storage/' +data.product[0].gambar_product);
                        }
                        if (gambarProduct == 'gambar_detailProduct1'){
                            $('.gambar_detail_product1').val(nama_product);
                            $('#gambar_detail_product1').attr('src','/storage/' +data.product[0].gambar_detailProduct1);
                        }
                        if(data.product[0].gambar_detailProduct2 ) {
                            if (gambarProduct == 'gambar_detailProduct2') {
                                $('.gambar_detail_product2').val(nama_product);
                                $('#gambar_detail_product2').attr('src','/storage/' +data.product[0].gambar_detailProduct2);
                            }
                        }
                        if(data.product[0].gambar_detailProduct3 ) {
                            if (gambarProduct == 'gambar_detailProduct3') {
                                $('.gambar_detail_product3').val(nama_product);
                                $('#gambar_detail_product3').attr('src','/storage/' + data.product[0].gambar_detailProduct3);
                            }
                    }
                }
                 })
                 
                
                 const regex = /(<([^>]+)>)/ig;
                 const deskripsi_detail_product = data.product[0].deskripsi_product;
                 const result = deskripsi_detail_product.replace(regex, "");
                 $('.deskripsi_detail_product').val(result);
            }
        })    
    })
    

    // Delete Product
    $(document).on('click','.hapus',function(){
        var productID = $(this).attr('id');
        Swal.fire({
        title: 'Apakah kamu yakin?',
        text: "Product yang dihapus tidak dapat dikembalikan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
            'Deleted!',
            'Product berhasil dihapus.',
            'success'
            )
            $.ajax({
            url: "/dashboard/products/"+ productID,    
            type: 'delete',
            success: function(data){
                    // draw(false) = agar ketika reload,tetap stay di current pagination
                    $('#table_product').DataTable().draw(false);
            },
            error: function(data){
                Swal.fire({
                  position: 'center',
                  icon: 'error',
                  title: 'Product Gagal dihapus',
                  showConfirmButton: false,
                  timer: 1500
                });
            }
        });
        }
        }) 
    });
    
   
});



</script>
@endpush