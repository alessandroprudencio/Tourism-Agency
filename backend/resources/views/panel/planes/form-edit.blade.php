<div class="form-group">
	<div class="form-label-group">
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Total de Passageiros']) !!}
		<label class="form-control" for="name">Modelo</label>
    </div>
</div>

<div class="form-group">
    <div class="form-label-group">
        {!! Form::number('num_passengers', null, ['class' => 'form-control', 'placeholder' => 'Total de Passageiros']) !!}
        <label class="form-control" for="name">Max. Passageiros</label>
    </div>
</div>

    <div class="form-group">
            {!! Form::select('class', $classes, null, ['class' => 'form-control form-control-lg']) !!}
        </div>
    </div>

    <div class="form-group " >
            {!! Form::select('airline_id', $airlines, null, ['class' => 'form-control form-control-lg']) !!}
        </div>
    </div>
    
            <button class="btn btn-primary btn-block">Editar</button>