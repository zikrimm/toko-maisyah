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
                        @if(session()->has('success'))
                            <div class="alert alert-success col-lg" role="alert">
                                {{ session('success') }}
                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                 </button>
                            </div>
                        @endif
                        <div class=" row d-flex  justify-content-between">
                            <div class="tes mt-5 col-sm-9">
                                <a href="/dashboard/products/create"><button class="btn btn-primary">Tambah Product</button></a>
                            </div>
                            <div class="mt-3 col-sm-3">
                                <form method="get">
                                    <label for="cari">Search: </label>
                                    <input type="search" id="keyword" class="form-control" autocomplete="off" name="cari" autofocus value="{{ request('cari') }}">
                                </form>

                            </div>
                        </div>
                        <div id="container" class=" table-responsive">
                            <table id="example2" class="mt-3 table  table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Product</th>
                                        <th>Harga Product</th>
                                        <th>Gambar Product</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $product)
                                        <tr>     
                                            <td>{{ $products->firstItem() + $loop->index }}</td>
                                            <td>{{ $product->nama_product }}</td>
                                            <td>{{ $product->harga_product }}</td>
                                            <td><img src="{{ asset('storage/'. $product->gambar_product) }}" alt="" class="product-img" ></td>
                                            <td class=" py-0 align-middle">
                                                <div class="btn-group btn-group-sm">
                                                    <a href="/dashboard/products/{{ $product->id }}" class="btn btn-primary "><i class="far fa-eye"></i></a>
                                                    <a href="/dashboard/products/{{ $product->id }}/edit" class="btn btn-info "><i class="fas fa-pencil-alt"></i></a>
                                                    <form action="/dashboard/products/{{ $product->id }}" method="post">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="btn btn-danger rounded-0" onclick="return confirm('Apakah kamu yakin?')" style="padding: 0.25rem 0.5rem; font-size:.875rem; margin-left: -1px"><i class=" fas fa-trash "></i></button>
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
                <div class="d-flex justify-content-center">
                    {{ $products->onEachSide(2)->links()}}
                </div>
            </div>
        </div>
    </div>
</section>

<!-- /.content -->
@endsection
