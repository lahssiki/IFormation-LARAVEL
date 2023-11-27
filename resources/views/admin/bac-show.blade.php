@extends('admin.layout.nav')

@section('content')

<div class="mt-5">

    <img src="{{ asset('storage/' . $etudiants->bac_image) }}"
        alt="{{ $etudiants->id }}">
</div>

@endsection