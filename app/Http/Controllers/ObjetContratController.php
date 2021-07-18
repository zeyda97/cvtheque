<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateObjetContratRequest;
use App\Http\Requests\UpdateObjetContratRequest;
use App\Repositories\ObjetContratRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ObjetContratController extends AppBaseController
{
    /** @var  ObjetContratRepository */
    private $objetContratRepository;

    public function __construct(ObjetContratRepository $objetContratRepo)
    {
        $this->objetContratRepository = $objetContratRepo;
    }

    /**
     * Display a listing of the ObjetContrat.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $objetContrats = $this->objetContratRepository->all();

        return view('objet_contrats.index')
            ->with('objetContrats', $objetContrats);
    }

    /**
     * Show the form for creating a new ObjetContrat.
     *
     * @return Response
     */
    public function create()
    {
        return view('objet_contrats.create');
    }

    /**
     * Store a newly created ObjetContrat in storage.
     *
     * @param CreateObjetContratRequest $request
     *
     * @return Response
     */
    public function store(CreateObjetContratRequest $request)
    {
        $input = $request->all();

        $objetContrat = $this->objetContratRepository->create($input);

        Flash::success('Objet Contrat saved successfully.');

        return redirect(route('objetContrats.index'));
    }

    /**
     * Display the specified ObjetContrat.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $objetContrat = $this->objetContratRepository->find($id);

        if (empty($objetContrat)) {
            Flash::error('Objet Contrat not found');

            return redirect(route('objetContrats.index'));
        }

        return view('objet_contrats.show')->with('objetContrat', $objetContrat);
    }

    /**
     * Show the form for editing the specified ObjetContrat.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $objetContrat = $this->objetContratRepository->find($id);

        if (empty($objetContrat)) {
            Flash::error('Objet Contrat not found');

            return redirect(route('objetContrats.index'));
        }

        return view('objet_contrats.edit')->with('objetContrat', $objetContrat);
    }

    /**
     * Update the specified ObjetContrat in storage.
     *
     * @param int $id
     * @param UpdateObjetContratRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateObjetContratRequest $request)
    {
        $objetContrat = $this->objetContratRepository->find($id);

        if (empty($objetContrat)) {
            Flash::error('Objet Contrat not found');

            return redirect(route('objetContrats.index'));
        }

        $objetContrat = $this->objetContratRepository->update($request->all(), $id);

        Flash::success('Objet Contrat updated successfully.');

        return redirect(route('objetContrats.index'));
    }

    /**
     * Remove the specified ObjetContrat from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $objetContrat = $this->objetContratRepository->find($id);

        if (empty($objetContrat)) {
            Flash::error('Objet Contrat not found');

            return redirect(route('objetContrats.index'));
        }

        $this->objetContratRepository->delete($id);

        Flash::success('Objet Contrat deleted successfully.');

        return redirect(route('objetContrats.index'));
    }
}
