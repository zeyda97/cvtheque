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
        <a class="navbar-brand" href="#">CVTHEQUE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Page d'acceuil</a>
                </li>
            </ul>
            <form class="d-flex">
                @guest()
                    <a href="{{ route('register') }}" class="btn btn-outline-success mx-2">Creer un compte</a>
                    <a href="{{ route('login') }}" class="btn btn-outline-success">Se connecter</a>
                @else
                    @if(auth()->user()->role_id == 1)
                        <a href="{{ route('home') }}" class="btn btn-outline-success">Mon compte</a>
                    @elseif(auth()->user()->role_id == 3)
                        <a href="{{ route('profil') }}" class="btn btn-outline-success">Mon compte</a>
                    @endif
                    <a href="#" class="btn btn-danger btn-flat float-right mx-2"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Se deconnecter
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endguest
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
                  <li id="formation"><strong>Formation</strong></li>
                  <li id="competence"><strong>Compétences</strong></li>
                  <li id="experience"><strong>Expérience</strong></li>
                  <li id="langue"><strong>Langue</strong></li>
                  <li id="confirm"><strong>Pièces Jointes</strong></li>
              </ul>
          </div>
             <div class="col-md-12 text-left">
                 <form id="msform" name="form1" action="{{ route('deposercandidaturesprofilpost') }}"  method="post">
                     @csrf
                     @include('adminlte-templates::common.errors')
                     <div class="row mx-2">

                     @include('candidats.fieldsprofil')
                         <div class="form-group text-right float-right">
                             <button type="submit" class="btn btn-primary">Suivant</button>
                         </div>
                     </div>
                 </form>
             </div>
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
