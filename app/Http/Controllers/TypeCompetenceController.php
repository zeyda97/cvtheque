<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTypeCompetenceRequest;
use App\Http\Requests\UpdateTypeCompetenceRequest;
use App\Repositories\TypeCompetenceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TypeCompetenceController extends AppBaseController
{
    /** @var  TypeCompetenceRepository */
    private $typeCompetenceRepository;

    public function __construct(TypeCompetenceRepository $typeCompetenceRepo)
    {
        $this->typeCompetenceRepository = $typeCompetenceRepo;
    }

    /**
     * Display a listing of the TypeCompetence.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $typeCompetences = $this->typeCompetenceRepository->all();

        return view('type_competences.index')
            ->with('typeCompetences', $typeCompetences);
    }

    /**
     * Show the form for creating a new TypeCompetence.
     *
     * @return Response
     */
    public function create()
    {
        return view('type_competences.create');
    }

    /**
     * Store a newly created TypeCompetence in storage.
     *
     * @param CreateTypeCompetenceRequest $request
     *
     * @return Response
     */
    public function store(CreateTypeCompetenceRequest $request)
    {
        $input = $request->all();

        $typeCompetence = $this->typeCompetenceRepository->create($input);

        Flash::success('Type Competence saved successfully.');

        return redirect(route('typeCompetences.index'));
    }

    /**
     * Display the specified TypeCompetence.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $typeCompetence = $this->typeCompetenceRepository->find($id);

        if (empty($typeCompetence)) {
            Flash::error('Type Competence not found');

            return redirect(route('typeCompetences.index'));
        }

        return view('type_competences.show')->with('typeCompetence', $typeCompetence);
    }

    /**
     * Show the form for editing the specified TypeCompetence.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $typeCompetence = $this->typeCompetenceRepository->find($id);

        if (empty($typeCompetence)) {
            Flash::error('Type Competence not found');

            return redirect(route('typeCompetences.index'));
        }

        return view('type_competences.edit')->with('typeCompetence', $typeCompetence);
    }

    /**
     * Update the specified TypeCompetence in storage.
     *
     * @param int $id
     * @param UpdateTypeCompetenceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTypeCompetenceRequest $request)
    {
        $typeCompetence = $this->typeCompetenceRepository->find($id);

        if (empty($typeCompetence)) {
            Flash::error('Type Competence not found');

            return redirect(route('typeCompetences.index'));
        }

        $typeCompetence = $this->typeCompetenceRepository->update($request->all(), $id);

        Flash::success('Type Competence updated successfully.');

        return redirect(route('typeCompetences.index'));
    }

    /**
     * Remove the specified TypeCompetence from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $typeCompetence = $this->typeCompetenceRepository->find($id);

        if (empty($typeCompetence)) {
            Flash::error('Type Competence not found');

            return redirect(route('typeCompetences.index'));
        }

        $this->typeCompetenceRepository->delete($id);

        Flash::success('Type Competence deleted successfully.');

        return redirect(route('typeCompetences.index'));
    }
}
