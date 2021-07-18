<!-- Specialite Etudie Field -->
<div class="col-sm-12">
    {!! Form::label('specialite_etudie', 'Spécialité Etudiée:') !!}
    <p>{{ $formation->specialite_etudie }}</p>
</div>

<!-- Date Debut Field -->
<div class="col-sm-12">
    {!! Form::label('date_debut', 'Date Début:') !!}
    <p>{{ $formation->date_debut }}</p>
</div>

<!-- Date Fin Field -->
<div class="col-sm-12">
    {!! Form::label('date_fin', 'Date Fin:') !!}
    <p>{{ $formation->date_fin }}</p>
</div>

<!-- Etablissement Field -->
<div class="col-sm-12">
    {!! Form::label('etablissement', 'Etablissement:') !!}
    <p>{{ $formation->etablissement }}</p>
</div>

<!-- Diplome Field -->
<div class="col-sm-12">
    {!! Form::label('diplome', 'Diplôme:') !!}
    <p>{{ $formation->diplome }}</p>
</div>

<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'Utilisateur:') !!}
    <p>{{ $formation->user_id }}</p>
</div>

