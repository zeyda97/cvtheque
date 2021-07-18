<div class="table-responsive">
    <table class="table" id="regionResidences-table">
        <thead>
            <tr>
                <th>Libellé</th>
        <th>User Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($regionResidences as $regionResidence)
            <tr>
                <td>{{ $regionResidence->libelle }}</td>
            <td>{{ $regionResidence->user_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['regionResidences.destroy', $regionResidence->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('regionResidences.show', [$regionResidence->id]) }}" class='btn btn-default btn-xs'>
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('regionResidences.edit', [$regionResidence->id]) }}" class='btn btn-default btn-xs'>
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
