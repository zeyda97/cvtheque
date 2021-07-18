<div class="table-responsive">
    <table class="table" id="competences-table">
        <thead>
            <tr>
                <th>Type de Compétences</th>
        <th>Niveau</th>
        <th>Utilisqteur</th>
        <th>Année</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($competences as $competence)
            <tr>
                <td>{{ $competence->type_competence_id }}</td>
            <td>{{ $competence->niveaux_id }}</td>
            <td>{{ $competence->user_id }}</td>
            <td>{{ $competence->annee }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['competences.destroy', $competence->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('competences.show', [$competence->id]) }}" class='btn btn-default btn-xs'>
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('competences.edit', [$competence->id]) }}" class='btn btn-default btn-xs'>
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
