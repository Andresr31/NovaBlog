@extends('layouts.app')
@section('content')

<div class="back">
    <div class="container py-4">
        <div class="card bg-dark col-md-9 mr-auto ml-auto">
            <h4 class="card-title h2 text-center py-3">Posts</h4>
            <div class="row col-md-9 mr-auto ml-auto">
                <div class="col">
                    <a href="{{ route('post.create') }}"
                        class="btn btn-outline-light btn-block">{{ __('Crear') }}</a>
                </div>
            </div>
                <div class="table-responsive col-md-10 mr-auto ml-auto py-3">
                    <table class="table table-light ">
                        <thead class="thead-dark text-light">
                            <th>
                                {{ __('Id') }}
                            </th>
                            <th>
                                {{ __('Titulo') }}
                            </th>
                            <th>
                                {{ __('Posteado') }}
                            </th>
                            <th>
                                {{ __('Creación') }}
                            </th>
                            <th>
                                {{ __('Actualización') }}
                            </th>
                            <th >
                                {{ __('Acciones') }}
                            </th>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>
                                        {{$post->id}}
                                    </td>
                                    <td>
                                        {{$post->title}}
                                    </td>
                                    <td>
                                        {{$post->posted}}
                                    </td>
                                    <td>
                                        {{$post->created_at->format('d-m-Y')}}
                                    </td>
                                    <td>
                                        {{$post->updated_at->format('d-m-Y')}}
                                    </td>

                    
                                <td >
                                    <a href="{{ route('post.show',$post->id) }}"><i class="fas fa-eye icon"></i></a> | <a href="#"><i class="fas fa-edit icon"></i></a> | <a href="#"><i class="fas fa-trash-alt icon"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$posts->links()}}
                </div>
            
            
            </div>
        </div>
    </div>
</div>


@endsection