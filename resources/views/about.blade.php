@extends('layout.main')

@section('container')
<h1>About</h1>
<h3>
    {{ $name }}
</h3>
<p>
    {{ $email }}
</p>
<img src="image/{{ $image }}" alt="{{ $name }}" width="200px">
@endsection
