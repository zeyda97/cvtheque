<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFicheRequest;
use App\Http\Requests\UpdateFicheRequest;
use App\Repositories\FicheRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FicheController extends AppBaseController
{
    /** @var  FicheRepository */
    private $ficheRepository;

    public function __construct(FicheRepository $ficheRepo)
    {
        $this->ficheRepository = $ficheRepo;
    }

    /**
     * Display a listing of the Fiche.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $fiches = $this->ficheRepository->all();

        return view('fiches.index')
            ->with('fiches', $fiches);
    }

    /**
     * Show the form for creating a new Fiche.
     *
     * @return Response
     */
    public function create()
    {
        return view('fiches.create');
    }

    /**
     * Store a newly created Fiche in storage.
     *
     * @param CreateFicheRequest $request
     *
     * @return Response
     */
    public function store(CreateFicheRequest $request)
    {
        $input = $request->all();

        $fiche = $this->ficheRepository->create($input);

        Flash::success('Fiche saved successfully.');

        return redirect(route('fiches.index'));
    }

    /**
     * Display the specified Fiche.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $fiche = $this->ficheRepository->find($id);

        if (empty($fiche)) {
            Flash::error('Fiche not found');

            return redirect(route('fiches.index'));
        }

        return view('fiches.show')->with('fiche', $fiche);
    }

    /**
     * Show the form for editing the specified Fiche.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $fiche = $this->ficheRepository->find($id);

        if (empty($fiche)) {
            Flash::error('Fiche not found');

            return redirect(route('fiches.index'));
        }

        return view('fiches.edit')->with('fiche', $fiche);
    }

    /**
     * Update the specified Fiche in storage.
     *
     * @param int $id
     * @param UpdateFicheRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFicheRequest $request)
    {
        $fiche = $this->ficheRepository->find($id);

        if (empty($fiche)) {
            Flash::error('Fiche not found');

            return redirect(route('fiches.index'));
        }

        $fiche = $this->ficheRepository->update($request->all(), $id);

        Flash::success('Fiche updated successfully.');

        return redirect(route('fiches.index'));
    }

    /**
     * Remove the specified Fiche from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $fiche = $this->ficheRepository->find($id);

        if (empty($fiche)) {
            Flash::error('Fiche not found');

            return redirect(route('fiches.index'));
        }

        $this->ficheRepository->delete($id);

        Flash::success('Fiche deleted successfully.');

        return redirect(route('fiches.index'));
    }
}
