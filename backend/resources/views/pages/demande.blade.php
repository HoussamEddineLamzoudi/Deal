@extends('layout/header')

@section('pageName', 'Demande')

@section('page-content')

@auth
    <a href=" {{ route('popDemande') }} ">
        <div class="col-6 bg-white container postContainer postAdd mt-4"> Ajouter Demande </div>
    </a>
@endauth

    @if($demandes->count())
        @foreach ($demandes as $demande)

        <div class="container mt-5 postContainer pt-3">
            <div class="col-md-12 col-lg-12">

                @if (auth()->user()?->id === $demande->user_id)
                    {{-- <h1> {{$offres->count()}} </h1> --}}
                <div class="container">
                        <button type="button" class="menuPup btn btn-outline-success col me-2" data-bs-toggle="modal" data-bs-target="#myModal">some
                        </button>
                        <div class="modal" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="modal-title">test</div>
                                    </div>
                                    <div class="modal-footer row col-12">
                                        <a href="{{@route("deleteDemande",$demande->annonce_id)}}">
                                            <button type="submit" class="btn btn-primary col-4">delete</button></a>
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
                                    {{-- UPDATE `anonces` SET `file`='[value-6]' WHERE annonce_id = 5 --}}
                                    <img src=" {{$demande->file}} " class="img-responsive" alt="image post" width="315px" height="315px">
                                </div>
                                <div class="author-info author-info-2 mt-2">
                                    <div class="info">
                                        <p>Posted on: <span><strong> {{$demande->created_at->diffForHumans()}} </strong></span> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-8 pt-3">
                                <div class="caption p-3 mt-3">
                                    <h3 class="md-heading mb-4">{{$demande->title}}</h3>

                                    <p class="mb-5"> {{$demande->body}} </p>

                                    <h3 class="md-heading mb-4"><a href="#"> {{$demande->prix}} <strong>DH</strong></a></h3>
                                    {{-- <a class="btn btn-default" href="#" role="button">Read More</a> </div> --}}
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

        @endforeach
        {{-- <div class="container mt-5 postContainer">
            <div class="col-md-12 col-lg-12">
                {{$offres->links()}}
            </div>
        </div> --}}

        {{-- <div class="pagination-wrap">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="clearfix"></div> --}}
    @else
            <h1>there are no posts</h1>
    @endif

@endsection
