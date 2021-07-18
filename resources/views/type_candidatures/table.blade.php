<div class="table-responsive">
    <table class="table" id="typeCandidatures-table">
        <thead>
            <tr>
                <th>Libellé</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($typeCandidatures as $typeCandidature)
            <tr>
                <td>{{ $typeCandidature->libelle }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['typeCandidatures.destroy', $typeCandidature->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('typeCandidatures.show', [$typeCandidature->id]) }}" class='btn btn-default btn-xs'>
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('typeCandidatures.edit', [$typeCandidature->id]) }}" class='btn btn-default btn-xs'>
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
