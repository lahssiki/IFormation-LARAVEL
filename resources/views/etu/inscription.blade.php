@extends('layouts.app')

@section("content")
<h1 class="text-center mt-3">Page inscription</h1>
<div>
@if ($errors->any())
  <ul>
    @foreach ($errors->all() as $error)
      <li>{!! $error !!}</li>
    @endforeach
  </ul>
@endif
</div>
<div class="container mt-5">
  <form method="POST" action="{{route("etu.inscription")}}" enctype="multipart/form-data" >
    @csrf
    <div class="form-row align-items">
    <div class="form-group m-2">
      <label for="cin">CIN</label>
      <input type="text" class="form-control" id="cin" name="cin" required>
    </div>

    <div class="form-group m-2">
      <label for="nom">Nom</label>
      <input type="text" class="form-control" id="nom" name="nom" required>
    </div>
</div>
    <div class="form-group m-2">
      <label for="prenom">Prénom</label>
      <input type="text" class="form-control" id="prenom" name="prenom" required>
    </div>

    <div class="form-group m-2">
      <label>Genre</label>
      <div class="form-check">
        <input type="radio" class="form-check-input" id="genreHomme" name="gender" value="homme" required>
        <label class="form-check-label" for="genreHomme">Homme</label>
      </div>
      <div class="form-check ">
        <input type="radio" class="form-check-input" id="genreFemme" name="gender" value="femme" required>
        <label class="form-check-label" for="genreFemme">Femme</label>
      </div>
    </div>

    <div class="form-group m-2">
      <label for="date_naissance">Date de naissance</label>
      <input type="date" class="form-control" id="date_naissance" name="date_naissance" required>
    </div>

    <div class="form-group m-2">
      <label for="note">Note</label>
      <input type="number" step="0.01" min="10.00" class="form-control" id="note" name="note" placeholder="10,00" required>
    </div>

    <div class="form-group m-3">
      <label for="bac_image">Bac</label>
      <input type="file" class="form-control-file btn-primary" id="bac_image" name="bac_image" accept="image/*" required>
    </div>
    <div class="form-group m-2">
      <label for="filiere">Filière</label>
      <select class="form-control" id="filiere" name="filiere" required>
        <option value="#">Choisissez votre filière</option>
        <option value="SM">SM</option>
        <option value="SVT">SVT</option>
        <option value="PC">PC</option>
        <option value="BACEco">BAC Eco</option>
        <option value="Bacpro">Bac Pro</option>
      </select>
    </div>

    <div class="form-group m-2">
      <label for="specialite">Spécialité</label>
      <select class="form-control" id="specialite" name="specialite" required>
        <option value="#">Choisissez votre specialite</option>
        <option value="informatique">informatique</option>
        <option value="gestion">Gestion</option>
        <option value="infographie">infographie</option>
      </select>
    </div>
  </div>
  <div class="text-center">
    <button type="submit" class="btn btn-success m-2">Validé</button>
  </div>
  </form>


@endsection
