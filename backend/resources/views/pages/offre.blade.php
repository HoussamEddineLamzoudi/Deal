@extends('layout/header')

@section('pageName', 'Offre')

@section('page-content')

@auth
<a href=" {{ route('popOffre') }} ">
    <div class="col-6 bg-white container postContainer postAdd mt-4"> Ajouter offre </div>
</a>
@endauth

@if($offres->count())

    @foreach ($offres as $offre)

    <div class="container mt-5 postContainer pt-3">
        <div class="col-md-12 col-lg-12">
            @if (auth()->user()?->id == $offre->user_id)
                {{-- <h1> {{$offre->annonce_id}} </h1> --}}
            <div class="container">
                {{-- <a href="{{@route("deleteOffre",$offre->annonce_id)}}">
                <button type="submit" class="btn btn-primary col-4">delete</button></a> --}}
                    <button type="button" class="menuPup btn btn-outline-success col me-2" data-bs-toggle="modal" data-bs-target="#myModal-{{$offre->annonce_id}}">some
                    </button>
                    <div class="modal" id="myModal-{{$offre->annonce_id}}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class="modal-title">test</div>
                                </div>
                                <div class="modal-footer row col-12">
                                    {{-- <form action="{{ route('updateOffre') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-primary col-4">update</button>
                                    </form> --}}

                                    <a href="{{@route("deleteOffre", $offre->annonce_id)}}">
                                        <button type="submit" class="btn btn-primary col-4">delete</button></a>
                                    <a href="{{@route("editeOffre", $offre->annonce_id)}}">
                                        <button type="submit" class="btn btn-primary col-4">update</button></a>
                                </div>
                                {{-- @endif --}}
                            </div>
                        </div>
                    </div>
            @endif

                </div>
                <article class="post vt-post">
                    <div class="row">
                        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-4">
                            <div class="post-type post-img mt-3">
                                <img src=" {{ asset($offre->file) }} " class="img-responsive" alt="image post" width="315px" height="315px">
                            </div>
                            <div class="author-info author-info-2 mt-2">
                                <div class="info">
                                    <p>Posted on: <span><strong> {{$offre->created_at->diffForHumans()}} </strong></span> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-8 pt-3">
                            <div class="caption p-3 mt-3">
                                <h3 class="md-heading mb-4">{{$offre->title}}</h3>

                                <p class="mb-5"> {{$offre->body}} </p>

                                <h3 class="md-heading mb-4"><a href="#"> {{$offre->prix}} <strong>DH</strong></a></h3>
                                {{-- <a class="btn btn-default" href="#" role="button">Read More</a> </div> --}}
                            </div>
                        </div>
                    </article>
                </div>
            </div>

    @endforeach

@else
        <h1>there are no posts</h1>
@endif



@endsection
