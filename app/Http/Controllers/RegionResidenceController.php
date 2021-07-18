<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRegionResidenceRequest;
use App\Http\Requests\UpdateRegionResidenceRequest;
use App\Repositories\RegionResidenceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class RegionResidenceController extends AppBaseController
{
    /** @var  RegionResidenceRepository */
    private $regionResidenceRepository;

    public function __construct(RegionResidenceRepository $regionResidenceRepo)
    {
        $this->regionResidenceRepository = $regionResidenceRepo;
    }

    /**
     * Display a listing of the RegionResidence.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $regionResidences = $this->regionResidenceRepository->all();

        return view('region_residences.index')
            ->with('regionResidences', $regionResidences);
    }

    /**
     * Show the form for creating a new RegionResidence.
     *
     * @return Response
     */
    public function create()
    {
        return view('region_residences.create');
    }

    /**
     * Store a newly created RegionResidence in storage.
     *
     * @param CreateRegionResidenceRequest $request
     *
     * @return Response
     */
    public function store(CreateRegionResidenceRequest $request)
    {
        $input = $request->all();

        $regionResidence = $this->regionResidenceRepository->create($input);

        Flash::success('Region Residence saved successfully.');

        return redirect(route('regionResidences.index'));
    }

    /**
     * Display the specified RegionResidence.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $regionResidence = $this->regionResidenceRepository->find($id);

        if (empty($regionResidence)) {
            Flash::error('Region Residence not found');

            return redirect(route('regionResidences.index'));
        }

        return view('region_residences.show')->with('regionResidence', $regionResidence);
    }

    /**
     * Show the form for editing the specified RegionResidence.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $regionResidence = $this->regionResidenceRepository->find($id);

        if (empty($regionResidence)) {
            Flash::error('Region Residence not found');

            return redirect(route('regionResidences.index'));
        }

        return view('region_residences.edit')->with('regionResidence', $regionResidence);
    }

    /**
     * Update the specified RegionResidence in storage.
     *
     * @param int $id
     * @param UpdateRegionResidenceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRegionResidenceRequest $request)
    {
        $regionResidence = $this->regionResidenceRepository->find($id);

        if (empty($regionResidence)) {
            Flash::error('Region Residence not found');

            return redirect(route('regionResidences.index'));
        }

        $regionResidence = $this->regionResidenceRepository->update($request->all(), $id);

        Flash::success('Region Residence updated successfully.');

        return redirect(route('regionResidences.index'));
    }

    /**
     * Remove the specified RegionResidence from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $regionResidence = $this->regionResidenceRepository->find($id);

        if (empty($regionResidence)) {
            Flash::error('Region Residence not found');

            return redirect(route('regionResidences.index'));
        }

        $this->regionResidenceRepository->delete($id);

        Flash::success('Region Residence deleted successfully.');

        return redirect(route('regionResidences.index'));
    }
}
