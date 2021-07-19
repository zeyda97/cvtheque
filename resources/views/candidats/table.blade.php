<div class="table-responsive">
    <table class="table" id="example1">
        <thead>
        <tr>
            <th>Type Candidature</th>
            <th>Candidat</th>
            <th>Date Naissance</th>
            <th>Lieu Naissance</th>
            <th>Numero Telephone</th>
            <th>Poste</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($candidats as $candidat)
            <tr>
                <td>{{ $candidat->type_candidature->libelle }}</td>
                <td>{{ $candidat->user->NomComplet() }}</td>
                <td>{{ is_null($candidat->date_naissance ) ? '' : $candidat->date_naissance->format('d-mY') }}</td>
                <td>{{ $candidat->lieu_naissance }}</td>
                <td>{{ $candidat->numero_telephone }}</td>
                <td>{{ $candidat->poste->libelle }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['candidats.destroy', $candidat->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('candidats.show', [$candidat->id]) }}" class='btn btn-info btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('candidats.edit', [$candidat->id]) }}" class='btn btn-warning btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
