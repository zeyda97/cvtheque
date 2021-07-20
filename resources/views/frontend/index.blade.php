@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">{{ __('Dossier de candidature') }}</div>
                <div class="card-body">
                    @if(auth()->user()->candidats()->exists())


                        <div class="content px-3">
                            <div class="card">

                                <div class="card-body">
                                    <div class="row">
                                        @include('candidats.show_fields')
                                    </div>
                                </div>

                            </div>

                            <div class="card">
                                <div class="card-header">
                                    Formations
                                </div>
                                <div class="card-body">
                                    <div class="row">

                                        <div class="table-responsive">
                                            <table class="table" id="formations-table">
                                                <thead>
                                                <tr>
                                                    <th>Spécialité Etudiée</th>
                                                    <th>Date Début</th>
                                                    <th>Date Fin</th>
                                                    <th>Etablissement</th>
                                                    <th>Diplôme</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($formations as $formation)
                                                    <tr>
                                                        <td>{{ $formation->specialite_etudie }}</td>
                                                        <td>{{ $formation->date_debut }}</td>
                                                        <td>{{ $formation->date_fin }}</td>
                                                        <td>{{ $formation->etablissement }}</td>
                                                        <td>{{ $formation->diplome }}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>


                                    </div>
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-header">
                                    Competances
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table class="table" id="competences-table">
                                                <thead>
                                                <tr>
                                                    <th>Type de Compétences</th>
                                                    <th>Niveau</th>
                                                    <th>Année</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($competences as $competence)
                                                    <tr>
                                                        <td>{{ $competence->type_competence->libelle }}</td>
                                                        <td>{{ $competence->niveau->libelle }}</td>
                                                        <td>{{ is_null($competence->annee ) ? '' : $competence->annee->format('d-mY') }}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    Experiences
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table class="table" id="experiences-table">
                                                <thead>
                                                <tr>
                                                    <th>Type D'Experience </th>
                                                    <th>Date Début</th>
                                                    <th>Date Fin</th>
                                                    <th>Employeur</th>
                                                    <th>Lieu Expérience</th>
                                                    <th>Client De La prestation</th>
                                                    <th>Poste Occupée</th>
                                                    <th>Activité Exercée</th>
                                                    <th>Appréciation</th>
                                                    <th colspan="3">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($experiences as $experience)
                                                    <tr>
                                                        <td>{{ $experience->type_experience->libelle }}</td>
                                                        <td>{{ is_null($experience->date_debut ) ? '' : $experience->date_debut->format('d-mY') }}</td>
                                                        <td>{{ is_null($experience->date_fin ) ? '' : $experience->date_fin->format('d-mY') }}</td>
                                                        <td>{{ $experience->employeur }}</td>
                                                        <td>{{ $experience->lieu_experience }}</td>
                                                        <td>{{ $experience->client_prestation }}</td>
                                                        <td>{{ $experience->poste_id }}</td>
                                                        <td>{{ $experience->activite_experience }}</td>
                                                        <td>{{ $experience->appreciation }}</td>
                                                        <td width="120">
                                                            {!! Form::open(['route' => ['experiences.destroy', $experience->id], 'method' => 'delete']) !!}
                                                            <div class='btn-group'>
                                                                <a href="{{ route('experiences.show', [$experience->id]) }}" class='btn btn-default btn-xs'>
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                                <a href="{{ route('experiences.edit', [$experience->id]) }}" class='btn btn-default btn-xs'>
                                                                    <i class="fas fa-Modifier"></i>
                                                                </a>
                                                                {!! Form::button('<i class="fas fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                                            </div>
                                                            {!! Form::close() !!}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    Langues
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        @include('langues.table')
                                    </div>
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-header">
                                    Pieces jointes
                                </div>
                                <div class="card-body">
                                    <div class="row">

                                        <div class="table-responsive">
                                            <table class="table" id="justificatifs-table">
                                                <thead>
                                                <tr>
                                                    <th>Type Justificatif</th>
                                                    <th>Fichier</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($justificatifs as $justificatif)
                                                    <tr>
                                                        <td>{{ $justificatif->type_justificatif->libelle }}</td>
                                                        <td><a href="{{ $justificatif->fichierPrincipale() }}">Voir le fichier</a></td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>
                    @else
                        <p class="text-center">
                            Vous n'avez aucun dossier de candidature
                            <a href="{{ route('deposercandidaturesprofil') }}" class="btn-success btn-block btn">Deposer une candidature</a>

                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
