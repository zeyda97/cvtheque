<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $candidat = auth()->user()->candidats()->first();
        $user = auth()->user();
        $experiences = $user->experiences;
        $langues = $user->langues;
        $competences = $user->competences;
        $formations = $user->formations;
        $justificatifs = $user->justificatifs;

        return view('frontend.index')
            ->with('formations', $formations)
            ->with('competences', $competences)
            ->with('justificatifs', $justificatifs)
            ->with('experiences', $experiences)
            ->with('langues', $langues)
            ->with('candidat', $candidat);
    }
}
