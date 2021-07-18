<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStatutRequest;
use App\Http\Requests\UpdateStatutRequest;
use App\Repositories\StatutRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class StatutController extends AppBaseController
{
    /** @var  StatutRepository */
    private $statutRepository;

    public function __construct(StatutRepository $statutRepo)
    {
        $this->statutRepository = $statutRepo;
    }

    /**
     * Display a listing of the Statut.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $statuts = $this->statutRepository->all();

        return view('statuts.index')
            ->with('statuts', $statuts);
    }

    /**
     * Show the form for creating a new Statut.
     *
     * @return Response
     */
    public function create()
    {
        return view('statuts.create');
    }

    /**
     * Store a newly created Statut in storage.
     *
     * @param CreateStatutRequest $request
     *
     * @return Response
     */
    public function store(CreateStatutRequest $request)
    {
        $input = $request->all();

        $statut = $this->statutRepository->create($input);

        Flash::success('Statut saved successfully.');

        return redirect(route('statuts.index'));
    }

    /**
     * Display the specified Statut.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $statut = $this->statutRepository->find($id);

        if (empty($statut)) {
            Flash::error('Statut not found');

            return redirect(route('statuts.index'));
        }

        return view('statuts.show')->with('statut', $statut);
    }

    /**
     * Show the form for editing the specified Statut.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $statut = $this->statutRepository->find($id);

        if (empty($statut)) {
            Flash::error('Statut not found');

            return redirect(route('statuts.index'));
        }

        return view('statuts.edit')->with('statut', $statut);
    }

    /**
     * Update the specified Statut in storage.
     *
     * @param int $id
     * @param UpdateStatutRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStatutRequest $request)
    {
        $statut = $this->statutRepository->find($id);

        if (empty($statut)) {
            Flash::error('Statut not found');

            return redirect(route('statuts.index'));
        }

        $statut = $this->statutRepository->update($request->all(), $id);

        Flash::success('Statut updated successfully.');

        return redirect(route('statuts.index'));
    }

    /**
     * Remove the specified Statut from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $statut = $this->statutRepository->find($id);

        if (empty($statut)) {
            Flash::error('Statut not found');

            return redirect(route('statuts.index'));
        }

        $this->statutRepository->delete($id);

        Flash::success('Statut deleted successfully.');

        return redirect(route('statuts.index'));
    }
}
