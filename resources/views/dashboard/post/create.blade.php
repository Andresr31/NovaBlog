@extends('layouts.app')
@section('content')
    <div class="back">
        <div class="container py-4">
            <div class="col-md-9 mr-auto ml-auto">
                @include('dashboard.partials.validation-error')
                <div class="card-body bg-dark card-dark">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                       {{session('status')}}
                     </div>
                   @endif
                    <h4 class="card-title h2 text-center">Nuevo Post</h4>
                    
                    <form action="{{route('post.store')}}" method="POST" class="col-md-10 my-4 text-light mr-auto ml-auto">
                        @csrf
                        <div class="form-group">
                            <label>Titulo</label>
                        <input type="text" class="form-control" id="titulo" name="title" value="{{old('title')}}" >
                            @error('title')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Url</label>
                            <input type="text" class="form-control" id="url" name="url_clean" value="{{old('url_clean')}}" >
                            @error('url_clean')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Contenido</label>
                            <textarea class="form-control" id="contenido" name="content"rows="3">{{old('content')}}</textarea>
                            @error('content')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="form-group py-3">
                        <button type="submit" class="btn btn-block btn-outline-light">Crear</button>
                        </div>

                    </form>
                        
                
                </div>
            </div>
        </div>
    </div>
@endsection
