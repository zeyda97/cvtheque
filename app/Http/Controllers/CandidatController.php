<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCandidatRequest;
use App\Http\Requests\UpdateCandidatRequest;
use App\Repositories\CandidatRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Auth;
use Flash;
use Response;

class CandidatController extends AppBaseController
{
    /** @var  CandidatRepository */
    private $candidatRepository;

    public function __construct(CandidatRepository $candidatRepo)
    {
        $this->candidatRepository = $candidatRepo;
    }

    /**
     * Display a listing of the Candidat.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $candidats = $this->candidatRepository->all();

        return view('candidats.index')
            ->with('candidats', $candidats);
    }

    /**
     * Show the form for creating a new Candidat.
     *
     * @return Response
     */
    public function create()
    {
        return view('candidats.create');
    }

    /**
     * Store a newly created Candidat in storage.
     *
     * @param CreateCandidatRequest $request
     *
     * @return Response
     */
    public function store(CreateCandidatRequest $request)
    {
        $input = $request->all();
        $input['user_id'] = Auth::id();

        $candidat = $this->candidatRepository->create($input);

        Flash::success('Profil ajouté avec succés!');

        /*return redirect(route('candidats.formation'));*/
    }

    /**
     * Display the specified Candidat.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $candidat = $this->candidatRepository->find($id);

        if (empty($candidat)) {
            Flash::error('Candidat not found');

            return redirect(route('candidats.index'));
        }

        return view('candidats.show')->with('candidat', $candidat);
    }

    /**
     * Show the form for editing the specified Candidat.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $candidat = $this->candidatRepository->find($id);

        if (empty($candidat)) {
            Flash::error('Candidat not found');

            return redirect(route('candidats.index'));
        }

        return view('candidats.edit')->with('candidat', $candidat);
    }

    /**
     * Update the specified Candidat in storage.
     *
     * @param int $id
     * @param UpdateCandidatRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCandidatRequest $request)
    {
        $candidat = $this->candidatRepository->find($id);

        if (empty($candidat)) {
            Flash::error('Candidat not found');

            return redirect(route('candidats.index'));
        }

        $candidat = $this->candidatRepository->update($request->all(), $id);

        Flash::success('Candidat updated successfully.');

        return redirect(route('candidats.index'));
    }

    /**
     * Remove the specified Candidat from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $candidat = $this->candidatRepository->find($id);

        if (empty($candidat)) {
            Flash::error('Candidat not found');

            return redirect(route('candidats.index'));
        }

        $this->candidatRepository->delete($id);

        Flash::success('Candidat deleted successfully.');

        return redirect(route('candidats.index'));
    }
}
