<!-- Type Competence Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type_competence_id', 'Type de Compétences:') !!}
    <select class="form-control" name="type_competence_id">
    @foreach ($typeCompetences  as $typeCompetence)
        <option value="{{ $typeCompetence->id }}" >{{ $typeCompetence->libelle }}</option>
        @endforeach
        </select>
</div>

<!-- Niveaux Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('niveaux_id', 'Niveau:') !!}
    <select class="form-control" name="niveaux_id">
    @foreach ($niveaux  as $niveau)
        <option value="{{ $niveau->id }}" >{{ $niveau->libelle }}</option>
        @endforeach
        </select>
</div>

<!-- User Id Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('user_id', 'Utilisateur:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>
 --}}
<!-- Annee Field -->
<div class="form-group col-sm-6">
    {!! Form::label('annee', 'Année:') !!}
    {!! Form::date('annee', null, ['class' => 'form-control','id'=>'annee']) !!}
</div>
