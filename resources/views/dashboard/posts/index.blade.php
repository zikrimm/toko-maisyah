@extends('dashboard.layouts.main')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card  mt-4">
                    <div class="card-body">
                        <h2>Daftar Postingan </h2>
                        @if(session()->has('success'))
                            <div class="alert alert-success col-lg" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class=" row d-flex  justify-content-between">
                            <div class="tes mt-5 col-sm-9">
                                <a href="/dashboard/posts/create"><button class="btn btn-primary">Tambah Data</button></a>

                            </div>
                            <div class="mt-3 col-sm-3">
                                <form method="get">
                                    <label for="cari">Search: </label>
                                    <input type="search" id="keyword" class="form-control" autocomplete="off" name="cari" autofocus>
                                </form>

                            </div>
                        </div>
                        <div id="container" class=" table-responsive">
                            <table id="example2" class="mt-3 table  table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr>
                                            
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $post->title }}</td>
                                            <td>{{ $post->category->name }}</td>
                                            <td class=" py-0 align-middle">
                                                <div class="btn-group btn-group-sm">
                                                    <a href="/dashboard/posts/{{ $post->slug }}" class="btn btn-primary "><i class="far fa-eye"></i></a>
                                                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-info "><i class="fas fa-pencil-alt"></i></a>
                                                    <form action="/dashboard/posts/{{ $post->slug}}" method="post">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="btn btn-danger rounded-0" style="padding: 0.25rem 0.5rem; font-size:.875rem; margin-left: -1px"><i class=" fas fa-trash "></i></button>
                                                    </form>
                                                   
                                                </div>
                                            </td>
                                            
                                        </tr>
                                        @endforeach
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
