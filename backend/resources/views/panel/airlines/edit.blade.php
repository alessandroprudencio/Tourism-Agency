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

        @include('panel.airlines.form')
    
      
@endsection