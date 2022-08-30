@extends('dashboard.layouts.main')
@section('content')
<section class="content">
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">My Product</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/dashboard/products">Daftar Product</a></li>
                    <li class="breadcrumb-item active">My Product</li>
                </ol>
            </div>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h1>{{ $product->nama_product }}</h1>
                    <a href="/dashboard/products" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my products</a>
                    <a href="/dashboard/products/{{ $product->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                    <form action="/dashboard/products/{{ $product->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Apakah kamu yakin?')"><span data-feather="x-circle"></span>Delete</button>
                    </form>
                    <div style="max-height: 350px;overflow:hidden;">
                        <img src="{{ asset('storage/' . $product->gambar_product) }}" alt="" class="img-fluid mt-3">
                    </div>     
                    <article class="my-3 h5">
                        {!! $product->deskripsi_product !!}   
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<!-- /.content -->
@endsection