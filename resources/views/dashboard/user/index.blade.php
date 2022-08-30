@extends('dashboard.layouts.main')

@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card mt-4">
          <div class="card-body">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center ">
              <h1 class="h2">Kelola User</h1>
            </div>

            <div class=" row "> 
              <!-- Modal Create User -->
              <div class="modal fade" id="modalCreateUser" tabindex="-1" role="dialog" aria-labelledby="modalCreateLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="modalCreateLabel">Tambah User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                                {{-- CATATAN --}}
                                  <div class="alert alert-danger" style="color:#842029;background-color:#f8d7da;border-color:#f5c2c7" role="alert">
                                    <div class="font-weight-bold">Catatan</div>
                                    <ul>    
                                        <li>Email yang diisi harus email yang aktif</li>
                                        <li><span style="color:red;font-size:20px">*</span> tidak boleh kosong, harus diisi</li>
                                    </ul>
                                </div>
                                {{-- Akhir Catatan --}}
                                <form method="post" id="form-create-user" action="#">
                                    @csrf
                                    <div class="card-body" style="padding: 1rem !important;">
                                        <div class="form-group">
                                          <label for="email">Email <span style="color: red;">*</span></label>
                                          <input type="email" class="form-control" id="email" name="email" autocomplete="off" required placeholder="Masukkan Email" >
                                        </div>
                                        <div class="error_email">
                                        </div>

                                        <div class="form-group">
                                          <label for="name">Nama User <span style="color: red;">*</span></label>
                                          <input type="text" class="form-control" id="name" name="name" autocomplete="off" required placeholder="Masukkan Nama User" >
                                        </div>
                                        <div class="error_name">
                                        </div>

                                        <div class="form-group">
                                          <label for="role">Role <span style="color: red;">*</span></label>
                                          <select class="form-control rounded-2" id="role" name="role">                       
                                              <option value selected disabled >Pilih Role...</option>
                                              <option value="Admin">Admin</option>
                                              <option value="User">User</option>
                                          </select>
                                      </div> 
                                      <div class="error_role">
                                         
                                      </div>

                                        <div class="form-group">
                                          <label for="password">Password <span style="color: red;">*</span></label>
                                          <input type="password" class="form-control" id="password" name="password" autocomplete="off" required  >
                                        </div>
                                        <div class="error_password">
                                        </div>

                                        <div class="form-group">
                                            <label for="password_confirmation">Confirm Password</label>
                                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" autocomplete="off" required >
                                        </div>
                                        <div class="error_password_confirmation">
                                        </div>

                                    </div>
                                </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary createUser">Tambah User</button>
                        </div>
                    </div>
                  </div>
              </div>
            </div>

          <div class=" row "> 
            <!-- Modal Edit User -->
            <div class="modal fade" id="modalEditUser" tabindex="-1" role="dialog" aria-labelledby="modalEditLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                      <h5 class="modal-title" id="modalEditLabel">Edit User</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <div class="modal-body">
                              <form method="post" id="form-edit-kategori" action="#">
                                  @csrf
                                  <input type="hidden" name="user_id" id="user_id" value="">
                                  <div class="card-body" style="padding: 1rem !important;">
                                    <div class="form-group">
                                      <label for="email_edit">Email <span style="color: red;">*</span></label>
                                      <input readonly type="email" class="form-control" id="email_edit" name="email" autocomplete="off" required placeholder="Masukkan Email" >
                                    </div>
                                    <div class="error_email_edit">
                                    </div>

                                    <div class="form-group">
                                      <label for="name_edit">Nama Lengkap <span style="color: red;">*</span></label>
                                      <input readonly type="text" class="form-control" id="name_edit" name="name" autocomplete="off" required placeholder="Masukkan Nama User" >
                                    </div>
                                    <div class="error_name_edit">
                                    </div>

                                    <div class="form-group">
                                      <label for="role_edit">Role <span style="color: red;">*</span></label>
                                      <select class="form-control rounded-2" id="role_edit" name="role">                       
                                          <option value selected disabled >Pilih Role...</option>
                                          <option value="Admin">Admin</option>
                                          <option value="User">User</option>
                                      </select>
                                    </div> 
                                    <div class="error_role_edit">
                                     
                                    </div>
                                    <div class="form-group">
                                      <label for="status_edit">Status <span style="color: red;">*</span></label>
                                      <select class="form-control rounded-2" id="status_edit" name="status">    
                                          <option value disabled >Pilih Status...</option>                   
                                          <option value="Active">Active</option>
                                          <option value="Non Active">Non Active</option>
                                      </select>
                                    </div> 
                                    <div class="error_status_edit">
                                     
                                    </div>
                                  </div>
                              </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary editUser">Edit User</button>
                      </div>
                  </div>
                </div>
            </div>
        </div>

            <div id="container" class="table-responsive ">
              <!-- Button trigger modal Create User -->
              <button type="button" id="showModalCreateUser" class="btn btn-primary mb-3">
                Tambah User
              </button>
              <table id="table_user" class="table table-striped table-hover table-lg">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Role</th>
                    <th scope="col">Status</th>
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
  function previewBanner() {
    const image = document.querySelector('#banner');
    const imgPreview = document.querySelector('.previewBanner');
    const oFReader = new FileReader();
    imgPreview.classList.add('mb-3');
    oFReader.readAsDataURL(image.files[0]);
    
    oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;     
    }
   }

   function previewBannerEdit() {
    const image = document.querySelector('#banner_edit');
    const imgPreview = document.querySelector('.previewBannerEdit');
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
      //Show Table All User
      $('#table_user').DataTable({
          processing: true,
          serverSide: true,
          ajax: { 
              url: "{{ route('user.index') }}",
              type: 'GET'
          },
          columns: [
              {
                  "data" : null, "sortable" : false, 
                  render: function(data,type,row,meta) {
                      return meta.row+ meta.settings._iDisplayStart + 1
                  }
              },
              {data:'email', email: 'name'},
              {data:'name', name: 'name'},
              {data:'role', name: 'role'},
              {data:'status', name: 'status'},
              {data:'action', name: 'action',searchable:false,orderable: false},
          ]
      });

      // Show Modal Create User
      $('#showModalCreateUser').on('click',function(){
        $('#modalCreateUser').modal('show');
      });

      // Show Modal Edit User
      $(document).on('click','.showModalEditUser',function(){
        $('#modalEditUser').modal('show');
        var userID = $(this).attr('id');
        $.ajax({
            url: "/dashboard/user/get/" + userID,
            type: "GET",
            dataType: "json",
            success: function(data){
              console.log(data);
              $('#user_id').val(data.User[0].id);
              $('#name_edit').val(data.User[0].name);
              $('#email_edit').val(data.User[0].email);
              $('#role_edit').val(data.User[0].role);
              $('#status_edit').val(data.User[0].status);
            }
        })  ;
        
      });

      // Create Ajax User
      $('.createUser').on('click',function(){
        $('#form-create-user').ajaxForm({
                  url: "/dashboard/user",
                  type: "POST",
                  dataType: "json",
                  success: function(data){
                      Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'User berhasil ditambahkan',
                        showConfirmButton: false,
                        timer: 1500
                      });
                      // Remove if Have Errors
                      $('.error_email').removeClass('error-feedback');
                      $('.error_email').empty();
                      $('#email').removeClass('is-invalid'); 
                      $('#email').removeClass('is-valid'); 

                      $('.error_name').removeClass('error-feedback');
                      $('.error_name').empty();
                      $('#name').removeClass('is-invalid');
                      $('#name').removeClass('is-valid');

                      $('.error_role').removeClass('error-feedback');
                      $('.error_role').empty();
                      $('#role').removeClass('is-invalid');
                      $('#role').removeClass('is-valid');

                      $('.error_password').removeClass('error-feedback');
                      $('.error_password').empty();
                      $('#password').removeClass('is-invalid');
                      $('#password').removeClass('is-valid');

                      // Hide Modal Create
                      $('#modalCreateUser').modal('hide');
                      // Reset Form
                      $('#form-create-user')[0].reset();
                      //Update DataTable
                      $('#table_user').DataTable().draw();
                  },
                  error: function(data){
                    if(data.status == 400) {
                      if(data.responseJSON.errors.email){
                        $('.error_email').html(data.responseJSON.errors.email);
                        $('.error_email').addClass('error-feedback');
                        $('#email').addClass('is-invalid');
                        $('#email').removeClass('is-valid');
                      } else{
                        $('.error_email').removeClass('error-feedback');
                        $('.error_email').empty();
                        $('#email').removeClass('is-invalid');
                        $('#email').addClass('is-valid');
                    } if(data.responseJSON.errors.name){
                        $('.error_name').html(data.responseJSON.errors.name);
                        $('.error_name').addClass('error-feedback');
                        $('#name').addClass('is-invalid');
                        $('#name').removeClass('is-valid');
                      } else{
                        $('.error_name').removeClass('error-feedback');
                        $('.error_name').empty();
                        $('#name').removeClass('is-invalid');
                        $('#name').addClass('is-valid');
                    } if(data.responseJSON.errors.role){
                        $('.error_role').html(data.responseJSON.errors.role);
                        $('.error_role').addClass('error-feedback');
                        $('#role').addClass('is-invalid');
                        $('#role').removeClass('is-valid');
                      } else{
                        $('.error_role').removeClass('error-feedback');
                        $('.error_role').empty();
                        $('#role').removeClass('is-invalid');
                        $('#role').addClass('is-valid');
                    } if(data.responseJSON.errors.password){
                        $('.error_password').html(data.responseJSON.errors.password);
                        $('.error_password').addClass('error-feedback');
                        $('#password').addClass('is-invalid');
                        $('#password').removeClass('is-valid');
                      } else{
                        $('.error_password').removeClass('error-feedback');
                        $('.error_password').empty();
                        $('#password').removeClass('is-invalid');
                        $('#password').addClass('is-valid');
                    } 
                  }
                }
        }).submit()
      })
        

      // Update User
      $(document).on('click', '.editUser',function(){
        var userID = $('#user_id').val();
        $('#form-edit-kategori').ajaxForm({
                url: "/dashboard/user/" + userID,
                method: "POST",
                data: {_method:'PUT'},
                dataType: "json",
                success: function(data){
                    Swal.fire({
                      position: 'center',
                      icon: 'success',
                      title: 'User berhasil diupdate',
                      showConfirmButton: false,
                      timer: 1500
                    });  
                    // Hide Modal Create
                    $('#modalEditUser').modal('hide');
                    // Reset Form
                    $('#form-edit-kategori')[0].reset();
                    //Update DataTable
                    $('#table_user').DataTable().draw(false);
                },
                error: function(data){
                    Swal.fire({
                      position: 'center',
                      icon: 'error',
                      title: 'User Gagal diupdate',
                      showConfirmButton: false,
                      timer: 1500
                    });
                }
            }).submit();
      })

      // Delete User
      $(document).on('click','.hapus',function(){
          var userID = $(this).attr('id');
          Swal.fire({
          title: 'Apakah kamu yakin?',
          text: "User yang dihapus tidak dapat dikembalikan!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
          if (result.isConfirmed) {
              Swal.fire(
              'Deleted!',
              'User berhasil dihapus.',
              'success'
              )
              $.ajax({
              url: "/dashboard/user/"+ userID,    
              type: 'delete',
              success: function(data){
                      // draw(false) = agar ketika reload,tetap stay di current pagination
                      $('#table_user').DataTable().draw(false);
              },
              error: function(data){
                  Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'User Gagal dihapus',
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

