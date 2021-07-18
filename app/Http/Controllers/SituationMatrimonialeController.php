<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSituationMatrimonialeRequest;
use App\Http\Requests\UpdateSituationMatrimonialeRequest;
use App\Repositories\SituationMatrimonialeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SituationMatrimonialeController extends AppBaseController
{
    /** @var  SituationMatrimonialeRepository */
    private $situationMatrimonialeRepository;

    public function __construct(SituationMatrimonialeRepository $situationMatrimonialeRepo)
    {
        $this->situationMatrimonialeRepository = $situationMatrimonialeRepo;
    }

    /**
     * Display a listing of the SituationMatrimoniale.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $situationMatrimoniales = $this->situationMatrimonialeRepository->all();

        return view('situation_matrimoniales.index')
            ->with('situationMatrimoniales', $situationMatrimoniales);
    }

    /**
     * Show the form for creating a new SituationMatrimoniale.
     *
     * @return Response
     */
    public function create()
    {
        return view('situation_matrimoniales.create');
    }

    /**
     * Store a newly created SituationMatrimoniale in storage.
     *
     * @param CreateSituationMatrimonialeRequest $request
     *
     * @return Response
     */
    public function store(CreateSituationMatrimonialeRequest $request)
    {
        $input = $request->all();

        $situationMatrimoniale = $this->situationMatrimonialeRepository->create($input);

        Flash::success('Situation Matrimoniale saved successfully.');

        return redirect(route('situationMatrimoniales.index'));
    }

    /**
     * Display the specified SituationMatrimoniale.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $situationMatrimoniale = $this->situationMatrimonialeRepository->find($id);

        if (empty($situationMatrimoniale)) {
            Flash::error('Situation Matrimoniale not found');

            return redirect(route('situationMatrimoniales.index'));
        }

        return view('situation_matrimoniales.show')->with('situationMatrimoniale', $situationMatrimoniale);
    }

    /**
     * Show the form for editing the specified SituationMatrimoniale.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $situationMatrimoniale = $this->situationMatrimonialeRepository->find($id);

        if (empty($situationMatrimoniale)) {
            Flash::error('Situation Matrimoniale not found');

            return redirect(route('situationMatrimoniales.index'));
        }

        return view('situation_matrimoniales.edit')->with('situationMatrimoniale', $situationMatrimoniale);
    }

    /**
     * Update the specified SituationMatrimoniale in storage.
     *
     * @param int $id
     * @param UpdateSituationMatrimonialeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSituationMatrimonialeRequest $request)
    {
        $situationMatrimoniale = $this->situationMatrimonialeRepository->find($id);

        if (empty($situationMatrimoniale)) {
            Flash::error('Situation Matrimoniale not found');

            return redirect(route('situationMatrimoniales.index'));
        }

        $situationMatrimoniale = $this->situationMatrimonialeRepository->update($request->all(), $id);

        Flash::success('Situation Matrimoniale updated successfully.');

        return redirect(route('situationMatrimoniales.index'));
    }

    /**
     * Remove the specified SituationMatrimoniale from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $situationMatrimoniale = $this->situationMatrimonialeRepository->find($id);

        if (empty($situationMatrimoniale)) {
            Flash::error('Situation Matrimoniale not found');

            return redirect(route('situationMatrimoniales.index'));
        }

        $this->situationMatrimonialeRepository->delete($id);

        Flash::success('Situation Matrimoniale deleted successfully.');

        return redirect(route('situationMatrimoniales.index'));
    }
}
