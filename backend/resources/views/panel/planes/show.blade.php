@extends('panel.layouts.app')

@section('content')
    
<!-- Breadcrumbs-->
	<ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="{{route('admin')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item"><a href="{{route('avioes.index')}}">Aviões</a></li>
            <li class="breadcrumb-item">{{$plane->name }} </li>
        </ol>
    
        <div class="title-pg">
        <h1 class="title-pg">Excluir Avião {{$plane->name}}</h1>
        </div>
          
        <div>
             @include('panel.includes.alerts')
                
        </div>
        
        <form action="{{route('avioes.destroy',$plane->id)}}" method="POST">
    
            {{ csrf_field() }}
            
            {!! method_field('DELETE') !!}

            <div class="form-group">
                <div class="form-label-group">
                    <input type="text" disabled value="{{$plane->name}}" name="name" id="name" class="form-control" placeholder="Nome Linha Aérea" required="required">
                    <label for="name">Modelo</label>
                </div>
            </div>

            <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" disabled value="{{$plane->airline->name}}" name="class" id="name" class="form-control" placeholder="Nome Linha Aérea" required="required">
                        <label for="class">Linha Aérea</label>
                    </div>
                </div>

                <div class="form-group">
                        <div class="form-label-group">
                                <input type="number" disabled value="{{$plane->num_passengers}}" name="num_passengers" id="num_passengers" class="form-control" placeholder="Nome Linha Aérea" required="required" autofocus="autofocus">
                                <label for="num_passengers">Max. Passageiros</label>
                        </div>
                    </div>

    
            <button class="btn btn-danger btn-block">Excluir</button>
        </form>
@endsection