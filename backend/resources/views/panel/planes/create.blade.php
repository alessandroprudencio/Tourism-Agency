@extends('panel.layouts.app')

@section('content')
    
<!-- Breadcrumbs-->
	<ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="{{route('admin')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item"><a href="{{route('avioes.index')}}">Aviões</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cadastrar</li>
        </ol>
    
        <div class="title-pg">
            <h1 class="title-pg">Cadastrar Avião</h1>
        </div>
          
        <div>
            @include('panel.includes.errors')
        </div>
    
        <form action="{{route('avioes.store')}}" method="POST">
    
            {{ csrf_field() }}
    
            @include('panel.planes.form')
        </form>
@endsection