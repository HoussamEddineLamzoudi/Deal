@extends('layout/header')

@section('pageName', 'addOffer')

@section('page-content')

<div class="container card card-body col-6 mt-5 p-5">
    <h2 class="mb-5">AJOUTER UN OFFRE</h2>

    <form action=" {{ route('addOffre')}} " method="POST">
        @csrf
        <input type="text" name="title" placeholder="Titre ..." class="form-control form-control-lg mb-4">

        <textarea name="body" placeholder="Description ..." class="form-control form-control-lg mb-4"></textarea>

        <input type="number" name="prix" placeholder="Prix ..." class="form-control form-control-lg mb-4">

        <div>
            <input type="file" name="file" class="aj_postImg bg-white" id="file" accept="image/*">
            <label for="file" class="file_label">choisir une image</label>
        </div>

        <input type="hidden" name="type" value="offre" >

        <button type="submit" name="ajouter" class="btn btn-primary">Ajouter</button>
    </form>
</div>

@endsection
