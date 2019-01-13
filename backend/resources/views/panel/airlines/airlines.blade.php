@extends('panel.layouts.app')

@section('content') 
           <!-- Breadcrumbs-->
           <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{route('admin')}}">Dashboard</a>
                </li>
              <li class="breadcrumb-item active"><a>Linhas Aéreas</a></li>
              </ol>

        <div class="title-pg">
            <h1 class="title-pg">Linhas Aéreas  <a href="{{route('linhas_aereas.create')}}" class="btn btn-success">
                    <i class="fa fa-plus"></i> Cadastrar
               </a></h1>
           
        </div>
      



        <div id="content-wrapper">

        <div class="container-fluid">
              
             @include('panel.includes.alerts')
                
          <!-- DataTables Example -->
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-dark table-hover" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nome</th>
                      <th>Editar</th> 
                      <th>Remover</th> 
                    </tr>
                  </thead>
                  <tbody>

                    @forelse ($airlines as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td><a href="{{route('linhas_aereas.edit', $item->id)}}"><i class="far fa-edit"></a></td>
                            <td><a href="{{route('linhas_aereas.show', $item->id)}}"><i class="far fa-trash-alt"></a></i></td>
                        </tr>
                    @empty
                        <td> <p class="small text-center text-muted my-5">
                                <em>Nenhum dado encontrado...</em>
                              </p></td>
                    @endforelse
            

                  </tbody>
                </table>
              </div>
        </div>
          </div>

    

@endsection()