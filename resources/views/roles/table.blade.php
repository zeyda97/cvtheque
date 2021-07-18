<div class="table-responsive">
    <table class="table" id="roles-table">
        <thead>
            <tr>
                <th>Libellé</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($roles as $role)
            <tr>
                <td>{{ $role->libelle }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['roles.destroy', $role->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('roles.show', [$role->id]) }}" class='btn btn-success btn-xs'>
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('roles.edit', [$role->id]) }}" class='btn btn-warning btn-xs'>
                            <i class="fas fa-edit"></i>
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
