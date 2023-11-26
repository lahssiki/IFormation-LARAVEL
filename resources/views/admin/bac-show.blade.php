@extends('admin.layout.nav')

@section('content')

<div>
    <div>
        <img src="{{ asset('storage/' . $etudiants->bac_image) }}"
            alt="{{ $etudiants->id }}">
    </div>
</div>

@endsection