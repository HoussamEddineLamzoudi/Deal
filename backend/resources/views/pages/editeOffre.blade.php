@extends('layout/header')

@section('pageName', 'edite')

@section('page-content')

<div class="container card card-body col-6 mt-5 p-5">
    <h2 class="mb-5">MODIFIER UN OFFRE</h2>
    <form action=" {{ route('updatedeOffre', $anonceToUp[0]->annonce_id)}} " method="POST">
        @csrf
        <input type="text" name="title" value=" {{$anonceToUp[0]->title}} " placeholder="Titre ..." class="form-control form-control-lg mb-4">

        <textarea name="body"  placeholder="Description ..." class="form-control form-control-lg mb-4">{{$anonceToUp[0]->body}}</textarea>

        <input type="number" name="prix" value="{{$anonceToUp[0]->prix}}" placeholder="Prix ..." class="form-control form-control-lg mb-4">

        <div>
            <input type="file" name="file" class="aj_postImg bg-white" id="file" accept="image/*">
            <label for="file" class="file_label">choisir une image</label>
        </div>

        <input type="hidden" name="type" value="offre" >

        <button type="submit" name="ajouter" class="btn btn-primary">Ajouter</button>
    </form>
</div>

@endsection
