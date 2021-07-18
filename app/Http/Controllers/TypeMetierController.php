<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTypeMetierRequest;
use App\Http\Requests\UpdateTypeMetierRequest;
use App\Repositories\TypeMetierRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TypeMetierController extends AppBaseController
{
    /** @var  TypeMetierRepository */
    private $typeMetierRepository;

    public function __construct(TypeMetierRepository $typeMetierRepo)
    {
        $this->typeMetierRepository = $typeMetierRepo;
    }

    /**
     * Display a listing of the TypeMetier.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $typeMetiers = $this->typeMetierRepository->all();

        return view('type_metiers.index')
            ->with('typeMetiers', $typeMetiers);
    }

    /**
     * Show the form for creating a new TypeMetier.
     *
     * @return Response
     */
    public function create()
    {
        return view('type_metiers.create');
    }

    /**
     * Store a newly created TypeMetier in storage.
     *
     * @param CreateTypeMetierRequest $request
     *
     * @return Response
     */
    public function store(CreateTypeMetierRequest $request)
    {
        $input = $request->all();

        $typeMetier = $this->typeMetierRepository->create($input);

        Flash::success('Type Metier saved successfully.');

        return redirect(route('typeMetiers.index'));
    }

    /**
     * Display the specified TypeMetier.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $typeMetier = $this->typeMetierRepository->find($id);

        if (empty($typeMetier)) {
            Flash::error('Type Metier not found');

            return redirect(route('typeMetiers.index'));
        }

        return view('type_metiers.show')->with('typeMetier', $typeMetier);
    }

    /**
     * Show the form for editing the specified TypeMetier.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $typeMetier = $this->typeMetierRepository->find($id);

        if (empty($typeMetier)) {
            Flash::error('Type Metier not found');

            return redirect(route('typeMetiers.index'));
        }

        return view('type_metiers.edit')->with('typeMetier', $typeMetier);
    }

    /**
     * Update the specified TypeMetier in storage.
     *
     * @param int $id
     * @param UpdateTypeMetierRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTypeMetierRequest $request)
    {
        $typeMetier = $this->typeMetierRepository->find($id);

        if (empty($typeMetier)) {
            Flash::error('Type Metier not found');

            return redirect(route('typeMetiers.index'));
        }

        $typeMetier = $this->typeMetierRepository->update($request->all(), $id);

        Flash::success('Type Metier updated successfully.');

        return redirect(route('typeMetiers.index'));
    }

    /**
     * Remove the specified TypeMetier from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $typeMetier = $this->typeMetierRepository->find($id);

        if (empty($typeMetier)) {
            Flash::error('Type Metier not found');

            return redirect(route('typeMetiers.index'));
        }

        $this->typeMetierRepository->delete($id);

        Flash::success('Type Metier deleted successfully.');

        return redirect(route('typeMetiers.index'));
    }
}
