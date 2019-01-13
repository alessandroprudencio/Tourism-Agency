@extends('panel.layouts.app')

@section('content')
    
<!-- Breadcrumbs-->
	<ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="{{route('admin')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item"><a href="{{route('linhas_aereas.index')}}">Linhas Aéreas</a></li>
            <li class="breadcrumb-item">{{$airline->name }} </li>
        </ol>
    
        <div class="title-pg">
            <h1 class="title-pg">Editar Linha Aérea</h1>
        </div>
          
        <div>
            @include('panel.includes.errors')
        </div>
        
    
        <form action="{{route('linhas_aereas.update',$airline->id)}}" method="POST">
    
            {{ csrf_field() }}
            
            {!! method_field('PUT') !!}

            <div class="form-group">
                
                <div class="form-label-group">
                    <input type="text" value="{{$airline->name}}" name="name" id="name" class="form-control" placeholder="Nome Linha Aérea" required="required">
                    <label for="name">Nome Linha Aérea</label>
                </div>
            </div>
    
            <button class="btn btn-primary btn-block">Editar</button>
        </form>
@endsection