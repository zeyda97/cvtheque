<div class="table-responsive">
    <table class="table" id="communeResidences-table">
        <thead>
            <tr>
                <th>Libellé</th>
        <th>User Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($communeResidences as $communeResidence)
            <tr>
                <td>{{ $communeResidence->libelle }}</td>
            <td>{{ $communeResidence->user_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['communeResidences.destroy', $communeResidence->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('communeResidences.show', [$communeResidence->id]) }}" class='btn btn-default btn-xs'>
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('communeResidences.edit', [$communeResidence->id]) }}" class='btn btn-default btn-xs'>
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
