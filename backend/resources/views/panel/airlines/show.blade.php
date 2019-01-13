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
        <h1 class="title-pg">Excluir Linha {{$airline->name}}</h1>
        </div>
          
        <div>
             @include('panel.includes.alerts')
                
        </div>
        
        <form action="{{route('linhas_aereas.destroy',$airline->id)}}" method="POST">
    
            {{ csrf_field() }}
            
            {!! method_field('DELETE') !!}

            <div class="form-group">
                
                <div class="form-label-group">
                    <input type="text" disabled value="{{$airline->name}}" name="name" id="name" class="form-control" placeholder="Nome Linha Aérea" required="required">
                    <label for="name">Nome Linha Aérea</label>
                </div>
            </div>
    
            <button class="btn btn-danger btn-block">Excluir</button>
        </form>
@endsection