@extends('dashboard.layouts.main')

@section('container')

    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <a href="/dashboard/posts" class="btn btn-success">Bact To All My Posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">Edit This Post</a>

                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="btn btn-danger border-0" onclick="return confirm('Apakah anda akan menghapus data ini?')">
                      <span>Delete</span>
                  </button>
                  </form> 



        @if ($post->image)
        <div style="max-height: 350px; overflow:hidden;">
            
            <img src="{{ asset('storage/' . $post->image) }}" 
            alt="{{ $post->category->name }}" class="img-fluid mt-3">
        </div>
        @else

        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" 
        alt="{{ $post->category->name }}" class="img-fluid mt-3">
            
        @endif

        <article class="mt-3 fs-5">
        {!! $post->body !!}
        </article>
        <!-- Comment -->

        <div class="card my-4" >
            <h5 class="card-header bg-primary" class=>Tinggalkan Komentar:</h5>
            <div class="card-body">
                <form action="" method="post">
                    @csrf
                <input type="hidden" name="_token" value="<?php echo csrf_token()?>">
                    {{-- <div class="form-group">
                        <p>Name :</p>
                        <input class="form-control" type="text" name="name"></button>
                        <div id="nameHelp" class="form-text">Nama Pengguna anda akan Terlihat oleh Pengguna lain.</div>
                    </div> --}}
                     <div class="form-group">
                         <p>Comment :</p>
                        <input class="form-control" type="text" name="komentar"></button>
                        <div id="nameHelp" class="form-text">Komentar anda akan Terlihat oleh Pengguna lain.</div>
                    </div>
                    <input type="submit" class="btn btn-primary"></button>
                </form>
            </div>
        </div>
            </div>
        </div>
    </div>

@endsection