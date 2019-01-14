<div class="form-group">
	<div class="form-label-group">
			<input type="text" name="name" id="name" class="form-control" placeholder="Nome Linha Aérea" required="required" autofocus="autofocus">
			<label for="name">Modelo</label>
    </div>
</div>

<div class="form-group">
    <div class="form-label-group">
            <input type="number" name="num_passengers" id="num_passengers" class="form-control" placeholder="Nome Linha Aérea" required="required" autofocus="autofocus">
			<label for="num_passengers">Max. Passageiros</label>
    </div>
</div>

    <div class="form-group">
            {!! Form::select('class', $classes, null, ['class' => 'form-control form-control-lg']) !!}
        </div>

    <div class="form-group " >
            {!! Form::select('airline_id', $airlines, null, ['class' => 'form-control form-control-lg']) !!}
        </div>
    
            <button class="btn btn-primary btn-block">Editar</button>