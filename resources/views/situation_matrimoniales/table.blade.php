<div class="table-responsive">
    <table class="table" id="situationMatrimoniales-table">
        <thead>
            <tr>
                <th>Libellé</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($situationMatrimoniales as $situationMatrimoniale)
            <tr>
                <td>{{ $situationMatrimoniale->libelle }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['situationMatrimoniales.destroy', $situationMatrimoniale->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('situationMatrimoniales.show', [$situationMatrimoniale->id]) }}" class='btn btn-default btn-xs'>
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('situationMatrimoniales.edit', [$situationMatrimoniale->id]) }}" class='btn btn-default btn-xs'>
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
