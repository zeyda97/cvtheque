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
        <th>Utilisateur</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($experiences as $experience)
            <tr>
                <td>{{ $experience->type_experience_id }}</td>
            <td>{{ $experience->date_debut }}</td>
            <td>{{ $experience->date_fin }}</td>
            <td>{{ $experience->employeur }}</td>
            <td>{{ $experience->lieu_experience }}</td>
            <td>{{ $experience->client_prestation }}</td>
            <td>{{ $experience->poste_id }}</td>
            <td>{{ $experience->activite_experience }}</td>
            <td>{{ $experience->appreciation }}</td>
            <td>{{ $experience->user_id }}</td>
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
