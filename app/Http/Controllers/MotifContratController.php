<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMotifContratRequest;
use App\Http\Requests\UpdateMotifContratRequest;
use App\Repositories\MotifContratRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MotifContratController extends AppBaseController
{
    /** @var  MotifContratRepository */
    private $motifContratRepository;

    public function __construct(MotifContratRepository $motifContratRepo)
    {
        $this->motifContratRepository = $motifContratRepo;
    }

    /**
     * Display a listing of the MotifContrat.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $motifContrats = $this->motifContratRepository->all();

        return view('motif_contrats.index')
            ->with('motifContrats', $motifContrats);
    }

    /**
     * Show the form for creating a new MotifContrat.
     *
     * @return Response
     */
    public function create()
    {
        return view('motif_contrats.create');
    }

    /**
     * Store a newly created MotifContrat in storage.
     *
     * @param CreateMotifContratRequest $request
     *
     * @return Response
     */
    public function store(CreateMotifContratRequest $request)
    {
        $input = $request->all();

        $motifContrat = $this->motifContratRepository->create($input);

        Flash::success('Motif Contrat saved successfully.');

        return redirect(route('motifContrats.index'));
    }

    /**
     * Display the specified MotifContrat.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $motifContrat = $this->motifContratRepository->find($id);

        if (empty($motifContrat)) {
            Flash::error('Motif Contrat not found');

            return redirect(route('motifContrats.index'));
        }

        return view('motif_contrats.show')->with('motifContrat', $motifContrat);
    }

    /**
     * Show the form for editing the specified MotifContrat.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $motifContrat = $this->motifContratRepository->find($id);

        if (empty($motifContrat)) {
            Flash::error('Motif Contrat not found');

            return redirect(route('motifContrats.index'));
        }

        return view('motif_contrats.edit')->with('motifContrat', $motifContrat);
    }

    /**
     * Update the specified MotifContrat in storage.
     *
     * @param int $id
     * @param UpdateMotifContratRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMotifContratRequest $request)
    {
        $motifContrat = $this->motifContratRepository->find($id);

        if (empty($motifContrat)) {
            Flash::error('Motif Contrat not found');

            return redirect(route('motifContrats.index'));
        }

        $motifContrat = $this->motifContratRepository->update($request->all(), $id);

        Flash::success('Motif Contrat updated successfully.');

        return redirect(route('motifContrats.index'));
    }

    /**
     * Remove the specified MotifContrat from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $motifContrat = $this->motifContratRepository->find($id);

        if (empty($motifContrat)) {
            Flash::error('Motif Contrat not found');

            return redirect(route('motifContrats.index'));
        }

        $this->motifContratRepository->delete($id);

        Flash::success('Motif Contrat deleted successfully.');

        return redirect(route('motifContrats.index'));
    }
}
