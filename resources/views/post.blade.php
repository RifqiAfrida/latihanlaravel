@extends('layouts.main')

@section('container')
    
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in 
        <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">
        {{ $post->category->name }}</a></p>

        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" 
        alt="{{ $post->category->name }}" class="img-fluid">

        <article class="my-3 fs-5">
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
<a href="/posts" class="d-block mt-4">Back to Posts</a>

            </div>
        </div>
    </div>




{{-- <div class="card my-4">
    <div class="mb-3">
         <div class="card-body">
<form action="" method="post">
    @csrf
        <h5 class="card-header">Tinggalkan Komentar:</h5>
        <label for="name" class="form-label">Nama</label>
            <input type="name" class="form-control" id="name" aria-describedby="nameHelp">
                <div id="nameHelp" class="form-text">Nama Pengguna anda akan Terlihat oleh Pengguna lain.</div>
                    
        <label for="comment" class="form-label">Komentar</label>
            <input type="" class="form-control" id="name" aria-describedby="nameHelp">
                <div id="nameHelp" class="form-text">Komentar anda akan Terlihat oleh Pengguna lain.</div>

        </div>
    </div>
</div>
  <input type="submit" class="btn btn-primary"></button>
</form> --}}
@endsection

    {{-- <input type="checkbox" class="form-check-input" id="exampleCheck1">
<label class="form-check-label" for="exampleCheck1">Check me out</label> --}}