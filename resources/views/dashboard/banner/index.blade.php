@extends('dashboard.layouts.main')

@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card mt-4">
          <div class="card-body">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center ">
              <h1 class="h2">Banner Maisyah Corp</h1>
            </div>

            <div class=" row "> 
              <!-- Modal Create Banner -->
              <div class="modal fade" id="modalCreateBanner" tabindex="-1" role="dialog" aria-labelledby="modalCreateLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        
                        <h5 class="modal-title" id="modalCreateLabel">Tambah Banner</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                                {{-- CATATAN --}}
                                  <div class="alert alert-danger" style="color:#842029;background-color:#f8d7da;border-color:#f5c2c7" role="alert">
                                    <div class="font-weight-bold">Catatan</div>
                                    <ul>    
                                        <li>File yang diupload tidak boleh melebihi 5MB</li>
                                        <li><span style="color:red;font-size:20px">*</span> tidak boleh kosong, harus diisi</li>
                                    </ul>
                                </div>
                                {{-- Akhir Catatan --}}
                                <form method="post" id="form-create-banner" action="#">
                                    @csrf
                                    <div class="card-body" style="padding: 1rem !important;">
                                      <div class="form-group">
                                        <label for="image1">Banner Utama <span style="color: red;">*</span></label>
                                        <img class="previewBannerUtama  img-fluid  col-sm-5 d-block" >
                                        <div class="input-group">
                                          <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="banner_utama" onchange="previewBannerUtama()" name="banner_utama">
                                            <label class="custom-file-label" for="banner_utama">Choose file</label>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="error_banner_utama ">
                                      
                                      </div>

                                    </div>
                                </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary createBanner">Tambah Banner</button>
                        </div>
                    </div>
                  </div>
              </div>
            </div>

            <div id="container" class="table-responsive ">
              @if($count_banners < 5)
              <!-- Button trigger modal Create Banner -->
              <button type="button" id="showModalCreateBanner" class="btn btn-primary mb-3">
                Tambah Banner
              </button>
              @else
              <button type="button" id="showModalCreateBanner" disabled class="btn btn-primary  mb-3">
                Tambah Banner
              </button>
              @endif
              <table id="table_banner" class="table table-striped table-hover table-lg">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Banner Utama</th>
                    <th scope="col">Aksi</th>
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
@endsection
@push('scripts')
<script>
  function previewBannerUtama() {
    const image = document.querySelector('#banner_utama');
    const imgPreview = document.querySelector('.previewBannerUtama');
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
      //Show Table All Banner
      $('#table_banner').DataTable({
          processing: true,
          serverSide: true,
          ajax: { 
              url: "{{ route('banner.index') }}",
              type: 'GET'
          },
          columns: [
              {
                  "data" : null, "sortable" : false, 
                  render: function(data,type,row,meta) {
                      return meta.row+ meta.settings._iDisplayStart + 1
                  }
              },
              {data:'banner_utama', name: 'banner_utama',searchable:false,orderable: false},
              {data:'action', name: 'action',searchable:false,orderable: false},
          ]
      });

      // Show Modal Create Banner
      $('#showModalCreateBanner').on('click',function(){
        $('#modalCreateBanner').modal('show');
      });

      // Create Ajax Banner
      $('.createBanner').on('click',function(){
        $('#form-create-banner').ajaxForm({
                  url: "/dashboard/banner",
                  type: "POST",
                  dataType: "json",
                  success: function(data){
                      Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Banner berhasil ditambahkan',
                        showConfirmButton: false,
                        timer: 1500
                      });
                      // Remove if Have Errors
                      $('.error_banner_utama').removeClass('error-feedback');
                      $('.error_banner_utama').empty();
                      $('#banner_utama').removeClass('is-invalid');
                      $('#banner_utama').removeClass('is-valid');

                      // Remove image preview
                      $('.previewBannerUtama').removeAttr('src');
                      $('.previewBannerUtama').removeClass('mb-3');     

                      // Hide Modal Create
                      $('#modalCreateBanner').modal('hide');
                      // Reset Form
                      $('#form-create-banner')[0].reset();
                      //Update DataTable
                      $('#table_banner').DataTable().draw();
                  },
                  error: function(data){
                    if(data.status == 400) {
                      if(data.responseJSON.errors.banner_utama){
                        $('.error_banner_utama').html(data.responseJSON.errors.banner_utama);
                        $('.error_banner_utama').addClass('error-feedback');
                        $('#banner_utama').addClass('is-invalid');
                        $('#banner_utama').removeClass('is-valid');
                      } else{
                        $('.error_banner_utama').removeClass('error-feedback');
                        $('.error_banner_utama').empty();
                        $('#banner_utama').removeClass('is-invalid');
                        $('#banner_utama').addClass('is-valid');
                    } 
                    }
                }
        }).submit()
      })


      // Delete Banner
      $(document).on('click','.hapus',function(){
          var bannerID = $(this).attr('id');
            Swal.fire({
            title: 'Apakah kamu yakin?',
            text: "Banner yang dihapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
          if (result.isConfirmed) {
              Swal.fire(
              'Deleted!',
              'Banner berhasil dihapus.',
              'success'
              )
              $.ajax({
              url: "/dashboard/banner/"+ bannerID,    
              type: 'delete',
              success: function(data){
                      // draw(false) = agar ketika reload,tetap stay di current pagination
                      $('#table_banner').DataTable().draw(false);
              },
              error: function(data){
                  Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Banner Gagal dihapus',
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

