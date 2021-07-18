<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNiveauxRequest;
use App\Http\Requests\UpdateNiveauxRequest;
use App\Repositories\NiveauxRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class NiveauxController extends AppBaseController
{
    /** @var  NiveauxRepository */
    private $niveauxRepository;

    public function __construct(NiveauxRepository $niveauxRepo)
    {
        $this->niveauxRepository = $niveauxRepo;
    }

    /**
     * Display a listing of the Niveaux.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $niveauxes = $this->niveauxRepository->all();

        return view('niveauxes.index')
            ->with('niveauxes', $niveauxes);
    }

    /**
     * Show the form for creating a new Niveaux.
     *
     * @return Response
     */
    public function create()
    {
        return view('niveauxes.create');
    }

    /**
     * Store a newly created Niveaux in storage.
     *
     * @param CreateNiveauxRequest $request
     *
     * @return Response
     */
    public function store(CreateNiveauxRequest $request)
    {
        $input = $request->all();

        $niveaux = $this->niveauxRepository->create($input);

        Flash::success('Niveaux saved successfully.');

        return redirect(route('niveauxes.index'));
    }

    /**
     * Display the specified Niveaux.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $niveaux = $this->niveauxRepository->find($id);

        if (empty($niveaux)) {
            Flash::error('Niveaux not found');

            return redirect(route('niveauxes.index'));
        }

        return view('niveauxes.show')->with('niveaux', $niveaux);
    }

    /**
     * Show the form for editing the specified Niveaux.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $niveaux = $this->niveauxRepository->find($id);

        if (empty($niveaux)) {
            Flash::error('Niveaux not found');

            return redirect(route('niveauxes.index'));
        }

        return view('niveauxes.edit')->with('niveaux', $niveaux);
    }

    /**
     * Update the specified Niveaux in storage.
     *
     * @param int $id
     * @param UpdateNiveauxRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNiveauxRequest $request)
    {
        $niveaux = $this->niveauxRepository->find($id);

        if (empty($niveaux)) {
            Flash::error('Niveaux not found');

            return redirect(route('niveauxes.index'));
        }

        $niveaux = $this->niveauxRepository->update($request->all(), $id);

        Flash::success('Niveaux updated successfully.');

        return redirect(route('niveauxes.index'));
    }

    /**
     * Remove the specified Niveaux from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $niveaux = $this->niveauxRepository->find($id);

        if (empty($niveaux)) {
            Flash::error('Niveaux not found');

            return redirect(route('niveauxes.index'));
        }

        $this->niveauxRepository->delete($id);

        Flash::success('Niveaux deleted successfully.');

        return redirect(route('niveauxes.index'));
    }
}
