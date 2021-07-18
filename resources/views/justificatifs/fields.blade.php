<!-- Type Justificatif Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type_justificatif_id', 'Type Justificatif Id:') !!}
    {!! Form::number('type_justificatif_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Fichier Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fichier', 'Fichier:') !!}
    {!! Form::text('fichier', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Experience Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('experience_id', 'Experience Id:') !!}
    {!! Form::number('experience_id', null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Langue Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('langue_id', 'Langue Id:') !!}
    {!! Form::number('langue_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Competence Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('competence_id', 'Competence Id:') !!}
    {!! Form::number('competence_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Formation Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('formation_id', 'Formation Id:') !!}
    {!! Form::number('formation_id', null, ['class' => 'form-control']) !!}
</div>