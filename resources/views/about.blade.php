@extends('layouts/main')

@section('container')
    <h1>Halo Semuanya</h1>
    <h3>{{ $nama }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $nama }}" width ="200px" class="img-thumbnail rounded-circle";>
@endsection

