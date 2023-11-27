@extends('admin.layout.nav')

@section('content')

    <h1>list d'etudiants infographie</h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Number_inscription</th>
                <th scope="col">Cin</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Gender</th>
                <th scope="col">Date Naissance</th>
                <th scope="col">Note</th>
                <th scope="col">Bac Image</th>
                <th scope="col">Filiere</th>
                <th scope="col">Spécialité</th>
                <th scope="col">Stauts</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($etudiants as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->number_inscription }}</td>
                    <td>{{ $item->cin }}</td>
                    <td>{{ $item->nom }}</td>
                    <td>{{ $item->prenom }}</td>
                    <td>{{ $item->gender }}</td>
                    <td>{{ $item->date_naissance }}</td>
                    <td>{{ $item->note }}</td>
                    <td><a href="{{ route('etu.bac', ['id'=> $item->id]) }}" class="btn btn-primary">Bac image</a></td>
                    <td>{{ $item->filiere }}</td>
                    <td>{{ $item->specialite }}</td>
                    <td>{{ $item->stauts }}</td>
                </tr>
            @endforeach
            </tr>
        </tbody>
    </table>
@endsection
