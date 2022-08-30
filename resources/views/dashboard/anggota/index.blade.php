@extends('dashboard.layouts.main')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card  mt-4">
                    <div class="card-body">
                        <h2>Daftar Anggota Maisyah Corp </h2>
                        <div class=" row "> 
                            <!-- Modal Create Anggota -->
                            <div class="modal fade" id="modalCreateMember" tabindex="-1" role="dialog" aria-labelledby="modalCreateLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                      <h5 class="modal-title" id="modalCreateLabel">Tambah Anggota</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                      </div>
                                      <div class="modal-body">
                                              {{-- CATATAN --}}
                                                <div class="alert alert-danger" style="color:#842029;background-color:#f8d7da;border-color:#f5c2c7" role="alert">
                                                  <div class="font-weight-bold">Catatan</div>
                                                  <ul>    
                                                      <li>Email yang diisi harus email aktif</li>
                                                      <li>Setiap awalan kata Nama Anggota menggunakan huruf Kapital</li>
                                                      <li><span style="color:red;font-size:20px">*</span> tidak boleh kosong, harus diisi</li>
                                                  </ul>
                                              </div>
                                              {{-- Akhir Catatan --}}
                                              <form method="post" id="form-create-member" action="#">
                                                  @csrf
                                                  <div class="card-body" style="padding: 1rem !important;">
                                                      <div class="form-group">
                                                        <label for="email">Email<span style="color: red;">*</span></label>
                                                        <input type="email" class="form-control" id="email" name="email" autocomplete=""  required placeholder="Masukkan Email" >
                                                      </div>
                                                      <div class="error_email">
                                                      </div>
                                                      <div class="form-group">
                                                        <label for="nama_anggota">Nama Anggota <span style="color: red;">*</span></label>
                                                        <input type="text" class="form-control" id="nama_anggota" name="nama_lengkap" autocomplete="off" required placeholder="Masukkan Nama Anggota" >
                                                      </div>
                                                      <div class="error_nama_anggota">
                                                      </div>
                                                  
                                                      <div class="form-group">
                                                        <label for="nim">NIM <span style="color: red;">*</span></label>
                                                        <input type="text" class="form-control" id="nim" name="nim" autocomplete="off" required placeholder="Masukkan NIM" >
                                                      </div>
                                                      <div class="error_nim">
                                                      </div>                                           
                                                      <div class="form-group">
                                                        <label for="angkatan">Angkatan <span style="color: red;">*</span></label>
                                                        <select class="form-control rounded-2" id="angkatan" name="angkatan">                       
                                                          <option value selected disabled >Pilih Angkatan....</option>
                                                          <option value="2019">2019</option>
                                                          <option value="2020">2020</option>
                                                          <option value="2021" >2021</option>
                                                      </select>
                                                      </div>
                                                      <div class="error_angkatan">
                                                      </div>                            
                                                      <div class="form-group">
                                                        <label for="divisi">Divisi <span style="color: red;">*</span></label>
                                                        <select class="form-control rounded-2" id="divisi" name="divisi">                       
                                                          <option value selected disabled >Pilih Divisi...</option>
                                                          <option value="Kadept">Kepala Departemen</option>
                                                          <option value="Wakadept">Wakil Kepala Departemen</option>
                                                          <option value="Bendahara" >Bendahara</option>
                                                          <option value="Sekretaris">Sekretaris</option>
                                                          <option value="Maisyah Corp">Maisyah Corp (MaCorp)</option>
                                                          <option value="S3">Sedekah Sehari Seribu (S3)</option>
                                                          <option value="KEI">Kajian Ekonomi Islam (KEI)</option>
                                                          <option value="DaDoDa">Dana Donasi Dakwah (DaDoDa)</option>
                                                          <option value="Media">Sosial Media (Sosmed)</option>
                                                      </select>
                                                      </div>
                                                      <div class="error_divisi">
                                                      </div>
                                                    </div>
                                                  
                                              </form>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary createMember">Tambah Anggota</button>
                                      </div>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class=" row "> 
                            <!-- Modal Edit Anggota -->
                            <div class="modal fade" id="modalEditMember" tabindex="-1" role="dialog" aria-labelledby="modalEditLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                      <h5 class="modal-title" id="modalEditLabel">Edit Anggota</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                      </div>
                                      <div class="modal-body">
                                              {{-- CATATAN --}}
                                                <div class="alert alert-danger" style="color:#842029;background-color:#f8d7da;border-color:#f5c2c7" role="alert">
                                                  <div class="font-weight-bold">Catatan</div>
                                                  <ul>    
                                                      <li>Email yang diisi harus email aktif</li>
                                                      <li>Setiap awalan kata Nama Anggota menggunakan huruf Kapital</li>
                                                      <li><span style="color:red;font-size:20px">*</span> tidak boleh kosong, harus diisi</li>
                                                  </ul>
                                              </div>
                                              {{-- Akhir Catatan --}}
                                              <form method="post" id="form-edit-member" action="#">
                                                  @csrf
                                                  <div class="card-body" style="padding: 1rem !important;">
                                                      <input type="hidden" name="id" id="anggota_id">
                                                      <div class="form-group">
                                                        <label for="edit_email">Email<span style="color: red;">*</span></label>
                                                        <input required type="edit_email" class="form-control" id="edit_email" name="email" autocomplete=""  required placeholder="Masukkan Email" >
                                                      </div>
                                                      <div class="error_edit_email">
                                                      </div>
                                                      <div class="form-group">
                                                        <label for="edit_nama_anggota">Nama Anggota <span style="color: red;">*</span></label>
                                                        <input type="text" class="form-control" id="edit_nama_anggota" name="nama_lengkap" autocomplete="off" required placeholder="Masukkan Nama Anggota" >
                                                      </div>
                                                      <div class="error_edit_nama_anggota">
                                                      </div>
                                                  
                                                      <div class="form-group">
                                                        <label for="edit_nim">NIM <span style="color: red;">*</span></label>
                                                        <input type="text" class="form-control" id="edit_nim" name="nim" autocomplete="off" required placeholder="Masukkan NIM" >
                                                      </div>
                                                      <div class="error_edit_nim">
                                                      </div>                                           
                                                      <div class="form-group">
                                                        <label for="edit_angkatan">Angkatan <span style="color: red;">*</span></label>
                                                        <select class="form-control rounded-2" id="edit_angkatan" name="angkatan">                       
                                                          <option value selected disabled >Pilih Angkatan....</option>
                                                          <option value="2019">2019</option>
                                                          <option value="2020">2020</option>
                                                          <option value="2021" >2021</option>
                                                      </select>
                                                      </div>
                                                      <div class="error_edit_angkatan">
                                                      </div>                            
                                                      <div class="form-group">
                                                        <label for="edit_divisi">Divisi <span style="color: red;">*</span></label>
                                                        <select class="form-control rounded-2" id="edit_divisi" name="divisi">                       
                                                          <option value selected disabled >Pilih Divisi...</option>
                                                          <option value="Kadept">Kepala Departemen</option>
                                                          <option value="Wakadept">Wakil Kepala Departemen</option>
                                                          <option value="Bendahara" >Bendahara</option>
                                                          <option value="Sekretaris">Sekretaris</option>
                                                          <option value="Maisyah Corp">Maisyah Corp (MaCorp)</option>
                                                          <option value="S3">Sedekah Sehari Seribu (S3)</option>
                                                          <option value="KEI">Kajian Ekonomi Islam (KEI)</option>
                                                          <option value="DaDoDa">Dana Donasi Dakwah (DaDoDa)</option>
                                                          <option value="Media">Sosial Media (Sosmed)</option>
                                                      </select>
                                                      </div>
                                                      <div class="error_edit_divisi">
                                                      </div>
                                                    </div>
                                                  
                                              </form>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" id="submit" class="btn btn-primary editMember">Edit Anggota</button>
                                      </div>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div id="container" class=" table-responsive">
                            <button type="button" id="showModalCreateMember" class="btn btn-primary mb-3">
                                Tambah Anggota
                              </button>
                            <table id="table_member" class="mt-3 table  table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Lengkap</th>
                                        <th>Nim</th>
                                        <th>Angkatan</th>
                                        <th>Divisi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>                                 
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
    $(document).ready(function () {
      //CSRF Token
      $.ajaxSetup({
          headers:{
              'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
          }
      });
      //Show Table All Member
      $('#table_member').DataTable({
          processing: true,
          serverSide: true,
          ajax: { 
              url: "{{ route('anggota.index') }}",
              type: 'GET'
          },
          columns: [
              {
                  "data" : null, "sortable" : false, 
                  render: function(data,type,row,meta) {
                      return meta.row+ meta.settings._iDisplayStart + 1
                  }
              },
              {data:'nama_lengkap', name: 'nama_lengkap'},
              {data:'nim', name: 'nim'},
              {data:'angkatan', name: 'angkatan'},
              {data:'divisi', name: 'divisi'},
              {data:'action', name: 'action',searchable:false,orderable: false},
          ]
      });

      // Show Modal Create Member
      $('#showModalCreateMember').on('click',function(){
        $('#modalCreateMember').modal('show');
      });

      // Show Modal Edit Member
      $(document).on('click','.showModalEditMember',function(){
        $('#modalEditMember').modal('show');
        let memberID = $(this).attr('id');
        $.ajax({
            url: "/dashboard/anggota/get/" + memberID,
            type: "GET",
            dataType: "json",
            success: function(data){
                 $('#anggota_id').val(data.Member[0].id);
                 $('#edit_email').val(data.Member[0].email);
                 $('#edit_nama_anggota').val(data.Member[0].nama_lengkap);
                 $('#edit_nim').val(data.Member[0].nim);
                 $('#edit_angkatan').val(data.Member[0].angkatan);
                 $('#edit_divisi').val(data.Member[0].divisi);
            }
        })  
      });

      // Create Ajax Member
      $('.createMember').on('click',function(){
        $('#form-create-member').ajaxForm({
                  url: "/dashboard/anggota",
                  type: "POST",
                  dataType: "json",
                  success: function(data){
                      Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Anggota berhasil ditambahkan',
                        showConfirmButton: false,
                        timer: 1500
                      });
                      // Remove if Have Errors
                        $('.error_email').removeClass('error-feedback');
                        $('.error_email').empty();
                        $('#email').removeClass('is-invalid');
                        $('#email').removeClass('is-valid');

                        $('.error_nama_anggota').removeClass('error-feedback');
                        $('.error_nama_anggota').empty();
                        $('#nama_anggota').removeClass('is-invalid');
                        $('#nama_anggota').removeClass('is-valid');

                        $('.error_nim').removeClass('error-feedback');
                        $('.error_nim').empty();
                        $('#nim').removeClass('is-invalid')

                        $('.error_angkatan').removeClass('error-feedback');
                        $('.error_angkatan').empty();
                        $('#angkatan').removeClass('is-invalid');
                        $('#angkatan').removeClass('is-valid');

                        $('.error_divisi').removeClass('error-feedback');
                        $('.error_divisi').empty();
                        $('#divisi').removeClass('is-invalid');
                        $('#divisi').removeClass('is-valid');
                      // Hide Modal Create
                      $('#modalCreateMember').modal('hide');
                      // Reset Form
                      $('#form-create-member')[0].reset();
                      //Update DataTable
                      $('#table_member').DataTable().draw();
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
                    } 
                      if(data.responseJSON.errors.nama_lengkap){
                        $('.error_nama_anggota').html(data.responseJSON.errors.nama_lengkap);
                        $('.error_nama_anggota').addClass('error-feedback');
                        $('#nama_anggota').addClass('is-invalid');
                        $('#nama_anggota').removeClass('is-valid');
                      } else{
                        $('.error_nama_anggota').removeClass('error-feedback');
                        $('.error_nama_anggota').empty();
                        $('#nama_anggota').removeClass('is-invalid');
                        $('#nama_anggota').addClass('is-valid');
                    } 
                      if(data.responseJSON.errors.nim){
                        $('.error_nim').html(data.responseJSON.errors.nim);
                        $('.error_nim').addClass('error-feedback');
                        $('#nim').addClass('is-invalid');
                        $('#nim').removeClass('is-valid');
                      } else{
                        $('.error_nim').removeClass('error-feedback');
                        $('.error_nim').empty();
                        $('#nim').removeClass('is-invalid');
                        $('#nim').addClass('is-valid');
                    } 
                      if(data.responseJSON.errors.angkatan){
                        $('.error_angkatan').html(data.responseJSON.errors.angkatan);
                        $('.error_angkatan').addClass('error-feedback');
                        $('#angkatan').addClass('is-invalid');
                        $('#angkatan').removeClass('is-valid');
                      } else{
                        $('.error_angkatan').removeClass('error-feedback');
                        $('.error_angkatan').empty();
                        $('#angkatan').removeClass('is-invalid');
                        $('#angkatan').addClass('is-valid');
                    } 
                      if(data.responseJSON.errors.divisi){
                        $('.error_divisi').html(data.responseJSON.errors.divisi);
                        $('.error_divisi').addClass('error-feedback');
                        $('#divisi').addClass('is-invalid');
                        $('#divisi').removeClass('is-valid');
                      } else{
                        $('.error_divisi').removeClass('error-feedback');
                        $('.error_divisi').empty();
                        $('#divisi').removeClass('is-invalid');
                        $('#divisi').addClass('is-valid');
                    } 
                    }
                }
        }).submit()
      })

      // Update Member
      $(document).on('click', '.editMember',function(){
        var memberID = $('#anggota_id').val();
        // Check field not null
        if (!$('#edit_email').val()){
                        $('.error_edit_email').html('Email Harus Diisi');
                        $('.error_edit_email').addClass('error-feedback');
                        $('#edit_email').addClass('is-invalid');
                        $('#edit_email').removeClass('is-valid');
                        return false;
        }else{
                        $('.error_edit_email').removeClass('error-feedback');
                        $('.error_edit_email').empty();
                        $('#edit_email').removeClass('is-invalid');
                        $('#edit_email').addClass('is-valid');
        } 
        if (!$('#edit_nama_anggota').val()){
                        $('.error_edit_nama_anggota').html('Nama Anggota Harus Diisi');
                        $('.error_edit_nama_anggota').addClass('error-feedback');
                        $('#edit_nama_anggota').addClass('is-invalid');
                        $('#edit_nama_anggota').removeClass('is-valid');
                        return false;
        }else{
                        $('.error_edit_nama_anggota').removeClass('error-feedback');
                        $('.error_edit_nama_anggota').empty();
                        $('#edit_nama_anggota').removeClass('is-invalid');
                        $('#edit_nama_anggota').addClass('is-valid');
        } 
        if (!$('#edit_nim').val()){
                        $('.error_edit_nim').html('NIM Harus Diisi');
                        $('.error_edit_nim').addClass('error-feedback');
                        $('#edit_nim').addClass('is-invalid');
                        $('#edit_nim').removeClass('is-valid');
                        return false;
        }else{
                        $('.error_edit_nim').removeClass('error-feedback');
                        $('.error_edit_nim').empty();
                        $('#edit_nim').removeClass('is-invalid');
                        $('#edit_nim').addClass('is-valid');
        } 
        
                  
        $('#form-edit-member').ajaxForm({
                url: "/dashboard/anggota/" + memberID,
                method: "POST",
                data: {_method:'PUT'},
                dataType: "json",
                success: function(data){
                    Swal.fire({
                      position: 'center',
                      icon: 'success',
                      title: 'Anggota berhasil diupdate',
                      showConfirmButton: false,
                      timer: 1500
                    });
                    // Hide Modal Create
                    $('#modalEditMember').modal('hide');
                    // Remove if have Error
                    $('.error_edit_email').removeClass('error-feedback');
                    $('.error_edit_email').empty();
                    $('#edit_email').removeClass('is-invalid');
                    $('#edit_email').removeClass('is-valid');

                    $('.error_edit_nama_anggota').removeClass('error-feedback');
                    $('.error_edit_nama_anggota').empty();
                    $('#edit_nama_anggota').removeClass('is-invalid');
                    $('#edit_nama_anggota').removeClass('is-valid');

                    $('.error_edit_nim').removeClass('error-feedback');
                    $('.error_edit_nim').empty();
                    $('#edit_nim').removeClass('is-invalid');
                    $('#edit_nim').removeClass('is-valid');

                    // Reset Form
                    $('#form-edit-member')[0].reset();
                    //Update DataTable
                    $('#table_member').DataTable().draw(false);
                },
                error: function(data){
                    $('.error_edit_email').html('Email Sudah Digunakan');
                    $('.error_edit_email').addClass('error-feedback');
                    $('#edit_email').addClass('is-invalid');
                    $('#edit_email').removeClass('is-valid');
                }
            }).submit();
      })

      // Delete Member
      $(document).on('click','.hapus',function(){
          let memberID = $(this).attr('id');
          Swal.fire({
          title: 'Apakah kamu yakin?',
          text: "Anggota yang dihapus tidak dapat dikembalikan!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
          if (result.isConfirmed) {
              Swal.fire(
              'Deleted!',
              'Anggota berhasil dihapus.',
              'success'
              )
              $.ajax({
              url: "/dashboard/anggota/"+ memberID,    
              type: 'delete',
              success: function(data){
                      // draw(false) = agar ketika reload,tetap stay di current pagination
                      $('#table_member').DataTable().draw();
              },
              error: function(data){
                  Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Anggota Gagal dihapus',
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