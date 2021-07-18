<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommuneResidenceRequest;
use App\Http\Requests\UpdateCommuneResidenceRequest;
use App\Repositories\CommuneResidenceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CommuneResidenceController extends AppBaseController
{
    /** @var  CommuneResidenceRepository */
    private $communeResidenceRepository;

    public function __construct(CommuneResidenceRepository $communeResidenceRepo)
    {
        $this->communeResidenceRepository = $communeResidenceRepo;
    }

    /**
     * Display a listing of the CommuneResidence.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $communeResidences = $this->communeResidenceRepository->all();

        return view('commune_residences.index')
            ->with('communeResidences', $communeResidences);
    }

    /**
     * Show the form for creating a new CommuneResidence.
     *
     * @return Response
     */
    public function create()
    {
        return view('commune_residences.create');
    }

    /**
     * Store a newly created CommuneResidence in storage.
     *
     * @param CreateCommuneResidenceRequest $request
     *
     * @return Response
     */
    public function store(CreateCommuneResidenceRequest $request)
    {
        $input = $request->all();

        $communeResidence = $this->communeResidenceRepository->create($input);

        Flash::success('Commune Residence saved successfully.');

        return redirect(route('communeResidences.index'));
    }

    /**
     * Display the specified CommuneResidence.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $communeResidence = $this->communeResidenceRepository->find($id);

        if (empty($communeResidence)) {
            Flash::error('Commune Residence not found');

            return redirect(route('communeResidences.index'));
        }

        return view('commune_residences.show')->with('communeResidence', $communeResidence);
    }

    /**
     * Show the form for editing the specified CommuneResidence.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $communeResidence = $this->communeResidenceRepository->find($id);

        if (empty($communeResidence)) {
            Flash::error('Commune Residence not found');

            return redirect(route('communeResidences.index'));
        }

        return view('commune_residences.edit')->with('communeResidence', $communeResidence);
    }

    /**
     * Update the specified CommuneResidence in storage.
     *
     * @param int $id
     * @param UpdateCommuneResidenceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCommuneResidenceRequest $request)
    {
        $communeResidence = $this->communeResidenceRepository->find($id);

        if (empty($communeResidence)) {
            Flash::error('Commune Residence not found');

            return redirect(route('communeResidences.index'));
        }

        $communeResidence = $this->communeResidenceRepository->update($request->all(), $id);

        Flash::success('Commune Residence updated successfully.');

        return redirect(route('communeResidences.index'));
    }

    /**
     * Remove the specified CommuneResidence from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $communeResidence = $this->communeResidenceRepository->find($id);

        if (empty($communeResidence)) {
            Flash::error('Commune Residence not found');

            return redirect(route('communeResidences.index'));
        }

        $this->communeResidenceRepository->delete($id);

        Flash::success('Commune Residence deleted successfully.');

        return redirect(route('communeResidences.index'));
    }
}
