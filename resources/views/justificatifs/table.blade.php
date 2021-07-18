<div class="table-responsive">
    <table class="table" id="justificatifs-table">
        <thead>
            <tr>
                <th>Type Justificatif Id</th>
        <th>Fichier</th>
        <th>Experience Id</th>
        <th>User Id</th>
        <th>Langue Id</th>
        <th>Competence Id</th>
        <th>Formation Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($justificatifs as $justificatif)
            <tr>
                <td>{{ $justificatif->type_justificatif_id }}</td>
            <td>{{ $justificatif->fichier }}</td>
            <td>{{ $justificatif->experience_id }}</td>
            <td>{{ $justificatif->user_id }}</td>
            <td>{{ $justificatif->langue_id }}</td>
            <td>{{ $justificatif->competence_id }}</td>
            <td>{{ $justificatif->formation_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['justificatifs.destroy', $justificatif->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('justificatifs.show', [$justificatif->id]) }}" class='btn btn-default btn-xs'>
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('justificatifs.edit', [$justificatif->id]) }}" class='btn btn-default btn-xs'>
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
