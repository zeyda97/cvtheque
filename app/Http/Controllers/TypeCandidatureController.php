<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTypeCandidatureRequest;
use App\Http\Requests\UpdateTypeCandidatureRequest;
use App\Repositories\TypeCandidatureRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TypeCandidatureController extends AppBaseController
{
    /** @var  TypeCandidatureRepository */
    private $typeCandidatureRepository;

    public function __construct(TypeCandidatureRepository $typeCandidatureRepo)
    {
        $this->typeCandidatureRepository = $typeCandidatureRepo;
    }

    /**
     * Display a listing of the TypeCandidature.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $typeCandidatures = $this->typeCandidatureRepository->all();

        return view('type_candidatures.index')
            ->with('typeCandidatures', $typeCandidatures);
    }

    /**
     * Show the form for creating a new TypeCandidature.
     *
     * @return Response
     */
    public function create()
    {
        return view('type_candidatures.create');
    }

    /**
     * Store a newly created TypeCandidature in storage.
     *
     * @param CreateTypeCandidatureRequest $request
     *
     * @return Response
     */
    public function store(CreateTypeCandidatureRequest $request)
    {
        $input = $request->all();

        $typeCandidature = $this->typeCandidatureRepository->create($input);

        Flash::success('Type Candidature saved successfully.');

        return redirect(route('typeCandidatures.index'));
    }

    /**
     * Display the specified TypeCandidature.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $typeCandidature = $this->typeCandidatureRepository->find($id);

        if (empty($typeCandidature)) {
            Flash::error('Type Candidature not found');

            return redirect(route('typeCandidatures.index'));
        }

        return view('type_candidatures.show')->with('typeCandidature', $typeCandidature);
    }

    /**
     * Show the form for editing the specified TypeCandidature.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $typeCandidature = $this->typeCandidatureRepository->find($id);

        if (empty($typeCandidature)) {
            Flash::error('Type Candidature not found');

            return redirect(route('typeCandidatures.index'));
        }

        return view('type_candidatures.edit')->with('typeCandidature', $typeCandidature);
    }

    /**
     * Update the specified TypeCandidature in storage.
     *
     * @param int $id
     * @param UpdateTypeCandidatureRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTypeCandidatureRequest $request)
    {
        $typeCandidature = $this->typeCandidatureRepository->find($id);

        if (empty($typeCandidature)) {
            Flash::error('Type Candidature not found');

            return redirect(route('typeCandidatures.index'));
        }

        $typeCandidature = $this->typeCandidatureRepository->update($request->all(), $id);

        Flash::success('Type Candidature updated successfully.');

        return redirect(route('typeCandidatures.index'));
    }

    /**
     * Remove the specified TypeCandidature from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $typeCandidature = $this->typeCandidatureRepository->find($id);

        if (empty($typeCandidature)) {
            Flash::error('Type Candidature not found');

            return redirect(route('typeCandidatures.index'));
        }

        $this->typeCandidatureRepository->delete($id);

        Flash::success('Type Candidature deleted successfully.');

        return redirect(route('typeCandidatures.index'));
    }
}
