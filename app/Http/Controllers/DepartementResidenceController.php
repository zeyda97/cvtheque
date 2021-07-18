<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDepartementResidenceRequest;
use App\Http\Requests\UpdateDepartementResidenceRequest;
use App\Repositories\DepartementResidenceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DepartementResidenceController extends AppBaseController
{
    /** @var  DepartementResidenceRepository */
    private $departementResidenceRepository;

    public function __construct(DepartementResidenceRepository $departementResidenceRepo)
    {
        $this->departementResidenceRepository = $departementResidenceRepo;
    }

    /**
     * Display a listing of the DepartementResidence.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $departementResidences = $this->departementResidenceRepository->all();

        return view('departement_residences.index')
            ->with('departementResidences', $departementResidences);
    }

    /**
     * Show the form for creating a new DepartementResidence.
     *
     * @return Response
     */
    public function create()
    {
        return view('departement_residences.create');
    }

    /**
     * Store a newly created DepartementResidence in storage.
     *
     * @param CreateDepartementResidenceRequest $request
     *
     * @return Response
     */
    public function store(CreateDepartementResidenceRequest $request)
    {
        $input = $request->all();

        $departementResidence = $this->departementResidenceRepository->create($input);

        Flash::success('Departement Residence saved successfully.');

        return redirect(route('departementResidences.index'));
    }

    /**
     * Display the specified DepartementResidence.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $departementResidence = $this->departementResidenceRepository->find($id);

        if (empty($departementResidence)) {
            Flash::error('Departement Residence not found');

            return redirect(route('departementResidences.index'));
        }

        return view('departement_residences.show')->with('departementResidence', $departementResidence);
    }

    /**
     * Show the form for editing the specified DepartementResidence.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $departementResidence = $this->departementResidenceRepository->find($id);

        if (empty($departementResidence)) {
            Flash::error('Departement Residence not found');

            return redirect(route('departementResidences.index'));
        }

        return view('departement_residences.edit')->with('departementResidence', $departementResidence);
    }

    /**
     * Update the specified DepartementResidence in storage.
     *
     * @param int $id
     * @param UpdateDepartementResidenceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDepartementResidenceRequest $request)
    {
        $departementResidence = $this->departementResidenceRepository->find($id);

        if (empty($departementResidence)) {
            Flash::error('Departement Residence not found');

            return redirect(route('departementResidences.index'));
        }

        $departementResidence = $this->departementResidenceRepository->update($request->all(), $id);

        Flash::success('Departement Residence updated successfully.');

        return redirect(route('departementResidences.index'));
    }

    /**
     * Remove the specified DepartementResidence from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $departementResidence = $this->departementResidenceRepository->find($id);

        if (empty($departementResidence)) {
            Flash::error('Departement Residence not found');

            return redirect(route('departementResidences.index'));
        }

        $this->departementResidenceRepository->delete($id);

        Flash::success('Departement Residence deleted successfully.');

        return redirect(route('departementResidences.index'));
    }
}
