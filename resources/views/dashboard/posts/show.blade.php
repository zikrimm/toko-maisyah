@extends('dashboard.layouts.main')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">My Post</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/dashboard/posts">Daftar Postingan</a></li>
                    <li class="breadcrumb-item active">My Post</li>
                </ol>
            </div>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h1>{{ $post->title }}</h1>
                    <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my posts</a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Apakah kamu yakin?')"><span data-feather="x-circle"></span>Delete</button>
                    </form>
                    @if($post->image)
                    <div style="max-height: 350px;overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid mt-3">
                    </div>     
                    @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="" class="img-fluid mt-3">
                    @endif
                    <article class="my-3 h5">
                        {!! $post->body !!}   
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<!-- /.content -->
@endsection