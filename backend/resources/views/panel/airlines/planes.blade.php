@extends('panel.layouts.app')

@section('content')
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="{{route('admin')}}">Dashboard</a>
            </li>
          <li class="breadcrumb-item active"><a>Aviões</a></li>
          </ol>

          <div class="title-pg">
                <h1 class="title-pg">Aviões da Linha Aérea {{$airline->name}}
                </h1>
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
                      <th>Linha Aérea</th>
                      <th>Classe</th>
                      <th>Max. Passageiros</th>
                      <th>Ações</th> 
                    </tr>
                  </thead>
                  <tbody>

                    @forelse ($planes as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->airline()->get()->first()->name}}</td>
                            <td>{{$item->classes($item->class)}}</td>
                            <td>{{$item->num_passengers}}</td>
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
        
@endsection