<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTypeExperienceRequest;
use App\Http\Requests\UpdateTypeExperienceRequest;
use App\Repositories\TypeExperienceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TypeExperienceController extends AppBaseController
{
    /** @var  TypeExperienceRepository */
    private $typeExperienceRepository;

    public function __construct(TypeExperienceRepository $typeExperienceRepo)
    {
        $this->typeExperienceRepository = $typeExperienceRepo;
    }

    /**
     * Display a listing of the TypeExperience.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $typeExperiences = $this->typeExperienceRepository->all();

        return view('type_experiences.index')
            ->with('typeExperiences', $typeExperiences);
    }

    /**
     * Show the form for creating a new TypeExperience.
     *
     * @return Response
     */
    public function create()
    {
        return view('type_experiences.create');
    }

    /**
     * Store a newly created TypeExperience in storage.
     *
     * @param CreateTypeExperienceRequest $request
     *
     * @return Response
     */
    public function store(CreateTypeExperienceRequest $request)
    {
        $input = $request->all();

        $typeExperience = $this->typeExperienceRepository->create($input);

        Flash::success('Type Experience saved successfully.');

        return redirect(route('typeExperiences.index'));
    }

    /**
     * Display the specified TypeExperience.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $typeExperience = $this->typeExperienceRepository->find($id);

        if (empty($typeExperience)) {
            Flash::error('Type Experience not found');

            return redirect(route('typeExperiences.index'));
        }

        return view('type_experiences.show')->with('typeExperience', $typeExperience);
    }

    /**
     * Show the form for editing the specified TypeExperience.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $typeExperience = $this->typeExperienceRepository->find($id);

        if (empty($typeExperience)) {
            Flash::error('Type Experience not found');

            return redirect(route('typeExperiences.index'));
        }

        return view('type_experiences.edit')->with('typeExperience', $typeExperience);
    }

    /**
     * Update the specified TypeExperience in storage.
     *
     * @param int $id
     * @param UpdateTypeExperienceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTypeExperienceRequest $request)
    {
        $typeExperience = $this->typeExperienceRepository->find($id);

        if (empty($typeExperience)) {
            Flash::error('Type Experience not found');

            return redirect(route('typeExperiences.index'));
        }

        $typeExperience = $this->typeExperienceRepository->update($request->all(), $id);

        Flash::success('Type Experience updated successfully.');

        return redirect(route('typeExperiences.index'));
    }

    /**
     * Remove the specified TypeExperience from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $typeExperience = $this->typeExperienceRepository->find($id);

        if (empty($typeExperience)) {
            Flash::error('Type Experience not found');

            return redirect(route('typeExperiences.index'));
        }

        $this->typeExperienceRepository->delete($id);

        Flash::success('Type Experience deleted successfully.');

        return redirect(route('typeExperiences.index'));
    }
}
