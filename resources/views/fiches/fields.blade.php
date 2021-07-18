<!-- Nom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nom', 'Nom:') !!}
    {!! Form::text('nom', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Prenom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prenom', 'Prénom:') !!}
    {!! Form::text('prenom', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Objet Contrat Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('objet_contrat_id', 'Objet Contrat:') !!}
    {!! Form::number('objet_contrat_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Debut Contrat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_debut_contrat', 'Date Début Contrat:') !!}
    {!! Form::text('date_debut_contrat', null, ['class' => 'form-control','id'=>'date_debut_contrat']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_debut_contrat').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Date Fin Contrat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_fin_contrat', 'Date Fin Contrat:') !!}
    {!! Form::text('date_fin_contrat', null, ['class' => 'form-control','id'=>'date_fin_contrat']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_fin_contrat').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Motif Contrat Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('motif_contrat_id', 'Motif Contrat:') !!}
    {!! Form::number('motif_contrat_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Memo Fin Contrat Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('memo_fin_contrat', 'Mémo Fin Contrat:') !!}
    {!! Form::textarea('memo_fin_contrat', null, ['class' => 'form-control']) !!}
</div>

<!-- Prolongation Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('prolongation', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('prolongation', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('prolongation', 'Prolongation', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Motif Prolongation Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('motif_prolongation', 'Motif Prolongation:') !!}
    {!! Form::textarea('motif_prolongation', null, ['class' => 'form-control']) !!}
</div>

<!-- Duree Prolongation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('duree_prolongation', 'Duree Prolongation:') !!}
    {!! Form::number('duree_prolongation', null, ['class' => 'form-control']) !!}
</div>

<!-- Debut Periode Prolongation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('debut_periode_prolongation', 'Début Période Prolongation:') !!}
    {!! Form::text('debut_periode_prolongation', null, ['class' => 'form-control','id'=>'debut_periode_prolongation']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#debut_periode_prolongation').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Fin Periode Prolongation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fin_periode_prolongation', 'Fin Période Prolongation:') !!}
    {!! Form::text('fin_periode_prolongation', null, ['class' => 'form-control','id'=>'fin_periode_prolongation']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fin_periode_prolongation').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Autre Equipement-Travail Field -->
<div class="form-group col-sm-6">
    {!! Form::label('autre_equipement-travail', 'Autre Equipement-Travail:') !!}
    {!! Form::text('autre_equipement-travail', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Code Ethique Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('code_ethique', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('code_ethique', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('code_ethique', 'Code Ethique', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Reglement Interieur Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('reglement_interieur', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('reglement_interieur', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('reglement_interieur', 'Réglement Intérieur', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Engagement Confidentialite Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('engagement_confidentialite', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('engagement_confidentialite', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('engagement_confidentialite', 'Engagement Confidentialité', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Procedure Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('procedure', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('procedure', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('procedure', 'Procédure', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Sensibilisation Qualite Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('sensibilisation_qualite', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('sensibilisation_qualite', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('sensibilisation_qualite', 'Sensibilisation Qualité', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Signataire Sensibilisation Qualite Field -->
<div class="form-group col-sm-6">
    {!! Form::label('signataire_sensibilisation_qualite', 'Signataire Sensibilisation Qualité:') !!}
    {!! Form::text('signataire_sensibilisation_qualite', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Date Sensibilisation Qualite Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_sensibilisation_qualite', 'Date Sensibilisation Qualité:') !!}
    {!! Form::text('date_sensibilisation_qualite', null, ['class' => 'form-control','id'=>'date_sensibilisation_qualite']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_sensibilisation_qualite').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Commentaire Sensibilisation Qualite Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('commentaire_sensibilisation_qualite', 'Commentaire Sensibilisation Qualité:') !!}
    {!! Form::textarea('commentaire_sensibilisation_qualite', null, ['class' => 'form-control']) !!}
</div>

<!-- Sensibilisation Risque Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('sensibilisation_risque', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('sensibilisation_risque', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('sensibilisation_risque', 'Sensibilisation Risque', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Signataire Sensibilisation Risque Field -->
<div class="form-group col-sm-6">
    {!! Form::label('signataire_sensibilisation_risque', 'Signataire Sensibilisation Risque:') !!}
    {!! Form::text('signataire_sensibilisation_risque', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Date Sensibilisation Risque Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_sensibilisation_risque', 'Date Sensibilisation Risque:') !!}
    {!! Form::text('date_sensibilisation_risque', null, ['class' => 'form-control','id'=>'date_sensibilisation_risque']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_sensibilisation_risque').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Commentaire Sensibilisation Risque Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('commentaire_sensibilisation_risque', 'Commentaire Sensibilisation Risque:') !!}
    {!! Form::textarea('commentaire_sensibilisation_risque', null, ['class' => 'form-control']) !!}
</div>

<!-- Visa Direction Accueil Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('visa_direction_accueil', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('visa_direction_accueil', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('visa_direction_accueil', 'Visa Direction Accueil', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Signataire Visa Direction Accueil Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('signataire_visa_direction_accueil', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('signataire_visa_direction_accueil', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('signataire_visa_direction_accueil', 'Signataire Visa Direction Accueil', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Date Visa Direction Accueil Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_visa_direction_accueil', 'Date Visa Direction Accueil:') !!}
    {!! Form::text('date_visa_direction_accueil', null, ['class' => 'form-control','id'=>'date_visa_direction_accueil']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_visa_direction_accueil').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Commentaire Visa Direction Accueil Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('commentaire_visa_direction_accueil', 'Commentaire Visa Direction Accueil:') !!}
    {!! Form::textarea('commentaire_visa_direction_accueil', null, ['class' => 'form-control']) !!}
</div>

<!-- Visa Rh Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('visa_rh', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('visa_rh', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('visa_rh', 'Visa Rh', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Signataire Visa Rh Field -->
<div class="form-group col-sm-6">
    {!! Form::label('signataire_visa_rh', 'Signataire Visa RH:') !!}
    {!! Form::text('signataire_visa_rh', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Date Visa Rh Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_visa_rh', 'Date Visa RH:') !!}
    {!! Form::text('date_visa_rh', null, ['class' => 'form-control','id'=>'date_visa_rh']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_visa_rh').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Commentaire Date Visa Rh Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('commentaire_date_visa_rh', 'Commentaire Date Visa RH:') !!}
    {!! Form::textarea('commentaire_date_visa_rh', null, ['class' => 'form-control']) !!}
</div>

<!-- Niveaux Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('niveaux_id', 'Niveau:') !!}
    {!! Form::number('niveaux_id', null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'Utilisateur:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>