<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
  <link rel="stylesheet" href="{{ asset('css/candidature.css') }}">

  <title>Page d'accueil</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="d-flex">

          <a href="{{ route('deposercandidaturesprofil') }}" class="btn btn-outline-success">Candidature</a>

        </form>
      </div>
    </div>
  </nav>
  <!-- MultiStep Form -->
  <div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
      <div class="col-10 col-sm-9 col-md-9 col-lg-9  p-0 mt-3 mb-2">
        <div class="card px-0 pt-4 pb-0 mt-3 mb-3">

         <h2><strong>Candidature</strong></h2>
         <p>Remplir le Formulaire et passer au suivant</p>
         <div class="row text-center">
          <div class="col-md-12 mx-0">
              <ul id="progressbar">
                  <li class="active" id="account"><strong>Profil</strong></li>
                  <li class="active" id="formation"><strong>Formation</strong></li>
                  <li  class="active" id="competence"><strong>Compétences</strong></li>
                  <li  class="active"   id="experience"><strong>Expérience</strong></li>
                  <li class="active"   id="langue"><strong>Langue</strong></li>
                  <li class="active"  id="confirm"><strong>Pièces Jointes</strong></li>
              </ul>
          </div>
             <div class="col-md-12 text-left">
                 <form id="msform" name="form1" action="{{ route('deposercandidaturespiecespost') }}" method="post" enctype="multipart/form-data">
                     @csrf
                     @include('adminlte-templates::common.errors')

                     @if (Session::has('message'))
                         <div class="alert alert-info">{{ Session::get('message') }}</div>
                     @endif
                     <div class="row mx-2">

                         <div class="form-group col-sm-6">
                             {!! Form::label('type_justificatif_id', 'Type Justificatif:') !!}
                             <select class="form-control" name="type_justificatif_id">
                                 @foreach ($type_justificatifs  as $type_justificatif)
                                     <option value="{{ $type_justificatif->id }}" >{{ $type_justificatif->libelle }}</option>
                                 @endforeach
                             </select>
                         </div>

                         <!-- Fichier Field -->
                         <div class="form-group col-sm-6">
                             {!! Form::label('fichier', 'Fichier:') !!} <br>
                             {!! Form::file('fichier', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
                         </div>

                         <!-- Experience Id Field -->
                         <div class="form-group col-sm-6">
                             {!! Form::label('experience_id', 'Experience:') !!}
                             <select class="form-control" name="experience_id">
                                 <option value="">---------***********----------</option>
                                 @foreach ($experiences  as $experience)
                                     <option value="{{ $experience->id }}" >{{ $experience->client_prestation }}</option>
                                 @endforeach
                             </select>
                         </div>

                         <!-- Experience Id Field -->
                         <div class="form-group col-sm-6">
                             {!! Form::label('langue_id', 'Langue:') !!}
                             <select class="form-control" name="langue_id">
                                 <option value="">---------***********----------</option>
                                 @foreach ($langues  as $langue)
                                     <option value="{{ $langue->id }}" >{{ $langue->libelle }}</option>
                                 @endforeach
                             </select>
                         </div>


                         <!-- Experience Id Field -->
                         <div class="form-group col-sm-6">
                             {!! Form::label('competence_id', 'Competence:') !!}
                             <select class="form-control" name="competence_id">
                                 <option value="">---------***********----------</option>
                                 @foreach ($competences  as $competence)
                                     <option value="{{ $competence->id }}" >{{ $competence->type_competence->libelle }}</option>
                                 @endforeach
                             </select>
                         </div>

                         <!-- Formation Id Field -->
                         <div class="form-group col-sm-6">
                             {!! Form::label('formation_id', 'Formation:') !!}
                             <select class="form-control" name="formation_id">
                                 <option value="">---------***********----------</option>
                                 @foreach ($formations  as $formation)
                                     <option value="{{ $formation->id }}" >{{ $formation->specialite_etudie }}</option>
                                 @endforeach
                             </select>
                         </div>

                         <div class="form-group text-right float-right">
                             <button type="submit" class="btn btn-success">Ajouter une piece justificatif</button>
                         </div>
                     </div>
                 </form>
             </div>
        </div>
            <div class="card-footer">
                <a href="{{ route('terminerdepot') }}" class="float-right btn btn-primary">Terminer</a>
            </div>
      </div>
    </div>
  </div>
</div>








<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>
