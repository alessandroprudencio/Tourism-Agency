@extends('panel.layouts.app')

@section('content')
    
<!-- Breadcrumbs-->
	<ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="{{route('admin')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item"><a href="{{route('avioes.index')}}">Aviões</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editar</li>
        </ol>
    
        <div class="title-pg">
            <h1 class="title-pg">Editar Avião - {{$plane->name}}</h1>
        </div>
          
        <div>
            @include('panel.includes.errors')
            
            <form>
            {!! Form::model($plane, ['route' => ['avioes.update', $plane->id], 'class' => 'form form-search form-ds', 'method' => 'PUT']) !!}
            @include('panel.planes.form-edit')
            {!! Form::close() !!}
            </form>
        </div>


@endsection