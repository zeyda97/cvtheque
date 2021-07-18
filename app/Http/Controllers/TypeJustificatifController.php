<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTypeJustificatifRequest;
use App\Http\Requests\UpdateTypeJustificatifRequest;
use App\Repositories\TypeJustificatifRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TypeJustificatifController extends AppBaseController
{
    /** @var  TypeJustificatifRepository */
    private $typeJustificatifRepository;

    public function __construct(TypeJustificatifRepository $typeJustificatifRepo)
    {
        $this->typeJustificatifRepository = $typeJustificatifRepo;
    }

    /**
     * Display a listing of the TypeJustificatif.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $typeJustificatifs = $this->typeJustificatifRepository->all();

        return view('type_justificatifs.index')
            ->with('typeJustificatifs', $typeJustificatifs);
    }

    /**
     * Show the form for creating a new TypeJustificatif.
     *
     * @return Response
     */
    public function create()
    {
        return view('type_justificatifs.create');
    }

    /**
     * Store a newly created TypeJustificatif in storage.
     *
     * @param CreateTypeJustificatifRequest $request
     *
     * @return Response
     */
    public function store(CreateTypeJustificatifRequest $request)
    {
        $input = $request->all();

        $typeJustificatif = $this->typeJustificatifRepository->create($input);

        Flash::success('Type Justificatif saved successfully.');

        return redirect(route('typeJustificatifs.index'));
    }

    /**
     * Display the specified TypeJustificatif.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $typeJustificatif = $this->typeJustificatifRepository->find($id);

        if (empty($typeJustificatif)) {
            Flash::error('Type Justificatif not found');

            return redirect(route('typeJustificatifs.index'));
        }

        return view('type_justificatifs.show')->with('typeJustificatif', $typeJustificatif);
    }

    /**
     * Show the form for editing the specified TypeJustificatif.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $typeJustificatif = $this->typeJustificatifRepository->find($id);

        if (empty($typeJustificatif)) {
            Flash::error('Type Justificatif not found');

            return redirect(route('typeJustificatifs.index'));
        }

        return view('type_justificatifs.edit')->with('typeJustificatif', $typeJustificatif);
    }

    /**
     * Update the specified TypeJustificatif in storage.
     *
     * @param int $id
     * @param UpdateTypeJustificatifRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTypeJustificatifRequest $request)
    {
        $typeJustificatif = $this->typeJustificatifRepository->find($id);

        if (empty($typeJustificatif)) {
            Flash::error('Type Justificatif not found');

            return redirect(route('typeJustificatifs.index'));
        }

        $typeJustificatif = $this->typeJustificatifRepository->update($request->all(), $id);

        Flash::success('Type Justificatif updated successfully.');

        return redirect(route('typeJustificatifs.index'));
    }

    /**
     * Remove the specified TypeJustificatif from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $typeJustificatif = $this->typeJustificatifRepository->find($id);

        if (empty($typeJustificatif)) {
            Flash::error('Type Justificatif not found');

            return redirect(route('typeJustificatifs.index'));
        }

        $this->typeJustificatifRepository->delete($id);

        Flash::success('Type Justificatif deleted successfully.');

        return redirect(route('typeJustificatifs.index'));
    }
}
