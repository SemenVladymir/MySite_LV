@extends('layout')

@section('title', 'Index')

@section('content')
    @foreach($myobjects as $myobject)
    <div>
        <div class="card mb-3" style="max-width: 1300px; max-height: 130px;">
            <div class="row g-1">
                <div class="col-md-2">
                    <img src="{{$myobject->imagesPath}}" width="130" height="130" class="img-fluid rounded-start" alt="Furniture">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><a href="/page?id={{$myobject->id}}">{{$myobject->name}}</a></h5>
                        <p class="card-text"><small class="text-muted">
                                {{$myobject->description}}
                            </small></p>
                    </div>
                </div>
                <div class="col-md-1 mt-5 ml-5">
                    <h4>{{$myobject->price}}</h4>

                </div>
                <div class="col-md-1 mt-5 ml-5">
                    <button class="btn rounded-circle btn-outline-success bg-info" aria-label="Добавить товар" data-first-add="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="35" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
