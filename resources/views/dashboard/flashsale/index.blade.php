@extends('dashboard.layouts.main')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card  mt-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h2>Flash Sale Maisyah Corp </h2>
                            </div>
                            <div class="col-me-auto">
                                <h5>Status Flash Sale :
                                    @if($flashsales[0]->status == "Active")
                                    <span class="badge badge-success">Active</span>
                                    @else 
                                    <span class="badge badge-danger">Non Active</span>
                                    @endif
                                </h5>
                            </div>
                        </div>
                        @if($flashsales[0]->status == "Active")
                        <button id="showModalCloseFlashSale" class="btn btn-secondary mb-3">Tutup FlashSale</button>
                        @else
                        <button id="showModalOpenFlashSale" class="btn btn-primary mb-3">Buka FlashSale</button>
                        @endif
                        @if($flashsales[0]->status == "Non Active")
                        <div class=" row "> 
                            <!-- Modal Open Flash Sale -->
                            <div class="modal fade" id="modalOpenFlashSale" tabindex="-1" role="dialog" aria-labelledby="modalCreateLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                      <h5 class="modal-title" id="modalCreateLabel">Flash Sale Maisyah Corporation</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                      </div>
                                      <div class="modal-body">
                                              <form method="post" id="form-open-flashsale" action="#" enctype="multipart/form-data">
                                                  @csrf
                                                  <div class="card-body" style="padding: 1rem !important;">
                                                        <div class="form-group">
                                                            <label for="status">Buka Flash Sale <span style="color: red;">*</span></label>
                                                            <select class="form-control rounded-2" id="status" name="status">                       
                                                                <option value selected disabled >Pilih Status...</option>
                                                                <option value="Active">Active</option>
                                                            </select>
                                                        </div>
                                                        <div class="error_status">
                                                        </div> 
                                                        <div class="form-group">
                                                            <label>Periode <span style="color: red;">*</span></label>
                                                            <div class="input-group date">
                                                                <input type="date" name="time" id="time" class="form-control dark-date"/>
                                                            </div>
                                                        </div>
                                                        <div class="error_time">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="image1">Banner Flash Sale</label>
                                                            <img class="previewBanner  img-fluid  col-sm-5 d-block" >
                                                            <div class="input-group">
                                                              <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="banner_flashsale" onchange="previewBanner()" name="banner_flashsale">
                                                                <label class="custom-file-label" for="banner_flashsale">Choose file</label>
                                                              </div>
                                                            </div>
                                                        </div>
                                                        <div class="error_banner_flashsale ">
                                                          
                                                        </div>
                                                    </div> 
                                                </form>
                                            </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary createOpenFlashSale">Buka Flash Sale</button>
                                      </div>
                                  </div>
                                </div>
                            </div>
                          </div>
                        @else  
                        
                        <div class="row"> 
                            <!-- Modal Close Flash Sale -->
                            <div class="modal fade" id="modalCloseFlashSale" tabindex="-1" role="dialog" aria-labelledby="modalCreateLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                      <h5 class="modal-title" id="modalCreateLabel">Flash Sale Maisyah Corporation</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                      </div>
                                      <div class="modal-body">
                                              <form method="post" id="form-close-flashsale" action="#">
                                                  @csrf
                                                  <div class="card-body" style="padding: 1rem !important;">
                                                        <div class="form-group">
                                                            <label for="update_status">Tutup Flash Sale <span style="color: red;">*</span></label>
                                                            <select class="form-control rounded-2" id="update_status" name="status">                       
                                                                <option value selected disabled >Pilih Status...</option>
                                                                <option value="Active">Active</option>
                                                                <option value="Non Active">Non Active</option>
                                                            </select>
                                                        </div>
                                                        <div class="error_update_status">
                                                        </div> 
                                                    </div> 
                                                </form>
                                            </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary createCloseFlashSale">Tutup Flash Sale</button>
                                      </div>
                                  </div>
                                </div>
                            </div>
                          </div>
                          @endif
                        <!--Modal Add FlashSale -->
                        <div class="row">
                            <div class="modal fade" id="modalCreateFlashSale" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                <form method="post" id="form-create-flashsale" action="#">           
                                        @csrf
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Flash Sale</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        {{-- CATATAN --}}
                                        <div class="alert alert-danger" style="color:#842029;background-color:#f8d7da;border-color:#f5c2c7" role="alert">
                                            <div class="font-weight-bold">Catatan</div>
                                            <ul>    
                                                <li>Persentase Sold Out diisi dalam rentang 0-100 </li>
                                                <li><span style="color:red;font-size:20px">*</span> tidak boleh kosong, harus diisi</li>
                                            </ul>
                                        </div>
                                        {{-- Akhir Catatan --}}
                                        <input type="hidden" id="flashsale_id">
                                        <div class="form-group">
                                            <label >Nama Product</label>
                                            <div class="input-group">
                                                <input disabled type="text"   name="nama_product" id="nama_product" class="form-control "  />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Harga Product</label>
                                            <div class="input-group">
                                                <input type="number"   name="harga_product" id="harga_product" class="form-control "  />
                                            </div>
                                        </div>
                                        <div class="error_harga_product">
                                        </div>
                                        <div class="form-group">
                                            <label>Harga Coret <span style="color: red;">*</span></label>
                                            <div class="input-group">
                                                <input type="number"  name="harga_coret_product" id="harga_coret_product" class="form-control "  />
                                            </div>
                                        </div>
                                        <div class="error_harga_coret_product">
                                        </div>
                                        <div class="form-group">
                                            <label>Akhir Flash Sale <span style="color: red;">*</span></label>
                                            <div class="input-group date">
                                                <input type="date"   name="flashsale" id="flashsale" class="form-control dark-date"  />
                                            </div>
                                        </div>
                                        <div class="error_flashsale">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">Persentase Sold Out (%) <span style="color: red;">*</span></label>
                                            <input type="number"  autocomplete="off" class="form-control" name="sold_out" id="sold_out" placeholder="Example input placeholder">
                                        </div>
                                        <div class="error_sold_out">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary createFlashSale">Save changes</button>
                                    </div>
                                </form>
                                </div>
                                </div>
                            </div>
                    </div>

                     <!--Modal Update FlashSale -->
                     <div class="row">
                        <div class="modal fade" id="modalEditFlashSale" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                            <form method="post" id="form-edit-flashsale" action="#">           
                                    @csrf
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Flash Sale</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    {{-- CATATAN --}}
                                    <div class="alert alert-danger" style="color:#842029;background-color:#f8d7da;border-color:#f5c2c7" role="alert">
                                        <div class="font-weight-bold">Catatan</div>
                                        <ul>    
                                            <li>Persentase Sold Out diisi dalam rentang 0-100 </li>
                                            <li><span style="color:red;font-size:20px">*</span> tidak boleh kosong, harus diisi</li>
                                        </ul>
                                    </div>
                                    {{-- Akhir Catatan --}}
                                    <input type="hidden" id="flashsale_id_edit">
                                    <div class="form-group">
                                        <label >Nama Product</label>
                                        <div class="input-group">
                                            <input disabled type="text"   name="nama_product" id="nama_product_edit" class="form-control "  />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Harga Product</label>
                                        <div class="input-group">
                                            <input type="number"   name="harga_product" id="harga_product_edit" class="form-control "  />
                                        </div>
                                    </div>
                                    <div class="error_harga_product_edit">
                                    </div>
                                    <div class="form-group">
                                        <label>Harga Coret <span style="color: red;">*</span></label>
                                        <div class="input-group">
                                            <input type="number"   name="harga_coret_product" id="harga_coret_product_edit" class="form-control "  />
                                        </div>
                                    </div>
                                    <div class="error_harga_coret_product_edit">
                                    </div>
                                    <div class="form-group">
                                        <label>Akhir Flash Sale <span style="color: red;">*</span></label>
                                        <div class="input-group date">
                                            <input type="date"   name="flashsale" id="flashsale_edit" class="form-control dark-date"  />
                                        </div>
                                    </div>
                                    <div class="error_flashsale_edit">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Persentase Sold Out (%) <span style="color: red;">*</span></label>
                                        <input type="number"  autocomplete="off" class="form-control" name="sold_out" id="sold_out_edit" placeholder="Example input placeholder">
                                    </div>
                                    <div class="error_sold_out_edit">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary editFlashSale">Save changes</button>
                                </div>
                            </form>
                            </div>
                            </div>
                        </div>
                </div>

                        <div id="container" class=" table-responsive">
                            <table id="table_flashsale" class="mt-3 table  table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Product</th>
                                        <th>Harga Product</th>
                                        <th>Flash Sale</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach($products as $product)
                                        <tr>     
                                            <td>{{ $products->firstItem() + $loop->index }}</td>
                                            <td>{{ $product->nama_product }}</td>
                                            <td>{{ $product->harga_product }}</td>
                                            @if ($product->flashsale)
                                            <td><span class="badge bg-success">Active</span></td>
                                            @else
                                            <td><span class="badge bg-danger">Non Active</span></td>
                                            @endif
                                            <td class=" py-0 align-middle">
                                                <div class="btn-group btn-group-sm">
                                                    @if ($product->flashsale)
                                                    <a data-toggle="modal" data-target="#editModal" class="btn btn-info "><i class="fas fa-pencil-alt"></i></a>
                                                         <!-- Edit FlashSale -->
                                                         <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                            <div class="modal-content">
                                                            <form method="post" action="/dashboard/flashsale/{{ $product->id }}">           
                                                                    @method('PUT')
                                                                    @csrf
                                                                <div class="modal-header">
                                                                <h5 class="modal-title" id="editModalLabel">Edit Flash Sale</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <label>Akhir Flash Sale</label>
                                                                        <div class="input-group date">
                                                                            <input type="date" value="{{ old('flashsale', $product->flashsale) }}" name="flashsale" id="example" class="form-control "  />
                                                                        </div>
                                                                    </div>
                                                                      <div class="form-group">
                                                                        <label for="formGroupExampleInput">Persentase Sold Out (%)</label>
                                                                        <input type="number" autocomplete="off" class="form-control" name="sold_out" id="formGroupExampleInput" placeholder="Example input placeholder">
                                                                      </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                                                </div>
                                                            </form>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    <form action="/dashboard/flashsale/{{ $product->id }}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="flashsale" value= 0000 - 00 - 00>
                                                        <button class="btn btn-danger rounded-0" onclick="return confirm('Apakah kamu yakin?')" style="padding: 0.25rem 0.5rem; font-size:.875rem; margin-left: -1px"><i class=" fas fa-trash "></i></button>
                                                    </form>               
                                                    @else
                                                   
                                                    @endif
                                                </div>
                                            </td>
                                            
                                        </tr>
                                        @endforeach --}}
                                        
                                </tbody>
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
    function previewBanner() {
      const image = document.querySelector('#banner_flashsale');
      const imgPreview = document.querySelector('.previewBanner');
      const oFReader = new FileReader();
      imgPreview.classList.add('mb-3');
      oFReader.readAsDataURL(image.files[0]);
      
      oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
          
      }
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
      //Show Table All Member
      $('#table_flashsale').DataTable({
          processing: true,
          serverSide: true,
          ajax: { 
              url: "{{ route('flashsale.index') }}",
              type: 'GET'
          },
          columns: [
              {
                  "data" : null, "sortable" : false, 
                  render: function(data,type,row,meta) {
                      return meta.row+ meta.settings._iDisplayStart + 1
                  }
              },
              {data:'nama_product', name: 'nama_product'},
              {data:'harga_product', name: 'harga_product'},
              {data:'flashsale', name: 'flashsale',searchable:false,orderable: true},
              {data:'action', name: 'action',searchable:false,orderable: false},
          ]
      });

      // Show Modal Open Flash Sale
      $(document).on('click','#showModalOpenFlashSale',function(){
        $('#modalOpenFlashSale').modal('show');
      });

      // Show Modal Close Flash Sale
      $(document).on('click','#showModalCloseFlashSale',function(){
        $('#modalCloseFlashSale').modal('show');
        $.ajax({
            url: "/dashboard/flashsale/getflashsale/1",
            type: "GET",
            dataType: "json",
            success: function(data){
                $('#update_status').val(data.flashsale[0].status);
            }
        })
      });

      // Show Modal Add Flash Sale
      $(document).on('click','.showModalCreateFlashSale',function(){
        $('#modalCreateFlashSale').modal('show');
        let flashsaleID = $(this).attr('id');
        $.ajax({
            url: "/dashboard/flashsale/get/" + flashsaleID,
            type: "GET",
            dataType: "json",
            success: function(data){
                 $('#flashsale_id').val(data.Product[0].id);
                 $('#nama_product').val(data.Product[0].nama_product);
                 $('#harga_coret_product').val(data.Product[0].harga_product);
            }
        })  
      });

      // Show Modal Update Flash Sale
      $(document).on('click','.showModalEditFlashSale',function(){
        $('#modalEditFlashSale').modal('show');
        let flashsaleID = $(this).attr('id');
        $.ajax({
            url: "/dashboard/flashsale/get/" + flashsaleID,
            type: "GET",
            dataType: "json",
            success: function(data){
                 $('#flashsale_id_edit').val(data.Product[0].id);
                 $('#nama_product_edit').val(data.Product[0].nama_product);
                 $('#harga_product_edit').val(data.Product[0].harga_product);
                 $('#harga_coret_product_edit').val(data.Product[0].harga_coret_product);
                 $('#flashsale_edit').val(data.Product[0].flashsale);
                 $('#sold_out_edit').val(data.Product[0].sold_out);
            }
        })  
      });

      // Create Ajax Open FlashSale
      $('.createOpenFlashSale').on('click',function(){
        var flashsaleID = 1;
        $('#form-open-flashsale').ajaxForm({
                  url: "/dashboard/flashsale/openflashsale/" + flashsaleID,
                  type: "POST",
                  data: {_method:'PUT'},
                  dataType: "json",
                  success: function(data){
                      Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'FlashSale berhasil dibuka',
                        showConfirmButton: false,
                        timer: 1500
                      });
                      // Remove if Have Errors
                      $('.error_status').removeClass('error-feedback');
                      $('.error_status').empty();
                      $('#status').removeClass('is-invalid');
                      $('#status').removeClass('is-valid');
                      

                      $('.error_time').removeClass('error-feedback');
                      $('.error_time').empty();
                      $('#time').removeClass('is-invalid'); 
                      $('#time').removeClass('is-valid'); 

                      // Hide Modal Create
                      $('#modalOpenFlashSale').modal('hide');
                      // Reset Form
                      $('#form-open-flashsale')[0].reset();
                    setTimeout(()=>{
                        window.location.href = '/dashboard/flashsale';
                    },1500)

                  },
                  error: function(data){
                    if(data.status == 400) {
                      if(data.responseJSON.errors.status){
                        $('.error_status').html(data.responseJSON.errors.status);
                        $('.error_status').addClass('error-feedback');
                        $('#status').addClass('is-invalid');
                        $('#status').removeClass('is-valid');
                      } else{
                        $('.error_status').removeClass('error-feedback');
                        $('.error_status').empty();
                        $('#status').removeClass('is-invalid');
                        $('#status').addClass('is-valid');
                    } 
                      if(data.responseJSON.errors.time){
                        $('.error_time').html(data.responseJSON.errors.time);
                        $('.error_time').addClass('error-feedback');
                        $('#time').addClass('is-invalid');
                        $('#time').removeClass('is-valid');
                      } else{
                        $('.error_time').removeClass('error-feedback');
                        $('.error_time').empty();
                        $('#time').removeClass('is-invalid');
                        $('#time').addClass('is-valid');
                    } 
                    }
                }
        }).submit()
      })

      // Close FlashSale
      $('.createCloseFlashSale').on('click',function(){
        var flashsaleID = 1;
        $('#form-close-flashsale').ajaxForm({
                  url: "/dashboard/flashsale/closeflashsale/" + flashsaleID,
                  type: "POST",
                  data: {_method:'PUT'},
                  dataType: "json",
                  success: function(data){
                      Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'FlashSale berhasil ditutup',
                        showConfirmButton: false,
                        timer: 1500
                      });
                      // Remove if Have Errors
                      $('.error_harga_product_edit').removeClass('error-feedback');
                      $('.error_harga_product_edit').empty();
                      $('#harga_product_edit').removeClass('is-invalid');
                      $('#harga_product_edit').removeClass('is-valid');
                      

                      $('.error_flashsale_edit').removeClass('error-feedback');
                      $('.error_flashsale_edit').empty();
                      $('#flashsale_edit').removeClass('is-invalid'); 
                      $('#flashsale_edit').removeClass('is-valid'); 

                      $('.error_harga_coret_product_edit').removeClass('error-feedback');
                      $('.error_harga_coret_product_edit').empty();
                      $('#harga_coret_product_edit').removeClass('is-invalid');
                      $('#harga_coret_product_edit').removeClass('is-valid');

                      $('.error_sold_out_edit').removeClass('error-feedback');
                      $('.error_sold_out_edit').empty();
                      $('#sold_out_edit').removeClass('is-invalid');
                      $('#sold_out_edit').removeClass('is-valid');
                      // Hide Modal Create
                      $('#modalCloseFlashSale').modal('hide');
                      // Reset Form
                      $('#form-close-flashsale')[0].reset();

                      setTimeout(()=>{
                        window.location.href = '/dashboard/flashsale';
                    },1500)
                  },
                  error: function(data){
                    if(data.status == 400) {
                      if(data.responseJSON.errors.harga_product){
                        $('.error_harga_product_edit').html(data.responseJSON.errors.harga_product);
                        $('.error_harga_product_edit').addClass('error-feedback');
                        $('#harga_product_edit').addClass('is-invalid');
                        $('#harga_product_edit').removeClass('is-valid');
                      } else{
                        $('.error_harga_product_edit').removeClass('error-feedback');
                        $('.error_harga_product_edit').empty();
                        $('#harga_product_edit').removeClass('is-invalid');
                        $('#harga_product_edit').addClass('is-valid');
                    } 
                    }
                }
        }).submit()
      })

      

      // Update Ajax FlashSale
      $('.editFlashSale').on('click',function(){
        var flashsaleID = $('#flashsale_id_edit').val();
        $('#form-edit-flashsale').ajaxForm({
                  url: "/dashboard/flashsale/" + flashsaleID,
                  type: "POST",
                  data: {_method:'PUT'},
                  dataType: "json",
                  success: function(data){
                      Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'FlashSale berhasil diubah',
                        showConfirmButton: false,
                        timer: 1500
                      });
                      // Remove if Have Errors
                      $('.error_harga_product_edit').removeClass('error-feedback');
                      $('.error_harga_product_edit').empty();
                      $('#harga_product_edit').removeClass('is-invalid');
                      $('#harga_product_edit').removeClass('is-valid');
                      

                      $('.error_flashsale_edit').removeClass('error-feedback');
                      $('.error_flashsale_edit').empty();
                      $('#flashsale_edit').removeClass('is-invalid'); 
                      $('#flashsale_edit').removeClass('is-valid'); 

                      $('.error_harga_coret_product_edit').removeClass('error-feedback');
                      $('.error_harga_coret_product_edit').empty();
                      $('#harga_coret_product_edit').removeClass('is-invalid');
                      $('#harga_coret_product_edit').removeClass('is-valid');

                      $('.error_sold_out_edit').removeClass('error-feedback');
                      $('.error_sold_out_edit').empty();
                      $('#sold_out_edit').removeClass('is-invalid');
                      $('#sold_out_edit').removeClass('is-valid');
                      // Hide Modal Create
                      $('#modalEditFlashSale').modal('hide');
                      // Reset Form
                      $('#form-edit-flashsale')[0].reset();
                      //Update DataTable
                      $('#table_flashsale').DataTable().draw();
                  },
                  error: function(data){
                    if(data.status == 400) {
                      if(data.responseJSON.errors.harga_product){
                        $('.error_harga_product_edit').html(data.responseJSON.errors.harga_product);
                        $('.error_harga_product_edit').addClass('error-feedback');
                        $('#harga_product_edit').addClass('is-invalid');
                        $('#harga_product_edit').removeClass('is-valid');
                      } else{
                        $('.error_harga_product_edit').removeClass('error-feedback');
                        $('.error_harga_product_edit').empty();
                        $('#harga_product_edit').removeClass('is-invalid');
                        $('#harga_product_edit').addClass('is-valid');
                    } 
                      if(data.responseJSON.errors.flashsale){
                        $('.error_flashsale_edit').html(data.responseJSON.errors.flashsale);
                        $('.error_flashsale_edit').addClass('error-feedback');
                        $('#flashsale_edit').addClass('is-invalid');
                        $('#flashsale_edit').removeClass('is-valid');
                      } else{
                        $('.error_flashsale_edit').removeClass('error-feedback');
                        $('.error_flashsale_edit').empty();
                        $('#flashsale_edit').removeClass('is-invalid');
                        $('#flashsale_edit').addClass('is-valid');
                    } 
                      if(data.responseJSON.errors.harga_coret_product){
                        $('.error_harga_coret_product_edit').html(data.responseJSON.errors.harga_coret_product);
                        $('.error_harga_coret_product_edit').addClass('error-feedback');
                        $('#harga_coret_product_edit').addClass('is-invalid');
                        $('#harga_coret_product_edit').removeClass('is-valid');
                      } else{
                        $('.error_harga_coret_product_edit').removeClass('error-feedback');
                        $('.error_harga_coret_product_edit').empty();
                        $('#harga_coret_product_edit').removeClass('is-invalid');
                        $('#harga_coret_product_edit').addClass('is-valid');
                    } 
                      if(data.responseJSON.errors.sold_out){
                        $('.error_sold_out_edit').html(data.responseJSON.errors.sold_out);
                        $('.error_sold_out_edit').addClass('error-feedback');
                        $('#sold_out_edit').addClass('is-invalid');
                        $('#sold_out_edit').removeClass('is-valid');
                      } else{
                        $('.error_sold_out_edit').removeClass('error-feedback');
                        $('.error_sold_out_edit').empty();
                        $('#sold_out_edit').removeClass('is-invalid');
                        $('#sold_out_edit').addClass('is-valid');
                    } 
                    }
                }
        }).submit()
      })

      // Create Ajax FlashSale
      $('.createFlashSale').on('click',function(){
        var flashsaleID = $('#flashsale_id').val();
        $('#form-create-flashsale').ajaxForm({
                  url: "/dashboard/flashsale/add/" + flashsaleID,
                  type: "POST",
                  dataType: "json",
                  success: function(data){
                      Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'FlashSale berhasil ditambahkan',
                        showConfirmButton: false,
                        timer: 1500
                      });
                      // Remove if Have Errors
                      $('.error_harga_product').removeClass('error-feedback');
                      $('.error_harga_product').empty();
                      $('#harga_product').removeClass('is-invalid');
                      $('#harga_product').removeClass('is-valid');
                      

                      $('.error_flashsale').removeClass('error-feedback');
                      $('.error_flashsale').empty();
                      $('#flashsale').removeClass('is-invalid'); 
                      $('#flashsale').removeClass('is-valid'); 

                      $('.error_harga_coret_product').removeClass('error-feedback');
                      $('.error_harga_coret_product').empty();
                      $('#harga_coret_product').removeClass('is-invalid');
                      $('#harga_coret_product').removeClass('is-valid');

                      $('.error_sold_out').removeClass('error-feedback');
                      $('.error_sold_out').empty();
                      $('#sold_out').removeClass('is-invalid');
                      $('#sold_out').removeClass('is-valid');
                      // Hide Modal Create
                      $('#modalCreateFlashSale').modal('hide');
                      // Reset Form
                      $('#form-create-flashsale')[0].reset();
                      //Update DataTable
                      $('#table_flashsale').DataTable().draw();
                  },
                  error: function(data){
                    if(data.status == 400) {
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
                      if(data.responseJSON.errors.flashsale){
                        $('.error_flashsale').html(data.responseJSON.errors.flashsale);
                        $('.error_flashsale').addClass('error-feedback');
                        $('#flashsale').addClass('is-invalid');
                        $('#flashsale').removeClass('is-valid');
                      } else{
                        $('.error_flashsale').removeClass('error-feedback');
                        $('.error_flashsale').empty();
                        $('#flashsale').removeClass('is-invalid');
                        $('#flashsale').addClass('is-valid');
                    } 
                      if(data.responseJSON.errors.harga_coret_product){
                        $('.error_harga_coret_product').html(data.responseJSON.errors.harga_coret_product);
                        $('.error_harga_coret_product').addClass('error-feedback');
                        $('#harga_coret_product').addClass('is-invalid');
                        $('#harga_coret_product').removeClass('is-valid');
                      } else{
                        $('.error_harga_coret_product').removeClass('error-feedback');
                        $('.error_harga_coret_product').empty();
                        $('#harga_coret_product').removeClass('is-invalid');
                        $('#harga_coret_product').addClass('is-valid');
                    } 
                      if(data.responseJSON.errors.sold_out){
                        $('.error_sold_out').html(data.responseJSON.errors.sold_out);
                        $('.error_sold_out').addClass('error-feedback');
                        $('#sold_out').addClass('is-invalid');
                        $('#sold_out').removeClass('is-valid');
                      } else{
                        $('.error_sold_out').removeClass('error-feedback');
                        $('.error_sold_out').empty();
                        $('#sold_out').removeClass('is-invalid');
                        $('#sold_out').addClass('is-valid');
                    } 
                    }
                }
        }).submit()
      })

    // Delete Flash Sale
    $(document).on('click','.hapus',function(){
        var flashsaleID = $(this).attr('id');
        Swal.fire({
        title: 'Apakah kamu yakin?',
        text: "Flash Sale yang dihapus tidak dapat dikembalikan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
            'Deleted!',
            'Flash Sale berhasil dihapus.',
            'success'
            )
            $.ajax({
            url: "/dashboard/flashsale/remove/"+ flashsaleID,    
            type: 'POST',
            success: function(data){
                    // draw(false) = agar ketika reload,tetap stay di current pagination
                    $('#table_flashsale').DataTable().draw(false);
            },
            error: function(data){
                Swal.fire({
                  position: 'center',
                  icon: 'error',
                  title: 'Flash Sale Gagal dihapus',
                  showConfirmButton: false,
                  timer: 1500
                });
            }
        });
        }
        }) 
    });

    })
</script>
@endpush
