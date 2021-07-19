<!-- Type Candidature Id Field -->
<div class="col-sm-12">
    <label>Prenom Nom</label>
    <p>{{ $candidat->user->NomComplet() }}</p>
</div>

<div class="col-sm-12">
    <label>Email</label>
    <p>{{ $candidat->user->email }}</p>
</div>
<div class="col-sm-12">
    {!! Form::label('type_candidature_id', 'Type Candidature:') !!}
    <p>{{ $candidat->type_candidature->libelle }}</p>
</div>

<!-- Genre Id Field -->
<div class="col-sm-12">
    {!! Form::label('genre_id', 'Sexe:') !!}
    <p>{{ $candidat->genre->libelle }}</p>
</div>

<!-- Date Naissance Field -->
<div class="col-sm-12">
    {!! Form::label('date_naissance', 'Date Naissance:') !!}
    <p>{{ is_null($candidat->date_naissance ) ? '' : $candidat->date_naissance->format('d-mY') }}</p>
</div>

<!-- Lieu Naissance Field -->
<div class="col-sm-12">
    {!! Form::label('lieu_naissance', 'Lieu Naissance:') !!}
    <p>{{ $candidat->lieu_naissance }}</p>
</div>

<!-- Nationalite Id Field -->
<div class="col-sm-12">
    {!! Form::label('nationalite_id', 'Nationalite:') !!}
    <p>{{ $candidat->nationalite->nom_nationalite }}</p>
</div>

<!-- Nombre Enfant Field -->
<div class="col-sm-12">
    {!! Form::label('nombre_enfant', 'Nombre Enfant:') !!}
    <p>{{ $candidat->nombre_enfant }}</p>
</div>

<!-- Numero Telephone Field -->
<div class="col-sm-12">
    {!! Form::label('numero_telephone', 'Numero Telephone:') !!}
    <p>{{ $candidat->numero_telephone }}</p>
</div>

<!-- Deuxieme Numero Telephone Field -->
<div class="col-sm-12">
    {!! Form::label('deuxieme_numero_telephone', 'Deuxieme Numero Telephone:') !!}
    <p>{{ $candidat->deuxieme_numero_telephone }}</p>
</div>

<!-- Deuxieme Email Field -->
<div class="col-sm-12">
    {!! Form::label('deuxieme_email', 'Deuxieme Email:') !!}
    <p>{{ $candidat->deuxieme_email }}</p>
</div>

<!-- Site Web Field -->
<div class="col-sm-12">
    {!! Form::label('site_web', 'Site Web:') !!}
    <p>{{ $candidat->site_web }}</p>
</div>

<!-- Poste Id Field -->
<div class="col-sm-12">
    {!! Form::label('poste_id', 'Poste:') !!}
    <p>{{ $candidat->poste->libelle }}</p>
</div>

<!-- Statut Id Field -->
<div class="col-sm-12">
    {!! Form::label('statut_id', 'Statut:') !!}
    <p>{{ $candidat->statut->libelle }}</p>
</div>

<!-- Situation Matrimoniale Id Field -->
<div class="col-sm-12">
    {!! Form::label('situation_matrimoniale_id', 'Situation Matrimoniale:') !!}
    <p>{{ $candidat->situation_matrimoniale->libelle }}</p>
</div>

<!-- Type Metier Id Field -->
<div class="col-sm-12">
    {!! Form::label('type_metier_id', 'Type Metier:') !!}
    <p>{{ $candidat->type_metier->libelle }}</p>
</div>

<!-- Localisation Field -->
<div class="col-sm-12">
    {!! Form::label('localisation', 'Localisation:') !!}
    <p>
        @if( $candidat->localisation == true)
            <small class="badge badge-success">oui</small>
        @else
            <small class="badge badge-danger">non</small>
        @endif
    </p>
</div>


