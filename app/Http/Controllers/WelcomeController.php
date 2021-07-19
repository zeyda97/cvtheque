<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use App\Models\Competence;
use App\Models\Experience;
use App\Models\Formation;
use App\Models\Justificatif;
use App\Models\Langue;
use App\Models\TypeJustificatif;
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
use Illuminate\Support\Facades\Auth;


class WelcomeController extends Controller
{
    public function deposercandidaturesprofil(Request $request)
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

        $candidat = $request->session()->get('candidat');

        return view('candidature',compact('candidat','typeCandidatures','genres','nationalites','situationMatrimoniales','postes','statuts','typeMetiers','typeExperiences','typeCompetences','niveaux'));

    }

    public function deposercandidaturesprofilpost(Request $request)
    {
        $input = $request->all();
        $input['user_id'] = Auth::id();

        $candidat = Candidat::create($input);

        return redirect()->route('deposercandidaturesformation');
    }

    public function deposercandidaturesformation(Request $request)
    {
        return view('deposercandidaturesformation');
    }


    public function deposercandidaturesformationpost(Request $request)
    {
         $input = $request->all();

        $input['user_id'] = Auth::id();

        $formation = Formation::create($input);

        return redirect()->route('deposercandidaturesformation')->with(['message' => 'Formation ajoute avec success']);
    }



    public function deposercandidaturesexperience(Request $request)
    {
        $typeExperiences = TypeExperience::all();
        $postes = Poste::all();
        return view('deposercandidaturesexperience',compact('typeExperiences','postes'));
    }


    public function deposercandidaturesexperiencepost(Request $request)
    {
        $input = $request->all();

        $input['user_id'] = Auth::id();

        $formation = Experience::create($input);

        return redirect()->route('deposercandidaturesexperience')->with(['message' => 'Experience ajoutee avec success']);
    }


    public function deposercandidaturescompetences(Request $request)
    {
        $typeCompetences = TypeCompetence::all();
        $niveaux = Niveaux::all();
        return view('deposercandidat.deposercandidaturescompetences',compact('typeCompetences','niveaux'));
    }

    public function deposercandidaturescompetencespost(Request $request)
    {
        $input = $request->all();

        $input['user_id'] = Auth::id();

        $formation = Competence::create($input);

        return redirect()->route('deposercandidaturescompetences')->with(['message' => 'Competence ajoutee avec success']);

    }




    public function deposercandidatureslangues(Request $request)
    {
        $langues = Langue::all();
        $niveaux = Niveaux::all();
        return view('deposercandidat.deposercandidatureslangues',compact('langues','niveaux'));
    }


    public function deposercandidatureslanguespost(Request $request)
    {
        $user = Auth::user();

        $user->langues()->attach($request->langue_id,['niveau_id' => $request->niveau_id]);

        return redirect()->route('deposercandidatureslangues')->with(['message' => 'Langue ajoutee avec success']);
    }


    public function deposercandidaturespieces(Request $request)
    {
        $type_justificatifs = TypeJustificatif::all();

        $experiences = Auth::user()->experiences;
        $langues = Auth::user()->langues;
        $competences = Auth::user()->competences;
        $formations = Auth::user()->formations;
        return view('deposercandidat.deposercandidaturespieces',compact('type_justificatifs','experiences','langues','competences','formations'));
    }

    public function deposercandidaturespiecespost(Request $request)
    {
        $input = $request->all();

        $input['user_id'] = Auth::id();

        if ($request->fichier){

            $originalImage = $request->file('fichier');
            $imagename = 'fichier-'.uniqid().uniqid().uniqid().'.'.$originalImage->getClientOriginalExtension();


            $path = $request->file('fichier')->storeAs(
                'public/photos-justificatifs', $imagename
            );
            $input['fichier'] = $imagename;
        }

        $formation = Justificatif::create($input);

        return redirect()->route('deposercandidaturespieces')->with(['message' => 'Justificatif ajoute avec success']);

    }


    public function terminerdepot(Request $request)
    {
        return view('terminerdepot');
    }

}
