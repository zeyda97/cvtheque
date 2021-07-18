<div class="table-responsive">
    <table class="table" id="nationalites-table">
        <thead>
            <tr>
                <th>Pays</th>
                <th>Nationalité</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($nationalites as $nationalite)
            <tr>
                <td>{{ $nationalite->nom_pays }}</td>
            <td>{{ $nationalite->nom_nationalite }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['nationalites.destroy', $nationalite->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('nationalites.show', [$nationalite->id]) }}" class='btn btn-default btn-xs'>
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('nationalites.edit', [$nationalite->id]) }}" class='btn btn-default btn-xs'>
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
