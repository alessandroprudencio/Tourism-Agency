<form action="{{route('linhas_aereas.update',$airline->id)}}" method="POST">
    
        {{ csrf_field() }}
        
        {!! method_field('PUT') !!}

        <div class="form-group">
            
            <div class="form-label-group">
                <input type="text" value="{{$airline->name}}" name="name" class="form-control" placeholder="Nome Linha Aérea" required="required">
                <label for="name">Nome Linha Aérea</label>
            </div>
        </div>

        <button class="btn btn-primary btn-block">Editar</button>
    </form>