<div class="row mx-2">

<!-- Type Candidature Id Field -->

<div class="form-group col-sm-6">
    {!! Form::label('type_candidature_id', 'Type de Candidature:') !!}
    <select class="form-control" name="type_candidature_id">
    @foreach ($typeCandidatures  as $typeCandidature)
        <option value="{{ $typeCandidature->id }}" >{{ $typeCandidature->libelle }}</option>
        @endforeach
        </select>

</div>

<!-- Genre Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('genre_id', 'Genre:') !!}
    <select class="form-control" name="genre_id">
    @foreach ($genres  as $genre)
        <option value="{{ $genre->id }}" >{{ $genre->libelle }}</option>
        @endforeach
        </select>
</div>

<!-- Date Naissance Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_naissance', 'Date Naissance:') !!}
    {!! Form::date('date_naissance', null, ['class' => 'form-control','id'=>'date_naissance']) !!}
</div>



<!-- Lieu Naissance Field -->
<div class="form-group col-sm-6 col-lg-6">
    {!! Form::label('lieu_naissance', 'Lieu Naissance:') !!}
    {!! Form::text('lieu_naissance', null, ['class' => 'form-control']) !!}
</div>

<!-- Nationalite Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nationalite_id', 'Nationalité:') !!}
    <select class="form-control" name="nationalite_id">
    @foreach ($nationalites  as $nationalite)
        <option value="{{ $nationalite->id }}" >{{ $nationalite->nom_pays }}</option>
        @endforeach
        </select>
</div>


<!-- Situation Matrimoniale Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('situation_matrimoniale_id', 'Situation Matrimoniale:') !!}
    <select class="form-control" name="situation_matrimoniale_id">
    @foreach ($situationMatrimoniales  as $situationMatrimoniale)
        <option value="{{ $situationMatrimoniale->id }}" >{{ $situationMatrimoniale->libelle }}</option>
        @endforeach
        </select>
</div>


<!-- Nombre Enfant Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_enfant', 'Nombre Enfant:') !!}
    {!! Form::number('nombre_enfant', 0, ['class' => 'form-control']) !!}
</div>

<!-- Numero Telephone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_telephone', 'Numero Telephone:') !!}
    {!! Form::text('numero_telephone', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Deuxieme Numero Telephone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('deuxieme_numero_telephone', 'Deuxieme Numero Telephone:') !!}
    {!! Form::text('deuxieme_numero_telephone', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Deuxieme Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('deuxieme_email', 'Deuxieme Email:') !!}
    {!! Form::text('deuxieme_email', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Site Web Field -->
<div class="form-group col-sm-6">
    {!! Form::label('site_web', 'Site Web:') !!}
    {!! Form::text('site_web', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Poste Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('poste_id', 'Poste:') !!}
    <select class="form-control" name="poste_id">
    @foreach ($postes  as $poste)
        <option value="{{ $poste->id }}" >{{ $poste->libelle }}</option>
        @endforeach
        </select>
</div>

<!-- Statut Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('statut_id', 'Statut:') !!}
    <select class="form-control" name="statut_id">
    @foreach ($statuts  as $statut)
        <option value="{{ $statut->id }}" >{{ $statut->libelle }}</option>
        @endforeach
        </select>
</div>


<!-- Type Metier Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type_metier_id', 'Type de Métier:') !!}

    <select class="form-control" name="type_metier_id">
    @foreach ($typeMetiers  as $typeMetier)
        <option value="{{ $typeMetier->id }}" >{{ $typeMetier->libelle }}</option>
        @endforeach
        </select>
</div>

<!-- Localisation Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('localisation', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('localisation', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('localisation', 'Localisation', ['class' => 'form-check-label']) !!}
    </div>
</div>

</div>




