<div class="table-responsive">
    <table class="table" id="formations-table">
        <thead>
            <tr>
                <th>Spécialité Etudiée</th>
        <th>Date Début</th>
        <th>Date Fin</th>
        <th>Etablissement</th>
        <th>Diplôme</th>
        <th>Utilisateur</th>
                <th colspan="3">Action</th>
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
            <td>{{ $formation->user_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['formations.destroy', $formation->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('formations.show', [$formation->id]) }}" class='btn btn-default btn-xs'>
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('formations.edit', [$formation->id]) }}" class='btn btn-default btn-xs'>
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
