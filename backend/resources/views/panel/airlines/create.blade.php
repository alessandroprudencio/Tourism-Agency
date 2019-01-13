@extends('panel.layouts.app')

@section('content')   

<!-- Breadcrumbs-->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
		  <a href="{{route('admin')}}">Dashboard</a>
		</li>
		<li class="breadcrumb-item"><a href="{{route('linhas_aereas.index')}}">Linhas Aéreas</a></li>
		<li class="breadcrumb-item active" aria-current="page">Cadastrar</li>
	</ol>

    <div class="title-pg">
        <h1 class="title-pg">Cadastrar Linha Aérea</h1>
	</div>
	  
	<div>
		@if (isset($errors) && $errors->any())
		<div class="alert alert-danger" role="alert">
			<ul>
				@foreach ($errors->all() as $item)
					<li>{{$item}}</li>
				@endforeach
			</ul>
		@endif
	</div>

	<form action="{{route('linhas_aereas.store')}}" method="POST">

		{{ csrf_field() }}

		<div class="form-group">
			<div class="form-label-group">
				<input type="text" name="name" id="name" class="form-control" placeholder="Nome Linha Aérea" required="required" autofocus="autofocus">
				<label for="name">Nome Linha Aérea</label>
			</div>
		</div>

		<button class="btn btn-primary btn-block">Cadastrar</button>
	</form>
@endsection