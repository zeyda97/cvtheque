<!-- Type Experience Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type_experience_id', 'Type Expérience:') !!}
    <select class="form-control" name="type_experience_id">
    @foreach ($typeExperiences  as $typeExperience)
        <option value="{{ $typeExperience->id }}" >{{ $typeExperience->libelle }}</option>
        @endforeach
        </select>
</div>

<!-- Date Debut Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_debut', 'Date de Début:') !!}
    {!! Form::date('date_debut', null, ['class' => 'form-control','id'=>'date_debut']) !!}
</div>



<!-- Date Fin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_fin', 'Date de Fin:') !!}
    {!! Form::date('date_fin', null, ['class' => 'form-control','id'=>'date_fin']) !!}
</div>



<!-- Employeur Field -->
<div class="form-group col-sm-6">
    {!! Form::label('employeur', 'Employeur:') !!}
    {!! Form::text('employeur', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Lieu Experience Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lieu_experience', 'Lieu Expérience:') !!}
    {!! Form::text('lieu_experience', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Client Prestation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('client_prestation', 'Client de la Prestation:') !!}
    {!! Form::text('client_prestation', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Poste Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('poste_id', 'Poste Occupée:') !!}
    <select class="form-control" name="poste_id">
    @foreach ($postes  as $poste)
        <option value="{{ $poste->id }}" >{{ $poste->libelle }}</option>
        @endforeach
        </select>
</div>

<!-- Activite Experience Field -->
<div class="form-group col-sm-6">
    {!! Form::label('activite_experience', 'Activité Exercée:') !!}
    {!! Form::text('activite_experience', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Appreciation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('appreciation', 'Appréciation:') !!}
    {!! Form::text('appreciation', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

{{-- <!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'Utilisateur:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div> --}}