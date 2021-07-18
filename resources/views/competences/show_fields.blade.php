<!-- Type Competence Id Field -->
<div class="col-sm-12">
    {!! Form::label('type_competence_id', 'Type de Compétences:') !!}
    <p>{{ $competence->type_competence_id }}</p>
</div>

<!-- Niveaux Id Field -->
<div class="col-sm-12">
    {!! Form::label('niveaux_id', 'Niveau:') !!}
    <p>{{ $competence->niveaux_id }}</p>
</div>

<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'Utilisateur:') !!}
    <p>{{ $competence->user_id }}</p>
</div>

<!-- Annee Field -->
<div class="col-sm-12">
    {!! Form::label('annee', 'Année:') !!}
    <p>{{ $competence->annee }}</p>
</div>

