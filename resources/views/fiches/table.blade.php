<div class="table-responsive">
    <table class="table" id="fiches-table">
        <thead>
            <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Objet Contrat</th>
        <th>Date Début Contrat</th>
        <th>Date Fin Contrat</th>
        <th>Motif Contrat </th>
        <th>Mémo Fin Contrat</th>
        <th>Prolongation</th>
        <th>Motif Prolongation</th>
        <th>Durée Prolongation</th>
        <th>Début Période Prolongation</th>
        <th>Fin Période Prolongation</th>
        <th>Autre Equipement de Travail</th>
        <th>Code Ethique</th>
        <th>Réglement Intérieur</th>
        <th>Engagement Confidentialité</th>
        <th>Procédure</th>
        <th>Sensibilisation Qualité</th>
        <th>Signataire Sensibilisation Qualité</th>
        <th>Date Sensibilisation Qualité</th>
        <th>Commentaire Sensibilisation Qualité</th>
        <th>Sensibilisation Risque</th>
        <th>Signataire Sensibilisation Risque</th>
        <th>Date Sensibilisation Risque</th>
        <th>Commentaire Sensibilisation Risque</th>
        <th>Visa Direction Accueil</th>
        <th>Signataire Visa Direction Accueil</th>
        <th>Date Visa Direction Accueil</th>
        <th>Commentaire Visa Direction Accueil</th>
        <th>Visa RH</th>
        <th>Signataire Visa RH</th>
        <th>Date Visa RH</th>
        <th>Commentaire Date Visa RH</th>
        <th>Niveaux</th>
        <th>Utilisateur</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($fiches as $fiche)
            <tr>
                <td>{{ $fiche->nom }}</td>
            <td>{{ $fiche->prenom }}</td>
            <td>{{ $fiche->objet_contrat_id }}</td>
            <td>{{ $fiche->date_debut_contrat }}</td>
            <td>{{ $fiche->date_fin_contrat }}</td>
            <td>{{ $fiche->motif_contrat_id }}</td>
            <td>{{ $fiche->memo_fin_contrat }}</td>
            <td>{{ $fiche->prolongation }}</td>
            <td>{{ $fiche->motif_prolongation }}</td>
            <td>{{ $fiche->duree_prolongation }}</td>
            <td>{{ $fiche->debut_periode_prolongation }}</td>
            <td>{{ $fiche->fin_periode_prolongation }}</td>
            <td>{{ $fiche->autre_equipement-travail }}</td>
            <td>{{ $fiche->code_ethique }}</td>
            <td>{{ $fiche->reglement_interieur }}</td>
            <td>{{ $fiche->engagement_confidentialite }}</td>
            <td>{{ $fiche->procedure }}</td>
            <td>{{ $fiche->sensibilisation_qualite }}</td>
            <td>{{ $fiche->signataire_sensibilisation_qualite }}</td>
            <td>{{ $fiche->date_sensibilisation_qualite }}</td>
            <td>{{ $fiche->commentaire_sensibilisation_qualite }}</td>
            <td>{{ $fiche->sensibilisation_risque }}</td>
            <td>{{ $fiche->signataire_sensibilisation_risque }}</td>
            <td>{{ $fiche->date_sensibilisation_risque }}</td>
            <td>{{ $fiche->commentaire_sensibilisation_risque }}</td>
            <td>{{ $fiche->visa_direction_accueil }}</td>
            <td>{{ $fiche->signataire_visa_direction_accueil }}</td>
            <td>{{ $fiche->date_visa_direction_accueil }}</td>
            <td>{{ $fiche->commentaire_visa_direction_accueil }}</td>
            <td>{{ $fiche->visa_rh }}</td>
            <td>{{ $fiche->signataire_visa_rh }}</td>
            <td>{{ $fiche->date_visa_rh }}</td>
            <td>{{ $fiche->commentaire_date_visa_rh }}</td>
            <td>{{ $fiche->niveaux_id }}</td>
            <td>{{ $fiche->user_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['fiches.destroy', $fiche->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('fiches.show', [$fiche->id]) }}" class='btn btn-default btn-xs'>
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('fiches.edit', [$fiche->id]) }}" class='btn btn-default btn-xs'>
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
