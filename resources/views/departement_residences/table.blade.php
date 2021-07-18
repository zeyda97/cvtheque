<div class="table-responsive">
    <table class="table" id="departementResidences-table">
        <thead>
            <tr>
                <th>Libellé</th>
                <th>Utilisateur</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($departementResidences as $departementResidence)
            <tr>
                <td>{{ $departementResidence->libelle }}</td>
            <td>{{ $departementResidence->user_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['departementResidences.destroy', $departementResidence->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('departementResidences.show', [$departementResidence->id]) }}" class='btn btn-default btn-xs'>
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('departementResidences.edit', [$departementResidence->id]) }}" class='btn btn-default btn-xs'>
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
