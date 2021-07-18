<!-- Specialite Etudie Field -->
<div class="form-group col-sm-6">
    {!! Form::label('specialite_etudie', 'Spécialité Etudiée:') !!}
    {!! Form::text('specialite_etudie', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Date Debut Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_debut', 'Date Debut:') !!}
    {!! Form::date('date_debut', null, ['class' => 'form-control','id'=>'date_debut']) !!}
</div>



<!-- Date Fin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_fin', 'Date Fin:') !!}
    {!! Form::date('date_fin', null, ['class' => 'form-control','id'=>'date_fin']) !!}
</div>



<!-- Etablissement Field -->
<div class="form-group col-sm-6">
    {!! Form::label('etablissement', 'Etablissement:') !!}
    {!! Form::text('etablissement', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Diplome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('diplome', 'Diplôme:') !!}
    {!! Form::text('diplome', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- User Id Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('user_id', 'Utilisateur:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div> --}}