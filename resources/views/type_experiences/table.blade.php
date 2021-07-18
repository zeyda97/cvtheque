<div class="table-responsive">
    <table class="table" id="typeExperiences-table">
        <thead>
            <tr>
                <th>Libellé</th>
        <th>User Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($typeExperiences as $typeExperience)
            <tr>
                <td>{{ $typeExperience->libelle }}</td>
            <td>{{ $typeExperience->user_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['typeExperiences.destroy', $typeExperience->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('typeExperiences.show', [$typeExperience->id]) }}" class='btn btn-default btn-xs'>
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('typeExperiences.edit', [$typeExperience->id]) }}" class='btn btn-default btn-xs'>
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
