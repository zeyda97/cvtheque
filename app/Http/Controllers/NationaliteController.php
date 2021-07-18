<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNationaliteRequest;
use App\Http\Requests\UpdateNationaliteRequest;
use App\Repositories\NationaliteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class NationaliteController extends AppBaseController
{
    /** @var  NationaliteRepository */
    private $nationaliteRepository;

    public function __construct(NationaliteRepository $nationaliteRepo)
    {
        $this->nationaliteRepository = $nationaliteRepo;
    }

    /**
     * Display a listing of the Nationalite.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $nationalites = $this->nationaliteRepository->all();

        return view('nationalites.index')
            ->with('nationalites', $nationalites);
    }

    /**
     * Show the form for creating a new Nationalite.
     *
     * @return Response
     */
    public function create()
    {
        return view('nationalites.create');
    }

    /**
     * Store a newly created Nationalite in storage.
     *
     * @param CreateNationaliteRequest $request
     *
     * @return Response
     */
    public function store(CreateNationaliteRequest $request)
    {
        $input = $request->all();

        $nationalite = $this->nationaliteRepository->create($input);

        Flash::success('Nationalite saved successfully.');

        return redirect(route('nationalites.index'));
    }

    /**
     * Display the specified Nationalite.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $nationalite = $this->nationaliteRepository->find($id);

        if (empty($nationalite)) {
            Flash::error('Nationalite not found');

            return redirect(route('nationalites.index'));
        }

        return view('nationalites.show')->with('nationalite', $nationalite);
    }

    /**
     * Show the form for editing the specified Nationalite.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $nationalite = $this->nationaliteRepository->find($id);

        if (empty($nationalite)) {
            Flash::error('Nationalite not found');

            return redirect(route('nationalites.index'));
        }

        return view('nationalites.edit')->with('nationalite', $nationalite);
    }

    /**
     * Update the specified Nationalite in storage.
     *
     * @param int $id
     * @param UpdateNationaliteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNationaliteRequest $request)
    {
        $nationalite = $this->nationaliteRepository->find($id);

        if (empty($nationalite)) {
            Flash::error('Nationalite not found');

            return redirect(route('nationalites.index'));
        }

        $nationalite = $this->nationaliteRepository->update($request->all(), $id);

        Flash::success('Nationalite updated successfully.');

        return redirect(route('nationalites.index'));
    }

    /**
     * Remove the specified Nationalite from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $nationalite = $this->nationaliteRepository->find($id);

        if (empty($nationalite)) {
            Flash::error('Nationalite not found');

            return redirect(route('nationalites.index'));
        }

        $this->nationaliteRepository->delete($id);

        Flash::success('Nationalite deleted successfully.');

        return redirect(route('nationalites.index'));
    }
}
