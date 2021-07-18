<div class="table-responsive">
    <table class="table" id="candidats-table">
        <thead>
            <tr>
                <th>Type Candidature Id</th>
        <th>Genre Id</th>
        <th>Date Naissance</th>
        <th>Lieu Naissance</th>
        <th>Nationalite Id</th>
        <th>Nombre Enfant</th>
        <th>Numero Telephone</th>
        <th>Deuxieme Numero Telephone</th>
        <th>Deuxieme Email</th>
        <th>Site Web</th>
        <th>Poste Id</th>
        <th>Statut Id</th>
        <th>Situation Matrimoniale Id</th>
        <th>Type Metier Id</th>
        <th>Localisation</th>
        <th>User Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($candidats as $candidat)
            <tr>
                <td>{{ $candidat->type_candidature_id }}</td>
            <td>{{ $candidat->genre_id }}</td>
            <td>{{ $candidat->date_naissance }}</td>
            <td>{{ $candidat->lieu_naissance }}</td>
            <td>{{ $candidat->nationalite_id }}</td>
            <td>{{ $candidat->nombre_enfant }}</td>
            <td>{{ $candidat->numero_telephone }}</td>
            <td>{{ $candidat->deuxieme_numero_telephone }}</td>
            <td>{{ $candidat->deuxieme_email }}</td>
            <td>{{ $candidat->site_web }}</td>
            <td>{{ $candidat->poste_id }}</td>
            <td>{{ $candidat->statut_id }}</td>
            <td>{{ $candidat->situation_matrimoniale_id }}</td>
            <td>{{ $candidat->type_metier_id }}</td>
            <td>{{ $candidat->localisation }}</td>
            <td>{{ $candidat->user_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['candidats.destroy', $candidat->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('candidats.show', [$candidat->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('candidats.edit', [$candidat->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
