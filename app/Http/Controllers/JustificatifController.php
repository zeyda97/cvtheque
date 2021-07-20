<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJustificatifRequest;
use App\Http\Requests\UpdateJustificatifRequest;
use App\Repositories\JustificatifRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class JustificatifController extends AppBaseController
{
    /** @var  JustificatifRepository */
    private $justificatifRepository;

    public function __construct(JustificatifRepository $justificatifRepo)
    {
        $this->justificatifRepository = $justificatifRepo;
    }

    /**
     * Display a listing of the Justificatif.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        if (auth()->user()->role_id == 3)
        {
            $justificatifs = auth()->user()->justificatifs;
        }
        else
        {
            $justificatifs = $this->justificatifRepository->all();
        }


        return view('justificatifs.index')
            ->with('justificatifs', $justificatifs);
    }

    /**
     * Show the form for creating a new Justificatif.
     *
     * @return Response
     */
    public function create()
    {
        return view('justificatifs.create');
    }

    /**
     * Store a newly created Justificatif in storage.
     *
     * @param CreateJustificatifRequest $request
     *
     * @return Response
     */
    public function store(CreateJustificatifRequest $request)
    {
        $input = $request->all();

        $justificatif = $this->justificatifRepository->create($input);

        Flash::success('Justificatif saved successfully.');

        return redirect(route('justificatifs.index'));
    }

    /**
     * Display the specified Justificatif.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $justificatif = $this->justificatifRepository->find($id);

        if (empty($justificatif)) {
            Flash::error('Justificatif not found');

            return redirect(route('justificatifs.index'));
        }

        return view('justificatifs.show')->with('justificatif', $justificatif);
    }

    /**
     * Show the form for editing the specified Justificatif.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $justificatif = $this->justificatifRepository->find($id);

        if (empty($justificatif)) {
            Flash::error('Justificatif not found');

            return redirect(route('justificatifs.index'));
        }

        return view('justificatifs.edit')->with('justificatif', $justificatif);
    }

    /**
     * Update the specified Justificatif in storage.
     *
     * @param int $id
     * @param UpdateJustificatifRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJustificatifRequest $request)
    {
        $justificatif = $this->justificatifRepository->find($id);

        if (empty($justificatif)) {
            Flash::error('Justificatif not found');

            return redirect(route('justificatifs.index'));
        }

        $justificatif = $this->justificatifRepository->update($request->all(), $id);

        Flash::success('Justificatif updated successfully.');

        return redirect(route('justificatifs.index'));
    }

    /**
     * Remove the specified Justificatif from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $justificatif = $this->justificatifRepository->find($id);

        if (empty($justificatif)) {
            Flash::error('Justificatif not found');

            return redirect(route('justificatifs.index'));
        }

        $this->justificatifRepository->delete($id);

        Flash::success('Justificatif deleted successfully.');

        return redirect(route('justificatifs.index'));
    }
}
