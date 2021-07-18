<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeCandidature;
use App\Models\Genre;
use App\Models\Nationalite;
use App\Models\SituationMatrimoniale;
use App\Models\Poste;
use App\Models\Statut;
use App\Models\TypeMetier;
use App\Models\TypeExperience;
use App\Models\TypeCompetence;
use App\Models\Niveaux;


class WelcomeController extends Controller
{
    public function index(Request $request)
    {
      $typeCandidatures = TypeCandidature::all();
      $genres = Genre::all();
      $nationalites = Nationalite::all();
      $situationMatrimoniales = SituationMatrimoniale::all();
      $postes = Poste::all();
      $statuts = Statut::all();
      $typeMetiers = TypeMetier::all();
      $typeExperiences = TypeExperience::all();
      $typeCompetences = TypeCompetence::all();
      $niveaux = Niveaux::all();


        return view('candidature',compact('typeCandidatures','genres','nationalites','situationMatrimoniales','postes','statuts','typeMetiers','typeExperiences','typeCompetences','niveaux'));
          
    }
    public function formation(){

    }
}
